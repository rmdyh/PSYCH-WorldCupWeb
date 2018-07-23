CREATE TABLE `passage` (
  `ID` int(11) NOT NULL,
  `date` varchar(200) NOT NULL,
  `admin_ID` int(11) NOT NULL,
  `keywords` varchar(200) NOT NULL,
  `content` varchar(1000) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `admin_ID` (`admin_ID`),
  CONSTRAINT `passage_ibfk_1` FOREIGN KEY (`admin_ID`) REFERENCES `admin` (`ID`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8