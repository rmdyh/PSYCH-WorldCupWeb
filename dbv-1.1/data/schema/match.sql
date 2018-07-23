CREATE TABLE `match` (
  `country` varchar(200) NOT NULL,
  `score` int(11) NOT NULL,
  `sec_country` varchar(200) NOT NULL,
  `sec_score` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `time1` varchar(200) NOT NULL,
  `time2` varchar(200) NOT NULL,
  `time3` varchar(200) NOT NULL,
  `place` varchar(200) NOT NULL,
  `stage` varchar(200) NOT NULL,
  `url` varchar(1000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8