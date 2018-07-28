CREATE TABLE `favorite` (
  `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `passage_ID` int(11) NOT NULL COMMENT '文章ID',
  `user_ID` int(11) NOT NULL COMMENT '收藏者ID',
  `username` varchar(255) NOT NULL COMMENT '收藏者姓名',
  PRIMARY KEY (`ID`) USING BTREE,
  KEY `passage_ID` (`passage_ID`) USING BTREE,
  KEY `user_ID` (`user_ID`) USING BTREE,
  CONSTRAINT `favorite_ibfk_1` FOREIGN KEY (`passage_ID`) REFERENCES `passage` (`ID`),
  CONSTRAINT `favorite_ibfk_2` FOREIGN KEY (`user_ID`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT