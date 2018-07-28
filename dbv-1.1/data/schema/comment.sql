CREATE TABLE `comment` (
  `passage_ID` int(11) NOT NULL COMMENT '被评论的文章ID',
  `user_ID` int(11) NOT NULL COMMENT '评论者ID',
  `username` varchar(255) NOT NULL COMMENT '评论者姓名',
  `content` varchar(200) NOT NULL COMMENT '评论内容',
  `date` varchar(200) NOT NULL COMMENT '评论日期',
  `ID` int(11) NOT NULL COMMENT '发表的评论的标号',
  `status` enum('normal','delete') NOT NULL DEFAULT 'normal' COMMENT '评论状态（normal正常；delete评论被删除）',
  `parent` int(11) NOT NULL DEFAULT '0' COMMENT '评论回复哪条评论',
  PRIMARY KEY (`ID`),
  KEY `passage_ID` (`passage_ID`),
  KEY `user_ID` (`user_ID`),
  CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`user_ID`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8