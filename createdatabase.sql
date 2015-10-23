SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS scout;
CREATE TABLE scout (
    scoutid serial PRIMARY KEY,
    fname varchar(35) NOT NULL,
    lname varchar(35),
    copename varchar(50) NOT NULL
) ENGINE = INNODB;

DROP TABLE IF EXISTS cope_group;
CREATE TABLE cope_group (
    groupid serial PRIMARY KEY,
    camp varchar(255),
    dateformed DATE,
    copename varchar(50) NOT NULL
) ENGINE = INNODB;

DROP TABLE IF EXISTS group_stats;
CREATE TABLE group_stats (
    groupid BIGINT UNSIGNED,
    communication TINYINT DEFAULT 50,
    planning TINYINT DEFAULT 50,
    trust TINYINT DEFAULT 50,
    teamwork TINYINT DEFAULT 50,
    leadership TINYINT DEFAULT 50,
    decisionmaking TINYINT DEFAULT 50,
    problemsolving TINYINT DEFAULT 50,
    selfesteem TINYINT DEFAULT 50
) ENGINE = INNODB;

DROP TABLE IF EXISTS instructor;
CREATE TABLE instructor (
    instructorid serial PRIMARY KEY,
    fname varchar(35),
    lname varchar(35),
    copename varchar(50)
) ENGINE = INNODB;

DROP TABLE IF EXISTS game;
CREATE TABLE game (
    gameid serial PRIMARY KEY,
    title VARCHAR(50),
    description TEXT,
    createdby BIGINT UNSIGNED,
    CONSTRAINT FOREIGN KEY (createdby) REFERENCES instructor(instructorid)
) ENGINE = INNODB;

DROP TABLE IF EXISTS game_type;
CREATE TABLE game_type (
    typeid serial PRIMARY KEY,
    keyword VARCHAR(25)
) ENGINE = INNODB;

DROP TABLE IF EXISTS game_tag;
CREATE TABLE game_tag (
    tagid serial PRIMARY KEY,
    keyword VARCHAR(25)
) ENGINE = INNODB;

DROP TABLE IF EXISTS scouts_groups;
CREATE TABLE scouts_groups (
    scoutid BIGINT UNSIGNED,
    groupid BIGINT UNSIGNED,
    CONSTRAINT FOREIGN KEY (scoutid) REFERENCES scout(scoutid),
    CONSTRAINT FOREIGN KEY (groupid) REFERENCES cope_group(groupid),
    PRIMARY KEY (scoutid, groupid)
) ENGINE = INNODB;

DROP TABLE IF EXISTS groups_instructors;
CREATE TABLE groups_instructors (
    groupid BIGINT UNSIGNED,
    instructorid BIGINT UNSIGNED,
    CONSTRAINT FOREIGN KEY (groupid) REFERENCES cope_group(groupid),
    CONSTRAINT FOREIGN KEY (instructorid) REFERENCES instructor(instructorid),
    PRIMARY KEY (groupid, instructorid)
) ENGINE = INNODB;

DROP TABLE IF EXISTS scout_played_games;
CREATE TABLE scout_played_games (
    scoutid BIGINT UNSIGNED,
    gameid BIGINT UNSIGNED,
    dateplayed DATE,
    CONSTRAINT FOREIGN KEY (scoutid) REFERENCES scout(scoutid),
    CONSTRAINT FOREIGN KEY (gameid) REFERENCES game(gameid),
    PRIMARY KEY (scoutid, gameid)
) ENGINE = INNODB;

DROP TABLE IF EXISTS groups_games;
CREATE TABLE groups_games (
    groupid BIGINT UNSIGNED,
    gameid BIGINT UNSIGNED,
    dateplayed DATE,
    CONSTRAINT FOREIGN KEY (groupid) REFERENCES cope_group(groupid),
    CONSTRAINT FOREIGN KEY (gameid) REFERENCES game(gameid),
    PRIMARY KEY (groupid, gameid)
) ENGINE = INNODB;

DROP TABLE IF EXISTS games_types;
CREATE TABLE games_types (
    typeid BIGINT UNSIGNED,
    gameid BIGINT UNSIGNED,
    CONSTRAINT FOREIGN KEY (typeid) REFERENCES game_type(typeid),
    CONSTRAINT FOREIGN KEY (gameid) REFERENCES game(gameid),
    PRIMARY KEY (typeid, gameid)
) ENGINE = INNODB;

DROP TABLE IF EXISTS games_tags;
CREATE TABLE games_tags (
    tagid BIGINT UNSIGNED,
    gameid BIGINT UNSIGNED,
    CONSTRAINT FOREIGN KEY (tagid) REFERENCES game_tag(tagid),
    CONSTRAINT FOREIGN KEY (gameid) REFERENCES game(gameid),
    PRIMARY KEY (tagid, gameid)
) ENGINE = INNODB;

SET FOREIGN_KEY_CHECKS=1;

INSERT INTO scout (fname, lname, copename) VALUES ("John", "Smith", "Redhands");

INSERT INTO cope_group (camp, copename, dateformed) VALUES ("Camp Hohn", "Big Wigs", now());

-- Set default stats for Big Wigs
INSERT INTO group_stats (groupid) VALUES (1);

INSERT INTO instructor (fname, lname, copename) VALUES ("Pearse", "Hutson", "Precious");

INSERT INTO game (title, description, createdby) VALUES ("King of the Jungle", "A king of the jungle is appointed. Everyone must name a correspondingly smaller animal, along with the noise the animal makes. If someone messes-up they go to the bottom of the food chain.", 1);

INSERT INTO game_type (keyword) VALUES ("communication");
INSERT INTO game_type (keyword) VALUES ("planning");
INSERT INTO game_type (keyword) VALUES ("trust");
INSERT INTO game_type (keyword) VALUES ("teamwork");
INSERT INTO game_type (keyword) VALUES ("leadership");
INSERT INTO game_type (keyword) VALUES ("decisionmaking");
INSERT INTO game_type (keyword) VALUES ("problemsolving");
INSERT INTO game_type (keyword) VALUES ("selfesteem");

INSERT INTO game_tag (keyword) VALUES ("icebreaker");

-- John Smith in Big Wigs group
INSERT INTO scouts_groups (scoutid, groupid) VALUES (1, 1);

-- Pearse Hutson instructor of Big Wigs
INSERT INTO groups_instructors (groupid, instructorid) VALUES (1, 1);

-- John Smith has played King of the Jungle
INSERT INTO scout_played_games (scoutid, gameid, dateplayed) VALUES (1, 1, now());

-- Big Wigs have played King of the Jungle
INSERT INTO groups_games (gameid, groupid, dateplayed) VALUES (1, 1, now());

-- King of the Jungle has tag icebreaker
INSERT INTO games_tags (tagid, gameid) VALUES (1, 1);

-- King of the Jungle has type teamwork
INSERT INTO games_types (gameid, typeid) VALUES (1, 4);

