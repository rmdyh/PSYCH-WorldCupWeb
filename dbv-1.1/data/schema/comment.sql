CREATE TABLE `comment` (
  `passage_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `content` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `ID` int(11) NOT NULL,
  `good` smallint(11) NOT NULL,
  `bad` smallint(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `passage_ID` (`passage_ID`),
  KEY `user_ID` (`user_ID`),
  CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`passage_ID`) REFERENCES `passage` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`user_ID`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8