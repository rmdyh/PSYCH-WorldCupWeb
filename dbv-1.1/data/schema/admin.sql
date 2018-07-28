CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL COMMENT '管理员密码',
  `email` varchar(200) NOT NULL,
  `create time` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8