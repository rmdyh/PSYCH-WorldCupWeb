CREATE TABLE `team` (
  `country` varchar(200) NOT NULL,
  `coach` varchar(200) NOT NULL,
  `history` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `f_group` varchar(10) NOT NULL,
  `jifen` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `equal` int(11) NOT NULL,
  `get_score` int(11) NOT NULL,
  `lose_score` int(11) NOT NULL,
  `jing_score` int(11) NOT NULL,
  PRIMARY KEY (`country`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8