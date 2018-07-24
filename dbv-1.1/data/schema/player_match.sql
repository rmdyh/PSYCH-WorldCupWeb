CREATE TABLE `player_match` (
  `player_ID` int(11) NOT NULL,
  `match_ID` int(11) NOT NULL,
  `shoufa` smallint(6) NOT NULL,
  `jinqiu` int(11) NOT NULL,
  `zhugong` int(11) NOT NULL,
  `shemen` int(11) NOT NULL,
  `shezheng` int(11) NOT NULL,
  `chuanqiu` int(11) NOT NULL,
  `suc_chuanqiu` int(11) NOT NULL,
  `shiqiu` int(11) NOT NULL,
  `pujiu` int(11) NOT NULL,
  `huangpai` int(11) NOT NULL,
  `hongpai` int(11) NOT NULL,
  PRIMARY KEY (`player_ID`,`match_ID`),
  KEY `match_ID` (`match_ID`),
  CONSTRAINT `player_match_ibfk_1` FOREIGN KEY (`player_ID`) REFERENCES `player` (`ID`),
  CONSTRAINT `player_match_ibfk_2` FOREIGN KEY (`match_ID`) REFERENCES `match` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8