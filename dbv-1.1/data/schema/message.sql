CREATE TABLE `message` (
  `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT '消息编号',
  `userID` int(11) NOT NULL COMMENT '用户ID',
  `receivedtime` varchar(200) NOT NULL COMMENT '收到消息的时间',
  `content` varchar(200) NOT NULL COMMENT '消息内容（类似于文章）',
  `status` enum('already','wait','delete') NOT NULL COMMENT '信息状态',
  `admin_ID` int(11) NOT NULL COMMENT '发送消息的管理员ID',
<<<<<<< HEAD
  PRIMARY KEY (`ID`) USING BTREE,
  KEY `userID` (`userID`) USING BTREE,
  KEY `admin_ID` (`admin_ID`) USING BTREE,
  CONSTRAINT `message_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`id`),
  CONSTRAINT `message_ibfk_2` FOREIGN KEY (`admin_ID`) REFERENCES `admin` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT
=======
  PRIMARY KEY (`ID`),
  KEY `userID` (`userID`),
  KEY `admin_ID` (`admin_ID`),
  CONSTRAINT `message_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`id`),
  CONSTRAINT `message_ibfk_2` FOREIGN KEY (`admin_ID`) REFERENCES `admin` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8
>>>>>>> 41107600481d359f1a60421593cffc4e26d01ffb
