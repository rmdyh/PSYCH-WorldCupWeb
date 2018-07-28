CREATE TABLE `passage_key` (
  `catid` int(11) NOT NULL AUTO_INCREMENT COMMENT '关键词ID',
  `passage_ID` int(11) NOT NULL COMMENT '文章ID',
  `keyword` varchar(200) NOT NULL COMMENT '文章关键词',
<<<<<<< HEAD
  PRIMARY KEY (`catid`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT
=======
  PRIMARY KEY (`catid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8
>>>>>>> 41107600481d359f1a60421593cffc4e26d01ffb
