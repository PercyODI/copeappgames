-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2015 at 04:04 AM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `copeapp_games`
--

-- --------------------------------------------------------

--
-- Table structure for table `deck`
--

CREATE TABLE IF NOT EXISTS `deck` (
  `deckid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `userid` bigint(20) unsigned NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'gamepad',
  PRIMARY KEY (`deckid`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `deck`
--

INSERT INTO `deck` (`deckid`, `name`, `userid`, `description`, `icon`) VALUES
(1, 'Word Games', 1, 'A collection of word based COPE games.', 'fa-wordpress'),
(2, 'Communication Games', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin mauris odio, porta nec viverra ac, varius nec ante. Aenean sit amet ligula tempor, tempus nulla ut, fermentum sapien. Phasellus euismod eget nisl eu tincidunt. Sed sodales, justo nec vestibulum molestie, neque ex aliquet est, ac fringilla tellus dui id ex. Vivamus ut orci varius, consequat turpis ut, condimentum nulla. Donec libero nunc, auctor ac dolor quis, accumsan tincidunt velit. Sed rhoncus fringilla faucibus. Quisque suscipit vehicula risus, quis lacinia risus faucibus cursus. Nullam venenatis iaculis velit ut volutpat. Nulla faucibus tortor a purus auctor, eget eleifend lectus tempor. Fusce blandit odio id efficitur consectetur. Sed rutrum ullamcorper feugiat.\r\n\r\nAliquam in justo id turpis egestas facilisis. Aenean pharetra, orci dapibus sagittis consequat, nisi tellus hendrerit lorem, vitae ullamcorper dolor turpis nec ante. Nullam auctor augue non metus sollicitudin tincidunt. Mauris placerat elementum diam, ut congue nisi eleifend sed. Ut mollis massa sit amet tincidunt sodales. Nulla pulvinar felis sit amet justo sodales viverra nec quis tellus. Sed tortor enim, dictum at bibendum vel, bibendum non nibh. Quisque lobortis consequat condimentum. Vivamus eget dictum neque. Ut in libero id ligula consequat interdum id ac arcu. Nulla sed efficitur erat. Cras luctus faucibus varius. In dictum, sem quis tempus feugiat, dolor nisi porta ipsum, ut sagittis lacus erat nec orci. Vestibulum dignissim eros ut felis ultrices porta.\r\n\r\nCras iaculis faucibus nisi, eu malesuada enim maximus ac. In tincidunt sapien ante, eu varius orci blandit in. Maecenas nunc nunc, molestie id feugiat non, ullamcorper non massa. Quisque tellus quam, malesuada at purus id, venenatis scelerisque enim. In a euismod tellus. Quisque tincidunt mi accumsan tortor sodales, in convallis odio dictum. Quisque ut leo in diam tincidunt vulputate. Proin mattis feugiat posuere. Proin in ipsum semper, venenatis urna vitae, rutrum nisi. Vestibulum nec congue nunc, id hendrerit lacus. Quisque luctus est at magna rhoncus rutrum. Nulla sed arcu nec nisl eleifend suscipit id nec mi. Cras consectetur leo varius iaculis volutpat. Curabitur sodales velit at enim auctor iaculis.\r\n\r\nIn malesuada nisi vitae dictum convallis. Nunc a scelerisque ante. Duis pulvinar rutrum erat. Maecenas et turpis purus. Nam nec est pharetra, iaculis purus vel, pellentesque ante. Nunc at dapibus massa. Fusce pulvinar, quam sit amet bibendum imperdiet, lectus erat convallis metus, in tincidunt tortor mi sit amet justo. Mauris tempus, risus at luctus lobortis, enim ligula ornare mi, vitae dapibus leo metus in leo. Pellentesque accumsan sodales nibh. In quam nibh, mollis et turpis ut, venenatis mollis lacus. Etiam bibendum dapibus massa, eget ullamcorper ipsum ullamcorper nec. Donec nulla ex, scelerisque et luctus in, auctor ut purus. Pellentesque viverra tortor eget lacinia volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nisl purus, auctor et ultrices non, pulvinar ac turpis. Etiam nec neque et arcu rutrum maximus eget a nunc.\r\n\r\nNunc in pharetra tortor. Donec viverra mauris ut porttitor fermentum. Cras sodales erat fermentum nisi efficitur molestie. In dapibus quis leo eget dignissim. Aenean varius accumsan augue nec pretium. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', 'fa-phone'),
(3, 'Hohn Games', 1, 'Games we play at Camp Hohn!', 'fa-header'),
(4, 'Group Loops', 1, 'One piece of nylon tubular webbing - that’s what I would take if I could only have one piece of teambuilding equipment. I have to admit that I do love gear, especially things that I can use with a group to play a game or lead a group challenge. But if I had to choose just one piece of equipment, I’d take 15 feet of nylon webbing (what I’m calling a “Group Loop”). It’s multi-purpose, inexpensive, durable, light weight, water resistant, strong, colorful, insect proof, portable, fun and easy to use. What more could you want?', 'fa-circle-o-notch'),
(5, 'Test', 1, 'Tester Deck', 'fa-gamepad'),
(6, 'Test Deck 2', 1, 'Another Tester Deck', 'fa-black-tie'),
(7, 'My First Deck Edit', 2, 'This is Captain John''s very first deck! I hope it goes well! IT DIDN''T IT WENT BAD BAD BAD!!', 'fa-exclamation-circle'),
(8, 'Empty Deck', 2, 'This Deck is Empty', 'fa-battery-empty');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE IF NOT EXISTS `game` (
  `gameid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `deckid` bigint(20) unsigned NOT NULL,
  `icon` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `instruction` text COLLATE utf8_unicode_ci,
  `discussion` text COLLATE utf8_unicode_ci,
  `primary_type` bigint(20) unsigned DEFAULT NULL,
  `secondary_type` bigint(20) unsigned DEFAULT NULL,
  UNIQUE KEY `gameid` (`gameid`),
  KEY `primary_type` (`primary_type`),
  KEY `secondary_type` (`secondary_type`),
  KEY `deckid` (`deckid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`gameid`, `deckid`, `icon`, `title`, `description`, `instruction`, `discussion`, `primary_type`, `secondary_type`) VALUES
(1, 1, 'fa-tree', 'Everyone In', 'To get your entire group within the boundary.', 'The group is divided into teams of seven or more. The team tries to get all their teammates entirely into a circle on the floor. To make it competitive, the first team to do so wins. Make the circle small enough that the teams have problems fitting everyone in. A variation on this game is called Blanket Stand. Instead of a circle on the floor, the team must fit everyone onto a blanket. Once successful, they fold the blanket in half and try it again. The team to fold their blanket the most times wins.', 'No Discussion', NULL, NULL),
(2, 1, 'fa-file-word-o', 'Word Associations', 'Not to break the chain', 'Sitting in a circle, the leader picks a topic, "North American Universities," and picks a person to start. The first person must name a university starting with the letter "A", the next must name a university starting with the letter "B" etc.. People that break the chain, take too long for an answer or say a fictitious university, can be dealt with in several ways. You may chose to have an elimination where the chain breaker must leave the circle or you may chose to have that person perform some embarrassing task.', 'Nope, no discussion', 2, 9),
(3, 4, 'fa-square', 'All Aboard', '<p>Tie the webbing into a Group Loop. Lay the Group Loop on the ground and ask the group to stand inside the circle. Once the group completes this, make the loop smaller and smaller with each consecutive attempt.</p>\n', '<ul>\r\n	<li>Everyone must be touching the ground inside the Group Loop in some way.</li>\r\n	<li>The group must stay inside the Group Loop for the length of time it takes them to sing one round of the song &ldquo;Row, Row, Row Your Boat.&rdquo;</li>\r\n	<li>During the song, no one can touch the Group Loop or the ground outside the Group Loop. - Should anyone violate the previous rule, the group must retry that attempt.</li>\r\n</ul>\r\n\r\n<h3>Rules</h3>\r\n\r\n<ul>\r\n	<li>Everyone must be touching the ground inside the Group Loop in some way.</li>\r\n	<li>The group must stay inside the Group Loop for the length of time it takes them to sing one round of the song &ldquo;Row, Row, Row Your Boat.&rdquo;</li>\r\n	<li>During the song, no one can touch the Group Loop or the ground outside the Group Loop. - Should anyone violate the previous rule, the group must retry that attempt.</li>\r\n</ul>\r\n', '<p>Teachable Moments &ndash; As the size of the loop gets smaller, the group usually goes through a period where they don&rsquo;t believe they can fit in such a small area (&ldquo;This is impossible!&rdquo; you&rsquo;ll hear them exclaiim). It&rsquo;s only through creative thinking and hard work that the group is able to solve this challenge. I like to use this activity to lead into a discussion about what&rsquo;s &ldquo;impossible&rdquo;. When something is viewed as impossible, it&rsquo;s usually because of the limiting beliefs someone holds. An example of this might include beliefs from several centuries ago that held that the world is flat. Another might include the old belief that the earth is the center of the universe. If you were to tell someone during the early 1800&rsquo;s that people would be able to communicate with each other around the world instantaneously (by telephone) or that we will fly to the moon and come back, you would have been laughed at. Often times, the only thing that limits us is our beliefs. If a person believes something is possible, they will take different action than if they believe it&rsquo;s impossible. What did the group have to believe in order to be successful? This is a great activity to discuss the concept of failure. As the group solves each challenge, I will oftentimes make the loop even smaller AND I will give them a time limit in which to complete the activity successfully (ex. 5 minutes). The group will get to a point where the challenge is greater than their ability to solve it in the given amount of time. I will ask them if their inability to solve it means they&rsquo;re a failure. From this point, we can discuss the definition of failure. You&rsquo;ll likely find that some people in the group have rules for themselves that make failure easy to achieve (&ldquo;In order for me to fail, all I have to know is that I didn&rsquo;t complete a task.&rdquo;). Others in the group will have rules that make failure hard to achieve (&ldquo;In order for me to fail, I must not learn anything. As long as I learn something, I have succeeded.&rdquo;). Which rules around failure serve you best? Interesting point: Babe Ruth, the famous baseball home run hitter and hall of famer also held a record for having the most strike outs in a season.</p>\r\n', 8, NULL),
(4, 4, 'fa-hand-pointer-o', 'All Touch No Touch', 'Challenge – \r\n\r\nAll group members must touch the Group Loop at the same time. \r\n\r\nDescription – \r\n\r\nTie the webbing into a Group Loop and tie the Loop into a baseball-sized wad.', 'Rules –\r\n\r\n- Group members may not touch each other, this includes hair and clothing. \r\n\r\n- The Group Loop must remain tied up as presented.', 'Teachable Moments – \r\n\r\nI use this activity to help focus a group at the beginning of a program. If you are working with a group that has issues about touching each other (such as boy/girl cooties type stuff) this is a great activity to do that can provide a nice segue into other activities requiring physical contact.\r\n\r\nDiscussion points include: How can our group do more with less? What issues should we focus our energies on during this training event?', 4, NULL),
(5, 4, 'fa-cloud', 'Amoeba Electric Fence', '## Challenge – \r\n\r\nThe group must travel as a unit, over the “electric” fence. \r\n\r\n## Description – \r\n\r\nStretch the webbing tightly between two people so that the height of the webbing is just at the inseam of the shortest person in the group. The two people holding the webbing will remain webbing holders throughout the activity.', '## Rules – \r\n\r\n- The group must always be in contact with each other, physically touching another person at all times even when they are on opposite sides of the line. \r\n\r\n- No one may touch the webbing at any time. \r\n\r\n- No part of any person (including shoes, clothing, fingers, hair, etc.) may be directly under the webbing. \r\n\r\n- The group must travel over top of the webbing (not around). \r\n\r\n- No other equipment or tools may be used to help in the process (example: no chairs, tables, etc.). \r\n\r\n- If someone touches the webbing, apply an appropriate penalty (only that person goes back, everyone goes back, 2 go back, etc.). \r\n\r\n- No one in the group may jump over the webbing in a way that endangers themselves or a member of the group.', 'Teachable Moments –\r\n\r\nWhen I present this challenge, I usually set the line at several heights with the first being VERY easy (one foot off the ground) and building up to a higher, more difficult level. Potential questions to pose to the group might be: What obstacles have we successfully crossed in the past? What obstacles are facing us now?', 7, NULL),
(9, 5, 'fa-angellist', 'Test Game', 'This is just a test game.', '#SUPER HEADER', '- This\r\n- Is\r\n- A\r\n- Link', 4, NULL),
(10, 7, 'fa-spinner', 'Ahoy Captain Edit', '<p>It&#39;s a game about captains.</p>\r\n\r\n<blockquote>\r\n<p>Blockquote</p>\r\n</blockquote>\r\n\r\n<p><s>Strikeout</s></p>\r\n', '<p>Everyone say AHOY CAPTAIN!</p>\r\n', '<p>Ask why we all asked AHOY CAPTAIN!</p>\r\n', 8, 9),
(11, 7, 'fa-arrow-circle-up', 'Backup Edit', 'This is a backup game', 'Everyone backs up', 'Ask why we need to go forward all the time', 7, NULL),
(12, 7, 'fa-anchor', 'CK GAME', '<h2>This is a CK GAME</h2>\n\n<hr />\n<h1>st<s>ik</s>e edit 2</h1>\n\n<hr />\n<p>&nbsp;</p>\n', '<ol>\n	<li>This</li>\n	<li>Then This</li>\n	<li>number 3</li>\n</ol>\n', '<p>Some</p>\n\n<table border="1" cellpadding="1" cellspacing="1" style="width:500px">\n	<tbody>\n		<tr>\n			<td>tables</td>\n			<td>to</td>\n		</tr>\n		<tr>\n			<td>look</td>\n			<td>at because</td>\n		</tr>\n		<tr>\n			<td>they are&nbsp;</td>\n			<td>pretty</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>&nbsp;</p>\n\n<p>Yes</p>\n\n<p>&nbsp;</p>\n', 9, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `game_tag`
--

CREATE TABLE IF NOT EXISTS `game_tag` (
  `gameid` bigint(20) unsigned NOT NULL,
  `tagid` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`gameid`,`tagid`),
  KEY `gameid` (`gameid`),
  KEY `tagid` (`tagid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `game_tag`
--

INSERT INTO `game_tag` (`gameid`, `tagid`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE IF NOT EXISTS `picture` (
  `pictureid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `gameid` bigint(20) unsigned NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`pictureid`),
  KEY `gameid` (`gameid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`pictureid`, `gameid`, `link`) VALUES
(1, 1, 'https://s-media-cache-ak0.pinimg.com/236x/28/f2/c0/28f2c0155810e0ef52282137807f4dc6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `tagid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `keyword` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`tagid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`tagid`, `keyword`) VALUES
(1, 'icebreaker');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `typeid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `keyword` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`typeid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`typeid`, `keyword`) VALUES
(1, 'communication'),
(2, 'planning'),
(3, 'trust'),
(4, 'teamwork'),
(5, 'leadership'),
(6, 'decision-making'),
(7, 'problem-solving'),
(8, 'self-esteem'),
(9, 'fun');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `copename` varchar(75) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_date` date NOT NULL,
  `last_modified` datetime NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `fname`, `lname`, `copename`, `create_date`, `last_modified`) VALUES
(1, 'phutson', '$2y$10$4YPgpp5zLzi7//tet5md/e7Ugfk3QHkvO0nn9GtUWqR5mxCQaMZ7i', 'Pearse', 'Hutson', 'Precious', '2015-11-25', '2015-11-26 03:57:19'),
(2, 'johns', '$2y$10$2IcEm5H6/.jcBN24192fVewa./KZi7Ev5bjojm1PA/knteN8U50wK', 'John', 'Smith', 'Captain John', '0000-00-00', '0000-00-00 00:00:00'),
(3, 'schmoo2', '$2y$10$6mFxjb4Skp3.h0UuAZ86wuysPpfw83cy5i79U1K8915KPD6ycZ.iS', 'Joe', 'Schmoo', 'Joe Schmoo 2', '2015-11-29', '2015-11-29 06:00:51'),
(4, 'nocope', '$2y$10$kub2YZe2QueXUWPRQJ0hleoxXzphVuw5EbjjCRZwOp5s4Dn7MnCA2', '', '', '', '2015-11-29', '2015-11-29 15:48:38'),
(5, 'user', '$2y$10$nJ1UQdRIT89vqL7a8mWyve7lDC0JiEX8I7TSHyR4voRQOVkaeTILO', 'User', 'Name', 'user', '2015-12-06', '2015-12-06 22:02:28');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `video` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `gameid` bigint(20) unsigned NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`video`),
  KEY `gameid` (`gameid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video`, `gameid`, `link`) VALUES
(1, 1, 'https://youtu.be/HNSsYqtWrTo');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `deck`
--
ALTER TABLE `deck`
  ADD CONSTRAINT `deck_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `game_ibfk_1` FOREIGN KEY (`deckid`) REFERENCES `deck` (`deckid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `game_ibfk_2` FOREIGN KEY (`primary_type`) REFERENCES `type` (`typeid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `game_ibfk_3` FOREIGN KEY (`secondary_type`) REFERENCES `type` (`typeid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `game_tag`
--
ALTER TABLE `game_tag`
  ADD CONSTRAINT `game_tag_ibfk_1` FOREIGN KEY (`gameid`) REFERENCES `game` (`gameid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `game_tag_ibfk_2` FOREIGN KEY (`tagid`) REFERENCES `tag` (`tagid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `picture`
--
ALTER TABLE `picture`
  ADD CONSTRAINT `picture_ibfk_1` FOREIGN KEY (`gameid`) REFERENCES `game` (`gameid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`gameid`) REFERENCES `game` (`gameid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
