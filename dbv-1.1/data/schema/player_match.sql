CREATE TABLE `player_match` (
  `match_ID` int(11) NOT NULL,
  `shoufa` smallint(6) NOT NULL,
  `jinqiu` int(11) NOT NULL,
  `zhugong` int(11) NOT NULL,
  `shemen` int(11) NOT NULL,
  `shezheng` int(11) NOT NULL,
  `shiqiu` int(11) NOT NULL,
  `pujiu` int(11) NOT NULL,
  `huangpai` int(11) NOT NULL,
  `hongpai` int(11) NOT NULL,
  PRIMARY KEY (`match_ID`),
  CONSTRAINT `player_match_ibfk_1` FOREIGN KEY (`match_ID`) REFERENCES `match` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8