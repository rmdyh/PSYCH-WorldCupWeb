CREATE TABLE `stoptalking` (
  `ID` int(11) NOT NULL,
  `passage_ID` int(11) NOT NULL,
  `admin_ID` int(11) NOT NULL,
  `begin` varchar(200) NOT NULL,
  `end` varchar(200) NOT NULL,
  `cause` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `passage_ID` (`passage_ID`),
  KEY `admin_ID` (`admin_ID`),
  CONSTRAINT `stoptalking_ibfk_1` FOREIGN KEY (`passage_ID`) REFERENCES `passage` (`ID`),
  CONSTRAINT `stoptalking_ibfk_2` FOREIGN KEY (`admin_ID`) REFERENCES `admin` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8