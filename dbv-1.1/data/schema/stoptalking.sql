CREATE TABLE `stoptalking` (
  `ID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `admin_ID` int(11) NOT NULL,
  `begin` varchar(200) NOT NULL,
  `end` varchar(200) NOT NULL,
  `cause` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `admin_ID` (`admin_ID`),
  KEY `userID` (`userID`),
  CONSTRAINT `stoptalking_ibfk_2` FOREIGN KEY (`admin_ID`) REFERENCES `admin` (`ID`),
  CONSTRAINT `stoptalking_ibfk_3` FOREIGN KEY (`userID`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8