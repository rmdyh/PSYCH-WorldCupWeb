CREATE TABLE `passage_key` (
  `catid` int(11) NOT NULL AUTO_INCREMENT COMMENT '关键词ID',
  `passage_ID` int(11) NOT NULL COMMENT '文章ID',
  `keyword` varchar(200) NOT NULL COMMENT '文章关键词',
  PRIMARY KEY (`catid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8