CREATE TABLE `passage` (
  `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章标号',
  `title` varchar(200) NOT NULL COMMENT '文章标题',
  `date` varchar(200) NOT NULL COMMENT '文章发布时间',
  `author_ID` int(11) NOT NULL COMMENT '文章发布者ID',
  `author` varchar(255) NOT NULL COMMENT '文章发布者',
  `content` mediumtext NOT NULL COMMENT '文章内容',
  `status` enum('success','pending','delete','abort') NOT NULL DEFAULT 'pending' COMMENT '文章状态',
  `seen` int(11) NOT NULL COMMENT '文章点击数',
  PRIMARY KEY (`ID`),
  KEY `author_ID` (`author_ID`),
  CONSTRAINT `passage_ibfk_1` FOREIGN KEY (`author_ID`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8