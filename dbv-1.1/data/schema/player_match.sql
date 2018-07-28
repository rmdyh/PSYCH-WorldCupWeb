CREATE TABLE `player_match` (
  `player_ID` int(11) NOT NULL COMMENT '球员ID',
  `match_ID` int(11) NOT NULL COMMENT '参与的比赛ID',
  `shoufa` enum('0','1') NOT NULL COMMENT '本场比赛是否是首发（0不是；1是）',
  `jinqiu` int(11) NOT NULL COMMENT '本场比赛进球数',
  `zhugong` int(11) NOT NULL COMMENT '助攻数',
  `shemen` int(11) NOT NULL COMMENT '射门数',
  `shezheng` int(11) NOT NULL COMMENT '射正数',
  `chuanqiu` int(11) NOT NULL COMMENT '传球数',
  `suc_chuanqiu` int(11) NOT NULL COMMENT '成功传球数',
  `shiqiu` int(11) NOT NULL DEFAULT '0' COMMENT '失球数（对于门将）',
  `pujiu` int(11) NOT NULL COMMENT '扑救数（对于门将）',
  `huangpai` int(11) NOT NULL COMMENT '黄牌数',
  `hongpai` int(11) NOT NULL COMMENT '红牌数',
  PRIMARY KEY (`player_ID`,`match_ID`),
  KEY `match_ID` (`match_ID`),
  CONSTRAINT `player_match_ibfk_1` FOREIGN KEY (`player_ID`) REFERENCES `player` (`ID`),
  CONSTRAINT `player_match_ibfk_2` FOREIGN KEY (`match_ID`) REFERENCES `match` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8