CREATE TABLE `match` (
  `country` varchar(200) NOT NULL COMMENT '主队',
  `score` int(11) NOT NULL COMMENT '主队得分',
  `sec_country` varchar(200) NOT NULL COMMENT '客队',
  `sec_score` int(11) NOT NULL COMMENT '客队得分',
  `ID` int(11) NOT NULL COMMENT '比赛ID',
  `date` int(10) NOT NULL COMMENT '比赛时间戳',
  `time1` varchar(200) NOT NULL,
  `time2` varchar(200) NOT NULL,
  `time3` varchar(200) NOT NULL,
  `place` varchar(200) NOT NULL COMMENT '比赛地点',
  `stage` varchar(200) NOT NULL COMMENT '比赛类型',
  `status` enum('0','1') NOT NULL COMMENT '比赛状态（0未开始；1已结束）',
  `url` int(11) DEFAULT NULL COMMENT '战报的文章ID',
  PRIMARY KEY (`ID`),
  KEY `url` (`url`),
  CONSTRAINT `match_ibfk_1` FOREIGN KEY (`url`) REFERENCES `passage` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8