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

-- CREATE TRIGGER `add_date_to_cope_group` AFTER INSERT ON cope_group 
--     FOR EACH ROW SET dateformed = NOW();

INSERT INTO cope_group (camp, copename, dateformed) VALUES ("Camp Hohn", "Big Wigs", now());
    
DROP TABLE IF EXISTS scouts_groups;
CREATE TABLE scouts_groups (
    scoutid BIGINT UNSIGNED,
    groupid BIGINT UNSIGNED,
    CONSTRAINT FOREIGN KEY (scoutid) REFERENCES scout(scoutid),
    CONSTRAINT FOREIGN KEY (groupid) REFERENCES cope_group(groupid),
    PRIMARY KEY (scoutid, groupid)
) ENGINE = INNODB;

SET FOREIGN_KEY_CHECKS=1;