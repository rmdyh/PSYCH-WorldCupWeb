CREATE TABLE `useinfo` (
  `useID` int(11) NOT NULL COMMENT '用户ID',
  `sex` enum('男','女') NOT NULL COMMENT '用户性别',
  `image` varchar(200) NOT NULL COMMENT '头像',
  `introduction` varchar(200) NOT NULL COMMENT '个人简介'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT