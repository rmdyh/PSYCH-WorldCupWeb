CREATE TABLE `team_match` (
  `team` varchar(200) NOT NULL COMMENT '球队名称',
  `match_ID` int(11) NOT NULL COMMENT '比赛编号',
  `jiaoqiu` int(11) NOT NULL COMMENT '球队单场比赛角球数',
  `yuewei` int(11) NOT NULL COMMENT '球队单场比赛越位数',
  `shemen` int(11) NOT NULL COMMENT '球队单场比赛射门数',
  `huangpai` int(11) NOT NULL COMMENT '球队单场比赛黄牌数',
  `huanren` int(11) NOT NULL COMMENT '球队单场比赛换人数',
  `fangui` int(11) NOT NULL COMMENT '球队单场比赛犯规数',
  `renyiqiu` int(11) NOT NULL COMMENT '球队单场比赛任意球数',
  `jiuqiu` int(11) NOT NULL,
  `kongqiulv` varchar(10) NOT NULL COMMENT '球队单场比赛控球率',
  PRIMARY KEY (`team`,`match_ID`),
  KEY `match_ID` (`match_ID`),
  CONSTRAINT `team_match_ibfk_1` FOREIGN KEY (`team`) REFERENCES `team` (`country`),
  CONSTRAINT `team_match_ibfk_2` FOREIGN KEY (`match_ID`) REFERENCES `match` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8