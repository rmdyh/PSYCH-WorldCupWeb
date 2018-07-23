CREATE TABLE `player` (
  `ID` int(11) NOT NULL,
  `country` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `postion` varchar(200) NOT NULL,
  `height` varchar(20) NOT NULL,
  `weight` varchar(200) NOT NULL,
  `birthdate` varchar(200) NOT NULL,
  `attended` int(11) NOT NULL,
  `totaltime` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL,
  PRIMARY KEY (`ID`,`country`),
  KEY `country` (`country`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8