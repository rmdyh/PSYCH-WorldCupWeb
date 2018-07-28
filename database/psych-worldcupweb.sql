-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-07-26 15:24:02
-- 服务器版本： 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psych-worldcupweb`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL COMMENT '管理员密码',
  `email` varchar(200) NOT NULL,
  `create time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`, `email`, `create time`) VALUES
(0, 'name', '', 'email', 'create time');

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

CREATE TABLE `comment` (
  `passage_ID` int(11) NOT NULL COMMENT '被评论的文章ID',
  `user_ID` int(11) NOT NULL COMMENT '评论者ID',
  `username` varchar(255) NOT NULL COMMENT '评论者姓名',
  `content` varchar(200) NOT NULL COMMENT '评论内容',
  `date` varchar(200) NOT NULL COMMENT '评论日期',
  `ID` int(11) NOT NULL COMMENT '发表的评论的标号',
  `status` enum('normal','delete') NOT NULL DEFAULT 'normal' COMMENT '评论状态（normal正常；delete评论被删除）',
  `parent` int(11) NOT NULL DEFAULT '0' COMMENT '评论回复哪条评论'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `favorite`
--

CREATE TABLE `favorite` (
  `ID` int(11) NOT NULL COMMENT '编号',
  `passage_ID` int(11) NOT NULL COMMENT '文章ID',
  `user_ID` int(11) NOT NULL COMMENT '收藏者ID',
  `username` varchar(255) NOT NULL COMMENT '收藏者姓名'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `match`
--

CREATE TABLE `match` (
  `country` varchar(200) NOT NULL COMMENT '主队',
  `score` int(11) NOT NULL COMMENT '主队得分',
  `sec_country` varchar(200) NOT NULL COMMENT '客队',
  `sec_score` int(11) NOT NULL COMMENT '客队得分',
  `ID` int(11) NOT NULL COMMENT '比赛ID',
  `date` int(10) NOT NULL COMMENT '比赛时间戳',
  `time1` varchar(200) NOT NULL,
  `time2` varchar(200) NOT NULL,
  `time3` varchar(200) NOT NULL,
  `place` varchar(200) NOT NULL COMMENT '比赛地点',
  `stage` varchar(200) NOT NULL COMMENT '比赛类型',
  `status` enum('0','1') NOT NULL COMMENT '比赛状态（0未开始；1已结束）',
  `url` int(11) DEFAULT NULL COMMENT '战报的文章ID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `match`
--

INSERT INTO `match` (`country`, `score`, `sec_country`, `sec_score`, `ID`, `date`, `time1`, `time2`, `time3`, `place`, `stage`, `status`, `url`) VALUES
('country', 0, 'sec_country', 0, 0, 0, 'time1', 'time2', 'time3', 'place', 'stage', '0', NULL),
('俄罗斯', 5, '沙特阿拉伯', 0, 1, 0, '6月14日', '星期四', '23:00', '卢日尼基体育场', '小组赛A', '0', NULL),
('埃及', 0, '乌拉圭', 1, 2, 0, '6月15日', '星期五', '20:00', '叶卡捷琳堡中央体育场', '小组赛A', '0', NULL),
('摩洛哥', 0, '伊朗', 1, 3, 0, '6月15日', '星期五', '23:00', '圣彼得堡体育场', '小组赛B', '0', NULL),
('葡萄牙', 3, '西班牙', 3, 4, 0, '6月16日', '星期六', '2:00', '菲什特奥林匹克体育场', '小组赛B', '0', NULL),
('法国', 2, '澳大利亚', 1, 5, 0, '6月16日', '星期六', '18:00', '喀山竞技场', '小组赛C', '0', NULL),
('秘鲁', 0, '丹麦', 1, 6, 0, '6月17日', '星期日', '0:00', '莫尔多瓦竞技场', '小组赛C', '0', NULL),
('阿根廷', 1, '冰岛', 1, 7, 0, '6月16日', '星期六', '21:00', '莫斯科斯巴达克体育场', '小组赛D', '0', NULL),
('克罗地亚', 2, '尼日利亚', 0, 8, 0, '6月17日', '星期日', '3:00', '加里宁格勒体育场', '小组赛D', '0', NULL),
('巴西', 1, '瑞士', 1, 9, 0, '6月18日', '星期一', '2:00', '罗斯托夫体育场', '小组赛E', '0', NULL),
('哥斯达黎加', 0, '塞尔维亚', 1, 10, 0, '6月17日', '星期日', '20:00', '萨马拉竞技场', '小组赛E', '0', NULL),
('德国', 0, '墨西哥', 1, 11, 0, '6月17日', '星期日', '23:00', '卢日尼基体育场', '小组赛F', '0', NULL),
('瑞典', 1, '韩国', 0, 12, 0, '6月18日', '星期一', '20:00', '诺夫哥罗德体育场', '小组赛F', '0', NULL),
('比利时', 3, '巴拿马', 0, 13, 0, '6月18日', '星期一', '23:00', '菲什特奥林匹克体育场', '小组赛G', '0', NULL),
('突尼斯', 1, '英格兰', 2, 14, 0, '6月19日', '星期二', '2:00', '伏尔加格勒竞技场', '小组赛G', '0', NULL),
('波兰', 1, '塞内加尔', 2, 15, 0, '6月19日', '星期二', '23:00', '莫斯科斯巴达克体育场', '小组赛H', '0', NULL),
('哥伦比亚', 1, '日本', 2, 16, 0, '6月19日', '星期二', '20:00', '莫尔多瓦竞技场', '小组赛H', '0', NULL),
('俄罗斯', 3, '埃及', 1, 17, 0, '6月20日', '星期三', '2:00', '圣彼得堡体育场', '小组赛A', '0', NULL),
('乌拉圭', 1, '沙特阿拉伯', 0, 18, 0, '6月20日', '星期三', '23:00', '罗斯托夫体育场', '小组赛A', '0', NULL),
('葡萄牙', 1, '摩洛哥', 0, 19, 0, '6月20日', '星期三', '20:00', '卢日尼基体育场', '小组赛B', '0', NULL),
('伊朗', 0, '西班牙', 1, 20, 0, '6月21日', '星期四', '2:00', '喀山竞技场', '小组赛B', '0', NULL),
('法国', 1, '秘鲁', 0, 21, 0, '6月21日', '星期四', '23:00', '叶卡捷琳堡中央体育场', '小组赛C', '0', NULL),
('丹麦', 1, '澳大利亚', 1, 22, 0, '6月21日', '星期四', '20:00', '萨马拉竞技场', '小组赛C', '0', NULL),
('阿根廷', 0, '克罗地亚', 3, 23, 0, '6月22日', '星期五', '2:00', '诺夫哥罗德体育场', '小组赛D', '0', NULL),
('尼日利亚', 2, '冰岛', 0, 24, 0, '6月22日', '星期五', '23:00', '伏尔加格勒竞技场', '小组赛D', '0', NULL),
('巴西', 2, '哥斯达黎加', 0, 25, 0, '6月22日', '星期五', '20:00', '圣彼得堡体育场', '小组赛E', '0', NULL),
('塞尔维亚', 1, '瑞士', 2, 26, 0, '6月23日', '星期六', '2:00', '加里宁格勒体育场', '小组赛E', '0', NULL),
('德国', 2, '瑞典', 1, 27, 0, '6月24日', '星期日', '2:00', '菲什特奥林匹克体育场', '小组赛F', '0', NULL),
('韩国', 1, '墨西哥', 2, 28, 0, '6月23日', '星期六', '23:00', '罗斯托夫体育场', '小组赛F', '0', NULL),
('比利时', 5, '突尼斯', 2, 29, 0, '6月23日', '星期六', '20:00', '莫斯科斯巴达克体育场', '小组赛G', '0', NULL),
('英格兰', 6, '巴拿马', 1, 30, 0, '6月24日', '星期日', '20:00', '诺夫哥罗德体育场', '小组赛G', '0', NULL),
('波兰', 0, '哥伦比亚', 3, 31, 0, '6月25日', '星期一', '2:00', '喀山竞技场', '小组赛H', '0', NULL),
('日本', 2, '塞内加尔', 2, 32, 0, '6月24日', '星期日', '23:00', '叶卡捷琳堡中央体育场', '小组赛H', '0', NULL),
('乌拉圭', 3, '俄罗斯', 0, 33, 0, '6月25日', '星期一', '22:00', '萨马拉竞技场', '小组赛A', '0', NULL),
('沙特阿拉伯', 2, '埃及', 1, 34, 0, '6月25日', '星期一', '22:00', '伏尔加格勒竞技场', '小组赛A', '0', NULL),
('伊朗', 1, '葡萄牙', 1, 35, 0, '6月26日', '星期二', '2:00', '莫尔多瓦竞技场', '小组赛B', '0', NULL),
('西班牙', 2, '摩洛哥', 2, 36, 0, '6月26日', '星期二', '2:00', '加里宁格勒体育场', '小组赛B', '0', NULL),
('丹麦', 0, '法国', 0, 37, 0, '6月26日', '星期二', '22:00', '卢日尼基体育场', '小组赛C', '0', NULL),
('澳大利亚', 0, '秘鲁', 2, 38, 0, '6月26日', '星期二', '22:00', '菲什特奥林匹克体育场', '小组赛C', '0', NULL),
('尼日利亚', 1, '阿根廷', 2, 39, 0, '6月27日', '星期三', '2:00', '圣彼得堡体育场', '小组赛D', '0', NULL),
('冰岛', 1, '克罗地亚', 2, 40, 0, '6月27日', '星期三', '2:00', '罗斯托夫体育场', '小组赛D', '0', NULL),
('塞尔维亚', 0, '巴西', 2, 41, 0, '6月28日', '星期四', '2:00', '莫斯科斯巴达克体育场', '小组赛E', '0', NULL),
('瑞士', 2, '哥斯达黎加', 2, 42, 0, '6月28日', '星期四', '2:00', '诺夫哥罗德体育场', '小组赛E', '0', NULL),
('韩国', 2, '德国', 0, 43, 0, '6月27日', '星期三', '22:00', '喀山竞技场', '小组赛F', '0', NULL),
('墨西哥', 0, '瑞典', 3, 44, 0, '6月27日', '星期三', '22:00', '叶卡捷琳堡中央体育场', '小组赛F', '0', NULL),
('英格兰', 0, '比利时', 1, 45, 0, '6月29日', '星期五', '2:00', '加里宁格勒体育场', '小组赛G', '0', NULL),
('巴拿马', 1, '突尼斯', 2, 46, 0, '6月29日', '星期五', '2:00', '莫尔多瓦竞技场', '小组赛G', '0', NULL),
('日本', 0, '波兰', 1, 47, 0, '6月28日', '星期四', '22:00', '伏尔加格勒竞技场', '小组赛H', '0', NULL),
('塞内加尔', 0, '哥伦比亚', 1, 48, 0, '6月28日', '星期四', '22:00', '萨马拉竞技场', '小组赛H', '0', NULL),
('乌拉圭', 2, '葡萄牙', 1, 49, 0, '7月1日', '星期日', '2:00', '菲什特奥林匹克体育场', '1/8决赛', '0', NULL),
('法国', 4, '阿根廷', 3, 50, 0, '6月30日', '星期六', '22:00', '喀山竞技场', '1/8决赛', '0', NULL),
('西班牙', 4, '俄罗斯', 5, 51, 0, '7月1日', '星期日', '22:00', '卢日尼基体育场', '1/8决赛', '0', NULL),
('克罗地亚', 4, '丹麦', 3, 52, 0, '7月2日', '星期一', '2:00', '诺夫哥罗德体育场', '1/8决赛', '0', NULL),
('巴西', 2, '墨西哥', 0, 53, 0, '7月2日', '星期一', '22:00', '萨马拉竞技场', '1/8决赛', '0', NULL),
('比利时', 3, '日本', 2, 54, 0, '7月3日', '星期二', '2:00', '罗斯托夫体育场', '1/8决赛', '0', NULL),
('瑞典', 1, '瑞士', 0, 55, 0, '7月3日', '星期二', '22:00', '圣彼得堡体育场', '1/8决赛', '0', NULL),
('哥伦比亚', 4, '英格兰', 5, 56, 0, '7月4日', '星期三', '2:00', '莫斯科斯巴达克体育场', '1/8决赛', '0', NULL),
('乌拉圭', 0, '法国', 2, 57, 0, '7月6日', '星期五', '22:00', '诺夫哥罗德体育场', '1/4决赛', '0', NULL),
('巴西', 1, '比利时', 2, 58, 0, '7月7日', '星期六', '2:00', '喀山竞技场', '1/4决赛', '0', NULL),
('俄罗斯', 5, '克罗地亚', 6, 59, 0, '7月8日', '星期日', '2:00', '菲什特奥林匹克体育场', '1/4决赛', '0', NULL),
('瑞典', 0, '英格兰', 2, 60, 0, '7月7日', '星期六', '22:00', '萨马拉竞技场', '1/4决赛', '0', NULL),
('法国', 1, '比利时', 0, 61, 0, '7月11日', '星期三', '2:00', '圣彼得堡体育场', '半决赛', '0', NULL),
('克罗地亚', 2, '英格兰', 1, 62, 0, '7月12日', '星期四', '2:00', '卢日尼基体育场', '半决赛', '0', NULL),
('比利时', 2, '英格兰', 0, 63, 0, '7月14日', '星期六', '22:00', '圣彼得堡体育场', '3、4名决赛', '0', NULL),
('法国', 4, '克罗地亚', 2, 64, 0, '7月15日', '星期日', '23:00', '卢日尼基体育场', '1、2名决赛', '0', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE `message` (
  `ID` int(11) NOT NULL COMMENT '消息编号',
  `userID` int(11) NOT NULL COMMENT '用户ID',
  `receivedtime` varchar(200) NOT NULL COMMENT '收到消息的时间',
  `content` varchar(200) NOT NULL COMMENT '消息内容（类似于文章）',
  `status` enum('already','wait','delete') NOT NULL COMMENT '信息状态',
  `admin_ID` int(11) NOT NULL COMMENT '发送消息的管理员ID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1531735344),
('m130524_201442_init', 1531735347);

-- --------------------------------------------------------

--
-- 表的结构 `passage`
--

CREATE TABLE `passage` (
  `ID` int(11) NOT NULL COMMENT '文章标号',
  `title` varchar(200) NOT NULL COMMENT '文章标题',
  `date` varchar(200) NOT NULL COMMENT '文章发布时间',
  `author_ID` int(11) NOT NULL COMMENT '文章发布者ID',
  `author` varchar(255) NOT NULL COMMENT '文章发布者',
  `content` mediumtext NOT NULL COMMENT '文章内容',
  `status` enum('success','pending','delete','abort') NOT NULL DEFAULT 'pending' COMMENT '文章状态',
  `seen` int(11) NOT NULL COMMENT '文章点击数'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `passage_key`
--

CREATE TABLE `passage_key` (
  `catid` int(11) NOT NULL COMMENT '关键词ID',
  `passage_ID` int(11) NOT NULL COMMENT '文章ID',
  `keyword` varchar(200) NOT NULL COMMENT '文章关键词'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `player`
--

CREATE TABLE `player` (
  `ID` int(11) NOT NULL COMMENT '队员ID',
  `haoma` int(11) NOT NULL COMMENT '队员号码',
  `country` varchar(200) NOT NULL COMMENT '队员所属国家',
  `name` varchar(200) NOT NULL COMMENT '队员姓名',
  `postion` varchar(200) NOT NULL COMMENT '位置',
  `height` varchar(20) NOT NULL COMMENT '球员身高',
  `weight` varchar(200) NOT NULL COMMENT '球员体重',
  `birthdate` varchar(200) NOT NULL COMMENT '队员生日',
  `attended` int(11) NOT NULL COMMENT '本届世界杯出场次数',
  `totaltime` int(11) NOT NULL COMMENT '队员总出场时间',
  `image` varchar(1000) NOT NULL,
  `jinqiu` int(11) NOT NULL COMMENT '总进球数',
  `zhugong` int(11) NOT NULL COMMENT '总助攻数',
  `shemen` int(11) NOT NULL COMMENT '总射门次数',
  `shezheng` int(11) NOT NULL COMMENT '射正次数',
  `chuanqiu` int(11) NOT NULL COMMENT '传球次数',
  `shiqiu` int(11) NOT NULL COMMENT '总失球数（对于门将）',
  `pujiu` int(11) NOT NULL COMMENT '总扑救数（对于门将）',
  `hongpai` int(11) NOT NULL COMMENT '总红牌数',
  `huangpai` int(11) NOT NULL COMMENT '总黄牌数',
  `click` int(11) NOT NULL COMMENT '球员被点击次数'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `player`
--

INSERT INTO `player` (`ID`, `haoma`, `country`, `name`, `postion`, `height`, `weight`, `birthdate`, `attended`, `totaltime`, `image`, `jinqiu`, `zhugong`, `shemen`, `shezheng`, `chuanqiu`, `shiqiu`, `pujiu`, `hongpai`, `huangpai`, `click`) VALUES
(0, 0, 'country', 'name', 'position', 'height', 'weight', 'birthdate', 0, 0, 'image', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1, 1, '俄罗斯', '阿金费耶夫', '守门员', '185cm', '83kg', '1986/4/8', 5, 510, 'http://sports.sohu.com/upload/worldcup2018/players/13274.png', 0, 0, 0, 0, 137, 7, 14, 0, 0, 0),
(2, 20, '俄罗斯', '加布洛夫-弗拉迪米尔', '守门员', '190cm', '81kg', '1983/10/19', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/13275.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 14, '俄罗斯', '弗拉迪米尔-格拉纳特', '后卫', '184cm', '80kg', '1987/5/22', 0, 75, 'http://sports.sohu.com/upload/worldcup2018/players/24593.png', 0, 0, 0, 0, 8, 0, 0, 0, 0, 0),
(4, 10, '俄罗斯', '费多尔-斯莫洛夫', '前锋', '185cm', '79kg', '1990/2/9', 1, 219, 'http://sports.sohu.com/upload/worldcup2018/players/24601.png', 0, 0, 2, 1, 76, 2, 0, 0, 1, 0),
(5, 13, '俄罗斯', '库德里亚绍夫', '后卫', '187cm', '78kg', '1987/4/5', 3, 334, 'http://sports.sohu.com/upload/worldcup2018/players/24639.png', 0, 0, 0, 0, 133, 6, 0, 0, 0, 0),
(6, 9, '俄罗斯', '扎戈耶夫', '中场', '178cm', '73kg', '1990/6/17', 1, 42, 'http://sports.sohu.com/upload/worldcup2018/players/42208.png', 0, 1, 0, 0, 15, 0, 0, 0, 0, 0),
(7, 23, '俄罗斯', '斯莫尔尼科夫', '后卫', '179cm', '72kg', '1988/8/8', 1, 36, 'http://sports.sohu.com/upload/worldcup2018/players/43284.png', 0, 0, 0, 0, 15, 2, 0, 0, 1, 0),
(8, 21, '俄罗斯', '叶罗欣', '中场', '191cm', '79kg', '1989/10/13', 0, 89, 'http://sports.sohu.com/upload/worldcup2018/players/55379.png', 0, 0, 2, 0, 15, 1, 0, 0, 0, 0),
(9, 5, '俄罗斯', '安德烈-塞梅诺夫', '后卫', '191cm', '87kg', '1989/3/24', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/84767.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 3, '俄罗斯', '库特波夫', '后卫', '190cm', '82kg', '1993/7/29', 5, 510, 'http://sports.sohu.com/upload/worldcup2018/players/94759.png', 0, 1, 1, 0, 193, 7, 0, 0, 1, 0),
(11, 12, '俄罗斯', '卢尼奥夫', '守门员', '189cm', '80kg', '1991/11/13', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/120787.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 11, '俄罗斯', '佐布宁', '中场', '185cm', '77kg', '1994/2/11', 5, 510, 'http://sports.sohu.com/upload/worldcup2018/players/138452.png', 0, 1, 4, 2, 178, 7, 0, 0, 1, 0),
(13, 6, '俄罗斯', '丹尼斯-切里舍夫', '中场', '173cm', '68kg', '1990/12/26', 3, 304, 'http://sports.sohu.com/upload/worldcup2018/players/167855.png', 4, 0, 9, 6, 71, 4, 0, 0, 0, 0),
(14, 17, '俄罗斯', '戈洛温', '中场', '178cm', '70kg', '1996/5/30', 4, 402, 'http://sports.sohu.com/upload/worldcup2018/players/318963.png', 1, 2, 3, 1, 129, 4, 0, 0, 1, 0),
(15, 15, '俄罗斯', '阿列克谢-米兰丘克', '中场', '185cm', '77kg', '1995/10/17', 1, 60, 'http://sports.sohu.com/upload/worldcup2018/players/324353.png', 0, 0, 0, 0, 21, 2, 0, 0, 0, 0),
(16, 7, '俄罗斯', '库兹亚耶夫', '中场', '182cm', '74kg', '1993/1/15', 2, 304, 'http://sports.sohu.com/upload/worldcup2018/players/335865.png', 0, 0, 2, 1, 98, 4, 0, 0, 0, 0),
(17, 16, '俄罗斯', '安东-米兰丘克', '中场', '182cm', '67kg', '1995/10/17', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/358746.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 7, '乌拉圭', '克里斯蒂安-罗德里格斯', '中场', '178cm', '79kg', '1985/9/30', 1, 165, 'http://sports.sohu.com/upload/worldcup2018/players/9071.png', 0, 0, 3, 2, 71, 1, 0, 0, 1, 0),
(19, 3, '乌拉圭', '戈丁', '后卫', '185cm', '73kg', '1986/2/16', 5, 450, 'http://sports.sohu.com/upload/worldcup2018/players/14933.png', 0, 0, 3, 1, 248, 3, 0, 0, 0, 0),
(20, 9, '乌拉圭', '苏亚雷斯', '前锋', '182cm', '85kg', '1987/1/24', 5, 450, 'http://sports.sohu.com/upload/worldcup2018/players/16943.png', 2, 1, 9, 5, 134, 3, 0, 0, 0, 0),
(21, 21, '乌拉圭', '卡瓦尼', '前锋', '188cm', '78kg', '1987/2/14', 4, 344, 'http://sports.sohu.com/upload/worldcup2018/players/21521.png', 3, 0, 11, 6, 86, 1, 0, 0, 0, 0),
(22, 16, '乌拉圭', '马克西-佩雷拉', '后卫', '173cm', '73kg', '1984/6/8', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/26179.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 1, '乌拉圭', '穆斯莱拉', '守门员', '190cm', '74kg', '1986/6/16', 5, 450, 'http://sports.sohu.com/upload/worldcup2018/players/28381.png', 0, 0, 0, 0, 142, 3, 10, 0, 0, 0),
(24, 11, '乌拉圭', '斯图亚尼', '前锋', '186cm', '78kg', '1986/10/12', 1, 75, 'http://sports.sohu.com/upload/worldcup2018/players/32048.png', 0, 0, 1, 0, 20, 1, 0, 0, 0, 0),
(25, 23, '乌拉圭', '马丁-席尔瓦', '守门员', '187cm', '82kg', '1983/3/25', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/36979.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 19, '乌拉圭', '科茨', '后卫', '196cm', '89kg', '1990/10/7', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/47443.png', 0, 0, 0, 0, 67, 0, 0, 0, 0, 0),
(27, 5, '乌拉圭', '卡洛斯-桑切斯', '中场', '171cm', '74kg', '1984/12/2', 1, 123, 'http://sports.sohu.com/upload/worldcup2018/players/77034.png', 0, 2, 2, 1, 61, 0, 0, 0, 0, 0),
(28, 13, '乌拉圭', '加斯顿-席尔瓦', '后卫', '185cm', '74kg', '1994/3/5', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/155952.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 15, '乌拉圭', '贝西诺', '中场', '189cm', '80kg', '1991/8/24', 5, 416, 'http://sports.sohu.com/upload/worldcup2018/players/158615.png', 0, 0, 3, 1, 258, 3, 0, 0, 0, 0),
(30, 12, '乌拉圭', '坎帕尼亚', '守门员', '184cm', '79kg', '1989/5/29', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/243045.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 4, '乌拉圭', '吉利尔莫-瓦雷拉', '后卫', '173cm', '70kg', '1993/3/24', 2, 180, 'http://sports.sohu.com/upload/worldcup2018/players/311456.png', 0, 0, 0, 0, 109, 0, 0, 0, 0, 0),
(32, 2, '乌拉圭', '吉梅内斯', '后卫', '185cm', '77kg', '1995/1/20', 4, 360, 'http://sports.sohu.com/upload/worldcup2018/players/325355.png', 1, 0, 2, 2, 185, 3, 0, 0, 0, 0),
(33, 10, '乌拉圭', '德阿拉斯凯塔', '前锋', '172cm', '64kg', '1994/6/1', 1, 86, 'http://sports.sohu.com/upload/worldcup2018/players/333587.png', 0, 0, 1, 0, 40, 0, 0, 0, 0, 0),
(34, 17, '乌拉圭', '拉克索尔特', '中场', '178cm', '66kg', '1993/2/7', 3, 301, 'http://sports.sohu.com/upload/worldcup2018/players/333589.png', 0, 0, 0, 0, 119, 3, 0, 0, 0, 0),
(35, 8, '乌拉圭', '南德斯', '中场', '171cm', '61kg', '1995/12/28', 4, 293, 'http://sports.sohu.com/upload/worldcup2018/players/589620.png', 0, 0, 2, 1, 125, 3, 0, 0, 0, 0),
(36, 14, '乌拉圭', '托雷拉', '中场', '168cm', '61kg', '1996/2/11', 3, 304, 'http://sports.sohu.com/upload/worldcup2018/players/754794.png', 0, 0, 0, 0, 130, 3, 0, 0, 0, 0),
(37, 6, '乌拉圭', '本坦库尔', '中场', '187cm', '73kg', '1997/6/25', 5, 365, 'http://sports.sohu.com/upload/worldcup2018/players/810644.png', 0, 1, 2, 1, 222, 2, 0, 0, 2, 0),
(38, 18, '乌拉圭', '马克西-戈麦斯', '前锋', '186cm', '85kg', '1996/8/14', 0, 31, 'http://sports.sohu.com/upload/worldcup2018/players/871470.png', 0, 0, 0, 0, 2, 1, 0, 0, 0, 0),
(39, 1, '埃及', '埃尔哈达里', '守门员', '190cm', '90kg', '1973/1/15', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/14397.png', 0, 0, 0, 0, 26, 2, 5, 0, 0, 0),
(40, 7, '埃及', '法蒂', '后卫', '176cm', '76kg', '1984/11/10', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/14407.png', 0, 0, 1, 1, 161, 6, 0, 0, 1, 0),
(41, 3, '埃及', '埃尔穆哈马迪', '后卫', '183cm', '76kg', '1987/9/9', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/32787.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(42, 18, '埃及', '希卡巴拉', '前锋', '183cm', '80kg', '1986/3/5', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/105394.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, 13, '埃及', '阿布德尔沙菲', '后卫', '171cm', '72kg', '1985/7/1', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/105407.png', 0, 0, 0, 0, 172, 6, 0, 0, 0, 0),
(44, 5, '埃及', '萨姆-摩西', '中场', '173cm', '75kg', '1991/9/10', 0, 40, 'http://sports.sohu.com/upload/worldcup2018/players/108515.png', 0, 0, 0, 0, 24, 1, 0, 0, 1, 0),
(45, 12, '埃及', '阿什拉夫', '后卫', '176cm', '73kg', '1991/4/9', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/159647.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, 6, '埃及', '赫加齐', '后卫', '194cm', '95kg', '1991/1/25', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/159653.png', 0, 0, 0, 0, 128, 6, 0, 0, 1, 0),
(47, 10, '埃及', '萨拉赫', '前锋', '175cm', '71kg', '1992/6/15', 2, 180, 'http://sports.sohu.com/upload/worldcup2018/players/159665.png', 2, 0, 6, 2, 42, 5, 0, 0, 0, 0),
(48, 17, '埃及', '埃尔内尼', '中场', '181cm', '74kg', '1992/7/11', 3, 244, 'http://sports.sohu.com/upload/worldcup2018/players/159675.png', 0, 0, 2, 0, 111, 6, 0, 0, 0, 0),
(49, 4, '埃及', '贾卜尔', '中场', '175cm', '71kg', '1992/1/30', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/159677.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(50, 19, '埃及', '阿卜杜拉-赛义德', '中场', '176cm', '75kg', '1985/7/13', 3, 225, 'http://sports.sohu.com/upload/worldcup2018/players/198472.png', 0, 1, 1, 0, 149, 5, 0, 0, 0, 0),
(51, 9, '埃及', '穆赫辛', '前锋', '185cm', '81kg', '1989/2/26', 3, 209, 'http://sports.sohu.com/upload/worldcup2018/players/243915.png', 0, 0, 2, 1, 55, 4, 0, 0, 0, 0),
(52, 20, '埃及', '萨米尔', '后卫', '183cm', '82kg', '1989/4/1', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/244359.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(53, 21, '埃及', '特雷泽盖', '中场', '181cm', '77kg', '1994/10/1', 3, 239, 'http://sports.sohu.com/upload/worldcup2018/players/295361.png', 0, 0, 7, 1, 84, 5, 0, 0, 1, 0),
(54, 11, '埃及', '卡赫拉巴', '前锋', '182cm', '76kg', '1994/4/13', 0, 44, 'http://sports.sohu.com/upload/worldcup2018/players/333439.png', 0, 0, 0, 0, 19, 2, 0, 0, 0, 0),
(55, 2, '埃及', '贾布尔', '后卫', '191cm', '88kg', '1989/1/1', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/560164.png', 0, 0, 1, 0, 85, 6, 0, 0, 1, 0),
(56, 8, '埃及', '哈默德', '中场', '169cm', '67kg', '1988/10/24', 3, 230, 'http://sports.sohu.com/upload/worldcup2018/players/560168.png', 0, 0, 0, 0, 135, 5, 0, 0, 0, 0),
(57, 22, '埃及', '瓦尔达', '前锋', '179cm', '77kg', '1993/9/17', 1, 153, 'http://sports.sohu.com/upload/worldcup2018/players/885102.png', 0, 0, 1, 0, 53, 1, 0, 0, 0, 0),
(58, 14, '埃及', '苏卜希', '前锋', '183cm', '77kg', '1997/1/23', 0, 56, 'http://sports.sohu.com/upload/worldcup2018/players/1010937.png', 0, 0, 0, 0, 30, 2, 0, 0, 0, 0),
(59, 23, '埃及', 'M-艾尔西纳维', '守门员', '191cm', '86kg', '1988/12/18', 2, 180, 'http://sports.sohu.com/upload/worldcup2018/players/1426753.png', 0, 0, 0, 0, 51, 4, 4, 0, 0, 0),
(60, 17, '沙特阿拉伯', '贾希姆', '中场', '169cm', '69kg', '1984/7/25', 2, 134, 'http://sports.sohu.com/upload/worldcup2018/players/31605.png', 0, 0, 0, 0, 63, 6, 0, 0, 1, 0),
(61, 3, '沙特阿拉伯', '奥萨马', '后卫', '188cm', '83kg', '1984/3/31', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/37176.png', 0, 0, 0, 0, 141, 7, 0, 0, 0, 0),
(62, 10, '沙特阿拉伯', '萨赫拉维', '前锋', '179cm', '75kg', '1987/1/10', 1, 97, 'http://sports.sohu.com/upload/worldcup2018/players/118148.png', 0, 0, 0, 0, 13, 3, 0, 0, 0, 0),
(63, 8, '沙特阿拉伯', '叶海亚-谢赫里', '中场', '165cm', '63kg', '1990/6/26', 1, 83, 'http://sports.sohu.com/upload/worldcup2018/players/118150.png', 0, 0, 0, 0, 54, 3, 0, 0, 0, 0),
(64, 18, '沙特阿拉伯', '萨利姆-多萨里', '中场', '174cm', '68kg', '1991/8/19', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/160893.png', 1, 0, 7, 2, 171, 7, 0, 0, 0, 0),
(65, 13, '沙特阿拉伯', '沙赫拉尼', '后卫', '170cm', '63kg', '1992/5/25', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/160923.png', 0, 0, 2, 0, 195, 7, 0, 0, 0, 0),
(66, 14, '沙特阿拉伯', '阿卜杜拉-奥塔伊夫', '中场', '177cm', '66kg', '1992/8/3', 3, 244, 'http://sports.sohu.com/upload/worldcup2018/players/160925.png', 0, 1, 0, 0, 255, 4, 0, 0, 0, 0),
(67, 23, '沙特阿拉伯', '莫塔兹', '后卫', '180cm', '79kg', '1992/2/17', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/160933.png', 0, 0, 0, 0, 32, 1, 0, 0, 0, 0),
(68, 21, '沙特阿拉伯', '亚塞尔-莫塞勒姆', '守门员', '186cm', '88kg', '1984/2/27', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/196394.png', 0, 0, 0, 0, 18, 1, 0, 0, 0, 0),
(69, 11, '沙特阿拉伯', '阿卜杜勒马里克-海布里', '中场', '177cm', '73kg', '1986/3/13', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/201624.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(70, 2, '沙特阿拉伯', '曼苏尔-哈尔比', '后卫', '173cm', '68kg', '1987/10/19', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/328855.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(71, 5, '沙特阿拉伯', '奥马尔', '后卫', '185cm', '76kg', '1985/9/27', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/350072.png', 0, 0, 0, 0, 57, 5, 0, 0, 0, 0),
(72, 16, '沙特阿拉伯', '侯赛因-阿尔-摩格维', '中场', '174cm', '76kg', '1988/3/24', 1, 136, 'http://sports.sohu.com/upload/worldcup2018/players/538492.png', 0, 0, 4, 1, 98, 1, 0, 0, 0, 0),
(73, 12, '沙特阿拉伯', '穆罕默德-坎诺', '中场', '192cm', '73kg', '1994/9/22', 0, 15, 'http://sports.sohu.com/upload/worldcup2018/players/947432.png', 0, 0, 1, 1, 5, 0, 0, 0, 0, 0),
(74, 22, '沙特阿拉伯', '穆罕默德-阿洛瓦伊斯', '守门员', '187cm', '79kg', '1991/10/10', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/1060479.png', 0, 0, 0, 0, 27, 1, 3, 0, 0, 0),
(75, 20, '沙特阿拉伯', '穆罕默德-阿西里', '前锋', '185cm', '79kg', '1986/10/14', 0, 30, 'http://sports.sohu.com/upload/worldcup2018/players/1353186.png', 0, 0, 1, 1, 6, 2, 0, 0, 0, 0),
(76, 15, '沙特阿拉伯', '阿卜杜拉-海巴里', '中场', '175cm', '66kg', '1996/8/16', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/1429341.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(77, 7, '葡萄牙', 'C罗', '前锋', '185cm', '80kg', '1985/2/5', 4, 360, 'http://sports.sohu.com/upload/worldcup2018/players/750.png', 4, 0, 12, 8, 113, 6, 0, 0, 2, 0),
(78, 20, '葡萄牙', '夸雷斯马', '前锋', '175cm', '73kg', '1983/9/26', 1, 116, 'http://sports.sohu.com/upload/worldcup2018/players/6254.png', 1, 0, 4, 2, 45, 0, 0, 0, 1, 0),
(79, 8, '葡萄牙', '穆蒂尼奥', '中场', '170cm', '61kg', '1986/9/8', 2, 185, 'http://sports.sohu.com/upload/worldcup2018/players/6562.png', 0, 1, 0, 0, 85, 4, 0, 0, 0, 0),
(80, 4, '葡萄牙', '曼努埃尔-费尔南德斯', '中场', '174cm', '69kg', '1986/2/5', 0, 6, 'http://sports.sohu.com/upload/worldcup2018/players/12982.png', 0, 0, 2, 1, 11, 0, 0, 0, 0, 0),
(81, 2, '葡萄牙', '布鲁诺-阿尔维斯', '后卫', '187cm', '83kg', '1981/11/27', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/13204.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(82, 1, '葡萄牙', '帕特里西奥', '守门员', '189cm', '84kg', '1988/2/15', 4, 360, 'http://sports.sohu.com/upload/worldcup2018/players/17737.png', 0, 0, 0, 0, 107, 6, 8, 0, 0, 0),
(83, 6, '葡萄牙', '丰特', '后卫', '191cm', '84kg', '1983/12/22', 4, 360, 'http://sports.sohu.com/upload/worldcup2018/players/27622.png', 0, 0, 2, 0, 184, 6, 0, 0, 0, 0),
(84, 23, '葡萄牙', '阿德里安-席尔瓦', '中场', '176cm', '72kg', '1989/3/15', 2, 156, 'http://sports.sohu.com/upload/worldcup2018/players/30127.png', 0, 1, 1, 0, 159, 3, 0, 0, 1, 0),
(85, 22, '葡萄牙', '贝托', '守门员', '183cm', '79kg', '1982/5/1', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/44652.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(86, 21, '葡萄牙', '塞德里克-苏亚雷斯', '后卫', '172cm', '67kg', '1991/8/31', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/44760.png', 0, 0, 0, 0, 150, 4, 0, 0, 1, 0),
(87, 12, '葡萄牙', '安东尼-洛佩斯', '守门员', '184cm', '81kg', '1990/10/1', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/48535.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(88, 10, '葡萄牙', '若昂-马里奥', '中场', '179cm', '73kg', '1993/1/19', 3, 260, 'http://sports.sohu.com/upload/worldcup2018/players/97001.png', 0, 0, 1, 0, 143, 2, 0, 0, 0, 0),
(89, 19, '葡萄牙', '马里奥-鲁伊', '后卫', '168cm', '67kg', '1991/5/27', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/99546.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(90, 14, '葡萄牙', '威廉-卡瓦略', '中场', '190cm', '80kg', '1992/4/7', 4, 360, 'http://sports.sohu.com/upload/worldcup2018/players/137978.png', 0, 0, 0, 0, 247, 6, 0, 0, 0, 0),
(91, 9, '葡萄牙', '安德烈-席尔瓦', '前锋', '184cm', '78kg', '1995/11/6', 1, 116, 'http://sports.sohu.com/upload/worldcup2018/players/190159.png', 0, 0, 1, 0, 31, 1, 0, 0, 0, 0),
(92, 5, '葡萄牙', '格雷罗', '后卫', '170cm', '64kg', '1993/12/22', 4, 360, 'http://sports.sohu.com/upload/worldcup2018/players/246999.png', 0, 1, 2, 0, 238, 6, 0, 0, 1, 0),
(93, 17, '葡萄牙', '格德斯', '前锋', '179cm', '72kg', '1996/11/29', 3, 244, 'http://sports.sohu.com/upload/worldcup2018/players/280979.png', 0, 1, 2, 2, 67, 5, 0, 0, 0, 0),
(94, 16, '葡萄牙', '布鲁诺-费尔南德斯', '中场', '183cm', '64kg', '1994/9/8', 1, 88, 'http://sports.sohu.com/upload/worldcup2018/players/288205.png', 0, 0, 3, 0, 30, 3, 0, 0, 1, 0),
(95, 13, '葡萄牙', '鲁本-迪亚斯', '后卫', '186cm', '83kg', '1997/5/14', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/318941.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(96, 11, '葡萄牙', '伯纳多-席尔瓦', '中场', '173cm', '65kg', '1994/8/10', 3, 238, 'http://sports.sohu.com/upload/worldcup2018/players/331209.png', 0, 0, 2, 0, 117, 6, 0, 0, 0, 0),
(97, 18, '葡萄牙', '热尔松-马丁斯', '前锋', '173cm', '63kg', '1995/5/11', 0, 31, 'http://sports.sohu.com/upload/worldcup2018/players/364618.png', 0, 0, 0, 0, 9, 0, 0, 0, 0, 0),
(98, 3, '西班牙', '皮克', '后卫', '194cm', '85kg', '1987/2/2', 4, 390, 'http://sports.sohu.com/upload/worldcup2018/players/770.png', 0, 0, 4, 2, 345, 6, 0, 0, 1, 0),
(99, 15, '西班牙', '拉莫斯', '后卫', '183cm', '75kg', '1986/3/30', 4, 390, 'http://sports.sohu.com/upload/worldcup2018/players/10710.png', 0, 0, 2, 0, 495, 6, 0, 0, 0, 0),
(100, 21, '西班牙', '大卫-席尔瓦', '前锋', '170cm', '67kg', '1986/1/8', 4, 327, 'http://sports.sohu.com/upload/worldcup2018/players/11781.png', 0, 0, 4, 1, 203, 5, 0, 0, 0, 0),
(101, 17, '西班牙', '阿斯帕斯', '前锋', '176cm', '67kg', '1987/8/1', 0, 69, 'http://sports.sohu.com/upload/worldcup2018/players/19356.png', 1, 0, 3, 3, 28, 2, 0, 0, 0, 0),
(102, 19, '西班牙', '迭戈-科斯塔', '前锋', '185cm', '86kg', '1988/10/7', 4, 320, 'http://sports.sohu.com/upload/worldcup2018/players/21212.png', 3, 0, 9, 5, 67, 4, 0, 0, 0, 0),
(103, 14, '西班牙', '阿斯皮利奎塔', '后卫', '178cm', '78kg', '1989/8/28', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/21555.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(104, 23, '西班牙', '雷纳', '守门员', '188cm', '92kg', '1982/8/31', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/26937.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(105, 18, '西班牙', '阿尔巴', '后卫', '170cm', '68kg', '1989/3/21', 4, 390, 'http://sports.sohu.com/upload/worldcup2018/players/35199.png', 0, 0, 1, 1, 405, 6, 0, 0, 0, 0),
(106, 10, '西班牙', '蒂亚戈', '中场', '174cm', '70kg', '1991/4/11', 1, 94, 'http://sports.sohu.com/upload/worldcup2018/players/53825.png', 0, 0, 2, 0, 118, 2, 0, 0, 0, 0),
(107, 1, '西班牙', '德赫亚', '守门员', '190cm', '71kg', '1990/11/7', 4, 390, 'http://sports.sohu.com/upload/worldcup2018/players/69378.png', 0, 0, 0, 0, 87, 6, 1, 0, 0, 0),
(108, 4, '西班牙', '纳乔', '后卫', '179cm', '77kg', '1990/1/18', 2, 160, 'http://sports.sohu.com/upload/worldcup2018/players/69404.png', 1, 0, 1, 1, 101, 4, 0, 0, 0, 0),
(109, 8, '西班牙', '科克', '中场', '176cm', '73kg', '1992/1/8', 2, 229, 'http://sports.sohu.com/upload/worldcup2018/players/84539.png', 0, 0, 1, 0, 270, 4, 0, 0, 0, 0),
(110, 9, '西班牙', '罗德里戈', '前锋', '182cm', '72kg', '1991/3/6', 0, 23, 'http://sports.sohu.com/upload/worldcup2018/players/99525.png', 0, 0, 4, 2, 9, 0, 0, 0, 0, 0),
(111, 22, '西班牙', '伊斯科', '中场', '176cm', '74kg', '1992/4/21', 4, 390, 'http://sports.sohu.com/upload/worldcup2018/players/103417.png', 1, 0, 5, 2, 447, 6, 0, 0, 0, 0),
(112, 7, '西班牙', '萨乌尔', '中场', '183cm', '76kg', '1994/11/21', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/116955.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(113, 2, '西班牙', '卡瓦哈尔', '后卫', '173cm', '73kg', '1992/1/11', 2, 230, 'http://sports.sohu.com/upload/worldcup2018/players/138572.png', 0, 1, 1, 0, 171, 2, 0, 0, 0, 0),
(114, 13, '西班牙', '科帕', '守门员', '189cm', '84kg', '1994/10/3', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/232422.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(115, 11, '西班牙', '巴斯克斯', '前锋', '173cm', '70kg', '1991/7/1', 1, 83, 'http://sports.sohu.com/upload/worldcup2018/players/255239.png', 0, 0, 0, 0, 38, 1, 0, 0, 0, 0),
(116, 12, '西班牙', '奥德里奥索拉', '后卫', '175cm', '66kg', '1995/12/14', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/353250.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(117, 20, '西班牙', '阿森西奥', '中场', '182cm', '76kg', '1996/1/21', 1, 131, 'http://sports.sohu.com/upload/worldcup2018/players/361004.png', 0, 0, 2, 1, 55, 2, 0, 0, 0, 0),
(118, 4, '摩洛哥', '达科斯塔', '后卫', '187cm', '78kg', '1986/5/6', 2, 188, 'http://sports.sohu.com/upload/worldcup2018/players/14246.png', 0, 0, 2, 0, 86, 4, 0, 0, 1, 0),
(119, 22, '摩洛哥', '艾哈迈德-瑞达', '守门员', '186cm', '70kg', '1996/4/5', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/359280.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(120, 9, '摩洛哥', '阿尤布-卡比', '前锋', '182cm', '72kg', '1993/6/25', 1, 98, 'http://sports.sohu.com/upload/worldcup2018/players/1396937.png', 0, 0, 1, 0, 6, 0, 0, 0, 0, 0),
(121, 21, '伊朗', '德贾加', '前锋', '181cm', '78kg', '1986/7/5', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/389.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(122, 16, '伊朗', '礼萨-古查内贾德', '前锋', '180cm', '79kg', '1987/9/20', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/15156.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(123, 3, '伊朗', '哈吉萨菲', '后卫', '178cm', '75kg', '1990/2/25', 3, 215, 'http://sports.sohu.com/upload/worldcup2018/players/137569.png', 0, 0, 1, 0, 67, 2, 0, 0, 1, 0),
(124, 10, '伊朗', '卡里姆-安萨里法德', '前锋', '187cm', '80kg', '1990/4/3', 2, 178, 'http://sports.sohu.com/upload/worldcup2018/players/144594.png', 1, 0, 3, 1, 24, 1, 0, 0, 1, 0),
(125, 9, '伊朗', '易卜拉希米', '中场', '178cm', '75kg', '1987/9/16', 3, 260, 'http://sports.sohu.com/upload/worldcup2018/players/150993.png', 0, 0, 0, 0, 61, 2, 0, 0, 1, 0),
(126, 20, '伊朗', '阿兹蒙', '前锋', '186cm', '80kg', '1995/1/1', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/150998.png', 0, 0, 2, 1, 49, 2, 0, 0, 1, 0),
(127, 15, '伊朗', '蒙塔泽里', '后卫', '185cm', '77kg', '1983/9/6', 0, 11, 'http://sports.sohu.com/upload/worldcup2018/players/196472.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(128, 18, '伊朗', '阿里莱扎-亚汉巴什', '前锋', '180cm', '77kg', '1993/8/11', 2, 171, 'http://sports.sohu.com/upload/worldcup2018/players/331837.png', 0, 0, 2, 1, 38, 1, 0, 0, 1, 0),
(129, 6, '伊朗', '赛义德-伊扎图拉希', '中场', '190cm', '82kg', '1996/10/1', 2, 166, 'http://sports.sohu.com/upload/worldcup2018/players/359334.png', 0, 0, 1, 1, 43, 2, 0, 0, 0, 0),
(130, 1, '伊朗', '贝兰万德', '守门员', '194cm', '85kg', '1992/9/21', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/377774.png', 0, 0, 0, 0, 77, 2, 8, 0, 0, 0),
(131, 13, '伊朗', '雷扎-汉扎德赫', '后卫', '186cm', '80kg', '1991/5/11', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/377784.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(132, 8, '伊朗', '普拉利甘吉', '后卫', '187cm', '83kg', '1992/4/19', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/377798.png', 0, 0, 0, 0, 64, 2, 0, 0, 0, 0),
(133, 17, '伊朗', '迈赫迪-塔雷米', '前锋', '187cm', '80kg', '1992/7/18', 2, 202, 'http://sports.sohu.com/upload/worldcup2018/players/377802.png', 0, 0, 3, 0, 37, 2, 0, 0, 0, 0),
(134, 14, '伊朗', '萨曼-格多斯', '前锋', '177cm', '79kg', '1993/9/6', 0, 29, 'http://sports.sohu.com/upload/worldcup2018/players/548050.png', 0, 0, 1, 0, 3, 0, 0, 0, 0, 0),
(135, 11, '伊朗', '瓦希德-阿米里', '中场', '179cm', '71kg', '1988/4/2', 3, 266, 'http://sports.sohu.com/upload/worldcup2018/players/790983.png', 0, 0, 2, 0, 47, 2, 0, 0, 1, 0),
(136, 23, '伊朗', '雷扎埃安', '后卫', '185cm', '75kg', '1990/3/21', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/790985.png', 0, 0, 1, 0, 94, 2, 0, 0, 0, 0),
(137, 4, '伊朗', '切什米', '后卫', '192cm', '80kg', '1993/7/24', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/820102.png', 0, 0, 1, 0, 16, 0, 0, 0, 0, 0),
(138, 2, '伊朗', '托拉比', '中场', '185cm', '71kg', '1994/9/10', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/820118.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(139, 12, '伊朗', '马扎赫里', '守门员', '192cm', '84kg', '1989/5/18', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/963157.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(140, 1, '丹麦', '舒梅切尔', '守门员', '190cm', '92kg', '1986/11/5', 4, 390, 'http://sports.sohu.com/upload/worldcup2018/players/1076.png', 0, 0, 0, 0, 147, 2, 19, 0, 0, 0),
(141, 7, '丹麦', '奎斯特', '中场', '184cm', '80kg', '1985/2/24', 1, 35, 'http://sports.sohu.com/upload/worldcup2018/players/8521.png', 0, 0, 0, 0, 12, 0, 0, 0, 0, 0),
(142, 19, '丹麦', '舍内', '中场', '178cm', '80kg', '1986/5/27', 1, 220, 'http://sports.sohu.com/upload/worldcup2018/players/10077.png', 0, 0, 3, 1, 116, 1, 0, 0, 0, 0),
(143, 4, '丹麦', '克亚尔', '后卫', '191cm', '84kg', '1989/3/26', 4, 390, 'http://sports.sohu.com/upload/worldcup2018/players/21535.png', 0, 0, 1, 0, 247, 2, 0, 0, 0, 0),
(144, 13, '丹麦', '赞加', '后卫', '191cm', '85kg', '1990/4/23', 2, 219, 'http://sports.sohu.com/upload/worldcup2018/players/26404.png', 1, 0, 1, 1, 114, 1, 0, 0, 2, 0),
(145, 16, '丹麦', '罗斯尔', '守门员', '195cm', '90kg', '1989/2/1', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/37514.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(146, 17, '丹麦', '拉尔森', '后卫', '182cm', '82kg', '1991/2/21', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/44848.png', 0, 0, 2, 1, 102, 1, 0, 0, 0, 0),
(147, 14, '丹麦', '达尔斯高', '后卫', '190cm', '81kg', '1989/7/27', 4, 390, 'http://sports.sohu.com/upload/worldcup2018/players/47855.png', 0, 0, 0, 0, 193, 2, 0, 0, 0, 0),
(148, 9, '丹麦', '约根森', '前锋', '194cm', '86kg', '1991/1/15', 2, 212, 'http://sports.sohu.com/upload/worldcup2018/players/57857.png', 0, 1, 3, 1, 49, 1, 0, 0, 0, 0),
(149, 11, '丹麦', '布莱斯维特', '前锋', '180cm', '73kg', '1991/6/5', 2, 249, 'http://sports.sohu.com/upload/worldcup2018/players/66471.png', 0, 0, 4, 2, 44, 1, 0, 0, 0, 0),
(150, 8, '丹麦', '德莱尼', '中场', '180cm', '78kg', '1991/9/3', 4, 368, 'http://sports.sohu.com/upload/worldcup2018/players/66477.png', 0, 1, 3, 0, 181, 2, 0, 0, 1, 0),
(151, 15, '丹麦', '菲舍尔', '中场', '181cm', '80kg', '1994/6/9', 0, 30, 'http://sports.sohu.com/upload/worldcup2018/players/94287.png', 0, 0, 0, 0, 12, 0, 0, 0, 0, 0),
(152, 10, '丹麦', '埃里克森', '中场', '181cm', '76kg', '1992/2/14', 4, 390, 'http://sports.sohu.com/upload/worldcup2018/players/105734.png', 1, 1, 8, 3, 160, 2, 0, 0, 0, 0),
(153, 5, '丹麦', '克努德森', '后卫', '187cm', '82kg', '1992/9/16', 1, 120, 'http://sports.sohu.com/upload/worldcup2018/players/109053.png', 0, 0, 0, 0, 44, 1, 0, 0, 0, 0),
(154, 20, '丹麦', '波尔森', '前锋', '193cm', '84kg', '1994/6/15', 3, 269, 'http://sports.sohu.com/upload/worldcup2018/players/135264.png', 1, 0, 2, 1, 75, 2, 0, 0, 2, 0),
(155, 22, '丹麦', '弗雷德里克-劳诺', '守门员', '190cm', '85kg', '1992/8/4', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/137692.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(156, 18, '丹麦', '莱拉格', '中场', '186cm', '85kg', '1993/7/12', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/151470.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(157, 21, '丹麦', '科内柳斯', '前锋', '195cm', '91kg', '1993/3/16', 2, 163, 'http://sports.sohu.com/upload/worldcup2018/players/183483.png', 0, 0, 1, 1, 32, 1, 0, 0, 0, 0),
(158, 6, '丹麦', '克里斯滕森', '后卫', '192cm', '85kg', '1996/4/10', 4, 306, 'http://sports.sohu.com/upload/worldcup2018/players/186795.png', 0, 0, 0, 0, 165, 2, 0, 0, 0, 0),
(159, 23, '丹麦', '西斯托', '前锋', '173cm', '69kg', '1995/2/4', 3, 232, 'http://sports.sohu.com/upload/worldcup2018/players/287943.png', 0, 0, 4, 1, 78, 1, 0, 0, 1, 0),
(160, 10, '秘鲁', '法尔范', '前锋', '177cm', '85kg', '1984/10/26', 1, 130, 'http://sports.sohu.com/upload/worldcup2018/players/2511.png', 0, 0, 2, 1, 34, 1, 0, 0, 0, 0),
(161, 2, '秘鲁', '阿尔贝托-罗德里格斯', '后卫', '179cm', '78kg', '1984/3/31', 2, 135, 'http://sports.sohu.com/upload/worldcup2018/players/13527.png', 0, 0, 2, 0, 57, 2, 0, 0, 0, 0),
(162, 21, '秘鲁', '何塞-卡瓦略', '守门员', '182cm', '84kg', '1986/3/1', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/46984.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(163, 19, '秘鲁', '约通', '中场', '172cm', '69kg', '1990/4/7', 3, 180, 'http://sports.sohu.com/upload/worldcup2018/players/46988.png', 0, 0, 3, 1, 104, 2, 0, 0, 1, 0),
(164, 3, '秘鲁', '奥尔多-科尔佐', '后卫', '172cm', '75kg', '1989/5/20', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/47401.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(165, 15, '秘鲁', '克里斯蒂安-拉莫斯', '后卫', '182cm', '72kg', '1988/11/4', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/47439.png', 0, 0, 0, 0, 118, 2, 0, 0, 0, 0),
(166, 10, '秘鲁', '奎瓦', '中场', '169cm', '69kg', '1991/11/23', 3, 262, 'http://sports.sohu.com/upload/worldcup2018/players/47447.png', 0, 0, 2, 0, 133, 2, 0, 0, 0, 0),
(167, 7, '秘鲁', '胡塔尔多', '中场', '174cm', '66kg', '1990/7/27', 0, 27, 'http://sports.sohu.com/upload/worldcup2018/players/107315.png', 0, 0, 0, 0, 19, 0, 0, 0, 1, 0),
(168, 11, '秘鲁', '鲁伊迪亚兹', '前锋', '169cm', '67kg', '1990/7/25', 0, 13, 'http://sports.sohu.com/upload/worldcup2018/players/107625.png', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(169, 18, '秘鲁', '卡里略', '前锋', '182cm', '77kg', '1991/6/14', 3, 259, 'http://sports.sohu.com/upload/worldcup2018/players/115182.png', 1, 0, 3, 2, 97, 2, 0, 0, 0, 0),
(170, 17, '秘鲁', '路易斯-阿德文库拉', '后卫', '178cm', '80kg', '1990/3/2', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/149850.png', 0, 0, 3, 1, 145, 2, 0, 0, 0, 0),
(171, 20, '秘鲁', '艾迪森-弗洛雷斯', '中场', '170cm', '70kg', '1994/5/14', 3, 242, 'http://sports.sohu.com/upload/worldcup2018/players/176139.png', 0, 0, 3, 1, 81, 2, 0, 0, 0, 0),
(172, 14, '秘鲁', '安迪-波洛', '中场', '174cm', '71kg', '1994/9/29', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/176159.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(173, 12, '秘鲁', '卡洛斯-卡塞达', '守门员', '184cm', '78kg', '1991/9/27', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/176225.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(174, 6, '秘鲁', '特劳科', '后卫', '169cm', '74kg', '1992/8/25', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/247665.png', 0, 0, 0, 0, 193, 2, 0, 0, 0, 0),
(175, 4, '秘鲁', '安德森', '后卫', '183cm', '84kg', '1992/1/10', 1, 135, 'http://sports.sohu.com/upload/worldcup2018/players/248437.png', 0, 0, 0, 0, 83, 0, 0, 0, 0, 0),
(176, 23, '秘鲁', '佩德罗-阿基诺', '中场', '174cm', '71kg', '1995/4/13', 1, 138, 'http://sports.sohu.com/upload/worldcup2018/players/312284.png', 0, 0, 1, 0, 99, 1, 0, 0, 1, 0),
(177, 13, '秘鲁', '塔皮亚', '中场', '185cm', '85kg', '1995/7/28', 2, 150, 'http://sports.sohu.com/upload/worldcup2018/players/352376.png', 0, 0, 0, 0, 60, 1, 0, 0, 1, 0),
(178, 5, '秘鲁', '阿劳霍', '后卫', '178cm', '77kg', '1994/10/24', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/370226.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(179, 22, '秘鲁', '洛约拉', '后卫', '179cm', '68kg', '1994/10/26', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/871514.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(180, 12, '澳大利亚', '布拉德-琼斯', '守门员', '193cm', '87kg', '1982/3/19', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/819.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(181, 5, '澳大利亚', '米利甘', '后卫', '178cm', '78kg', '1985/8/4', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/15454.png', 0, 0, 0, 0, 246, 5, 0, 0, 1, 0),
(182, 3, '澳大利亚', '梅雷迪斯', '后卫', '179cm', '71kg', '1988/4/5', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/21397.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(183, 18, '澳大利亚', '武科维奇', '守门员', '187cm', '94kg', '1985/3/27', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/24676.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(184, 15, '澳大利亚', '耶迪纳克', '中场', '188cm', '78kg', '1984/8/3', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/24685.png', 2, 0, 6, 3, 169, 5, 0, 0, 1, 0),
(185, 10, '澳大利亚', '克鲁泽', '前锋', '180cm', '66kg', '1988/10/5', 3, 210, 'http://sports.sohu.com/upload/worldcup2018/players/24743.png', 0, 0, 0, 0, 53, 5, 0, 0, 0, 0),
(186, 13, '澳大利亚', '穆伊', '中场', '173cm', '72kg', '1990/9/15', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/104813.png', 0, 0, 1, 0, 181, 5, 0, 0, 0, 0),
(187, 6, '澳大利亚', '尤尔曼', '后卫', '190cm', '83kg', '1989/12/8', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/122380.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(188, 7, '澳大利亚', '莱基', '前锋', '181cm', '84kg', '1991/2/4', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/122570.png', 0, 0, 7, 2, 79, 5, 0, 0, 1, 0),
(189, 9, '澳大利亚', '尤里奇 ', '前锋', '190cm', '80kg', '1991/7/22', 1, 94, 'http://sports.sohu.com/upload/worldcup2018/players/127712.png', 0, 0, 0, 0, 14, 3, 0, 0, 0, 0),
(190, 1, '澳大利亚', '瑞安', '守门员', '184cm', '82kg', '1992/4/8', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/134029.png', 0, 0, 0, 0, 125, 5, 10, 0, 0, 0),
(191, 16, '澳大利亚', '阿齐兹-贝西奇', '后卫', '170cm', '63kg', '1990/12/16', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/134052.png', 0, 0, 1, 0, 180, 5, 0, 0, 1, 0),
(192, 19, '澳大利亚', '里斯登', '后卫', '169cm', '70kg', '1992/7/27', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/136913.png', 0, 0, 0, 0, 148, 5, 0, 0, 1, 0),
(193, 20, '澳大利亚', '塞恩斯伯里', '后卫', '183cm', '76kg', '1992/1/5', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/137916.png', 0, 0, 1, 0, 192, 5, 0, 0, 0, 0),
(194, 21, '澳大利亚', '佩特拉托斯', '前锋', '176cm', '72kg', '1992/11/10', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/139782.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(195, 2, '澳大利亚', '德格内克', '后卫', '187cm', '85kg', '1994/4/28', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/155961.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(196, 22, '澳大利亚', '杰克逊-欧文', '中场', '180cm', '77kg', '1993/3/7', 0, 44, 'http://sports.sohu.com/upload/worldcup2018/players/181581.png', 0, 0, 0, 0, 12, 1, 0, 0, 0, 0),
(197, 8, '澳大利亚', '卢翁戈', '中场', '176cm', '76kg', '1992/9/25', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/204300.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(198, 23, '澳大利亚', '罗基奇', '中场', '189cm', '88kg', '1992/12/16', 3, 226, 'http://sports.sohu.com/upload/worldcup2018/players/277463.png', 0, 0, 3, 2, 65, 4, 0, 0, 1, 0),
(199, 11, '澳大利亚', '纳鲍特', '前锋', '178cm', '85kg', '1992/12/17', 2, 139, 'http://sports.sohu.com/upload/worldcup2018/players/283069.png', 0, 0, 0, 0, 20, 2, 0, 0, 0, 0),
(200, 14, '法国', '马图伊迪', '中场', '180cm', '74kg', '1987/4/9', 4, 336, 'http://sports.sohu.com/upload/worldcup2018/players/5846.png', 0, 0, 3, 1, 112, 4, 0, 0, 2, 0),
(201, 1, '法国', '洛里', '守门员', '188cm', '82kg', '1986/12/26', 6, 540, 'http://sports.sohu.com/upload/worldcup2018/players/9048.png', 0, 0, 0, 0, 164, 6, 12, 0, 0, 0),
(202, 16, '法国', '曼丹达', '守门员', '187cm', '88kg', '1985/3/28', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/27029.png', 0, 0, 0, 0, 31, 0, 1, 0, 0, 0),
(203, 9, '法国', '吉鲁', '前锋', '193cm', '91kg', '1986/9/30', 6, 546, 'http://sports.sohu.com/upload/worldcup2018/players/39070.png', 0, 1, 10, 1, 131, 5, 0, 0, 1, 0),
(204, 7, '法国', '格列兹曼', '前锋', '174cm', '72kg', '1991/3/21', 7, 571, 'http://sports.sohu.com/upload/worldcup2018/players/85859.png', 4, 2, 18, 12, 218, 5, 0, 0, 0, 0),
(205, 23, '法国', '阿雷奥拉', '守门员', '195cm', '95kg', '1993/2/27', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/96531.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(206, 5, '法国', '乌姆蒂蒂', '后卫', '183cm', '84kg', '1993/11/14', 6, 540, 'http://sports.sohu.com/upload/worldcup2018/players/96547.png', 1, 0, 1, 1, 232, 6, 0, 0, 0, 0),
(207, 6, '法国', '博格巴', '中场', '191cm', '86kg', '1993/3/15', 6, 539, 'http://sports.sohu.com/upload/worldcup2018/players/111802.png', 1, 0, 6, 2, 309, 6, 0, 0, 1, 0),
(208, 19, '法国', '西迪贝', '后卫', '184cm', '81kg', '1992/7/29', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/123388.png', 0, 0, 0, 0, 103, 0, 0, 0, 0, 0),
(209, 4, '法国', '瓦拉内', '后卫', '191cm', '79kg', '1993/4/25', 7, 630, 'http://sports.sohu.com/upload/worldcup2018/players/138310.png', 1, 0, 4, 1, 364, 6, 0, 0, 0, 0),
(210, 20, '法国', '托万', '前锋', '180cm', '76kg', '1993/1/26', 0, 1, 'http://sports.sohu.com/upload/worldcup2018/players/148824.png', 0, 0, 0, 0, 2, 1, 0, 0, 0, 0),
(211, 8, '法国', '勒马尔', '前锋', '172cm', '65kg', '1995/11/12', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/191182.png', 0, 0, 0, 0, 53, 0, 0, 0, 0, 0),
(212, 13, '法国', '坎特', '中场', '168cm', '70kg', '1991/3/29', 7, 595, 'http://sports.sohu.com/upload/worldcup2018/players/234148.png', 0, 0, 0, 0, 336, 5, 0, 0, 2, 0),
(213, 12, '法国', '托利索', '中场', '180cm', '82kg', '1994/8/3', 2, 194, 'http://sports.sohu.com/upload/worldcup2018/players/343067.png', 0, 1, 2, 1, 134, 2, 0, 0, 1, 0),
(214, 21, '法国', '卢卡斯-埃尔南德斯', '后卫', '183cm', '76kg', '1996/2/14', 7, 590, 'http://sports.sohu.com/upload/worldcup2018/players/352370.png', 0, 2, 4, 1, 282, 6, 0, 0, 2, 0),
(215, 3, '法国', '金彭贝', '后卫', '182cm', '78kg', '1995/8/13', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/352916.png', 0, 0, 0, 0, 84, 0, 0, 0, 0, 0),
(216, 11, '法国', '奥斯曼-登贝莱', '前锋', '178cm', '70kg', '1997/5/15', 2, 165, 'http://sports.sohu.com/upload/worldcup2018/players/361350.png', 0, 0, 3, 0, 64, 1, 0, 0, 0, 0),
(217, 2, '法国', '帕瓦尔', '后卫', '186cm', '76kg', '1996/3/28', 6, 540, 'http://sports.sohu.com/upload/worldcup2018/players/792829.png', 1, 0, 4, 2, 318, 6, 0, 0, 1, 0),
(218, 10, '法国', '姆巴佩', '前锋', '178cm', '78kg', '1998/12/20', 6, 534, 'http://sports.sohu.com/upload/worldcup2018/players/796046.png', 4, 0, 8, 7, 155, 5, 0, 0, 2, 0),
(219, 14, '冰岛', '阿纳松', '后卫', '191cm', '82kg', '1982/10/13', 2, 180, 'http://sports.sohu.com/upload/worldcup2018/players/7149.png', 0, 0, 0, 0, 50, 3, 0, 0, 0, 0),
(220, 19, '冰岛', '吉斯拉松', '中场', '184cm', '78kg', '1988/2/25', 1, 117, 'http://sports.sohu.com/upload/worldcup2018/players/13059.png', 0, 0, 1, 0, 31, 2, 0, 0, 0, 0),
(221, 8, '冰岛', '比亚尔纳松', '中场', '183cm', '77kg', '1988/5/27', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/13270.png', 0, 0, 4, 1, 64, 4, 0, 0, 0, 0),
(222, 20, '冰岛', '哈尔弗雷德松', '中场', '186cm', '86kg', '1984/6/29', 2, 180, 'http://sports.sohu.com/upload/worldcup2018/players/15046.png', 0, 0, 1, 0, 70, 3, 0, 0, 1, 0),
(223, 23, '冰岛', '斯库拉松', '后卫', '170cm', '63kg', '1987/5/14', 0, 17, 'http://sports.sohu.com/upload/worldcup2018/players/17083.png', 0, 0, 0, 0, 9, 0, 0, 0, 0, 0),
(224, 16, '冰岛', '奥拉维尔-斯库拉松', '中场', '184cm', '79kg', '1983/4/1', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/19739.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(225, 6, '冰岛', '拉格纳-西于尔兹松', '后卫', '187cm', '86kg', '1986/6/19', 3, 225, 'http://sports.sohu.com/upload/worldcup2018/players/22071.png', 0, 0, 0, 0, 48, 3, 0, 0, 0, 0),
(226, 2, '冰岛', '塞瓦尔松', '后卫', '186cm', '75kg', '1984/11/11', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/25685.png', 0, 0, 0, 0, 77, 5, 0, 0, 1, 0),
(227, 17, '冰岛', '贡纳尔松', '中场', '181cm', '86kg', '1989/4/22', 3, 253, 'http://sports.sohu.com/upload/worldcup2018/players/30441.png', 0, 0, 2, 2, 83, 5, 0, 0, 0, 0),
(228, 7, '冰岛', '阿隆-古德蒙德松', '中场', '179cm', '77kg', '1990/10/27', 2, 153, 'http://sports.sohu.com/upload/worldcup2018/players/49805.png', 0, 0, 0, 0, 36, 3, 0, 0, 0, 0),
(229, 1, '冰岛', '哈尔多松', '守门员', '193cm', '88kg', '1984/4/27', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/64478.png', 0, 0, 0, 0, 89, 5, 9, 0, 0, 0),
(230, 22, '冰岛', '博德瓦尔松', '前锋', '189cm', '89kg', '1992/5/25', 1, 71, 'http://sports.sohu.com/upload/worldcup2018/players/66721.png', 0, 0, 1, 0, 15, 1, 0, 0, 0, 0),
(231, 15, '冰岛', '埃约尔夫松', '后卫', '188cm', '81kg', '1990/8/6', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/87501.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(232, 18, '冰岛', '马格努松', '后卫', '191cm', '85kg', '1993/2/11', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/94770.png', 0, 0, 1, 0, 93, 5, 0, 0, 0, 0),
(233, 21, '冰岛', '特劳斯塔松', '中场', '183cm', '73kg', '1993/4/30', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/94796.png', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0),
(234, 5, '冰岛', '因加松', '后卫', '188cm', '80kg', '1993/8/5', 1, 115, 'http://sports.sohu.com/upload/worldcup2018/players/120970.png', 0, 0, 3, 1, 45, 3, 0, 0, 0, 0),
(235, 13, '冰岛', '鲁纳尔松', '守门员', '186cm', '76kg', '1995/2/18', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/187023.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(236, 4, '冰岛', '阿尔伯特-古德蒙德松', '中场', '177cm', '80kg', '1997/6/15', 0, 5, 'http://sports.sohu.com/upload/worldcup2018/players/236298.png', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0),
(237, 12, '冰岛', '施拉姆', '守门员', '198cm', '92kg', '1995/1/19', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/286931.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(238, 3, '冰岛', '弗里奥荣松', '中场', '186cm', '76kg', '1996/2/22', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/358204.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(239, 10, '阿根廷', '梅西', '前锋', '170cm', '72kg', '1987/6/24', 4, 360, 'http://sports.sohu.com/upload/worldcup2018/players/12994.png', 1, 2, 10, 5, 190, 9, 0, 0, 1, 0),
(240, 19, '阿根廷', '阿圭罗', '前锋', '172cm', '74kg', '1988/6/2', 2, 178, 'http://sports.sohu.com/upload/worldcup2018/players/17094.png', 2, 0, 3, 3, 61, 3, 0, 0, 0, 0),
(241, 5, '阿根廷', '比格利亚', '中场', '175cm', '73kg', '1986/1/30', 1, 54, 'http://sports.sohu.com/upload/worldcup2018/players/17799.png', 0, 0, 2, 0, 54, 1, 0, 0, 0, 0),
(242, 9, '阿根廷', '伊瓜因', '前锋', '184cm', '75kg', '1987/12/10', 1, 132, 'http://sports.sohu.com/upload/worldcup2018/players/19438.png', 0, 0, 3, 2, 41, 3, 0, 0, 0, 0),
(243, 6, '阿根廷', '法齐奥', '后卫', '199cm', '85kg', '1987/3/17', 0, 45, 'http://sports.sohu.com/upload/worldcup2018/players/27569.png', 0, 0, 0, 0, 27, 3, 0, 0, 0, 0),
(244, 11, '阿根廷', '迪马利亚', '中场', '178cm', '75kg', '1988/2/14', 3, 237, 'http://sports.sohu.com/upload/worldcup2018/players/30027.png', 1, 0, 2, 1, 68, 6, 0, 0, 0, 0),
(245, 7, '阿根廷', '巴内加', '中场', '175cm', '73kg', '1988/6/29', 2, 216, 'http://sports.sohu.com/upload/worldcup2018/players/31981.png', 0, 2, 1, 1, 204, 5, 0, 0, 2, 0),
(246, 16, '阿根廷', '罗霍', '后卫', '189cm', '82kg', '1990/3/20', 3, 225, 'http://sports.sohu.com/upload/worldcup2018/players/46998.png', 1, 1, 1, 1, 178, 3, 0, 0, 1, 0),
(247, 18, '阿根廷', '萨尔维奥', '中场', '172cm', '69kg', '1990/7/13', 2, 146, 'http://sports.sohu.com/upload/worldcup2018/players/47334.png', 0, 0, 0, 0, 95, 2, 0, 0, 0, 0),
(248, 23, '阿根廷', '卡巴列罗', '守门员', '186cm', '80kg', '1981/9/28', 2, 180, 'http://sports.sohu.com/upload/worldcup2018/players/52741.png', 0, 0, 0, 0, 59, 4, 3, 0, 0, 0),
(249, 17, '阿根廷', '奥塔门迪', '后卫', '181cm', '81kg', '1988/2/12', 4, 360, 'http://sports.sohu.com/upload/worldcup2018/players/74915.png', 0, 0, 5, 1, 296, 9, 0, 0, 2, 0),
(250, 2, '阿根廷', '梅尔卡多', '后卫', '181cm', '81kg', '1987/3/18', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/128376.png', 1, 1, 1, 1, 169, 8, 0, 0, 1, 0),
(251, 3, '阿根廷', '塔利亚菲克', '后卫', '169cm', '65kg', '1992/8/31', 4, 350, 'http://sports.sohu.com/upload/worldcup2018/players/158243.png', 0, 0, 2, 0, 215, 9, 0, 0, 1, 0),
(252, 13, '阿根廷', '梅萨', '中场', '180cm', '76kg', '1992/12/15', 2, 207, 'http://sports.sohu.com/upload/worldcup2018/players/340897.png', 0, 0, 1, 1, 95, 4, 0, 0, 0, 0),
(253, 22, '阿根廷', '帕文', '中场', '169cm', '65kg', '1996/1/21', 1, 153, 'http://sports.sohu.com/upload/worldcup2018/players/358956.png', 0, 0, 2, 2, 47, 6, 0, 0, 0, 0),
(254, 8, '阿根廷', '阿库尼亚', '后卫', '172cm', '77kg', '1991/10/28', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/578560.png', 0, 0, 0, 0, 40, 3, 0, 0, 1, 0),
(255, 20, '阿根廷', '洛塞尔索', '中场', '177cm', '75kg', '1996/4/9', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/858082.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(256, 7, '克罗地亚', '拉基蒂奇', '中场', '184cm', '78kg', '1988/3/10', 6, 638, 'http://sports.sohu.com/upload/worldcup2018/players/7635.png', 1, 0, 14, 4, 407, 8, 0, 0, 1, 0),
(257, 10, '克罗地亚', '莫德里奇', '中场', '172cm', '66kg', '1985/9/9', 7, 694, 'http://sports.sohu.com/upload/worldcup2018/players/15466.png', 2, 1, 9, 4, 480, 8, 0, 0, 0, 0),
(258, 5, '克罗地亚', '乔尔卢卡', '后卫', '192cm', '84kg', '1986/2/5', 1, 118, 'http://sports.sohu.com/upload/worldcup2018/players/18488.png', 0, 0, 0, 0, 65, 2, 0, 0, 1, 0),
(259, 17, '克罗地亚', '曼朱基奇', '前锋', '190cm', '85kg', '1986/5/21', 6, 609, 'http://sports.sohu.com/upload/worldcup2018/players/18886.png', 3, 1, 10, 5, 161, 8, 0, 0, 2, 0),
(260, 3, '克罗地亚', '斯特里尼奇', '后卫', '186cm', '78kg', '1987/7/17', 6, 511, 'http://sports.sohu.com/upload/worldcup2018/players/38153.png', 0, 0, 0, 0, 288, 7, 0, 0, 1, 0),
(261, 4, '克罗地亚', '佩里西奇', '前锋', '186cm', '81kg', '1989/2/2', 7, 632, 'http://sports.sohu.com/upload/worldcup2018/players/38710.png', 3, 1, 16, 4, 170, 8, 0, 0, 0, 0),
(262, 19, '克罗地亚', '巴德利', '中场', '186cm', '76kg', '1989/2/25', 1, 103, 'http://sports.sohu.com/upload/worldcup2018/players/39482.png', 1, 1, 1, 1, 62, 1, 0, 0, 0, 0),
(263, 23, '克罗地亚', '苏巴西奇', '守门员', '191cm', '84kg', '1984/10/27', 6, 630, 'http://sports.sohu.com/upload/worldcup2018/players/41614.png', 0, 0, 0, 0, 209, 8, 14, 0, 0, 0),
(264, 21, '克罗地亚', '维达', '后卫', '184cm', '76kg', '1989/4/29', 6, 630, 'http://sports.sohu.com/upload/worldcup2018/players/51225.png', 1, 1, 3, 1, 347, 8, 0, 0, 1, 0),
(265, 12, '克罗地亚', 'L-卡利尼奇', '守门员', '201cm', '96kg', '1990/4/3', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/65221.png', 0, 0, 0, 0, 26, 1, 5, 0, 0, 0),
(266, 9, '克罗地亚', '克拉马里奇', '前锋', '177cm', '73kg', '1991/6/19', 3, 332, 'http://sports.sohu.com/upload/worldcup2018/players/67647.png', 1, 0, 8, 2, 119, 2, 0, 0, 0, 0),
(267, 22, '克罗地亚', '皮瓦里奇', '后卫', '176cm', '69kg', '1989/1/30', 1, 200, 'http://sports.sohu.com/upload/worldcup2018/players/70623.png', 0, 0, 1, 0, 157, 2, 0, 0, 1, 0),
(268, 2, '克罗地亚', '弗尔萨利科', '后卫', '181cm', '76kg', '1992/1/10', 6, 607, 'http://sports.sohu.com/upload/worldcup2018/players/70630.png', 0, 1, 4, 0, 355, 7, 0, 0, 2, 0),
(269, 11, '克罗地亚', '布罗佐维奇', '中场', '181cm', '68kg', '1992/11/16', 4, 458, 'http://sports.sohu.com/upload/worldcup2018/players/108800.png', 0, 1, 3, 1, 363, 7, 0, 0, 1, 0),
(270, 8, '克罗地亚', '科瓦契奇', '中场', '178cm', '78kg', '1994/5/6', 1, 183, 'http://sports.sohu.com/upload/worldcup2018/players/136710.png', 0, 1, 1, 1, 123, 2, 0, 0, 0, 0),
(271, 18, '克罗地亚', '雷比奇', '前锋', '185cm', '78kg', '1993/9/21', 6, 547, 'http://sports.sohu.com/upload/worldcup2018/players/152769.png', 1, 0, 9, 6, 111, 8, 0, 0, 2, 0),
(272, 1, '克罗地亚', '利瓦科维奇', '守门员', '188cm', '82kg', '1995/1/9', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/190419.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(273, 13, '克罗地亚', '耶德瓦伊', '后卫', '184cm', '81kg', '1995/11/28', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/190421.png', 0, 0, 0, 0, 48, 1, 0, 0, 1, 0),
(274, 20, '克罗地亚', '皮亚察', '前锋', '186cm', '83kg', '1995/5/6', 1, 83, 'http://sports.sohu.com/upload/worldcup2018/players/190435.png', 0, 0, 0, 0, 36, 0, 0, 0, 1, 0),
(275, 14, '克罗地亚', '布拉达利奇', '中场', '186cm', '78kg', '1992/1/11', 0, 25, 'http://sports.sohu.com/upload/worldcup2018/players/257153.png', 0, 0, 0, 0, 7, 1, 0, 0, 0, 0),
(276, 10, '尼日利亚', '米克尔', '中场', '188cm', '82kg', '1987/4/22', 3, 268, 'http://sports.sohu.com/upload/worldcup2018/players/7311.png', 0, 0, 1, 0, 140, 4, 0, 0, 1, 0),
(277, 9, '尼日利亚', '伊哈洛', '前锋', '188cm', '83kg', '1989/6/16', 1, 122, 'http://sports.sohu.com/upload/worldcup2018/players/29774.png', 0, 0, 3, 2, 19, 3, 0, 0, 0, 0),
(278, 11, '尼日利亚', '摩西', '前锋', '177cm', '75kg', '1990/12/12', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/31585.png', 1, 1, 5, 1, 107, 4, 0, 0, 0, 0),
(279, 3, '尼日利亚', '埃切吉莱', '后卫', '185cm', '82kg', '1988/1/20', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/31959.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(280, 6, '尼日利亚', '巴洛贡', '后卫', '190cm', '89kg', '1988/6/28', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/37234.png', 0, 0, 3, 2, 127, 4, 0, 0, 1, 0),
(281, 1, '尼日利亚', '埃曾瓦', '守门员', '181cm', '80kg', '1988/10/16', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/38490.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(282, 19, '尼日利亚', '奥古', '中场', '191cm', '90kg', '1988/4/20', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/49055.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(283, 15, '尼日利亚', '奥比', '中场', '177cm', '77kg', '1991/5/22', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/79403.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(284, 7, '尼日利亚', '穆萨', '前锋', '173cm', '65kg', '1992/10/14', 2, 208, 'http://sports.sohu.com/upload/worldcup2018/players/139502.png', 2, 0, 4, 2, 60, 3, 0, 0, 0, 0),
(285, 2, '尼日利亚', '伊多武', '后卫', '179cm', '75kg', '1992/5/18', 3, 225, 'http://sports.sohu.com/upload/worldcup2018/players/149063.png', 0, 0, 0, 0, 82, 4, 0, 0, 1, 0),
(286, 17, '尼日利亚', '奥纳奇', '中场', '172cm', '74kg', '1992/12/25', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/150200.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(287, 22, '尼日利亚', '奥梅罗', '后卫', '185cm', '82kg', '1993/10/17', 2, 180, 'http://sports.sohu.com/upload/worldcup2018/players/158293.png', 0, 1, 0, 0, 77, 2, 0, 0, 0, 0),
(288, 12, '尼日利亚', '谢胡', '后卫', '182cm', '75kg', '1993/3/12', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/330033.png', 0, 0, 0, 0, 38, 2, 0, 0, 0, 0),
(289, 5, '尼日利亚', '埃孔', '后卫', '191cm', '85kg', '1993/9/1', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/338991.png', 0, 0, 1, 0, 112, 4, 0, 0, 1, 0),
(290, 18, '尼日利亚', '伊沃比', '前锋', '185cm', '86kg', '1996/5/3', 1, 62, 'http://sports.sohu.com/upload/worldcup2018/players/352770.png', 0, 0, 0, 0, 21, 1, 0, 0, 0, 0),
(291, 14, '尼日利亚', '伊希纳乔', '前锋', '183cm', '80kg', '1996/10/3', 2, 148, 'http://sports.sohu.com/upload/worldcup2018/players/359642.png', 0, 0, 2, 0, 40, 1, 0, 0, 0, 0),
(292, 23, '尼日利亚', '乌佐霍', '守门员', '196cm', '91kg', '1998/10/28', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/359670.png', 0, 0, 0, 0, 71, 4, 6, 0, 0, 0),
(293, 16, '尼日利亚', '阿克佩伊', '守门员', '187cm', '94kg', '1986/3/8', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/373968.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(294, 21, '尼日利亚', '埃博希', '后卫', '187cm', '74kg', '1995/12/16', 0, 45, 'http://sports.sohu.com/upload/worldcup2018/players/580512.png', 0, 0, 0, 0, 26, 0, 0, 0, 0, 0),
(295, 4, '尼日利亚', '恩迪迪', '中场', '184cm', '73kg', '1996/12/16', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/795266.png', 0, 0, 2, 1, 146, 4, 0, 0, 0, 0),
(296, 20, '尼日利亚', '阿瓦泽姆', '后卫', '192cm', '76kg', '1997/1/1', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/804030.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(297, 8, '尼日利亚', '埃特博', '中场', '174cm', '74kg', '1995/11/9', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/986295.png', 0, 0, 4, 1, 150, 4, 0, 0, 0, 0),
(298, 20, '瑞士', '朱鲁', '后卫', '192cm', '90kg', '1987/1/18', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/536.png', 0, 0, 0, 0, 69, 1, 0, 0, 0, 0),
(299, 15, '瑞士', '哲马伊利', '中场', '180cm', '77kg', '1986/4/12', 4, 326, 'http://sports.sohu.com/upload/worldcup2018/players/4370.png', 1, 0, 7, 3, 97, 5, 0, 0, 0, 0),
(300, 2, '瑞士', '利希施泰纳', '后卫', '181cm', '77kg', '1984/1/16', 3, 267, 'http://sports.sohu.com/upload/worldcup2018/players/4392.png', 0, 0, 0, 0, 146, 4, 0, 0, 2, 0),
(301, 11, '瑞士', '贝赫拉米', '中场', '184cm', '78kg', '1985/4/19', 4, 311, 'http://sports.sohu.com/upload/worldcup2018/players/11654.png', 0, 0, 0, 0, 236, 4, 0, 0, 2, 0),
(302, 16, '瑞士', '热尔松-费尔南德斯', '中场', '180cm', '72kg', '1986/9/2', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/15857.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(303, 1, '瑞士', '佐默', '守门员', '183cm', '81kg', '1988/12/17', 4, 360, 'http://sports.sohu.com/upload/worldcup2018/players/16206.png', 0, 0, 0, 0, 152, 5, 11, 0, 0, 0),
(304, 6, '瑞士', '米夏埃尔-朗', '后卫', '185cm', '78kg', '1991/2/8', 1, 102, 'http://sports.sohu.com/upload/worldcup2018/players/26315.png', 0, 0, 0, 0, 60, 2, 0, 1, 0, 0),
(305, 21, '瑞士', '比尔基', '守门员', '188cm', '83kg', '1990/11/14', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/37378.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `player` (`ID`, `haoma`, `country`, `name`, `postion`, `height`, `weight`, `birthdate`, `attended`, `totaltime`, `image`, `jinqiu`, `zhugong`, `shemen`, `shezheng`, `chuanqiu`, `shiqiu`, `pujiu`, `hongpai`, `huangpai`, `click`) VALUES
(306, 14, '瑞士', '祖贝尔', '中场', '182cm', '79kg', '1991/8/17', 3, 253, 'http://sports.sohu.com/upload/worldcup2018/players/37752.png', 1, 0, 3, 2, 80, 3, 0, 0, 0, 0),
(307, 18, '瑞士', '马里奥-加夫拉诺维奇', '前锋', '175cm', '75kg', '1989/11/24', 1, 114, 'http://sports.sohu.com/upload/worldcup2018/players/49351.png', 0, 1, 2, 1, 16, 1, 0, 0, 0, 0),
(308, 9, '瑞士', '塞费罗维奇', '前锋', '185cm', '88kg', '1992/2/22', 2, 142, 'http://sports.sohu.com/upload/worldcup2018/players/50899.png', 0, 0, 1, 1, 16, 2, 0, 0, 0, 0),
(309, 13, '瑞士', '里卡多-罗德里格斯', '后卫', '180cm', '79kg', '1992/8/25', 4, 360, 'http://sports.sohu.com/upload/worldcup2018/players/67769.png', 0, 0, 4, 2, 174, 5, 0, 0, 0, 0),
(310, 22, '瑞士', '法比安-舍尔', '后卫', '186cm', '83kg', '1991/12/20', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/101882.png', 0, 0, 1, 0, 215, 4, 0, 0, 2, 0),
(311, 3, '瑞士', '穆邦杰', '后卫', '180cm', '76kg', '1990/6/21', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/106869.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(312, 19, '瑞士', '约西普-德尔米奇', '前锋', '184cm', '78kg', '1992/8/8', 1, 111, 'http://sports.sohu.com/upload/worldcup2018/players/107025.png', 1, 0, 2, 1, 20, 2, 0, 0, 0, 0),
(313, 8, '瑞士', '弗罗伊勒', '中场', '181cm', '75kg', '1992/4/15', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/115516.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(314, 10, '瑞士', '扎卡', '中场', '183cm', '82kg', '1992/9/27', 4, 360, 'http://sports.sohu.com/upload/worldcup2018/players/117777.png', 1, 0, 3, 1, 337, 5, 0, 0, 1, 0),
(315, 4, '瑞士', '埃尔韦迪', '后卫', '187cm', '77kg', '1996/9/30', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/282229.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(316, 7, '瑞士', '恩博洛', '前锋', '184cm', '86kg', '1997/2/14', 1, 134, 'http://sports.sohu.com/upload/worldcup2018/players/352296.png', 0, 1, 3, 2, 33, 2, 0, 0, 0, 0),
(317, 5, '瑞士', '阿坎吉', '后卫', '186cm', '85kg', '1995/7/19', 4, 360, 'http://sports.sohu.com/upload/worldcup2018/players/383560.png', 0, 0, 0, 0, 316, 5, 0, 0, 0, 0),
(318, 1, '塞尔维亚', '弗拉基米尔-斯托伊科维奇', '守门员', '195cm', '92kg', '1983/7/28', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/13691.png', 0, 0, 0, 0, 82, 4, 11, 0, 0, 0),
(319, 3, '塞尔维亚', '杜什科-托希奇', '后卫', '185cm', '79kg', '1985/1/19', 2, 180, 'http://sports.sohu.com/upload/worldcup2018/players/14557.png', 0, 0, 0, 0, 92, 2, 0, 0, 0, 0),
(320, 6, '塞尔维亚', '伊万诺维奇', '后卫', '185cm', '89kg', '1984/2/22', 2, 180, 'http://sports.sohu.com/upload/worldcup2018/players/25233.png', 0, 0, 0, 0, 101, 2, 0, 0, 1, 0),
(321, 2, '塞尔维亚', '鲁卡维纳', '后卫', '177cm', '71kg', '1984/1/26', 1, 97, 'http://sports.sohu.com/upload/worldcup2018/players/25621.png', 0, 0, 0, 0, 43, 2, 0, 0, 0, 0),
(322, 11, '塞尔维亚', '科拉罗夫', '后卫', '187cm', '83kg', '1985/11/10', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/26097.png', 1, 0, 2, 1, 127, 4, 0, 0, 0, 0),
(323, 8, '塞尔维亚', '亚历山大-普里约维奇', '前锋', '191cm', '88kg', '1990/4/21', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/36497.png', 0, 0, 0, 0, 2, 0, 0, 0, 1, 0),
(324, 10, '塞尔维亚', '塔迪奇', '中场', '181cm', '76kg', '1988/11/20', 3, 263, 'http://sports.sohu.com/upload/worldcup2018/players/38560.png', 0, 1, 3, 1, 72, 4, 0, 0, 0, 0),
(325, 22, '塞尔维亚', '利亚伊奇', '中场', '182cm', '74kg', '1991/9/29', 2, 171, 'http://sports.sohu.com/upload/worldcup2018/players/39587.png', 0, 0, 0, 0, 68, 3, 0, 0, 1, 0),
(326, 21, '塞尔维亚', '内马尼亚-马蒂奇', '中场', '194cm', '86kg', '1988/8/1', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/44241.png', 0, 0, 2, 0, 147, 4, 0, 0, 2, 0),
(327, 4, '塞尔维亚', '米利沃耶维奇', '中场', '186cm', '80kg', '1991/4/7', 2, 171, 'http://sports.sohu.com/upload/worldcup2018/players/50294.png', 0, 0, 0, 0, 79, 1, 0, 0, 1, 0),
(328, 23, '塞尔维亚', '马尔科-德米特罗维奇', '守门员', '194cm', '90kg', '1992/1/24', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/94527.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(329, 17, '塞尔维亚', '科斯蒂奇', '中场', '184cm', '82kg', '1992/11/1', 2, 166, 'http://sports.sohu.com/upload/worldcup2018/players/126588.png', 0, 0, 1, 0, 40, 3, 0, 0, 0, 0),
(330, 12, '塞尔维亚', '普雷德拉-拉伊科维奇', '守门员', '191cm', '85kg', '1995/10/31', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/188107.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(331, 7, '塞尔维亚', '安德里亚-日夫科维奇', '中场', '169cm', '68kg', '1996/7/11', 0, 15, 'http://sports.sohu.com/upload/worldcup2018/players/188133.png', 0, 0, 1, 0, 8, 0, 0, 0, 0, 0),
(332, 9, '塞尔维亚', '米特罗维奇', '前锋', '189cm', '82kg', '1994/9/16', 3, 269, 'http://sports.sohu.com/upload/worldcup2018/players/192144.png', 1, 0, 11, 5, 51, 4, 0, 0, 2, 0),
(333, 13, '塞尔维亚', '韦利科维奇', '后卫', '188cm', '77kg', '1995/9/26', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/227224.png', 0, 0, 0, 0, 45, 2, 0, 0, 0, 0),
(334, 18, '塞尔维亚', '拉顿季奇', '中场', '185cm', '76kg', '1996/2/15', 0, 17, 'http://sports.sohu.com/upload/worldcup2018/players/280817.png', 0, 0, 0, 0, 6, 1, 0, 0, 0, 0),
(335, 16, '塞尔维亚', '马尔科-格鲁伊奇', '中场', '190cm', '82kg', '1996/4/13', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/280835.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(336, 20, '塞尔维亚', '米林科维奇-萨维奇', '中场', '192cm', '76kg', '1995/2/27', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/331447.png', 0, 0, 4, 0, 104, 4, 0, 0, 1, 0),
(337, 3, '巴西', '米兰达', '后卫', '186cm', '78kg', '1984/9/7', 5, 450, 'http://sports.sohu.com/upload/worldcup2018/players/13017.png', 0, 0, 1, 0, 275, 3, 0, 0, 0, 0),
(338, 4, '巴西', '杰罗梅尔', '后卫', '190cm', '84kg', '1985/9/21', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/13338.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(339, 17, '巴西', '费尔南迪尼奥', '中场', '179cm', '67kg', '1985/5/4', 1, 154, 'http://sports.sohu.com/upload/worldcup2018/players/13630.png', 0, 0, 1, 0, 112, 2, 0, 0, 1, 0),
(340, 12, '巴西', '马塞洛', '后卫', '174cm', '80kg', '1988/5/12', 4, 280, 'http://sports.sohu.com/upload/worldcup2018/players/17787.png', 0, 0, 4, 2, 272, 3, 0, 0, 0, 0),
(341, 22, '巴西', '法格纳', '后卫', '168cm', '67kg', '1989/6/11', 4, 360, 'http://sports.sohu.com/upload/worldcup2018/players/25554.png', 0, 0, 0, 0, 229, 2, 0, 0, 1, 0),
(342, 6, '巴西', '费利佩-路易斯', '后卫', '182cm', '73kg', '1985/8/9', 1, 170, 'http://sports.sohu.com/upload/worldcup2018/players/26029.png', 0, 0, 1, 1, 132, 0, 0, 0, 1, 0),
(343, 19, '巴西', '威廉', '中场', '175cm', '77kg', '1988/8/9', 5, 360, 'http://sports.sohu.com/upload/worldcup2018/players/31417.png', 0, 1, 4, 2, 170, 3, 0, 0, 0, 0),
(344, 2, '巴西', '蒂亚戈-席尔瓦', '后卫', '183cm', '79kg', '1984/9/22', 5, 450, 'http://sports.sohu.com/upload/worldcup2018/players/33541.png', 1, 0, 4, 1, 301, 3, 0, 0, 0, 0),
(345, 8, '巴西', '奥古斯托', '中场', '186cm', '86kg', '1988/2/8', 0, 50, 'http://sports.sohu.com/upload/worldcup2018/players/34152.png', 1, 0, 2, 1, 46, 0, 0, 0, 0, 0),
(346, 21, '巴西', '泰森', '前锋', '172cm', '64kg', '1988/1/13', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/39661.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(347, 7, '巴西', '道格拉斯-科斯塔', '前锋', '182cm', '70kg', '1990/9/14', 0, 77, 'http://sports.sohu.com/upload/worldcup2018/players/47908.png', 0, 1, 3, 3, 44, 0, 0, 0, 0, 0),
(348, 15, '巴西', '保利尼奥', '中场', '181cm', '81kg', '1988/7/25', 5, 354, 'http://sports.sohu.com/upload/worldcup2018/players/115183.png', 1, 0, 4, 3, 153, 3, 0, 0, 0, 0),
(349, 11, '巴西', '库蒂尼奥', '中场', '172cm', '68kg', '1992/6/12', 5, 436, 'http://sports.sohu.com/upload/worldcup2018/players/119159.png', 2, 2, 12, 7, 316, 3, 0, 0, 1, 0),
(350, 5, '巴西', '卡塞米罗', '中场', '185cm', '84kg', '1992/2/23', 4, 330, 'http://sports.sohu.com/upload/worldcup2018/players/122951.png', 0, 0, 4, 2, 265, 1, 0, 0, 2, 0),
(351, 20, '巴西', '菲尔米诺', '前锋', '181cm', '76kg', '1991/10/2', 0, 82, 'http://sports.sohu.com/upload/worldcup2018/players/143697.png', 1, 0, 7, 2, 34, 0, 0, 0, 0, 0),
(352, 13, '巴西', '马基尼奥斯', '后卫', '183cm', '75kg', '1994/5/14', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/155995.png', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(353, 1, '巴西', '阿利森', '守门员', '193cm', '91kg', '1992/10/2', 5, 450, 'http://sports.sohu.com/upload/worldcup2018/players/243609.png', 0, 0, 0, 0, 93, 3, 6, 0, 0, 0),
(354, 18, '巴西', '弗雷德', '中场', '169cm', '64kg', '1993/3/5', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/243623.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(355, 23, '巴西', '埃德森', '守门员', '188cm', '86kg', '1993/8/17', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/254491.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(356, 9, '巴西', '热苏斯', '前锋', '175cm', '73kg', '1997/4/3', 5, 407, 'http://sports.sohu.com/upload/worldcup2018/players/835751.png', 0, 1, 4, 1, 106, 3, 0, 0, 0, 0),
(357, 10, '哥斯达黎加', '鲁伊斯', '中场', '187cm', '73kg', '1985/8/18', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/21768.png', 0, 0, 1, 0, 121, 5, 0, 0, 0, 0),
(358, 13, '哥斯达黎加', '华莱士', '中场', '180cm', '70kg', '1988/6/17', 0, 9, 'http://sports.sohu.com/upload/worldcup2018/players/48111.png', 0, 0, 0, 0, 7, 1, 0, 0, 0, 0),
(359, 5, '哥斯达黎加', '博尔赫斯', '中场', '187cm', '79kg', '1988/5/27', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/50605.png', 0, 0, 4, 1, 119, 5, 0, 0, 0, 0),
(360, 1, '哥斯达黎加', '纳瓦斯', '守门员', '185cm', '80kg', '1986/12/15', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/56113.png', 0, 0, 0, 0, 106, 5, 10, 0, 0, 0),
(361, 8, '哥斯达黎加', '奥维多', '后卫', '172cm', '70kg', '1990/2/18', 2, 180, 'http://sports.sohu.com/upload/worldcup2018/players/109064.png', 0, 0, 2, 1, 57, 4, 0, 0, 0, 0),
(362, 3, '哥斯达黎加', '杰安卡洛-冈萨雷斯', '后卫', '186cm', '78kg', '1988/2/8', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/117793.png', 0, 0, 2, 1, 84, 5, 0, 0, 0, 0),
(363, 16, '哥斯达黎加', '甘博亚', '后卫', '175cm', '67kg', '1989/10/24', 3, 255, 'http://sports.sohu.com/upload/worldcup2018/players/117794.png', 0, 0, 3, 2, 92, 3, 0, 0, 1, 0),
(364, 21, '哥斯达黎加', '乌雷尼亚', '前锋', '181cm', '70kg', '1990/3/5', 2, 120, 'http://sports.sohu.com/upload/worldcup2018/players/117798.png', 0, 0, 2, 1, 24, 1, 0, 0, 0, 0),
(365, 20, '哥斯达黎加', '古兹曼', '中场', '176cm', '78kg', '1990/2/18', 3, 246, 'http://sports.sohu.com/upload/worldcup2018/players/117855.png', 0, 0, 0, 0, 108, 3, 0, 0, 1, 0),
(366, 2, '哥斯达黎加', '阿科斯塔', '后卫', '176cm', '75kg', '1983/7/21', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/154513.png', 0, 0, 0, 0, 91, 5, 0, 0, 1, 0),
(367, 23, '哥斯达黎加', '莫雷拉', '守门员', '179cm', '70kg', '1990/4/2', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/156399.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(368, 15, '哥斯达黎加', '卡尔沃', '后卫', '180cm', '78kg', '1992/7/8', 1, 105, 'http://sports.sohu.com/upload/worldcup2018/players/156400.png', 0, 0, 1, 0, 49, 3, 0, 0, 1, 0),
(369, 6, '哥斯达黎加', '杜阿尔特', '后卫', '186cm', '81kg', '1989/6/3', 2, 180, 'http://sports.sohu.com/upload/worldcup2018/players/156401.png', 0, 0, 0, 0, 73, 3, 0, 0, 0, 0),
(370, 9, '哥斯达黎加', '科林德雷斯', '中场', '180cm', '75kg', '1985/1/10', 1, 98, 'http://sports.sohu.com/upload/worldcup2018/players/284249.png', 0, 0, 2, 0, 21, 1, 0, 0, 0, 0),
(371, 19, '哥斯达黎加', '沃森', '后卫', '196cm', '87kg', '1988/1/1', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/320209.png', 1, 0, 1, 1, 50, 2, 0, 0, 1, 0),
(372, 4, '哥斯达黎加', '伊恩-史密斯', '后卫', '177cm', '68kg', '1998/3/6', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/810328.png', 0, 0, 0, 0, 3, 0, 0, 0, 0, 0),
(373, 6, '德国', '赫迪拉', '中场', '189cm', '81kg', '1987/4/4', 2, 118, 'http://sports.sohu.com/upload/worldcup2018/players/4726.png', 0, 0, 1, 1, 98, 1, 0, 0, 0, 0),
(374, 23, '德国', '戈麦斯', '前锋', '189cm', '88kg', '1985/7/10', 0, 88, 'http://sports.sohu.com/upload/worldcup2018/players/4732.png', 0, 0, 4, 3, 8, 2, 0, 0, 0, 0),
(375, 10, '德国', '厄齐尔', '中场', '180cm', '70kg', '1988/10/15', 2, 180, 'http://sports.sohu.com/upload/worldcup2018/players/16176.png', 0, 0, 0, 0, 159, 3, 0, 0, 0, 0),
(376, 5, '德国', '胡梅尔斯', '后卫', '192cm', '90kg', '1988/12/16', 2, 180, 'http://sports.sohu.com/upload/worldcup2018/players/16632.png', 0, 0, 5, 2, 126, 3, 0, 0, 1, 0),
(377, 17, '德国', '博阿滕', '后卫', '192cm', '90kg', '1988/9/3', 2, 172, 'http://sports.sohu.com/upload/worldcup2018/players/19382.png', 0, 0, 2, 1, 189, 2, 0, 0, 1, 0),
(378, 8, '德国', '克罗斯', '中场', '182cm', '78kg', '1990/1/4', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/26502.png', 1, 0, 10, 5, 301, 4, 0, 0, 0, 0),
(379, 13, '德国', '穆勒', '中场', '186cm', '75kg', '1989/9/13', 2, 207, 'http://sports.sohu.com/upload/worldcup2018/players/35166.png', 0, 0, 2, 0, 92, 4, 0, 0, 1, 0),
(380, 19, '德国', '鲁迪', '中场', '179cm', '74kg', '1990/2/28', 1, 31, 'http://sports.sohu.com/upload/worldcup2018/players/35680.png', 0, 0, 0, 0, 17, 0, 0, 0, 0, 0),
(381, 12, '德国', '特拉普', '守门员', '189cm', '88kg', '1990/7/8', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/38440.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(382, 21, '德国', '京多安', '中场', '180cm', '79kg', '1990/10/24', 0, 59, 'http://sports.sohu.com/upload/worldcup2018/players/45853.png', 0, 0, 1, 1, 54, 1, 0, 0, 0, 0),
(383, 22, '德国', '特尔施特根', '守门员', '187cm', '85kg', '1992/4/30', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/88625.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(384, 2, '德国', '普拉滕哈特', '后卫', '181cm', '76kg', '1992/1/26', 1, 79, 'http://sports.sohu.com/upload/worldcup2018/players/108584.png', 0, 0, 1, 1, 22, 1, 0, 0, 0, 0),
(385, 3, '德国', '赫克托', '后卫', '185cm', '75kg', '1990/5/27', 2, 165, 'http://sports.sohu.com/upload/worldcup2018/players/124544.png', 0, 0, 1, 1, 98, 1, 0, 0, 0, 0),
(386, 4, '德国', '金特尔', '后卫', '189cm', '85kg', '1994/1/19', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/142259.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(387, 16, '德国', '吕迪格', '后卫', '191cm', '85kg', '1993/3/3', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/142622.png', 0, 0, 0, 0, 87, 1, 0, 0, 0, 0),
(388, 7, '德国', '德拉克斯勒', '中场', '185cm', '74kg', '1993/9/20', 2, 135, 'http://sports.sohu.com/upload/worldcup2018/players/142680.png', 0, 0, 2, 1, 77, 2, 0, 0, 0, 0),
(389, 15, '德国', '聚勒', '后卫', '195cm', '89kg', '1995/9/3', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/168937.png', 0, 0, 0, 0, 87, 2, 0, 0, 0, 0),
(390, 14, '德国', '格雷茨卡', '中场', '189cm', '76kg', '1995/2/6', 1, 63, 'http://sports.sohu.com/upload/worldcup2018/players/184661.png', 0, 0, 2, 1, 20, 0, 0, 0, 0, 0),
(391, 20, '德国', '布兰特', '中场', '183cm', '82kg', '1996/5/2', 0, 19, 'http://sports.sohu.com/upload/worldcup2018/players/226978.png', 0, 0, 3, 1, 18, 2, 0, 0, 0, 0),
(392, 9, '德国', '维尔纳', '前锋', '181cm', '75kg', '1996/3/6', 3, 266, 'http://sports.sohu.com/upload/worldcup2018/players/232306.png', 0, 1, 6, 1, 68, 4, 0, 0, 0, 0),
(393, 18, '德国', '基米希', '后卫', '176cm', '72kg', '1995/2/8', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/259117.png', 0, 0, 2, 0, 232, 4, 0, 0, 0, 0),
(394, 7, '瑞典', '塞巴斯蒂安-拉尔森', '中场', '178cm', '70kg', '1985/6/6', 4, 318, 'http://sports.sohu.com/upload/worldcup2018/players/524.png', 0, 0, 0, 0, 140, 4, 0, 0, 3, 0),
(395, 9, '瑞典', '马库斯-贝里', '前锋', '184cm', '74kg', '1986/8/17', 5, 428, 'http://sports.sohu.com/upload/worldcup2018/players/7057.png', 0, 0, 12, 8, 97, 3, 0, 0, 0, 0),
(396, 4, '瑞典', '格兰奎斯特', '后卫', '192cm', '84kg', '1985/4/16', 5, 450, 'http://sports.sohu.com/upload/worldcup2018/players/7714.png', 2, 0, 5, 4, 201, 4, 0, 0, 0, 0),
(397, 20, '瑞典', '奥拉-托伊沃宁', '前锋', '192cm', '78kg', '1986/7/3', 5, 400, 'http://sports.sohu.com/upload/worldcup2018/players/7938.png', 1, 1, 4, 3, 86, 3, 0, 0, 0, 0),
(398, 2, '瑞典', '米卡埃尔-卢斯蒂格', '后卫', '189cm', '77kg', '1986/12/13', 4, 352, 'http://sports.sohu.com/upload/worldcup2018/players/10692.png', 0, 0, 1, 0, 139, 2, 0, 0, 2, 0),
(399, 13, '瑞典', '斯文森', '中场', '183cm', '77kg', '1987/2/7', 1, 132, 'http://sports.sohu.com/upload/worldcup2018/players/15375.png', 0, 0, 0, 0, 27, 0, 0, 0, 0, 0),
(400, 23, '瑞典', '诺德菲尔特', '守门员', '190cm', '85kg', '1989/6/23', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/22596.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(401, 5, '瑞典', '马丁-奥尔森', '后卫', '177cm', '81kg', '1988/5/17', 0, 33, 'http://sports.sohu.com/upload/worldcup2018/players/27247.png', 0, 0, 0, 0, 10, 0, 0, 0, 0, 0),
(402, 11, '瑞典', '圭德蒂', '前锋', '185cm', '79kg', '1992/4/15', 0, 37, 'http://sports.sohu.com/upload/worldcup2018/players/37191.png', 0, 0, 1, 1, 9, 1, 0, 0, 1, 0),
(403, 21, '瑞典', '杜尔马兹', '中场', '180cm', '69kg', '1989/3/22', 0, 16, 'http://sports.sohu.com/upload/worldcup2018/players/37504.png', 0, 0, 0, 0, 5, 1, 0, 0, 0, 0),
(404, 12, '瑞典', '约翰松', '守门员', '187cm', '83kg', '1990/1/28', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/40973.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(405, 10, '瑞典', '福斯贝里', '中场', '179cm', '78kg', '1991/10/23', 5, 417, 'http://sports.sohu.com/upload/worldcup2018/players/51785.png', 1, 0, 9, 3, 99, 4, 0, 0, 0, 0),
(406, 18, '瑞典', '波恩图斯-扬松', '后卫', '194cm', '89kg', '1991/2/13', 1, 95, 'http://sports.sohu.com/upload/worldcup2018/players/55123.png', 0, 0, 1, 0, 60, 0, 0, 0, 0, 0),
(407, 15, '瑞典', '希列马克', '中场', '184cm', '73kg', '1992/6/28', 0, 29, 'http://sports.sohu.com/upload/worldcup2018/players/124004.png', 0, 0, 0, 0, 10, 0, 0, 0, 0, 0),
(408, 17, '瑞典', '维克多-赫拉森', '中场', '183cm', '79kg', '1992/1/2', 5, 434, 'http://sports.sohu.com/upload/worldcup2018/players/137661.png', 0, 2, 5, 1, 134, 3, 0, 0, 1, 0),
(409, 6, '瑞典', '奥古斯丁森', '后卫', '181cm', '76kg', '1994/4/21', 5, 450, 'http://sports.sohu.com/upload/worldcup2018/players/138546.png', 1, 0, 3, 1, 167, 4, 0, 0, 0, 0),
(410, 3, '瑞典', '林德洛夫', '后卫', '187cm', '81kg', '1994/7/17', 4, 360, 'http://sports.sohu.com/upload/worldcup2018/players/143334.png', 0, 0, 0, 0, 127, 4, 0, 0, 0, 0),
(411, 16, '瑞典', '克拉夫特', '后卫', '181cm', '72kg', '1994/8/2', 1, 93, 'http://sports.sohu.com/upload/worldcup2018/players/150396.png', 0, 0, 0, 0, 51, 2, 0, 0, 0, 0),
(412, 14, '瑞典', '赫兰德', '后卫', '192cm', '83kg', '1993/4/22', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/168749.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(413, 22, '瑞典', '特林', '前锋', '189cm', '83kg', '1992/6/24', 0, 35, 'http://sports.sohu.com/upload/worldcup2018/players/178743.png', 0, 0, 0, 0, 13, 1, 0, 0, 0, 0),
(414, 1, '墨西哥', '赫苏斯-科罗纳', '守门员', '182cm', '80kg', '1981/1/26', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/13861.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(415, 18, '墨西哥', '瓜尔达多', '中场', '167cm', '63kg', '1986/9/28', 4, 307, 'http://sports.sohu.com/upload/worldcup2018/players/14942.png', 0, 0, 3, 1, 129, 5, 0, 0, 1, 0),
(416, 13, '墨西哥', '奥乔亚', '守门员', '185cm', '76kg', '1985/7/13', 4, 360, 'http://sports.sohu.com/upload/worldcup2018/players/15497.png', 0, 0, 0, 0, 116, 6, 25, 0, 0, 0),
(417, 11, '墨西哥', '贝拉', '前锋', '178cm', '78kg', '1989/3/1', 4, 315, 'http://sports.sohu.com/upload/worldcup2018/players/25991.png', 1, 0, 8, 2, 109, 5, 0, 0, 0, 0),
(418, 15, '墨西哥', '莫雷诺', '后卫', '182cm', '82kg', '1988/1/17', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/32946.png', 0, 0, 1, 1, 145, 4, 0, 0, 2, 0),
(419, 2, '墨西哥', '乌戈-阿亚拉', '后卫', '188cm', '82kg', '1987/3/31', 2, 180, 'http://sports.sohu.com/upload/worldcup2018/players/33167.png', 0, 0, 0, 0, 77, 2, 0, 0, 0, 0),
(420, 12, '墨西哥', '塔拉韦拉', '守门员', '188cm', '84kg', '1982/9/18', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/34305.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(421, 14, '墨西哥', '哈维尔-埃尔南德斯', '前锋', '175cm', '71kg', '1988/6/1', 4, 330, 'http://sports.sohu.com/upload/worldcup2018/players/34312.png', 1, 1, 3, 1, 69, 5, 0, 0, 0, 0),
(422, 8, '墨西哥', '法比安', '前锋', '171cm', '70kg', '1989/7/21', 0, 25, 'http://sports.sohu.com/upload/worldcup2018/players/41371.png', 0, 0, 0, 0, 9, 1, 0, 0, 0, 0),
(423, 7, '墨西哥', '拉云', '中场', '180cm', '72kg', '1988/6/25', 3, 314, 'http://sports.sohu.com/upload/worldcup2018/players/80008.png', 0, 0, 9, 4, 108, 6, 0, 0, 1, 0),
(424, 17, '墨西哥', '科罗纳', '中场', '174cm', '69kg', '1993/1/6', 0, 34, 'http://sports.sohu.com/upload/worldcup2018/players/123906.png', 0, 0, 0, 0, 18, 1, 0, 0, 0, 0),
(425, 9, '墨西哥', '希门尼斯', '前锋', '188cm', '79kg', '1991/5/5', 0, 54, 'http://sports.sohu.com/upload/worldcup2018/players/192442.png', 0, 0, 0, 0, 16, 1, 0, 0, 0, 0),
(426, 16, '墨西哥', '埃雷拉', '后卫', '180cm', '79kg', '1990/4/19', 4, 360, 'http://sports.sohu.com/upload/worldcup2018/players/204790.png', 0, 0, 3, 2, 215, 6, 0, 0, 2, 0),
(427, 3, '墨西哥', '萨尔塞多', '后卫', '189cm', '83kg', '1993/9/29', 4, 360, 'http://sports.sohu.com/upload/worldcup2018/players/314096.png', 0, 0, 2, 1, 239, 6, 0, 0, 1, 0),
(428, 22, '墨西哥', '洛萨诺', '前锋', '176cm', '66kg', '1995/7/30', 4, 317, 'http://sports.sohu.com/upload/worldcup2018/players/385320.png', 1, 1, 7, 2, 87, 5, 0, 0, 0, 0),
(429, 23, '墨西哥', '加拉多', '中场', '176cm', '73kg', '1994/8/15', 4, 335, 'http://sports.sohu.com/upload/worldcup2018/players/770253.png', 0, 0, 1, 0, 184, 5, 0, 0, 1, 0),
(430, 21, '墨西哥', '阿尔瓦雷斯', '后卫', '190cm', '72kg', '1997/10/24', 3, 267, 'http://sports.sohu.com/upload/worldcup2018/players/1020079.png', 0, 0, 0, 0, 176, 5, 0, 0, 1, 0),
(431, 16, '韩国', '寄诚庸', '中场', '186cm', '75kg', '1989/1/24', 2, 180, 'http://sports.sohu.com/upload/worldcup2018/players/38642.png', 0, 0, 2, 2, 76, 3, 0, 0, 0, 0),
(432, 6, '韩国', '朴柱昊', '后卫', '174cm', '71kg', '1987/1/16', 1, 29, 'http://sports.sohu.com/upload/worldcup2018/players/48241.png', 0, 0, 0, 0, 8, 0, 0, 0, 0, 0),
(433, 21, '韩国', '金镇铉', '守门员', '193cm', '82kg', '1987/7/6', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/48353.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(434, 13, '韩国', '具滋哲', '中场', '182cm', '73kg', '1989/2/27', 2, 128, 'http://sports.sohu.com/upload/worldcup2018/players/105173.png', 0, 0, 1, 0, 27, 1, 0, 0, 0, 0),
(435, 7, '韩国', '孙兴慜', '前锋', '183cm', '76kg', '1992/7/8', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/111505.png', 2, 0, 10, 4, 73, 3, 0, 0, 1, 0),
(436, 12, '韩国', '金民友', '后卫', '172cm', '69kg', '1990/2/25', 1, 145, 'http://sports.sohu.com/upload/worldcup2018/players/116099.png', 0, 0, 0, 0, 55, 3, 0, 0, 0, 0),
(437, 5, '韩国', '尹荣善', '后卫', '185cm', '78kg', '1988/10/4', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/143203.png', 0, 0, 0, 0, 23, 0, 0, 0, 0, 0),
(438, 9, '韩国', '金信煜', '前锋', '197cm', '97kg', '1988/4/14', 1, 67, 'http://sports.sohu.com/upload/worldcup2018/players/144580.png', 0, 0, 0, 0, 11, 1, 0, 0, 1, 0),
(439, 15, '韩国', '郑又荣', '中场', '186cm', '78kg', '1989/12/14', 1, 126, 'http://sports.sohu.com/upload/worldcup2018/players/147128.png', 0, 0, 2, 2, 58, 0, 0, 0, 2, 0),
(440, 20, '韩国', '张贤秀', '后卫', '187cm', '77kg', '1991/9/28', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/160875.png', 0, 0, 0, 0, 93, 3, 0, 0, 0, 0),
(441, 2, '韩国', '李镕', '后卫', '180cm', '74kg', '1986/12/24', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/235676.png', 0, 0, 1, 0, 114, 3, 0, 0, 1, 0),
(442, 1, '韩国', '金承奎', '守门员', '187cm', '80kg', '1990/9/30', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/235686.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(443, 11, '韩国', '黄喜灿', '前锋', '177cm', '77kg', '1996/1/26', 2, 203, 'http://sports.sohu.com/upload/worldcup2018/players/754008.png', 0, 0, 2, 1, 29, 3, 0, 0, 1, 0),
(444, 18, '英格兰', '阿什利-扬', '后卫', '175cm', '78kg', '1985/7/9', 5, 462, 'http://sports.sohu.com/upload/worldcup2018/players/10589.png', 0, 1, 2, 1, 234, 7, 0, 0, 0, 0),
(445, 3, '英格兰', '丹尼-罗斯', '后卫', '173cm', '76kg', '1990/7/2', 2, 203, 'http://sports.sohu.com/upload/worldcup2018/players/16586.png', 0, 0, 1, 0, 100, 7, 0, 0, 0, 0),
(446, 14, '英格兰', '维尔贝克', '前锋', '184cm', '78kg', '1990/11/26', 0, 11, 'http://sports.sohu.com/upload/worldcup2018/players/33902.png', 0, 0, 1, 0, 2, 0, 0, 0, 0, 0),
(447, 8, '英格兰', '亨德森', '中场', '183cm', '82kg', '1990/6/17', 5, 482, 'http://sports.sohu.com/upload/worldcup2018/players/42694.png', 0, 0, 5, 2, 283, 10, 0, 0, 1, 0),
(448, 2, '英格兰', '凯尔-沃克', '后卫', '178cm', '83kg', '1990/5/28', 5, 495, 'http://sports.sohu.com/upload/worldcup2018/players/44614.png', 0, 0, 0, 0, 402, 8, 0, 0, 2, 0),
(449, 12, '英格兰', '特里皮尔', '后卫', '178cm', '72kg', '1990/9/19', 6, 580, 'http://sports.sohu.com/upload/worldcup2018/players/69256.png', 1, 1, 4, 2, 344, 12, 0, 0, 0, 0),
(450, 13, '英格兰', '巴特兰', '守门员', '196cm', '96kg', '1993/3/10', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/98448.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(451, 1, '英格兰', '皮克福德', '守门员', '185cm', '72kg', '1994/3/7', 7, 690, 'http://sports.sohu.com/upload/worldcup2018/players/138530.png', 0, 0, 0, 0, 258, 14, 18, 0, 0, 0),
(452, 10, '英格兰', '斯特林', '前锋', '170cm', '70kg', '1994/12/8', 6, 455, 'http://sports.sohu.com/upload/worldcup2018/players/138534.png', 0, 1, 4, 1, 130, 7, 0, 0, 0, 0),
(453, 4, '英格兰', '戴尔', '中场', '188cm', '90kg', '1994/1/15', 2, 247, 'http://sports.sohu.com/upload/worldcup2018/players/146101.png', 0, 0, 4, 2, 196, 8, 0, 0, 0, 0),
(454, 6, '英格兰', '马奎尔', '后卫', '193cm', '98kg', '1993/3/5', 6, 645, 'http://sports.sohu.com/upload/worldcup2018/players/149380.png', 1, 1, 11, 4, 456, 14, 0, 0, 2, 0),
(455, 5, '英格兰', '斯通斯', '后卫', '188cm', '72kg', '1994/5/28', 7, 645, 'http://sports.sohu.com/upload/worldcup2018/players/152077.png', 2, 0, 3, 3, 490, 13, 0, 0, 1, 0),
(456, 23, '英格兰', '波普', '守门员', '191cm', '76kg', '1992/4/19', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/162653.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(457, 11, '英格兰', '瓦尔迪', '前锋', '178cm', '80kg', '1987/1/11', 1, 157, 'http://sports.sohu.com/upload/worldcup2018/players/173827.png', 0, 0, 1, 0, 17, 6, 0, 0, 0, 0),
(458, 20, '英格兰', '阿里', '中场', '188cm', '76kg', '1996/4/11', 4, 364, 'http://sports.sohu.com/upload/worldcup2018/players/198028.png', 1, 0, 4, 3, 146, 6, 0, 0, 0, 0),
(459, 7, '英格兰', '林加德', '中场', '175cm', '60kg', '1992/12/15', 5, 528, 'http://sports.sohu.com/upload/worldcup2018/players/205508.png', 1, 1, 8, 2, 212, 11, 0, 0, 1, 0),
(460, 19, '英格兰', '拉什福德', '前锋', '180cm', '78kg', '1997/10/31', 1, 210, 'http://sports.sohu.com/upload/worldcup2018/players/903830.png', 0, 0, 5, 3, 79, 6, 0, 0, 0, 0),
(461, 3, '比利时', '维尔马伦', '后卫', '183cm', '80kg', '1985/11/14', 1, 132, 'http://sports.sohu.com/upload/worldcup2018/players/1954.png', 0, 0, 0, 0, 87, 0, 0, 0, 0, 0),
(462, 4, '比利时', '孔帕尼', '后卫', '190cm', '85kg', '1986/4/10', 4, 376, 'http://sports.sohu.com/upload/worldcup2018/players/6019.png', 0, 0, 2, 1, 306, 4, 0, 0, 0, 0),
(463, 19, '比利时', '登贝莱', '中场', '185cm', '82kg', '1987/7/16', 2, 178, 'http://sports.sohu.com/upload/worldcup2018/players/9865.png', 0, 0, 0, 0, 118, 1, 0, 0, 0, 0),
(464, 12, '比利时', '米尼奥莱', '守门员', '193cm', '87kg', '1988/3/6', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/10406.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(465, 5, '比利时', '威尔通亨', '后卫', '189cm', '86kg', '1987/4/24', 6, 540, 'http://sports.sohu.com/upload/worldcup2018/players/16921.png', 1, 0, 2, 2, 361, 6, 0, 0, 2, 0),
(466, 8, '比利时', '费莱尼', '中场', '194cm', '85kg', '1987/11/22', 3, 316, 'http://sports.sohu.com/upload/worldcup2018/players/21764.png', 1, 0, 3, 1, 139, 3, 0, 0, 0, 0),
(467, 10, '比利时', '阿扎尔', '前锋', '173cm', '74kg', '1991/1/7', 6, 518, 'http://sports.sohu.com/upload/worldcup2018/players/27583.png', 3, 2, 12, 6, 264, 5, 0, 0, 1, 0),
(468, 14, '比利时', '默滕斯', '前锋', '169cm', '61kg', '1987/5/6', 3, 298, 'http://sports.sohu.com/upload/worldcup2018/players/32493.png', 1, 1, 7, 4, 117, 3, 0, 0, 0, 0),
(469, 6, '比利时', '维特塞尔', '中场', '186cm', '73kg', '1989/1/12', 6, 540, 'http://sports.sohu.com/upload/worldcup2018/players/35612.png', 0, 0, 3, 1, 340, 6, 0, 0, 1, 0),
(470, 2, '比利时', '阿尔德韦雷尔德', '后卫', '186cm', '81kg', '1989/3/2', 6, 540, 'http://sports.sohu.com/upload/worldcup2018/players/44575.png', 0, 1, 5, 1, 453, 6, 0, 0, 2, 0),
(471, 13, '比利时', '卡斯特尔斯', '守门员', '197cm', '86kg', '1992/6/25', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/70987.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(472, 1, '比利时', '库尔图瓦', '守门员', '199cm', '91kg', '1992/5/11', 7, 630, 'http://sports.sohu.com/upload/worldcup2018/players/70988.png', 0, 0, 0, 0, 240, 6, 26, 0, 0, 0),
(473, 7, '比利时', '德布劳内', '中场', '181cm', '70kg', '1991/6/28', 6, 540, 'http://sports.sohu.com/upload/worldcup2018/players/70996.png', 1, 2, 8, 4, 325, 6, 0, 0, 1, 0),
(474, 9, '比利时', '卢卡库', '前锋', '190cm', '94kg', '1993/5/13', 6, 476, 'http://sports.sohu.com/upload/worldcup2018/players/78893.png', 4, 1, 9, 5, 104, 5, 0, 0, 0, 0),
(475, 16, '比利时', '小阿扎尔', '中场', '174cm', '70kg', '1993/3/29', 1, 97, 'http://sports.sohu.com/upload/worldcup2018/players/94286.png', 0, 0, 2, 0, 52, 0, 0, 0, 0, 0),
(476, 20, '比利时', '博雅塔', '后卫', '188cm', '84kg', '1990/11/28', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/103928.png', 0, 0, 0, 0, 199, 2, 0, 0, 0, 0),
(477, 15, '比利时', '穆尼耶', '后卫', '190cm', '88kg', '1991/9/12', 5, 450, 'http://sports.sohu.com/upload/worldcup2018/players/128587.png', 1, 2, 6, 3, 220, 5, 0, 0, 2, 0),
(478, 21, '比利时', '巴舒亚伊', '前锋', '185cm', '78kg', '1993/10/2', 1, 112, 'http://sports.sohu.com/upload/worldcup2018/players/147745.png', 1, 0, 5, 3, 24, 1, 0, 0, 0, 0),
(479, 11, '比利时', '卡拉斯科', '中场', '180cm', '67kg', '1993/9/4', 3, 239, 'http://sports.sohu.com/upload/worldcup2018/players/182001.png', 0, 0, 6, 4, 89, 4, 0, 0, 0, 0),
(480, 23, '比利时', '登东克尔', '后卫', '188cm', '76kg', '1995/4/15', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/190405.png', 0, 0, 0, 0, 71, 0, 0, 0, 1, 0),
(481, 17, '比利时', '蒂莱曼斯', '中场', '176cm', '72kg', '1997/5/7', 2, 175, 'http://sports.sohu.com/upload/worldcup2018/players/331737.png', 0, 2, 1, 1, 108, 1, 0, 0, 1, 0),
(482, 16, '突尼斯', '马斯卢西', '守门员', '182cm', '84kg', '1984/9/14', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/32806.png', 0, 0, 0, 0, 30, 1, 4, 0, 0, 0),
(483, 10, '突尼斯', '哈兹里', '前锋', '182cm', '76kg', '1991/2/8', 3, 264, 'http://sports.sohu.com/upload/worldcup2018/players/51640.png', 2, 2, 8, 5, 73, 7, 0, 0, 0, 0),
(484, 1, '突尼斯', '本-穆斯塔法', '守门员', '192cm', '85kg', '1989/7/1', 1, 165, 'http://sports.sohu.com/upload/worldcup2018/players/105518.png', 0, 0, 0, 0, 65, 6, 10, 0, 0, 0),
(485, 2, '突尼斯', '本优素福', '后卫', '189cm', '87kg', '1989/3/31', 2, 131, 'http://sports.sohu.com/upload/worldcup2018/players/118144.png', 0, 0, 0, 0, 46, 4, 0, 0, 0, 0),
(486, 23, '突尼斯', '斯利蒂', '前锋', '173cm', '65kg', '1992/7/27', 2, 182, 'http://sports.sohu.com/upload/worldcup2018/players/153158.png', 0, 0, 5, 1, 48, 3, 0, 0, 0, 0),
(487, 6, '突尼斯', '贝多瓦', '后卫', '187cm', '77kg', '1990/1/19', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/290611.png', 0, 0, 1, 1, 84, 1, 0, 0, 0, 0),
(488, 8, '突尼斯', '法赫雷丁-本-优素福', '前锋', '189cm', '80kg', '1991/6/21', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/290623.png', 1, 0, 7, 3, 85, 8, 0, 0, 0, 0),
(489, 9, '突尼斯', '巴德里', '中场', '178cm', '70kg', '1990/9/18', 2, 225, 'http://sports.sohu.com/upload/worldcup2018/players/312830.png', 0, 0, 2, 2, 77, 7, 0, 0, 1, 0),
(490, 13, '突尼斯', '萨西', '中场', '186cm', '80kg', '1992/3/18', 3, 194, 'http://sports.sohu.com/upload/worldcup2018/players/332537.png', 1, 0, 3, 1, 148, 7, 0, 0, 2, 0),
(491, 12, '突尼斯', '马劳尔', '后卫', '170cm', '72kg', '1990/1/1', 2, 180, 'http://sports.sohu.com/upload/worldcup2018/players/332547.png', 0, 0, 0, 0, 102, 7, 0, 0, 0, 0),
(492, 14, '突尼斯', '本-阿莫尔', '中场', '180cm', '75kg', '1992/5/3', 0, 16, 'http://sports.sohu.com/upload/worldcup2018/players/1090378.png', 0, 0, 0, 0, 4, 1, 0, 0, 0, 0),
(493, 21, '突尼斯', '哈姆迪-纳盖兹', '后卫', '186cm', '75kg', '1992/10/28', 1, 156, 'http://sports.sohu.com/upload/worldcup2018/players/1090382.png', 0, 1, 0, 0, 91, 4, 0, 0, 0, 0),
(494, 5, '突尼斯', '哈达迪', '后卫', '185cm', '76kg', '1992/1/28', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/1099253.png', 0, 1, 0, 0, 41, 1, 0, 0, 0, 0),
(495, 18, '突尼斯', '斯拉尔菲', '前锋', '176cm', '71kg', '1997/6/25', 0, 1, 'http://sports.sohu.com/upload/worldcup2018/players/1100279.png', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(496, 20, '突尼斯', '查拉利', '前锋', '179cm', '70kg', '1994/2/28', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/1131889.png', 0, 0, 0, 0, 77, 1, 0, 0, 1, 0),
(497, 4, '突尼斯', '梅利赫', '后卫', '183cm', '70kg', '1993/7/2', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/1131921.png', 0, 0, 0, 0, 198, 8, 0, 0, 0, 0),
(498, 1, '巴拿马', '佩内多', '守门员', '183cm', '70kg', '1981/9/26', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/11566.png', 0, 0, 0, 0, 65, 11, 10, 0, 0, 0),
(499, 23, '巴拿马', '巴洛伊', '后卫', '185cm', '87kg', '1981/2/24', 0, 21, 'http://sports.sohu.com/upload/worldcup2018/players/11570.png', 1, 1, 1, 1, 18, 0, 0, 0, 0, 0),
(500, 5, '巴拿马', '罗曼-托雷斯', '后卫', '188cm', '99kg', '1986/3/20', 3, 236, 'http://sports.sohu.com/upload/worldcup2018/players/11573.png', 0, 0, 3, 0, 83, 10, 0, 0, 0, 0),
(501, 12, '巴拿马', '卡尔德隆', '守门员', '187cm', '87kg', '1985/8/14', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/11577.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(502, 18, '巴拿马', '特哈达', '前锋', '183cm', '87kg', '1982/3/28', 0, 51, 'http://sports.sohu.com/upload/worldcup2018/players/11583.png', 0, 0, 0, 0, 22, 2, 0, 0, 1, 0),
(503, 6, '巴拿马', '加布里埃尔-戈麦斯', '中场', '183cm', '82kg', '1984/5/29', 3, 249, 'http://sports.sohu.com/upload/worldcup2018/players/12502.png', 0, 0, 0, 0, 120, 11, 0, 0, 1, 0),
(504, 9, '巴拿马', '加布里埃尔-托雷斯', '前锋', '180cm', '77kg', '1988/10/31', 1, 72, 'http://sports.sohu.com/upload/worldcup2018/players/13870.png', 0, 0, 1, 0, 18, 2, 0, 0, 0, 0),
(505, 7, '巴拿马', '布拉斯-佩雷斯', '前锋', '187cm', '83kg', '1981/3/13', 2, 163, 'http://sports.sohu.com/upload/worldcup2018/players/47032.png', 0, 0, 0, 0, 38, 8, 0, 0, 0, 0),
(506, 13, '巴拿马', '马查多', '后卫', '182cm', '78kg', '1985/2/14', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/156097.png', 0, 0, 0, 0, 39, 2, 0, 0, 0, 0),
(507, 11, '巴拿马', '库珀', '中场', '173cm', '72kg', '1987/11/26', 2, 180, 'http://sports.sohu.com/upload/worldcup2018/players/156098.png', 0, 0, 1, 0, 74, 9, 0, 0, 2, 0),
(508, 3, '巴拿马', '库明斯', '后卫', '183cm', '92kg', '1992/3/1', 0, 45, 'http://sports.sohu.com/upload/worldcup2018/players/156100.png', 0, 0, 0, 0, 15, 2, 0, 0, 0, 0),
(509, 20, '巴拿马', '戈多伊', '中场', '183cm', '82kg', '1990/2/10', 3, 242, 'http://sports.sohu.com/upload/worldcup2018/players/156102.png', 0, 0, 2, 0, 104, 10, 0, 0, 1, 0),
(510, 15, '巴拿马', '埃里克-戴维斯', '后卫', '179cm', '78kg', '1991/3/31', 2, 180, 'http://sports.sohu.com/upload/worldcup2018/players/159935.png', 0, 0, 0, 0, 104, 9, 0, 0, 1, 0),
(511, 22, '巴拿马', '阿莱克斯-罗德里格斯', '守门员', '197cm', '83kg', '1990/8/5', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/252765.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(512, 17, '巴拿马', '奥瓦耶', '后卫', '178cm', '75kg', '1988/9/7', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/285729.png', 0, 0, 1, 1, 45, 2, 0, 0, 0, 0),
(513, 16, '巴拿马', '阿罗约', '前锋', '183cm', '82kg', '1993/12/13', 0, 30, 'http://sports.sohu.com/upload/worldcup2018/players/341179.png', 0, 0, 0, 0, 7, 0, 0, 0, 0, 0),
(514, 8, '巴拿马', '巴尔塞纳斯', '中场', '175cm', '72kg', '1993/10/23', 3, 222, 'http://sports.sohu.com/upload/worldcup2018/players/341199.png', 0, 0, 5, 2, 59, 9, 0, 0, 1, 0),
(515, 2, '巴拿马', '穆里略', '后卫', '183cm', '78kg', '1996/2/11', 2, 180, 'http://sports.sohu.com/upload/worldcup2018/players/792373.png', 0, 0, 2, 2, 87, 9, 0, 0, 2, 0),
(516, 4, '巴拿马', '埃斯科巴', '后卫', '182cm', '82kg', '1995/1/9', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/792377.png', 0, 0, 1, 1, 98, 11, 0, 0, 1, 0),
(517, 14, '巴拿马', '皮门特尔', '中场', '189cm', '80kg', '1991/5/30', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/856252.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(518, 12, '波兰', '比亚科夫斯基', '守门员', '194cm', '83kg', '1987/7/6', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/14328.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(519, 22, '波兰', '法比安斯基', '守门员', '190cm', '83kg', '1985/4/18', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/15479.png', 0, 0, 0, 0, 28, 0, 3, 0, 0, 0),
(520, 16, '波兰', '库巴', '中场', '175cm', '71kg', '1985/12/14', 1, 45, 'http://sports.sohu.com/upload/worldcup2018/players/18379.png', 0, 0, 0, 0, 6, 1, 0, 0, 0, 0),
(521, 20, '波兰', '皮什切克', '后卫', '184cm', '79kg', '1985/6/3', 2, 173, 'http://sports.sohu.com/upload/worldcup2018/players/24829.png', 0, 0, 1, 0, 99, 5, 0, 0, 0, 0),
(522, 11, '波兰', '格罗斯基', '中场', '180cm', '78kg', '1988/6/8', 2, 213, 'http://sports.sohu.com/upload/worldcup2018/players/33689.png', 0, 1, 3, 0, 38, 4, 0, 0, 0, 0),
(523, 2, '波兰', '帕兹丹', '后卫', '181cm', '78kg', '1987/9/21', 2, 170, 'http://sports.sohu.com/upload/worldcup2018/players/35605.png', 0, 0, 0, 0, 158, 5, 0, 0, 0, 0),
(524, 17, '波兰', '佩什科', '中场', '173cm', '68kg', '1985/2/19', 0, 10, 'http://sports.sohu.com/upload/worldcup2018/players/41330.png', 0, 0, 0, 0, 11, 0, 0, 0, 0, 0),
(525, 9, '波兰', '莱万多夫斯基', '前锋', '185cm', '79kg', '1988/8/21', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/41789.png', 0, 0, 7, 4, 69, 5, 0, 0, 0, 0),
(526, 4, '波兰', '乔内克', '后卫', '184cm', '81kg', '1986/4/21', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/44932.png', 0, 0, 0, 0, 84, 2, 0, 0, 0, 0),
(527, 13, '波兰', '雷布斯', '中场', '173cm', '73kg', '1989/8/19', 2, 180, 'http://sports.sohu.com/upload/worldcup2018/players/44987.png', 0, 0, 1, 1, 69, 5, 0, 0, 0, 0),
(528, 15, '波兰', '格利克', '后卫', '190cm', '80kg', '1988/2/3', 1, 100, 'http://sports.sohu.com/upload/worldcup2018/players/45362.png', 0, 0, 1, 0, 80, 0, 0, 0, 0, 0),
(529, 1, '波兰', '什琴斯尼', '守门员', '196cm', '84kg', '1990/4/18', 2, 180, 'http://sports.sohu.com/upload/worldcup2018/players/50490.png', 0, 0, 0, 0, 58, 5, 1, 0, 0, 0),
(530, 3, '波兰', '耶杰伊奇克', '后卫', '189cm', '78kg', '1987/11/4', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/54429.png', 0, 0, 0, 0, 54, 0, 0, 0, 0, 0),
(531, 10, '波兰', '克里乔维亚克', '中场', '186cm', '83kg', '1990/1/29', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/76227.png', 1, 0, 2, 2, 162, 5, 0, 0, 1, 0),
(532, 18, '波兰', '贝雷申斯基', '后卫', '182cm', '72kg', '1992/7/12', 2, 169, 'http://sports.sohu.com/upload/worldcup2018/players/109461.png', 0, 0, 1, 1, 73, 2, 0, 0, 0, 0),
(533, 14, '波兰', '特奥多切克', '前锋', '185cm', '78kg', '1991/6/3', 0, 29, 'http://sports.sohu.com/upload/worldcup2018/players/133735.png', 0, 0, 0, 0, 12, 1, 0, 0, 0, 0),
(534, 19, '波兰', '泽林斯基', '中场', '177cm', '64kg', '1994/5/20', 3, 259, 'http://sports.sohu.com/upload/worldcup2018/players/138605.png', 0, 0, 1, 0, 141, 5, 0, 0, 0, 0),
(535, 7, '波兰', '米利克', '前锋', '186cm', '81kg', '1994/2/28', 1, 73, 'http://sports.sohu.com/upload/worldcup2018/players/161325.png', 0, 0, 1, 0, 20, 2, 0, 0, 0, 0),
(536, 6, '波兰', '格拉尔斯基', '中场', '172cm', '66kg', '1992/9/21', 2, 180, 'http://sports.sohu.com/upload/worldcup2018/players/177179.png', 0, 0, 1, 0, 71, 3, 0, 0, 1, 0),
(537, 8, '波兰', '利内蒂', '中场', '176cm', '73kg', '1995/2/2', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/189135.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(538, 23, '波兰', '科夫纳茨基', '前锋', '185cm', '75kg', '1997/3/14', 1, 74, 'http://sports.sohu.com/upload/worldcup2018/players/286103.png', 0, 0, 1, 1, 23, 1, 0, 0, 0, 0),
(539, 21, '波兰', '拉法乌-库尔扎瓦', '中场', '182cm', '73kg', '1993/1/29', 1, 80, 'http://sports.sohu.com/upload/worldcup2018/players/338363.png', 0, 1, 1, 0, 22, 0, 0, 0, 0, 0),
(540, 8, '哥伦比亚', '阿吉拉尔', '中场', '185cm', '82kg', '1985/1/6', 1, 32, 'http://sports.sohu.com/upload/worldcup2018/players/12650.png', 0, 0, 0, 0, 9, 0, 0, 0, 0, 0),
(541, 2, '哥伦比亚', '克里斯蒂安-萨帕塔', '后卫', '187cm', '82kg', '1986/9/30', 0, 4, 'http://sports.sohu.com/upload/worldcup2018/players/12673.png', 0, 0, 0, 0, 1, 3, 0, 0, 0, 0),
(542, 9, '哥伦比亚', '法尔考', '前锋', '177cm', '72kg', '1986/2/10', 4, 377, 'http://sports.sohu.com/upload/worldcup2018/players/25682.png', 1, 0, 9, 5, 89, 8, 0, 0, 1, 0),
(543, 6, '哥伦比亚', '卡洛斯-桑切斯', '中场', '182cm', '82kg', '1986/2/6', 3, 172, 'http://sports.sohu.com/upload/worldcup2018/players/26995.png', 0, 0, 0, 0, 81, 3, 0, 1, 1, 0),
(544, 1, '哥伦比亚', '奥斯皮纳', '守门员', '183cm', '80kg', '1988/8/31', 4, 390, 'http://sports.sohu.com/upload/worldcup2018/players/33596.png', 0, 0, 0, 0, 115, 8, 13, 0, 0, 0),
(545, 7, '哥伦比亚', '巴卡', '前锋', '181cm', '77kg', '1986/9/8', 0, 90, 'http://sports.sohu.com/upload/worldcup2018/players/106572.png', 0, 0, 1, 1, 27, 4, 0, 0, 1, 0),
(546, 10, '哥伦比亚', 'J罗', '中场', '180cm', '75kg', '1991/7/12', 2, 152, 'http://sports.sohu.com/upload/worldcup2018/players/107414.png', 0, 2, 1, 0, 94, 1, 0, 0, 1, 0),
(547, 3, '哥伦比亚', ' 奥斯卡-穆里略', '后卫', '184cm', '80kg', '1988/4/18', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/111224.png', 0, 0, 0, 0, 35, 2, 0, 0, 0, 0),
(548, 14, '哥伦比亚', '路易斯-穆里尔', '前锋', '178cm', '79kg', '1991/4/16', 0, 91, 'http://sports.sohu.com/upload/worldcup2018/players/119242.png', 0, 0, 1, 1, 29, 3, 0, 0, 0, 0),
(549, 12, '哥伦比亚', '卡米罗-巴尔加斯', '守门员', '185cm', '80kg', '1989/3/9', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/125787.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(550, 4, '哥伦比亚', '阿里亚斯', '后卫', '177cm', '71kg', '1992/1/13', 4, 386, 'http://sports.sohu.com/upload/worldcup2018/players/158583.png', 0, 0, 0, 0, 209, 5, 0, 0, 1, 0),
(551, 20, '哥伦比亚', '金特罗', '中场', '169cm', '64kg', '1993/1/18', 4, 310, 'http://sports.sohu.com/upload/worldcup2018/players/221162.png', 1, 2, 5, 3, 166, 4, 0, 0, 0, 0),
(552, 15, '哥伦比亚', '乌里韦', '中场', '182cm', '76kg', '1991/3/21', 1, 182, 'http://sports.sohu.com/upload/worldcup2018/players/247773.png', 0, 0, 3, 2, 83, 3, 0, 0, 0, 0),
(553, 5, '哥伦比亚', '巴里奥斯', '中场', '178cm', '74kg', '1993/10/16', 2, 269, 'http://sports.sohu.com/upload/worldcup2018/players/309652.png', 0, 0, 0, 0, 126, 7, 0, 0, 2, 0),
(554, 19, '哥伦比亚', '博尔哈', '前锋', '183cm', '74kg', '1993/1/26', 0, 1, 'http://sports.sohu.com/upload/worldcup2018/players/329601.png', 0, 0, 0, 0, 3, 0, 0, 0, 0, 0),
(555, 17, '哥伦比亚', '莫西卡', '后卫', '185cm', '66kg', '1992/8/21', 4, 390, 'http://sports.sohu.com/upload/worldcup2018/players/344847.png', 0, 0, 1, 0, 188, 8, 0, 0, 1, 0),
(556, 13, '哥伦比亚', '米纳', '后卫', '194cm', '95kg', '1994/9/23', 3, 300, 'http://sports.sohu.com/upload/worldcup2018/players/354376.png', 3, 0, 3, 3, 187, 6, 0, 0, 0, 0),
(557, 16, '哥伦比亚', '莱尔马', '中场', '179cm', '70kg', '1994/10/25', 2, 176, 'http://sports.sohu.com/upload/worldcup2018/players/355796.png', 0, 0, 0, 0, 97, 5, 0, 0, 0, 0),
(558, 21, '哥伦比亚', '伊斯基埃尔多', '前锋', '171cm', '73kg', '1992/7/7', 1, 70, 'http://sports.sohu.com/upload/worldcup2018/players/358162.png', 0, 0, 0, 0, 23, 1, 0, 0, 0, 0),
(559, 23, '哥伦比亚', '达文森-桑切斯', '后卫', '187cm', '81kg', '1996/6/12', 4, 390, 'http://sports.sohu.com/upload/worldcup2018/players/566102.png', 0, 0, 1, 0, 222, 8, 0, 0, 0, 0),
(560, 17, '日本', '长谷部诚', '中场', '180cm', '72kg', '1984/1/18', 3, 278, 'http://sports.sohu.com/upload/worldcup2018/players/24397.png', 0, 0, 0, 0, 210, 6, 0, 0, 1, 0),
(561, 14, '日本', '乾贵士', '中场', '169cm', '59kg', '1988/6/2', 3, 292, 'http://sports.sohu.com/upload/worldcup2018/players/24464.png', 2, 1, 6, 4, 118, 6, 0, 0, 1, 0),
(562, 12, '日本', '东口顺昭', '守门员', '184cm', '78kg', '1986/5/12', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/48410.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(563, 3, '日本', '昌子源', '后卫', '182cm', '74kg', '1992/12/11', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/148354.png', 0, 0, 1, 0, 178, 6, 0, 0, 0, 0),
(564, 23, '日本', '中村航辅', '守门员', '184cm', '72kg', '1995/2/27', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/155775.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(565, 2, '日本', '植田直通', '后卫', '186cm', '79kg', '1994/10/24', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/155790.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(566, 7, '塞内加尔', '索乌', '前锋', '180cm', '75kg', '1986/1/19', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/3215.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(567, 9, '塞内加尔', '迪乌夫', '前锋', '185cm', '81kg', '1987/12/16', 1, 66, 'http://sports.sohu.com/upload/worldcup2018/players/22481.png', 0, 0, 1, 0, 7, 0, 0, 0, 0, 0),
(568, 21, '塞内加尔', '加萨马', '后卫', '181cm', '74kg', '1989/10/20', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/40698.png', 0, 0, 0, 0, 38, 1, 0, 0, 0, 0),
(569, 8, '塞内加尔', '库亚特', '中场', '189cm', '75kg', '1989/12/21', 1, 118, 'http://sports.sohu.com/upload/worldcup2018/players/45944.png', 0, 0, 0, 0, 45, 2, 0, 0, 0, 0),
(570, 5, '塞内加尔', '盖伊', '中场', '174cm', '64kg', '1989/9/26', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/106337.png', 0, 0, 0, 0, 141, 4, 0, 0, 1, 0),
(571, 4, '塞内加尔', '姆博吉', '后卫', '192cm', '85kg', '1989/11/22', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/108548.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(572, 3, '塞内加尔', '库利巴利', '后卫', '195cm', '89kg', '1991/6/20', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/126071.png', 0, 0, 0, 0, 108, 4, 0, 0, 0, 0),
(573, 14, '塞内加尔', '科纳特', '前锋', '180cm', '78kg', '1993/4/3', 0, 25, 'http://sports.sohu.com/upload/worldcup2018/players/157143.png', 0, 0, 0, 0, 6, 1, 0, 0, 0, 0),
(574, 16, '塞内加尔', '恩迪亚耶', '守门员', '185cm', '80kg', '1985/4/5', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/215188.png', 0, 0, 0, 0, 81, 4, 5, 0, 0, 0),
(575, 10, '塞内加尔', '马内', '前锋', '175cm', '69kg', '1992/4/10', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/217704.png', 1, 0, 2, 1, 88, 4, 0, 0, 0, 0),
(576, 20, '塞内加尔', '凯塔-巴尔德', '前锋', '181cm', '77kg', '1995/3/8', 1, 80, 'http://sports.sohu.com/upload/worldcup2018/players/317699.png', 0, 0, 1, 1, 15, 1, 0, 0, 0, 0),
(577, 11, '塞内加尔', '恩多耶', '中场', '192cm', '90kg', '1986/3/29', 0, 37, 'http://sports.sohu.com/upload/worldcup2018/players/341513.png', 0, 0, 1, 0, 15, 1, 0, 0, 1, 0),
(578, 18, '塞内加尔', '伊斯梅拉-萨尔', '前锋', '175cm', '70kg', '1998/2/25', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/1011939.png', 0, 0, 3, 2, 56, 4, 0, 0, 0, 0),
(579, 1, '塞内加尔', '迪亚洛', '守门员', '189cm', '79kg', '1992/3/30', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/1078312.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(580, 19, '沙特阿拉伯', '法赫德-穆瓦拉德', '前锋', '168cm', '65kg', '1994/9/14', 2, 183, 'http://sports.sohu.com/upload/worldcup2018/players/160909.png', 0, 0, 2, 1, 21, 5, 0, 0, 0, 0),
(581, 17, '澳大利亚', '丹尼尔-阿尔扎尼', '前锋', '171cm', '73kg', '1999/1/4', 0, 60, 'http://sports.sohu.com/upload/worldcup2018/players/772889.png', 0, 0, 2, 1, 26, 0, 0, 0, 1, 0),
(582, 22, '俄罗斯', '久巴', '前锋', '196cm', '90kg', '1988/8/22', 4, 333, 'http://sports.sohu.com/upload/worldcup2018/players/19367.png', 3, 2, 6, 4, 111, 6, 0, 0, 0, 0),
(583, 8, '俄罗斯', '尤里-加辛斯基', '中场', '180cm', '75kg', '1989/7/20', 3, 266, 'http://sports.sohu.com/upload/worldcup2018/players/128033.png', 1, 0, 2, 1, 122, 4, 0, 0, 2, 0),
(584, 2, '俄罗斯', '费尔南德斯', '后卫', '187cm', '79kg', '1990/9/19', 4, 472, 'http://sports.sohu.com/upload/worldcup2018/players/146393.png', 1, 1, 1, 1, 252, 5, 0, 0, 0, 0),
(585, 10, '冰岛', '吉尔菲-西古德松', '中场', '186cm', '82kg', '1989/9/8', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/43192.png', 1, 0, 9, 5, 94, 5, 0, 0, 0, 0),
(586, 11, '冰岛', '基亚坦-芬博加松', '前锋', '185cm', '79kg', '1989/2/1', 3, 264, 'http://sports.sohu.com/upload/worldcup2018/players/64344.png', 1, 0, 5, 2, 51, 4, 0, 0, 1, 0),
(587, 5, '波兰', '贝德纳雷克', '后卫', '189cm', '77kg', '1996/4/12', 2, 225, 'http://sports.sohu.com/upload/worldcup2018/players/286085.png', 1, 0, 1, 1, 174, 4, 0, 0, 1, 0),
(588, 16, '埃及', '埃克拉米', '守门员', '193cm', '93kg', '1983/7/10', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/10085.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(589, 15, '埃及', '埃尔文西', '后卫', '173cm', '72kg', '1995/6/1', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/1404523.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(590, 7, '伊朗', '马苏德-绍贾伊', '中场', '187cm', '79kg', '1984/6/9', 1, 68, 'http://sports.sohu.com/upload/worldcup2018/players/15566.png', 0, 0, 0, 0, 10, 0, 0, 0, 1, 0),
(591, 19, '伊朗', '侯赛尼', '后卫', '183cm', '78kg', '1996/6/20', 2, 190, 'http://sports.sohu.com/upload/worldcup2018/players/359332.png', 0, 0, 0, 0, 35, 2, 0, 0, 0, 0),
(592, 22, '伊朗', '阿米尔-阿贝德扎代', '守门员', '186cm', '80kg', '1993/4/26', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/377776.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(593, 5, '伊朗', '米拉德-穆罕默迪', '后卫', '178cm', '69kg', '1993/9/29', 0, 55, 'http://sports.sohu.com/upload/worldcup2018/players/820138.png', 0, 0, 0, 0, 19, 0, 0, 0, 0, 0),
(594, 2, '丹麦', '克隆-德利', '中场', '171cm', '69kg', '1983/6/6', 0, 22, 'http://sports.sohu.com/upload/worldcup2018/players/2565.png', 0, 0, 0, 0, 12, 0, 0, 0, 0, 0),
(595, 3, '丹麦', '维斯特高', '后卫', '200cm', '98kg', '1992/8/3', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/120538.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(596, 12, '丹麦', '多尔贝里', '前锋', '187cm', '85kg', '1997/10/6', 0, 15, 'http://sports.sohu.com/upload/worldcup2018/players/355562.png', 0, 0, 0, 0, 6, 0, 0, 0, 0, 0),
(597, 4, '阿根廷', '安萨尔迪', '后卫', '181cm', '73kg', '1986/9/20', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/43476.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(598, 12, '阿根廷', '阿尔马尼', '守门员', '189cm', '85kg', '1986/10/16', 2, 180, 'http://sports.sohu.com/upload/worldcup2018/players/221140.png', 0, 0, 0, 0, 58, 5, 2, 0, 0, 0),
(599, 21, '阿根廷', '迪巴拉', '前锋', '177cm', '73kg', '1993/11/15', 0, 22, 'http://sports.sohu.com/upload/worldcup2018/players/256219.png', 0, 0, 1, 0, 11, 2, 0, 0, 0, 0),
(600, 6, '克罗地亚', '洛夫伦', '后卫', '188cm', '84kg', '1989/7/5', 6, 650, 'http://sports.sohu.com/upload/worldcup2018/players/39480.png', 0, 0, 2, 0, 388, 9, 0, 0, 1, 0),
(601, 15, '克罗地亚', '卡莱塔-卡尔', '后卫', '192cm', '89kg', '1996/9/17', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/257091.png', 0, 0, 0, 0, 42, 1, 0, 0, 0, 0),
(602, 13, '尼日利亚', '西蒙尼-恩万科沃', '前锋', '197cm', '89kg', '1992/5/7', 0, 2, 'http://sports.sohu.com/upload/worldcup2018/players/170499.png', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(603, 16, '巴西', '卡西奥', '守门员', '195cm', '92kg', '1987/6/6', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/27756.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(604, 10, '巴西', '内马尔', '前锋', '175cm', '68kg', '1992/2/5', 5, 450, 'http://sports.sohu.com/upload/worldcup2018/players/124712.png', 2, 1, 19, 14, 267, 3, 0, 0, 1, 0),
(605, 14, '巴西', '达尼洛', '后卫', '184cm', '78kg', '1991/7/15', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/124992.png', 0, 0, 0, 0, 57, 1, 0, 0, 0, 0),
(606, 7, '哥斯达黎加', '博拉尼奥斯', '中场', '178cm', '67kg', '1984/5/17', 0, 66, 'http://sports.sohu.com/upload/worldcup2018/players/11381.png', 0, 0, 0, 0, 33, 2, 0, 0, 0, 0),
(607, 14, '哥斯达黎加', '阿佐菲法', '中场', '182cm', '83kg', '1984/12/30', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/13869.png', 0, 0, 0, 0, 2, 0, 0, 0, 0, 0),
(608, 12, '哥斯达黎加', '乔尔-坎贝尔', '前锋', '178cm', '71kg', '1992/6/26', 1, 114, 'http://sports.sohu.com/upload/worldcup2018/players/154508.png', 0, 1, 2, 1, 31, 2, 0, 0, 1, 0),
(609, 18, '哥斯达黎加', '彭伯顿', '守门员', '178cm', '72kg', '1982/4/24', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/256119.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(610, 11, '哥斯达黎加', '贝内加斯', '前锋', '183cm', '76kg', '1988/11/27', 2, 150, 'http://sports.sohu.com/upload/worldcup2018/players/345343.png', 0, 0, 0, 0, 43, 3, 0, 0, 0, 0);
INSERT INTO `player` (`ID`, `haoma`, `country`, `name`, `postion`, `height`, `weight`, `birthdate`, `attended`, `totaltime`, `image`, `jinqiu`, `zhugong`, `shemen`, `shezheng`, `chuanqiu`, `shiqiu`, `pujiu`, `hongpai`, `huangpai`, `click`) VALUES
(611, 19, '韩国', '金英权', '后卫', '184cm', '74kg', '1990/2/27', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/109232.png', 1, 0, 1, 1, 93, 3, 0, 0, 1, 0),
(612, 14, '韩国', '洪喆', '后卫', '176cm', '67kg', '1990/9/17', 1, 96, 'http://sports.sohu.com/upload/worldcup2018/players/143216.png', 0, 0, 0, 0, 32, 0, 0, 0, 0, 0),
(613, 22, '韩国', '高约翰', '后卫', '170cm', '65kg', '1988/3/10', 0, 11, 'http://sports.sohu.com/upload/worldcup2018/players/267785.png', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(614, 18, '韩国', '文宣民', '中场', '172cm', '68kg', '1992/6/9', 2, 146, 'http://sports.sohu.com/upload/worldcup2018/players/307514.png', 0, 0, 0, 0, 28, 2, 0, 0, 1, 0),
(615, 10, '韩国', '李昇祐', '中场', '170cm', '63kg', '1998/1/6', 0, 44, 'http://sports.sohu.com/upload/worldcup2018/players/773497.png', 0, 0, 0, 0, 24, 1, 0, 0, 1, 0),
(616, 8, '韩国', '朱世钟', '中场', '176cm', '70kg', '1990/10/30', 1, 85, 'http://sports.sohu.com/upload/worldcup2018/players/851180.png', 0, 1, 0, 0, 34, 1, 0, 0, 0, 0),
(617, 3, '韩国', '郑升炫', '后卫', '188cm', '74kg', '1994/4/3', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/947318.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(618, 4, '韩国', '吴反锡', '后卫', '189cm', '79kg', '1988/5/20', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/1104823.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(619, 4, '俄罗斯', '伊格纳舍维奇', '后卫', '186cm', '84kg', '1979/7/14', 5, 510, 'http://sports.sohu.com/upload/worldcup2018/players/13303.png', 0, 0, 2, 1, 171, 7, 0, 0, 0, 0),
(620, 10, '墨西哥', '多斯桑托斯', '中场', '178cm', '70kg', '1989/5/11', 0, 13, 'http://sports.sohu.com/upload/worldcup2018/players/28366.png', 0, 0, 0, 0, 2, 1, 0, 0, 0, 0),
(621, 6, '墨西哥', '霍纳桑-多斯桑托斯', '中场', '173cm', '69kg', '1990/4/26', 0, 35, 'http://sports.sohu.com/upload/worldcup2018/players/84835.png', 0, 0, 0, 0, 26, 1, 0, 0, 0, 0),
(622, 20, '墨西哥', '阿基诺', '中场', '168cm', '64kg', '1990/2/11', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/122092.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(623, 3, '葡萄牙', '佩佩', '后卫', '188cm', '81kg', '1983/2/26', 4, 360, 'http://sports.sohu.com/upload/worldcup2018/players/5884.png', 1, 0, 2, 1, 182, 6, 0, 0, 0, 0),
(624, 15, '葡萄牙', '里卡多-佩雷拉', '后卫', '174cm', '70kg', '1993/10/6', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/221200.png', 0, 0, 0, 0, 48, 2, 0, 0, 0, 0),
(625, 1, '德国', '诺伊尔', '守门员', '193cm', '93kg', '1986/3/27', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/8959.png', 0, 0, 0, 0, 109, 4, 11, 0, 0, 0),
(626, 11, '德国', '罗伊斯', '前锋', '180cm', '67kg', '1989/5/31', 2, 210, 'http://sports.sohu.com/upload/worldcup2018/players/37092.png', 1, 1, 3, 1, 117, 3, 0, 0, 0, 0),
(627, 8, '瑞典', '埃克达尔', '中场', '186cm', '75kg', '1989/7/28', 5, 421, 'http://sports.sohu.com/upload/worldcup2018/players/21992.png', 0, 0, 3, 0, 164, 4, 0, 0, 1, 0),
(628, 1, '瑞典', '罗宾-奥尔森', '守门员', '198cm', '89kg', '1990/1/8', 5, 450, 'http://sports.sohu.com/upload/worldcup2018/players/26025.png', 0, 0, 0, 0, 149, 4, 10, 0, 0, 0),
(629, 19, '瑞典', '马库斯-罗登', '中场', '182cm', '76kg', '1991/5/11', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/209082.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(630, 3, '突尼斯', '贝纳卢安', '后卫', '185cm', '75kg', '1987/3/28', 0, 49, 'http://sports.sohu.com/upload/worldcup2018/players/21515.png', 0, 0, 0, 0, 16, 3, 0, 0, 0, 0),
(631, 19, '突尼斯', '哈利法', '前锋', '185cm', '72kg', '1986/10/14', 0, 5, 'http://sports.sohu.com/upload/worldcup2018/players/118165.png', 0, 0, 0, 0, 1, 1, 0, 0, 0, 0),
(632, 22, '突尼斯', '哈桑', '守门员', '186cm', '70kg', '1995/3/5', 1, 15, 'http://sports.sohu.com/upload/worldcup2018/players/227860.png', 0, 0, 0, 0, 5, 1, 3, 0, 0, 0),
(633, 7, '突尼斯', '哈奥', '前锋', '180cm', '76kg', '1995/4/27', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/346262.png', 0, 0, 1, 0, 33, 5, 0, 0, 0, 0),
(634, 17, '突尼斯', '斯希里', '中场', '185cm', '69kg', '1995/5/10', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/591706.png', 0, 0, 0, 0, 166, 8, 0, 0, 0, 0),
(635, 11, '突尼斯', '布龙', '后卫', '186cm', '75kg', '1995/6/19', 2, 114, 'http://sports.sohu.com/upload/worldcup2018/players/1011877.png', 1, 0, 1, 1, 52, 4, 0, 0, 0, 0),
(636, 15, '突尼斯', '哈利勒', '前锋', '187cm', '75kg', '1994/12/21', 0, 13, 'http://sports.sohu.com/upload/worldcup2018/players/1090380.png', 0, 0, 0, 0, 4, 0, 0, 0, 0, 0),
(637, 10, '巴拿马', '迪亚斯', '前锋', '181cm', '72kg', '1997/5/12', 0, 27, 'http://sports.sohu.com/upload/worldcup2018/players/270311.png', 0, 0, 0, 0, 4, 2, 0, 0, 0, 0),
(638, 21, '巴拿马', '何塞-罗德里格斯', '中场', '180cm', '77kg', '1998/6/19', 3, 243, 'http://sports.sohu.com/upload/worldcup2018/players/1004445.png', 0, 0, 2, 1, 68, 9, 0, 0, 0, 0),
(639, 11, '哥伦比亚', '夸德拉多', '中场', '179cm', '72kg', '1988/5/26', 4, 331, 'http://sports.sohu.com/upload/worldcup2018/players/47743.png', 1, 1, 5, 2, 156, 6, 0, 0, 1, 0),
(640, 22, '哥伦比亚', '何塞-夸德拉多', '守门员', '180cm', '80kg', '1985/6/1', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/358142.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(641, 22, '乌拉圭', '马丁-卡塞雷斯', '后卫', '178cm', '75kg', '1987/4/7', 5, 450, 'http://sports.sohu.com/upload/worldcup2018/players/28186.png', 0, 0, 5, 1, 239, 3, 0, 0, 0, 0),
(642, 20, '乌拉圭', '乌里塔维斯卡亚', '前锋', '172cm', '66kg', '1990/3/19', 0, 17, 'http://sports.sohu.com/upload/worldcup2018/players/37792.png', 0, 0, 0, 0, 10, 0, 0, 0, 0, 0),
(643, 15, '英格兰', '卡希尔', '后卫', '191cm', '85kg', '1985/12/19', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/9628.png', 0, 0, 0, 0, 42, 1, 0, 0, 0, 0),
(644, 17, '英格兰', '德尔夫', '后卫', '174cm', '78kg', '1989/11/21', 2, 220, 'http://sports.sohu.com/upload/worldcup2018/players/24048.png', 0, 0, 2, 1, 152, 4, 0, 0, 0, 0),
(645, 16, '英格兰', '菲尔-琼斯', '后卫', '182cm', '72kg', '1992/2/21', 2, 180, 'http://sports.sohu.com/upload/worldcup2018/players/93868.png', 0, 0, 0, 0, 146, 3, 0, 0, 0, 0),
(646, 9, '英格兰', '哈里-凯恩', '前锋', '188cm', '89kg', '1993/7/28', 6, 573, 'http://sports.sohu.com/upload/worldcup2018/players/108579.png', 6, 0, 12, 6, 140, 12, 0, 0, 0, 0),
(647, 21, '英格兰', '奇克', '中场', '190cm', '73kg', '1996/1/23', 3, 274, 'http://sports.sohu.com/upload/worldcup2018/players/284441.png', 0, 1, 2, 1, 118, 4, 0, 0, 1, 0),
(648, 22, '英格兰', '阿诺德', '后卫', '175cm', '70kg', '1998/10/7', 1, 79, 'http://sports.sohu.com/upload/worldcup2018/players/779556.png', 0, 0, 0, 0, 54, 1, 0, 0, 0, 0),
(649, 1, '秘鲁', '佩德罗-加莱塞', '守门员', '189cm', '79kg', '1990/2/23', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/34006.png', 0, 0, 0, 0, 80, 2, 7, 0, 0, 0),
(650, 8, '秘鲁', '卡塔赫纳', '中场', '179cm', '76kg', '1994/9/23', 0, 11, 'http://sports.sohu.com/upload/worldcup2018/players/378808.png', 0, 0, 0, 0, 3, 0, 0, 0, 0, 0),
(651, 8, '摩洛哥', '卡里姆-艾哈迈迪', '中场', '179cm', '78kg', '1985/1/27', 3, 266, 'http://sports.sohu.com/upload/worldcup2018/players/2660.png', 0, 0, 1, 0, 99, 4, 0, 0, 2, 0),
(652, 14, '摩洛哥', ' 姆巴克-布苏法', '中场', '167cm', '59kg', '1984/8/15', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/6235.png', 0, 0, 1, 0, 126, 4, 0, 0, 1, 0),
(653, 20, '摩洛哥', '阿齐兹-布哈杜兹', '前锋', '188cm', '80kg', '1987/3/30', 0, 18, 'http://sports.sohu.com/upload/worldcup2018/players/26527.png', 0, 0, 0, 0, 2, 2, 0, 0, 0, 0),
(654, 5, '摩洛哥', '贝纳蒂亚', '后卫', '188cm', '88kg', '1987/4/17', 2, 180, 'http://sports.sohu.com/upload/worldcup2018/players/27068.png', 0, 0, 5, 2, 128, 2, 0, 0, 1, 0),
(655, 16, '摩洛哥', '努尔丁-阿姆拉巴特', '中场', '178cm', '77kg', '1987/3/31', 3, 256, 'http://sports.sohu.com/upload/worldcup2018/players/27714.png', 0, 0, 1, 0, 77, 3, 0, 0, 1, 0),
(656, 23, '摩洛哥', '卡塞拉-冈萨雷斯', '中场', '176cm', '67kg', '1989/7/1', 0, 15, 'http://sports.sohu.com/upload/worldcup2018/players/39462.png', 0, 0, 0, 0, 9, 0, 0, 0, 0, 0),
(657, 17, '摩洛哥', '纳比尔-迪拉尔', '后卫', '187cm', '82kg', '1986/2/25', 2, 180, 'http://sports.sohu.com/upload/worldcup2018/players/42102.png', 0, 0, 1, 0, 94, 3, 0, 0, 0, 0),
(658, 10, '摩洛哥', '尤尼斯-贝尔汉达', '中场', '174cm', '75kg', '1990/2/25', 3, 228, 'http://sports.sohu.com/upload/worldcup2018/players/72999.png', 0, 0, 4, 2, 97, 3, 0, 0, 0, 0),
(659, 13, '摩洛哥', '哈立德-布塔伊卜', '前锋', '190cm', '80kg', '1987/4/24', 2, 141, 'http://sports.sohu.com/upload/worldcup2018/players/141072.png', 1, 0, 3, 2, 28, 2, 0, 0, 0, 0),
(660, 12, '摩洛哥', '穆尼尔', '守门员', '190cm', '88kg', '1989/5/10', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/141967.png', 0, 0, 0, 0, 79, 4, 4, 0, 1, 0),
(661, 11, '摩洛哥', '费萨尔-法伊尔', '中场', '178cm', '72kg', '1988/8/1', 0, 31, 'http://sports.sohu.com/upload/worldcup2018/players/143786.png', 0, 1, 0, 0, 20, 1, 0, 0, 0, 0),
(662, 6, '摩洛哥', '罗曼-塞斯', '后卫', '190cm', '76kg', '1990/3/26', 2, 180, 'http://sports.sohu.com/upload/worldcup2018/players/187729.png', 0, 0, 1, 0, 95, 3, 0, 0, 0, 0),
(663, 1, '摩洛哥', '博诺', '守门员', '190cm', '77kg', '1991/4/5', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/244009.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(664, 7, '摩洛哥', '齐耶赫', '中场', '180cm', '70kg', '1993/3/19', 3, 265, 'http://sports.sohu.com/upload/worldcup2018/players/249437.png', 0, 0, 4, 2, 108, 3, 0, 0, 0, 0),
(665, 21, '摩洛哥', '苏夫延-阿姆拉巴特', '中场', '183cm', '77kg', '1996/8/21', 0, 14, 'http://sports.sohu.com/upload/worldcup2018/players/359272.png', 0, 0, 0, 0, 4, 1, 0, 0, 0, 0),
(666, 15, '摩洛哥', '贝纳赛尔', '中场', '184cm', '75kg', '1996/7/7', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/866424.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(667, 2, '摩洛哥', '阿什拉夫-哈基米', '后卫', '179cm', '65kg', '1998/11/4', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/903858.png', 0, 0, 0, 0, 114, 4, 0, 0, 1, 0),
(668, 18, '摩洛哥', '阿米恩-阿里特', '中场', '179cm', '66kg', '1997/6/18', 1, 82, 'http://sports.sohu.com/upload/worldcup2018/players/941698.png', 0, 0, 3, 1, 27, 0, 0, 0, 0, 0),
(669, 3, '摩洛哥', '门迪勒', '后卫', '179cm', '70kg', '1997/10/21', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/1017851.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(670, 17, '法国', '拉米', '后卫', '190cm', '90kg', '1985/12/27', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/24057.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(671, 15, '法国', '恩宗齐', '中场', '197cm', '87kg', '1988/12/15', 1, 141, 'http://sports.sohu.com/upload/worldcup2018/players/51652.png', 0, 0, 0, 0, 100, 1, 0, 0, 0, 0),
(672, 22, '法国', '门迪', '后卫', '183cm', '84kg', '1994/7/17', 0, 40, 'http://sports.sohu.com/upload/worldcup2018/players/139225.png', 0, 0, 0, 0, 26, 0, 0, 0, 0, 0),
(673, 18, '法国', '费基尔', '前锋', '173cm', '76kg', '1993/7/18', 0, 68, 'http://sports.sohu.com/upload/worldcup2018/players/337671.png', 0, 0, 3, 2, 32, 1, 0, 0, 0, 0),
(674, 13, '塞内加尔', '阿尔弗雷德-恩迪亚耶', '中场', '186cm', '80kg', '1990/3/6', 2, 152, 'http://sports.sohu.com/upload/worldcup2018/players/32897.png', 0, 0, 0, 0, 47, 2, 0, 0, 0, 0),
(675, 15, '塞内加尔', '迪亚夫拉-萨科', '前锋', '184cm', '79kg', '1989/12/24', 0, 4, 'http://sports.sohu.com/upload/worldcup2018/players/74069.png', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(676, 12, '塞内加尔', '萨巴利', '后卫', '174cm', '71kg', '1993/3/5', 3, 254, 'http://sports.sohu.com/upload/worldcup2018/players/111803.png', 0, 0, 2, 1, 110, 3, 0, 0, 1, 0),
(677, 19, '塞内加尔', '尼昂', '前锋', '184cm', '74kg', '1994/12/19', 3, 247, 'http://sports.sohu.com/upload/worldcup2018/players/139228.png', 1, 1, 8, 5, 67, 3, 0, 0, 2, 0),
(678, 6, '塞内加尔', '萨里夫-萨内', '中场', '196cm', '84kg', '1990/8/25', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/143398.png', 0, 0, 3, 0, 136, 4, 0, 0, 1, 0),
(679, 23, '塞内加尔', '戈米', '守门员', '196cm', '80kg', '1993/9/5', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/143695.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(680, 17, '塞内加尔', '巴杜-恩迪亚耶', '中场', '181cm', '74kg', '1990/10/27', 1, 81, 'http://sports.sohu.com/upload/worldcup2018/players/228342.png', 0, 0, 1, 0, 16, 2, 0, 0, 0, 0),
(681, 22, '塞内加尔', '瓦格', '后卫', '177cm', '70kg', '1998/10/4', 2, 196, 'http://sports.sohu.com/upload/worldcup2018/players/816568.png', 1, 0, 1, 1, 71, 4, 0, 0, 0, 0),
(682, 1, '沙特阿拉伯', '阿卜杜拉-阿尔-马约夫', '守门员', '178cm', '98kg', '1987/1/23', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/118159.png', 0, 0, 0, 0, 38, 5, 2, 0, 0, 0),
(683, 7, '沙特阿拉伯', '萨尔曼-法拉杰', '中场', '179cm', '63kg', '1989/8/1', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/148858.png', 1, 0, 2, 1, 256, 7, 0, 0, 0, 0),
(684, 9, '沙特阿拉伯', '哈坦-巴赫布里', '中场', '170cm', '66kg', '1992/7/16', 2, 158, 'http://sports.sohu.com/upload/worldcup2018/players/548400.png', 0, 0, 5, 2, 70, 4, 0, 0, 0, 0),
(685, 6, '沙特阿拉伯', '穆罕默德-布莱克', '后卫', '173cm', '61kg', '1992/9/15', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/610760.png', 0, 0, 0, 0, 241, 7, 0, 0, 0, 0),
(686, 4, '沙特阿拉伯', '阿里-阿尔布莱希', '后卫', '182cm', '83kg', '1989/11/21', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/1265186.png', 0, 0, 0, 0, 41, 1, 0, 0, 0, 0),
(687, 16, '西班牙', '蒙雷亚尔', '后卫', '179cm', '72kg', '1986/2/26', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/17088.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(688, 5, '西班牙', '布斯克茨', '中场', '189cm', '78kg', '1988/7/16', 4, 390, 'http://sports.sohu.com/upload/worldcup2018/players/39433.png', 0, 1, 5, 1, 305, 6, 0, 0, 1, 0),
(689, 22, '比利时', '查德利', '中场', '187cm', '85kg', '1989/8/2', 4, 327, 'http://sports.sohu.com/upload/worldcup2018/players/32492.png', 1, 1, 3, 2, 174, 2, 0, 0, 0, 0),
(690, 18, '比利时', '贾努扎伊', '前锋', '180cm', '75kg', '1995/2/5', 1, 86, 'http://sports.sohu.com/upload/worldcup2018/players/328145.png', 1, 0, 1, 1, 19, 0, 0, 0, 0, 0),
(691, 1, '日本', '川岛永嗣', '守门员', '185cm', '74kg', '1983/3/20', 4, 360, 'http://sports.sohu.com/upload/worldcup2018/players/24201.png', 0, 0, 0, 0, 107, 7, 13, 0, 1, 0),
(692, 20, '日本', '槙野智章', '后卫', '182cm', '77kg', '1987/5/11', 1, 90, 'http://sports.sohu.com/upload/worldcup2018/players/24357.png', 0, 0, 2, 0, 83, 1, 0, 0, 1, 0),
(693, 5, '日本', '长友佑都', '后卫', '170cm', '68kg', '1986/9/12', 4, 360, 'http://sports.sohu.com/upload/worldcup2018/players/34639.png', 0, 1, 0, 0, 180, 7, 0, 0, 0, 0),
(694, 6, '日本', '远藤航', '后卫', '178cm', '75kg', '1993/2/9', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/143040.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(695, 1, '阿根廷', '纳乌埃尔-古兹曼', '守门员', '193cm', '93kg', '1986/2/10', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/106382.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(696, 23, '瑞士', '沙奇里', '中场', '165cm', '78kg', '1991/10/10', 4, 351, 'http://sports.sohu.com/upload/worldcup2018/players/65953.png', 1, 1, 6, 1, 176, 4, 0, 0, 1, 0),
(697, 12, '瑞士', '姆沃戈', '守门员', '186cm', '84kg', '1994/6/6', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/149656.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(698, 17, '瑞士', '扎卡里亚', '中场', '189cm', '77kg', '1996/11/20', 0, 49, 'http://sports.sohu.com/upload/worldcup2018/players/770677.png', 0, 1, 0, 0, 26, 1, 0, 0, 1, 0),
(699, 9, '日本', '冈崎慎司', '前锋', '174cm', '70kg', '1986/4/16', 1, 67, 'http://sports.sohu.com/upload/worldcup2018/players/19303.png', 0, 0, 0, 0, 12, 0, 0, 0, 0, 0),
(700, 4, '日本', '本田圭佑', '中场', '182cm', '74kg', '1986/6/13', 0, 47, 'http://sports.sohu.com/upload/worldcup2018/players/24238.png', 1, 1, 3, 3, 38, 1, 0, 0, 0, 0),
(701, 10, '日本', '香川真司', '中场', '175cm', '68kg', '1989/3/17', 3, 232, 'http://sports.sohu.com/upload/worldcup2018/players/34853.png', 1, 1, 2, 1, 127, 6, 0, 0, 0, 0),
(702, 15, '日本', '大迫勇也', '前锋', '182cm', '71kg', '1990/5/18', 3, 308, 'http://sports.sohu.com/upload/worldcup2018/players/48240.png', 1, 0, 7, 5, 59, 7, 0, 0, 0, 0),
(703, 8, '日本', '原口元气', '中场', '178cm', '68kg', '1991/5/9', 3, 246, 'http://sports.sohu.com/upload/worldcup2018/players/48243.png', 1, 0, 3, 1, 78, 5, 0, 0, 0, 0),
(704, 19, '日本', '酒井宏树', '后卫', '183cm', '70kg', '1990/4/12', 4, 360, 'http://sports.sohu.com/upload/worldcup2018/players/48335.png', 0, 0, 1, 0, 184, 7, 0, 0, 0, 0),
(705, 11, '日本', '宇佐美贵史', '中场', '178cm', '72kg', '1992/5/6', 1, 68, 'http://sports.sohu.com/upload/worldcup2018/players/48437.png', 0, 0, 2, 2, 35, 1, 0, 0, 0, 0),
(706, 16, '日本', '山口萤', '中场', '173cm', '72kg', '1990/10/6', 1, 109, 'http://sports.sohu.com/upload/worldcup2018/players/109352.png', 0, 0, 0, 0, 101, 2, 0, 0, 0, 0),
(707, 18, '日本', '大岛僚太', '中场', '168cm', '64kg', '1993/1/23', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/147080.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(708, 7, '日本', '柴崎岳', '中场', '175cm', '64kg', '1992/5/28', 4, 341, 'http://sports.sohu.com/upload/worldcup2018/players/148352.png', 0, 1, 0, 0, 219, 6, 0, 0, 1, 0),
(709, 13, '日本', '武藤嘉纪', '前锋', '179cm', '72kg', '1992/7/15', 1, 82, 'http://sports.sohu.com/upload/worldcup2018/players/335047.png', 0, 0, 1, 0, 15, 1, 0, 0, 0, 0),
(710, 14, '塞尔维亚', '米兰-罗迪奇', '后卫', '185cm', '69kg', '1991/4/2', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/77678.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(711, 5, '塞尔维亚', '斯帕济奇', '后卫', '188cm', '82kg', '1993/2/13', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/111752.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(712, 19, '塞尔维亚', '卢卡-约维奇', '前锋', '181cm', '75kg', '1997/12/23', 0, 1, 'http://sports.sohu.com/upload/worldcup2018/players/319129.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(713, 15, '塞尔维亚', '米伦科维奇', '后卫', '195cm', '90kg', '1997/10/12', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/976055.png', 0, 0, 0, 0, 127, 4, 0, 0, 0, 0),
(714, 14, '澳大利亚', '杰米-麦克拉伦', '前锋', '178cm', '72kg', '1993/7/29', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/333143.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(715, 22, '日本', '吉田麻也', '后卫', '189cm', '78kg', '1988/8/24', 4, 360, 'http://sports.sohu.com/upload/worldcup2018/players/24248.png', 0, 0, 2, 0, 296, 7, 0, 0, 0, 0),
(716, 19, '摩洛哥', '约瑟夫-恩尼西里', '前锋', '188cm', '75kg', '1997/6/1', 0, 18, 'http://sports.sohu.com/upload/worldcup2018/players/1016923.png', 1, 0, 1, 1, 6, 1, 0, 0, 0, 0),
(717, 23, '韩国', '赵贤祐', '守门员', '189cm', '75kg', '1991/9/25', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/994365.png', 0, 0, 0, 0, 82, 3, 12, 0, 0, 0),
(718, 17, '韩国', '李在成', '中场', '180cm', '70kg', '1992/8/10', 3, 270, 'http://sports.sohu.com/upload/worldcup2018/players/537552.png', 0, 1, 1, 1, 90, 3, 0, 0, 1, 0),
(719, 9, '秘鲁', '格雷罗', '前锋', '185cm', '88kg', '1984/1/1', 2, 208, 'http://sports.sohu.com/upload/worldcup2018/players/338.png', 1, 1, 7, 5, 49, 1, 0, 0, 1, 0),
(720, 19, '巴拿马', '阿比拉', '中场', '182cm', '74kg', '1997/1/4', 1, 109, 'http://sports.sohu.com/upload/worldcup2018/players/1046383.png', 0, 1, 1, 0, 37, 3, 0, 0, 1, 0),
(721, 15, '阿根廷', '恩佐-佩雷斯', '中场', '177cm', '71kg', '1986/2/22', 3, 195, 'http://sports.sohu.com/upload/worldcup2018/players/33958.png', 0, 0, 1, 0, 111, 5, 0, 0, 0, 0),
(722, 18, '哥伦比亚', '法里德-迪亚斯', '后卫', '168cm', '70kg', '1983/7/20', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/221146.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(723, 5, '墨西哥', '古铁雷斯', '中场', '176cm', '70kg', '1995/6/15', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/590700.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(724, 22, '哥斯达黎加', '古铁雷斯', '后卫', '178cm', '80kg', '1989/6/9', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/256123.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(725, 2, '塞内加尔', '姆本格', '中场', '178cm', '68kg', '1993/12/1', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/1146746.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(726, 16, '克罗地亚', '卡利尼奇', '前锋', '187cm', '81kg', '1988/1/5', 0, 0, 'http://sports.sohu.com/upload/worldcup2018/players/31273.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(727, 9, '冰岛', '西古拉松', '前锋', '187cm', '85kg', '1991/2/26', 0, 40, 'http://sports.sohu.com/upload/worldcup2018/players/48611.png', 0, 0, 0, 0, 19, 2, 0, 0, 0, 0),
(728, 9, '秘鲁', '\"Bulos', ' Ivan\"', '前锋', '186cm', '73kg', 1993, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `player_match`
--

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
  `hongpai` int(11) NOT NULL COMMENT '红牌数'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `stoptalking`
--

CREATE TABLE `stoptalking` (
  `ID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `admin_ID` int(11) NOT NULL,
  `begin` varchar(200) NOT NULL,
  `end` varchar(200) NOT NULL,
  `cause` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `team`
--

CREATE TABLE `team` (
  `country` varchar(200) NOT NULL COMMENT '球队所属国家',
  `coach` varchar(200) NOT NULL COMMENT '球队教练',
  `history` int(11) NOT NULL COMMENT '历史冠军次数',
  `jointime` int(11) NOT NULL COMMENT '加入足联时间',
  `createtime` int(11) NOT NULL COMMENT '球队成立时间',
  `attendedtime` int(11) NOT NULL COMMENT '参加世界杯次数',
  `rank` int(11) NOT NULL COMMENT '球队世界排名',
  `image` varchar(1000) NOT NULL,
  `introduction` text NOT NULL COMMENT '简介',
  `f_group` varchar(10) NOT NULL COMMENT '小组赛组别',
  `jifen` int(11) NOT NULL COMMENT '小组赛积分',
  `win` int(11) NOT NULL COMMENT '小组赛赢球的次数',
  `lose` int(11) NOT NULL COMMENT '小组赛失球的次数',
  `equal` int(11) NOT NULL COMMENT '小组赛平局的次数',
  `get_score` int(11) NOT NULL COMMENT '小组赛进球数',
  `lose_score` int(11) NOT NULL COMMENT '小组赛失球数',
  `jing_score` int(11) NOT NULL COMMENT '小组赛净胜球'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `team`
--

INSERT INTO `team` (`country`, `coach`, `history`, `jointime`, `createtime`, `attendedtime`, `rank`, `image`, `introduction`, `f_group`, `jifen`, `win`, `lose`, `equal`, `get_score`, `lose_score`, `jing_score`) VALUES
('丹麦', '哈雷德', 0, 1904, 1889, 4, 12, 'http://sports.sohu.com/upload/worldcup2018/team/4476.png', '', 'C', 5, 1, 0, 2, 2, 1, 1),
('乌拉圭', '斯巴雷斯', 2, 1923, 1900, 12, 14, 'http://sports.sohu.com/upload/worldcup2018/team/4725.png', '', 'A', 9, 3, 0, 0, 5, 0, 5),
('伊朗', '奎罗兹', 0, 1945, 1920, 4, 37, 'http://sports.sohu.com/upload/worldcup2018/team/4766.png', '', 'B', 4, 1, 1, 1, 2, 2, 0),
('俄罗斯', '切尔切索夫', 0, 1942, 1912, 10, 70, 'http://sports.sohu.com/upload/worldcup2018/team/4694.png', '', 'A', 6, 2, 1, 0, 8, 4, 4),
('克罗地亚', '达里奇', 0, 1933, 1990, 4, 20, 'http://sports.sohu.com/upload/worldcup2018/team/4715.png', '', 'D', 9, 3, 0, 0, 7, 1, 6),
('冰岛', '哈尔格里姆松', 0, 1947, 1912, 0, 22, 'http://sports.sohu.com/upload/worldcup2018/team/4708.png', '', 'D', 1, 0, 2, 1, 2, 5, -3),
('哥伦比亚', '佩克尔曼', 0, 1936, 1924, 5, 16, 'http://sports.sohu.com/upload/worldcup2018/team/4820.png', '', 'H', 6, 2, 1, 0, 5, 2, 3),
('哥斯达黎加', '拉米雷斯', 0, 1927, 1921, 4, 23, 'http://sports.sohu.com/upload/worldcup2018/team/4756.png', '', 'E', 1, 0, 2, 1, 2, 5, -3),
('埃及', '库珀', 0, 1923, 1921, 2, 45, 'http://sports.sohu.com/upload/worldcup2018/team/4758.png', '', 'A', 0, 0, 3, 0, 2, 6, -4),
('塞内加尔', '特尔季奇', 0, 1962, 1960, 1, 27, 'http://sports.sohu.com/upload/worldcup2018/team/4739.png', '', 'H', 4, 1, 1, 1, 4, 4, 0),
('塞尔维亚', '西塞德', 0, 2006, 2006, 11, 34, 'http://sports.sohu.com/upload/worldcup2018/team/6355.png', '', 'E', 3, 1, 2, 0, 2, 4, -2),
('墨西哥', '奥索里奥', 0, 1930, 1927, 15, 15, 'http://sports.sohu.com/upload/worldcup2018/team/4781.png', '', 'F', 6, 2, 1, 0, 3, 4, -1),
('尼日利亚', '罗尔', 0, 1945, 1945, 5, 48, 'http://sports.sohu.com/upload/worldcup2018/team/4785.png', '', 'D', 3, 1, 2, 0, 3, 4, -1),
('巴拿马', '戈麦斯', 0, 1938, 1937, 0, 55, 'http://sports.sohu.com/upload/worldcup2018/team/5164.png', '', 'G', 0, 0, 3, 0, 2, 11, -9),
('巴西', '蒂特', 5, 1923, 1914, 20, 2, 'http://sports.sohu.com/upload/worldcup2018/team/4748.png', '', 'E', 7, 2, 0, 1, 5, 1, 4),
('德国', '勒夫', 4, 1904, 1899, 18, 1, 'http://sports.sohu.com/upload/worldcup2018/team/4711.png', '', 'F', 3, 1, 2, 0, 2, 4, -2),
('摩洛哥', '勒纳尔', 0, 1960, 1955, 4, 41, 'http://sports.sohu.com/upload/worldcup2018/team/4778.png', '', 'B', 1, 0, 2, 1, 2, 4, -2),
('日本', '西野朗', 0, 1929, 1921, 5, 61, 'http://sports.sohu.com/upload/worldcup2018/team/4770.png', '', 'H', 4, 1, 1, 1, 4, 4, 0),
('比利时', '马丁内昕', 0, 1904, 1985, 12, 3, 'http://sports.sohu.com/upload/worldcup2018/team/4717.png', '', 'G', 9, 3, 0, 0, 9, 2, 7),
('沙特阿拉伯', '皮济', 0, 1959, 1956, 4, 67, 'http://sports.sohu.com/upload/worldcup2018/team/4834.png', '', 'A', 3, 1, 2, 0, 2, 7, -5),
('法国', '德尚', 1, 1904, 1904, 14, 7, 'http://sports.sohu.com/upload/worldcup2018/team/4481.png', '', 'C', 7, 2, 0, 1, 3, 1, 2),
('波兰', '纳瓦尔卡', 0, 1921, 1919, 8, 8, 'http://sports.sohu.com/upload/worldcup2018/team/4703.png', '', 'H', 3, 1, 2, 0, 2, 5, -3),
('澳大利亚', '范尔维克', 0, 1956, 1911, 4, 36, 'http://sports.sohu.com/upload/worldcup2018/team/4741.png', '', 'C', 1, 0, 2, 1, 2, 5, -3),
('瑞典', '安德松', 0, 1904, 1904, 11, 24, 'http://sports.sohu.com/upload/worldcup2018/team/4688.png', '', 'F', 6, 2, 1, 0, 5, 2, 3),
('瑞士', '斯托科维奇', 0, 1904, 1895, 10, 6, 'http://sports.sohu.com/upload/worldcup2018/team/4699.png', '', 'E', 5, 1, 0, 2, 5, 4, 1),
('秘鲁', '加雷卡', 0, 1932, 1925, 4, 11, 'http://sports.sohu.com/upload/worldcup2018/team/4790.png', '', 'C', 3, 1, 2, 0, 2, 2, 0),
('突尼斯', '马鲁尔', 0, 1960, 1956, 4, 21, 'http://sports.sohu.com/upload/worldcup2018/team/4729.png', '', 'G', 3, 1, 2, 0, 5, 8, -3),
('英格兰', '索斯盖特', 1, 1906, 1872, 14, 12, 'http://sports.sohu.com/upload/worldcup2018/team/4713.png', '', 'G', 6, 2, 1, 0, 8, 3, 5),
('葡萄牙', '桑托斯', 0, 1923, 1914, 6, 4, 'http://sports.sohu.com/upload/worldcup2018/team/4704.png', '', 'B', 5, 1, 0, 2, 5, 4, 1),
('西班牙', '洛佩特吉', 1, 1913, 1909, 14, 10, 'http://sports.sohu.com/upload/worldcup2018/team/4698.png', '', 'B', 5, 1, 0, 2, 6, 5, 1),
('阿根廷', '桑保利', 2, 1904, 1901, 16, 5, 'http://sports.sohu.com/upload/worldcup2018/team/4819.png', '', 'D', 4, 1, 1, 1, 3, 5, -2),
('韩国', '申台龙', 0, 1948, 1928, 9, 57, 'http://sports.sohu.com/upload/worldcup2018/team/4735.png', '', 'F', 3, 1, 2, 0, 3, 3, 0),
('﻿country', 'coach', 0, 0, 0, 0, 0, '', '', 'f_group', 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `team_match`
--

CREATE TABLE `team_match` (
  `team` varchar(200) NOT NULL COMMENT '球队名称',
  `match_ID` int(11) NOT NULL COMMENT '比赛编号',
  `jiaoqiu` int(11) NOT NULL COMMENT '球队单场比赛角球数',
  `yuewei` int(11) NOT NULL COMMENT '球队单场比赛越位数',
  `shemen` int(11) NOT NULL COMMENT '球队单场比赛射门数',
  `huangpai` int(11) NOT NULL COMMENT '球队单场比赛黄牌数',
  `huanren` int(11) NOT NULL COMMENT '球队单场比赛换人数',
  `fangui` int(11) NOT NULL COMMENT '球队单场比赛犯规数',
  `renyiqiu` int(11) NOT NULL COMMENT '球队单场比赛任意球数',
  `kongqiulv` varchar(10) NOT NULL COMMENT '球队单场比赛控球率'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `useinfo`
--

CREATE TABLE `useinfo` (
  `useID` int(11) NOT NULL COMMENT '用户ID',
  `sex` enum('男','女') NOT NULL COMMENT '用户性别',
  `image` varchar(200) NOT NULL COMMENT '头像',
  `introduction` varchar(200) NOT NULL COMMENT '个人简介'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL COMMENT '用户ID',
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '用户名',
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `passage_ID` (`passage_ID`),
  ADD KEY `user_ID` (`user_ID`);

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `passage_ID` (`passage_ID`),
  ADD KEY `user_ID` (`user_ID`);

--
-- Indexes for table `match`
--
ALTER TABLE `match`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `url` (`url`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `admin_ID` (`admin_ID`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `passage`
--
ALTER TABLE `passage`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `author_ID` (`author_ID`);

--
-- Indexes for table `passage_key`
--
ALTER TABLE `passage_key`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `player_match`
--
ALTER TABLE `player_match`
  ADD PRIMARY KEY (`player_ID`,`match_ID`),
  ADD KEY `match_ID` (`match_ID`);

--
-- Indexes for table `stoptalking`
--
ALTER TABLE `stoptalking`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `admin_ID` (`admin_ID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`country`);

--
-- Indexes for table `team_match`
--
ALTER TABLE `team_match`
  ADD PRIMARY KEY (`team`,`match_ID`),
  ADD KEY `match_ID` (`match_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `favorite`
--
ALTER TABLE `favorite`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号';
--
-- 使用表AUTO_INCREMENT `message`
--
ALTER TABLE `message`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT '消息编号';
--
-- 使用表AUTO_INCREMENT `passage`
--
ALTER TABLE `passage`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章标号';
--
-- 使用表AUTO_INCREMENT `passage_key`
--
ALTER TABLE `passage_key`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT COMMENT '关键词ID';
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户ID';
--
-- 限制导出的表
--

--
-- 限制表 `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`user_ID`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- 限制表 `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `favorite_ibfk_1` FOREIGN KEY (`passage_ID`) REFERENCES `passage` (`ID`),
  ADD CONSTRAINT `favorite_ibfk_2` FOREIGN KEY (`user_ID`) REFERENCES `user` (`id`);

--
-- 限制表 `match`
--
ALTER TABLE `match`
  ADD CONSTRAINT `match_ibfk_1` FOREIGN KEY (`url`) REFERENCES `passage` (`ID`);

--
-- 限制表 `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`admin_ID`) REFERENCES `admin` (`ID`);

--
-- 限制表 `passage`
--
ALTER TABLE `passage`
  ADD CONSTRAINT `passage_ibfk_1` FOREIGN KEY (`author_ID`) REFERENCES `user` (`id`);

--
-- 限制表 `player_match`
--
ALTER TABLE `player_match`
  ADD CONSTRAINT `player_match_ibfk_1` FOREIGN KEY (`player_ID`) REFERENCES `player` (`ID`),
  ADD CONSTRAINT `player_match_ibfk_2` FOREIGN KEY (`match_ID`) REFERENCES `match` (`ID`);

--
-- 限制表 `stoptalking`
--
ALTER TABLE `stoptalking`
  ADD CONSTRAINT `stoptalking_ibfk_2` FOREIGN KEY (`admin_ID`) REFERENCES `admin` (`ID`),
  ADD CONSTRAINT `stoptalking_ibfk_3` FOREIGN KEY (`userID`) REFERENCES `user` (`id`);

--
-- 限制表 `team_match`
--
ALTER TABLE `team_match`
  ADD CONSTRAINT `team_match_ibfk_1` FOREIGN KEY (`team`) REFERENCES `team` (`country`),
  ADD CONSTRAINT `team_match_ibfk_2` FOREIGN KEY (`match_ID`) REFERENCES `match` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
