# Host: localhost  (Version: 5.5.53)
# Date: 2017-12-21 07:04:35
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "sy_adminuser"
#

DROP TABLE IF EXISTS `sy_adminuser`;
CREATE TABLE `sy_adminuser` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL COMMENT '帐号',
  `password` varchar(32) DEFAULT NULL COMMENT '密码',
  `admin` varchar(5) DEFAULT 'user' COMMENT '管理级别',
  `gid` int(8) DEFAULT '0' COMMENT '绑定留言本ID',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

#
# Data for table "sy_adminuser"
#

/*!40000 ALTER TABLE `sy_adminuser` DISABLE KEYS */;
INSERT INTO `sy_adminuser` VALUES (1,'admin','36a66808d4984f9d67ded413c3d7fee1','admin',0);
/*!40000 ALTER TABLE `sy_adminuser` ENABLE KEYS */;

#
# Structure for table "sy_guestbook"
#

DROP TABLE IF EXISTS `sy_guestbook`;
CREATE TABLE `sy_guestbook` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `gName` varchar(100) NOT NULL COMMENT '名称',
  `gLogo` varchar(100) DEFAULT 'tpl/guestbook/default/images/logo.jpg',
  `gIntroduction` text COMMENT '介绍',
  `gBanner` varchar(100) DEFAULT 'tpl/images/notlogo.jpg' COMMENT 'banner',
  `gTpl` varchar(30) DEFAULT 'default' COMMENT '模版',
  `gPag` int(5) DEFAULT '8' COMMENT '每页留言数',
  `gKeywords` varchar(160) DEFAULT NULL COMMENT '关键字',
  `gDescription` varchar(500) DEFAULT NULL COMMENT '简介',
  `gCheck` varchar(3) DEFAULT 'no' COMMENT '是否需要审核',
  `gDisplay` varchar(3) DEFAULT 'yes' COMMENT '是否显示留言列表',
  `gFilter` varchar(3) DEFAULT 'no' COMMENT '是否安全过滤留言',
  `gTongji` varchar(300) DEFAULT NULL COMMENT '统计代码',
  `gBeian` varchar(30) DEFAULT NULL COMMENT '备案',
  `gPowerby` varchar(100) DEFAULT NULL COMMENT '版权',
  `gNav` varchar(500) DEFAULT NULL COMMENT '自定义导航',
  `gHead` varchar(6) DEFAULT 'qqshow' COMMENT '调用头像类型',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

#
# Data for table "sy_guestbook"
#

/*!40000 ALTER TABLE `sy_guestbook` DISABLE KEYS */;
INSERT INTO `sy_guestbook` VALUES (1,'PHP开源多功能留言板-随意留言板官方站','tpl/guestbook/default/images/logo.jpg','<p>\r\n\t<span style=\"color:#E53333;\"><strong>很早之前做了一半，</strong></span><span style=\"color:#E53333;\"><strong>我也是拿留言板开始练手的。最近清理电脑翻出来的，花了点时间继续做完了，也是第一个发布的程序。</strong></span> \r\n</p>\r\n<p>\r\n\t<strong>特点：</strong> \r\n</p>\r\n<p>\r\n\t1、SpeedPHP框架驱动，高效轻快。\r\n</p>\r\n<p>\r\n\t2、可创建多个留言板；每个留言板都能设置不同的模板；<span>每个留言板都能设置单独管理员；</span> \r\n</p>\r\n<p>\r\n\t3、模板、程序分离，尽量标签化，可快速自制模板（懂一点前台技术就能自己做模板）。内置两套模板一个默认模板一个响应式模板（后期有时间会发布新模板）\r\n</p>\r\n<p>\r\n\t4、每个留言板都能调用。支持IFRAME调用和JS调用。\r\n</p>\r\n<p>\r\n\t<span>5、每个留言板支持自定义导航、自定义LOGO图片、Banner图片、SEO优化</span> \r\n</p>\r\n<p>\r\n\t6、更多特色自行挖掘\r\n</p>\r\n<p>\r\n\t<br />\r\n</p>\r\n<p>\r\n\t<strong><span style=\"font-family:\'Microsoft YaHei\';font-size:14px;\">如果有需求的话会一直更新下去，将留言板做到极致！</span></strong> \r\n</p>\r\n<p>\r\n\t<strong><span style=\"font-family:\'Microsoft YaHei\';font-size:14px;\">有问题可直接在下面留言 或 QQ：2674744602（工作时间不回）</span></strong> \r\n</p>\r\n','tpl/guestbook/default/images/gBanner.jpg','default',8,'PHP留言板,多功能留言板,可调用的留言板,留言板程序','PHP多功能开源留言板，随意留言板，将留言板做到极致！','no','yes','yes','站站统计','鄂ICP备15001104号-1','Copyright © 2017 素材牛 随意留言板','响应式演示|/index.php?c=guestbook&a=index&id=2\r\n留言板2演示|/index.php?c=guestbook&a=index&id=3','qqhead'),(2,'响应式演示','tpl/images/notlogo.jpg','很简单的响应式演示','tpl/images/notlogo.jpg','simple',8,'','','yes','yes','yes','','','','','qqhead'),(3,'留言板2演示','','可创建多个留言板','','default',8,'','','yes','yes','yes','站长统计','鄂ICP备15001104号-1','Copyright © 2017 素材牛 随意留言板','','qqshow');
/*!40000 ALTER TABLE `sy_guestbook` ENABLE KEYS */;

#
# Structure for table "sy_message"
#

DROP TABLE IF EXISTS `sy_message`;
CREATE TABLE `sy_message` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `gid` int(8) DEFAULT NULL COMMENT '留言本ID',
  `name` varchar(30) DEFAULT NULL COMMENT '姓名',
  `qq` varchar(15) DEFAULT NULL COMMENT 'QQ',
  `message` text COMMENT '留言内容',
  `reply` text COMMENT '回复',
  `replyAdmin` varchar(30) DEFAULT NULL COMMENT '回复管理员',
  `addtime` varchar(13) DEFAULT NULL COMMENT '留言时间',
  `ip` varchar(15) DEFAULT NULL COMMENT 'IP',
  `address` varchar(50) DEFAULT NULL COMMENT '解析的地址',
  `good` int(8) DEFAULT '0' COMMENT '赞',
  `status` varchar(3) DEFAULT 'yes' COMMENT '审核状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Data for table "sy_message"
#

/*!40000 ALTER TABLE `sy_message` DISABLE KEYS */;
INSERT INTO `sy_message` VALUES (1,1,'随意留言板','1030040075','第一条留言！',NULL,NULL,'1447433541','183.92.138.25','湖北孝感',0,'yes'),(2,1,'熊妹子','1030040075','第二条留言！',NULL,NULL,'1447433576','183.92.138.25','湖北孝感',0,'yes'),(3,2,'随意留言板','1030040075','请用手机浏览','','admin','1447433817','183.92.138.25','湖北孝感',0,'yes');
/*!40000 ALTER TABLE `sy_message` ENABLE KEYS */;

#
# Structure for table "sy_user"
#

DROP TABLE IF EXISTS `sy_user`;
CREATE TABLE `sy_user` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL COMMENT '帐号',
  `password` varchar(32) DEFAULT NULL COMMENT '密码',
  `admin` varchar(5) DEFAULT 'user' COMMENT '管理级别',
  `wxname` varchar(30) DEFAULT NULL COMMENT '微信名称',
  `wxhead` varchar(255) DEFAULT NULL COMMENT '微信头像',
  `birthday` date DEFAULT '0000-00-00' COMMENT '生日',
  `time` datetime DEFAULT '0000-00-00 00:00:00' COMMENT '注册时间',
  `remarks` varchar(255) DEFAULT NULL COMMENT '备注',
  `openid` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL COMMENT '性别',
  `phone` varchar(255) DEFAULT NULL COMMENT '手机号',
  PRIMARY KEY (`id`),
  UNIQUE KEY `openid` (`openid`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

#
# Data for table "sy_user"
#

/*!40000 ALTER TABLE `sy_user` DISABLE KEYS */;
INSERT INTO `sy_user` VALUES (1,'Aaron南无阿弥陀佛','e10adc3949ba59abbe56e057f20f883e','user','Aaron南无阿弥陀佛','https://wx.qlogo.cn/mmopen/vi_32/ZJ5zJc0Ge9KkTutCicxYuvTbLJKPp1LWcRiaDbKAG3TtSddmOpia8ZMjQS6N00uVJvBKdE1nFLWeFaJt5kCWP59SQ/0',NULL,'2017-12-06 12:24:50','欢迎您,Aaron南无阿弥陀佛','o_ZwU0R-b8bAaR8nhCJ7qWXMiA7A','男',NULL),(3,'南无阿弥陀佛','e10adc3949ba59abbe56e057f20f883e','user','南无阿弥陀佛','https://bjlsjp.cn/img/system/laopo.jpg',NULL,'2017-12-07 09:41:24','欢迎您,南无阿弥陀佛','o_ZwU0S0v_zrWxUGXN3en1sV6eIc','女',NULL),(17,'南无阿弥陀佛','e10adc3949ba59abbe56e057f20f883e','user','南无阿弥陀佛','https://wx.qlogo.cn/mmopen/vi_32/RmGb4cPfrPBsw6M63q9XYoequnssLbrg4xEVT8TSJZ1DMLVicWKQRmX2IDRic5hGGex5icGUjJKD35yib8lHsDGuaw/0','0000-00-00','2017-12-19 01:26:51',NULL,'undefined','女',NULL);
/*!40000 ALTER TABLE `sy_user` ENABLE KEYS */;

#
# Structure for table "sy_user_baby"
#

DROP TABLE IF EXISTS `sy_user_baby`;
CREATE TABLE `sy_user_baby` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  `sex` varchar(10) DEFAULT '男孩',
  `birthdate` datetime DEFAULT '0000-00-00 00:00:00',
  `height` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `附属` (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='宝宝';

#
# Data for table "sy_user_baby"
#

/*!40000 ALTER TABLE `sy_user_baby` DISABLE KEYS */;
INSERT INTO `sy_user_baby` VALUES (1,1,'宿梓宸','男孩','2017-09-23 00:00:00',60,9,'我的孩子'),(3,1,'宿宝宝','女孩','2017-12-07 00:00:00',50,9,'第二个宝宝'),(4,3,'宿梓宸','男孩','2017-09-23 00:00:00',70,10,'健健康康的长大');
/*!40000 ALTER TABLE `sy_user_baby` ENABLE KEYS */;

#
# Structure for table "sy_user_babynurse"
#

DROP TABLE IF EXISTS `sy_user_babynurse`;
CREATE TABLE `sy_user_babynurse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) DEFAULT NULL COMMENT '用户id',
  `user_babyid` int(11) DEFAULT NULL COMMENT '宝宝id',
  `time` datetime DEFAULT '0000-00-00 00:00:00' COMMENT '时间',
  `number` int(11) DEFAULT '0' COMMENT '毫升',
  `remarks` varchar(255) DEFAULT NULL COMMENT '备注',
  `createtime` datetime DEFAULT '0000-00-00 00:00:00' COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=214 DEFAULT CHARSET=utf8 COMMENT='宝宝吃奶';

#
# Data for table "sy_user_babynurse"
#

/*!40000 ALTER TABLE `sy_user_babynurse` DISABLE KEYS */;
INSERT INTO `sy_user_babynurse` VALUES (1,1,1,'2017-12-06 20:37:00',60,'undefined','2017-12-06 20:37:25'),(2,1,1,'2017-12-07 09:51:00',60,'undefined','2017-12-07 09:51:51'),(4,1,1,'2017-12-07 14:14:00',60,'undefined','2017-12-07 14:14:35'),(5,1,1,'2017-12-07 15:07:00',60,'undefined','2017-12-07 15:07:37'),(6,1,1,'2017-12-07 16:29:00',68,'undefined','2017-12-07 16:29:12'),(7,1,3,'2017-12-07 17:20:00',60,'undefined','2017-12-07 17:20:59'),(8,1,1,'2017-12-07 18:57:00',100,'undefined','2017-12-07 18:57:15'),(9,1,3,'2017-12-07 18:57:00',60,'undefined','2017-12-07 18:57:15'),(10,1,3,'2017-12-07 21:21:00',60,'undefined','2017-12-07 18:57:15'),(11,1,1,'2017-12-08 07:36:00',60,'undefined','2017-12-08 07:36:46'),(12,1,1,'2017-12-08 17:12:00',60,'undefined','2017-12-08 17:12:56'),(13,1,1,'2017-12-08 19:49:00',60,'undefined','2017-12-08 19:49:36'),(14,1,1,'2017-12-08 21:14:00',90,'undefined','2017-12-08 21:14:54'),(15,3,4,'2017-12-08 22:55:00',100,'undefined','2017-12-08 22:46:11'),(16,3,4,'2017-12-08 23:00:00',60,'undefined','2017-12-08 23:01:13'),(17,1,3,'2017-12-08 23:16:00',100,'undefined','2017-12-08 23:16:46'),(18,1,3,'2017-12-08 23:17:00',100,'undefined','2017-12-08 23:17:12'),(19,3,4,'2017-12-09 01:45:00',100,'undefined','2017-12-09 01:45:52'),(20,3,4,'2017-12-09 04:20:00',90,'undefined','2017-12-09 04:24:46'),(21,1,3,'2017-12-09 07:01:00',100,'undefined','2017-12-09 07:01:46'),(22,3,4,'2017-12-09 07:10:00',90,'undefined','2017-12-09 07:14:06'),(23,3,4,'2017-12-09 10:00:00',90,'undefined','2017-12-09 10:00:22'),(24,3,4,'2017-12-09 13:33:00',100,'undefined','2017-12-09 13:33:29'),(25,3,4,'2017-12-09 16:05:00',90,'undefined','2017-12-09 16:07:39'),(26,3,4,'2017-12-09 18:10:00',90,'undefined','2017-12-09 18:21:13'),(27,1,1,'2017-12-09 20:54:00',90,'undefined','2017-12-09 20:54:46'),(28,3,4,'2017-12-09 21:59:00',110,'undefined','2017-12-09 21:59:22'),(29,1,1,'2017-12-09 23:09:00',90,'undefined','2017-12-09 23:10:01'),(30,3,4,'2017-12-10 01:46:00',100,'undefined','2017-12-10 01:46:08'),(31,3,4,'2017-12-10 05:01:00',100,'undefined','2017-12-10 05:01:26'),(32,3,4,'2017-12-10 07:18:00',90,'undefined','2017-12-10 07:18:38'),(33,3,4,'2017-12-10 10:30:00',90,'undefined','2017-12-10 10:30:59'),(34,3,4,'2017-12-10 13:35:00',100,'undefined','2017-12-10 14:08:30'),(36,3,4,'2017-12-10 16:40:00',100,'undefined','2017-12-10 16:40:33'),(37,1,1,'2017-12-10 19:25:00',90,'undefined','2017-12-10 19:25:14'),(38,3,4,'2017-12-10 20:05:00',100,'undefined','2017-12-10 20:06:00'),(39,1,1,'2017-12-10 20:13:00',130,'undefined','2017-12-10 20:13:40'),(40,1,1,'2017-12-10 20:15:00',130,'undefined','2017-12-10 20:15:39'),(41,1,1,'2017-12-10 20:34:00',130,'undefined','2017-12-10 20:34:49'),(42,1,1,'2017-12-10 21:01:00',130,'undefined','2017-12-10 21:01:56'),(43,11,5,'2017-12-10 21:12:00',70,'undefined','2017-12-10 21:12:29'),(44,1,1,'2017-12-10 21:22:00',130,'undefined','2017-12-10 21:22:32'),(45,1,1,'2017-12-10 21:23:00',130,'undefined','2017-12-10 21:24:03'),(46,1,1,'2017-12-10 21:23:00',130,'undefined','2017-12-10 21:24:16'),(47,1,1,'2017-12-10 21:23:00',130,'undefined','2017-12-10 21:24:25'),(48,1,3,'2017-12-10 21:28:00',100,'undefined','2017-12-10 21:28:26'),(49,1,1,'2017-12-10 21:29:00',130,'undefined','2017-12-10 21:29:26'),(50,1,1,'2017-12-10 21:39:00',130,'undefined','2017-12-10 21:39:23'),(51,1,1,'2017-12-10 21:40:00',130,'undefined','2017-12-10 21:41:18'),(52,1,1,'2017-12-10 21:40:00',130,'undefined','2017-12-10 21:41:38'),(53,1,1,'2017-12-10 21:42:00',130,'undefined','2017-12-10 21:42:36'),(54,1,1,'2017-12-10 21:43:00',130,'undefined','2017-12-10 21:43:56'),(55,1,1,'2017-12-10 21:44:00',130,'undefined','2017-12-10 21:44:53'),(56,1,1,'2017-12-10 21:46:00',130,'undefined','2017-12-10 21:47:11'),(57,1,1,'2017-12-10 21:47:00',130,'undefined','2017-12-10 21:47:20'),(58,1,1,'2017-12-10 21:51:00',130,'undefined','2017-12-10 21:51:52'),(59,1,1,'2017-12-10 21:56:00',130,'undefined','2017-12-10 21:57:01'),(60,1,1,'2017-12-10 21:57:00',130,'undefined','2017-12-10 21:57:47'),(61,1,1,'2017-12-10 21:58:00',130,'undefined','2017-12-10 21:58:37'),(62,1,1,'2017-12-10 22:00:00',130,'undefined','2017-12-10 22:01:05'),(63,1,1,'2017-12-10 22:02:00',130,'undefined','2017-12-10 22:03:01'),(64,1,1,'2017-12-10 22:07:00',160,'undefined','2017-12-10 22:07:30'),(65,1,1,'2017-12-10 22:13:00',160,'undefined','2017-12-10 22:13:48'),(66,1,1,'2017-12-10 22:15:00',160,'undefined','2017-12-10 22:15:09'),(67,1,1,'2017-12-10 22:16:00',160,'undefined','2017-12-10 22:16:53'),(68,1,1,'2017-12-10 22:18:00',160,'undefined','2017-12-10 22:18:19'),(69,1,1,'2017-12-10 22:29:00',160,'undefined','2017-12-10 22:30:06'),(70,1,1,'2017-12-10 22:45:00',120,'undefined','2017-12-10 22:45:30'),(71,1,1,'2017-12-10 22:49:00',120,'undefined','2017-12-10 22:49:45'),(72,1,1,'2017-12-10 22:56:00',120,'undefined','2017-12-10 22:57:13'),(73,1,1,'2017-12-10 23:28:00',120,'undefined','2017-12-10 23:28:58'),(74,3,4,'2017-12-10 23:36:00',100,'undefined','2017-12-10 23:36:54'),(75,3,4,'2017-12-11 03:09:00',110,'undefined','2017-12-11 03:10:11'),(76,3,4,'2017-12-11 06:51:00',100,'undefined','2017-12-11 06:51:42'),(77,1,1,'2017-12-11 07:29:00',120,'undefined','2017-12-11 07:29:52'),(78,1,1,'2017-12-11 08:53:00',120,'undefined','2017-12-11 08:54:13'),(79,3,4,'2017-12-11 09:22:00',90,'undefined','2017-12-11 09:22:28'),(80,11,5,'2017-12-11 09:52:00',60,'undefined','2017-12-11 09:53:01'),(81,1,1,'2017-12-11 10:07:00',110,'undefined','2017-12-11 10:07:50'),(82,1,1,'2017-12-11 10:07:00',110,'undefined','2017-12-11 10:07:59'),(83,1,1,'2017-12-11 10:07:00',110,'undefined','2017-12-11 10:08:09'),(84,1,1,'2017-12-11 10:07:00',110,'undefined','2017-12-11 10:08:24'),(85,1,3,'2017-12-11 10:08:00',100,'undefined','2017-12-11 10:08:38'),(86,3,4,'2017-12-11 13:50:00',100,'undefined','2017-12-11 13:56:22'),(87,3,4,'2017-12-11 16:30:00',90,'undefined','2017-12-11 16:45:14'),(88,3,4,'2017-12-11 19:51:00',110,'undefined','2017-12-11 19:51:47'),(89,3,4,'2017-12-11 22:54:00',100,'undefined','2017-12-11 22:57:43'),(90,1,1,'2017-12-12 00:49:00',110,'undefined','2017-12-12 00:49:10'),(91,1,3,'2017-12-12 01:09:00',100,'undefined','2017-12-12 01:09:53'),(92,3,4,'2017-12-12 02:27:00',100,'undefined','2017-12-12 02:28:02'),(93,3,4,'2017-12-12 05:27:00',100,'undefined','2017-12-12 05:27:45'),(94,3,4,'2017-12-12 09:04:00',100,'undefined','2017-12-12 09:04:29'),(95,3,4,'2017-12-12 13:00:00',100,'undefined','2017-12-12 13:59:57'),(96,3,4,'2017-12-12 16:00:00',100,'undefined','2017-12-12 16:14:53'),(97,1,1,'2017-12-12 19:27:00',110,'undefined','2017-12-12 19:27:35'),(98,3,4,'2017-12-12 20:15:00',110,'undefined','2017-12-12 20:26:31'),(99,1,3,'2017-12-12 21:19:00',100,'undefined','2017-12-12 21:19:44'),(100,1,1,'2017-12-12 21:34:00',110,'undefined','2017-12-12 21:34:28'),(101,3,4,'2017-12-13 00:01:00',110,'undefined','2017-12-13 00:01:48'),(102,3,4,'2017-12-13 03:03:00',110,'undefined','2017-12-13 03:03:54'),(103,3,4,'2017-12-13 06:40:00',100,'undefined','2017-12-13 06:54:56'),(104,3,4,'2017-12-13 09:44:00',100,'undefined','2017-12-13 09:44:42'),(105,1,1,'2017-12-13 10:31:00',110,'undefined','2017-12-13 10:31:23'),(106,3,4,'2017-12-13 12:40:00',100,'undefined','2017-12-13 12:47:26'),(107,3,4,'2017-12-13 16:19:00',100,'undefined','2017-12-13 16:19:45'),(108,3,4,'2017-12-13 19:29:00',110,'undefined','2017-12-13 19:29:08'),(109,1,1,'2017-12-13 20:44:00',110,'undefined','2017-12-13 20:44:14'),(110,1,3,'2017-12-13 20:45:00',100,'undefined','2017-12-13 20:45:14'),(111,1,1,'2017-12-13 20:50:00',110,'undefined','2017-12-13 20:50:31'),(112,1,1,'2017-12-13 21:44:00',110,'undefined','2017-12-13 21:45:14'),(113,1,3,'2017-12-13 21:45:00',100,'undefined','2017-12-13 21:45:44'),(114,1,3,'2017-12-13 21:45:00',130,'undefined','2017-12-13 21:45:54'),(115,1,3,'2017-12-13 21:46:00',130,'undefined','2017-12-13 21:46:33'),(116,1,1,'2017-12-13 22:36:00',110,'undefined','2017-12-13 22:36:42'),(117,1,1,'2017-12-13 22:56:00',110,'undefined','2017-12-13 22:56:26'),(118,1,3,'2017-12-13 22:56:00',130,'undefined','2017-12-13 22:56:43'),(119,1,3,'2017-12-13 22:59:00',130,'undefined','2017-12-13 22:57:11'),(120,3,4,'2017-12-13 23:30:00',110,'undefined','2017-12-13 23:30:12'),(121,3,4,'2017-12-14 02:56:00',110,'undefined','2017-12-14 02:56:58'),(122,3,4,'2017-12-14 06:00:00',90,'undefined','2017-12-14 09:07:51'),(123,3,4,'2017-12-14 08:10:00',90,'undefined','2017-12-14 09:08:13'),(124,1,1,'2017-12-14 10:14:00',110,'undefined','2017-12-14 10:14:19'),(125,1,1,'2017-12-14 10:14:00',110,'undefined','2017-12-14 10:14:25'),(126,1,3,'2017-12-14 10:29:00',130,'undefined','2017-12-14 10:29:07'),(127,1,3,'2017-12-14 10:29:00',130,'undefined','2017-12-14 10:29:18'),(128,1,3,'2017-12-14 10:29:00',130,'undefined','2017-12-14 10:29:24'),(129,1,3,'2017-12-14 10:29:00',130,'undefined','2017-12-14 10:29:30'),(130,1,3,'2017-12-14 10:29:00',130,'undefined','2017-12-14 10:29:32'),(131,1,1,'2017-12-14 10:31:00',110,'undefined','2017-12-14 10:31:28'),(132,1,1,'2017-12-14 10:31:00',110,'undefined','2017-12-14 10:31:33'),(133,1,1,'2017-12-14 10:31:00',110,'undefined','2017-12-14 10:31:49'),(134,1,1,'2017-12-14 10:31:00',110,'undefined','2017-12-14 10:32:03'),(135,1,1,'2017-12-14 10:31:00',110,'undefined','2017-12-14 10:32:13'),(136,1,1,'2017-12-14 10:31:00',110,'undefined','2017-12-14 10:32:43'),(137,1,1,'2017-12-14 10:32:00',110,'undefined','2017-12-14 10:32:46'),(138,1,1,'2017-12-14 10:32:00',110,'undefined','2017-12-14 10:32:50'),(139,1,1,'2017-12-14 10:32:00',110,'undefined','2017-12-14 10:32:53'),(140,1,1,'2017-12-14 10:33:00',110,'undefined','2017-12-14 10:33:31'),(141,1,1,'2017-12-14 10:33:00',110,'undefined','2017-12-14 10:33:38'),(142,1,3,'2017-12-14 10:33:00',130,'undefined','2017-12-14 10:33:52'),(143,1,3,'2017-12-14 10:33:00',130,'undefined','2017-12-14 10:33:59'),(144,1,3,'2017-12-14 10:33:00',130,'undefined','2017-12-14 10:34:04'),(145,1,1,'2017-12-14 11:24:00',110,'undefined','2017-12-14 11:25:00'),(146,3,4,'2017-12-14 13:20:00',100,'undefined','2017-12-14 13:26:24'),(147,3,4,'2017-12-14 20:25:00',90,'undefined','2017-12-14 20:25:51'),(148,1,1,'2017-12-14 21:06:00',110,'undefined','2017-12-14 21:07:03'),(149,1,3,'2017-12-14 22:26:00',130,'undefined','2017-12-14 22:26:35'),(150,3,4,'2017-12-14 23:25:00',110,'undefined','2017-12-14 23:26:43'),(151,1,1,'2017-12-15 00:45:00',110,'undefined','2017-12-15 00:45:14'),(152,3,4,'2017-12-15 02:45:00',110,'undefined','2017-12-15 02:46:25'),(153,3,4,'2017-12-15 05:45:00',100,'undefined','2017-12-15 05:48:05'),(154,1,1,'2017-12-15 08:14:00',110,'undefined','2017-12-15 08:14:06'),(155,3,4,'2017-12-15 08:41:00',90,'undefined','2017-12-15 08:41:08'),(156,3,4,'2017-12-15 15:15:00',100,'undefined','2017-12-15 15:16:30'),(157,1,1,'2017-12-15 16:05:00',110,'undefined','2017-12-15 16:05:51'),(158,1,1,'2017-12-15 16:05:00',110,'undefined','2017-12-15 16:06:05'),(159,3,4,'2017-12-15 21:50:00',100,'undefined','2017-12-15 22:35:52'),(160,3,4,'2017-12-16 02:22:00',130,'undefined','2017-12-16 02:23:10'),(161,3,4,'2017-12-16 05:45:00',130,'undefined','2017-12-16 05:59:28'),(162,3,4,'2017-12-16 13:00:00',100,'undefined','2017-12-16 14:10:58'),(163,1,1,'2017-12-16 23:05:00',110,'undefined','2017-12-16 23:05:25'),(164,3,4,'2017-12-17 16:00:00',110,'undefined','2017-12-17 01:38:44'),(165,3,4,'2017-12-17 13:39:00',110,'undefined','2017-12-17 01:39:15'),(166,3,4,'2017-12-17 05:31:00',110,'undefined','2017-12-17 05:31:22'),(167,3,4,'2017-12-17 09:20:00',110,'undefined','2017-12-17 09:17:21'),(168,3,4,'2017-12-17 13:07:00',110,'undefined','2017-12-17 13:07:28'),(169,3,4,'2017-12-17 16:30:00',110,'undefined','2017-12-17 20:02:35'),(170,3,4,'2017-12-17 20:27:00',110,'undefined','2017-12-17 20:27:28'),(171,1,1,'2017-12-17 21:29:00',110,'undefined','2017-12-17 21:29:36'),(172,3,4,'2017-12-18 03:52:00',110,'undefined','2017-12-18 03:52:26'),(173,3,4,'2017-12-18 07:10:00',110,'undefined','2017-12-18 07:21:46'),(174,3,4,'2017-12-18 10:35:00',110,'undefined','2017-12-18 10:38:16'),(175,3,4,'2017-12-18 14:10:00',110,'undefined','2017-12-18 16:11:50'),(176,3,4,'2017-12-18 17:30:00',110,'undefined','2017-12-18 17:33:51'),(177,3,4,'2017-12-18 21:25:00',120,'undefined','2017-12-18 21:25:30'),(178,3,4,'2017-12-19 01:07:00',120,'undefined','2017-12-19 01:07:41'),(179,3,4,'2017-12-19 04:54:00',110,'undefined','2017-12-19 04:54:24'),(180,3,4,'2017-12-19 08:12:00',110,'undefined','2017-12-19 08:12:20'),(181,3,4,'2017-12-19 11:40:00',110,'undefined','2017-12-19 11:43:17'),(182,1,1,'2017-12-19 13:36:00',110,'undefined','2017-12-19 13:36:17'),(183,1,3,'2017-12-19 13:36:00',130,'undefined','2017-12-19 13:36:24'),(184,3,4,'2017-12-19 15:30:00',110,'undefined','2017-12-19 18:09:27'),(185,3,4,'2017-12-19 19:10:00',110,'undefined','2017-12-19 19:42:42'),(186,3,4,'2017-12-19 21:57:00',110,'undefined','2017-12-19 21:57:08'),(187,1,1,'2017-12-19 22:23:00',120,'undefined','2017-12-19 22:24:01'),(188,3,4,'2017-12-20 02:20:00',120,'undefined','2017-12-20 02:20:44'),(189,3,4,'2017-12-20 05:46:00',110,'undefined','2017-12-20 05:46:24'),(190,3,4,'2017-12-20 09:10:00',110,'undefined','2017-12-20 09:24:21'),(191,1,1,'2017-12-20 10:55:00',120,'undefined','2017-12-20 10:55:15'),(192,3,4,'2017-12-20 13:27:00',120,'undefined','2017-12-20 13:27:24'),(193,1,1,'2017-12-20 14:36:00',120,'undefined','2017-12-20 14:37:23'),(194,1,1,'2017-12-20 14:51:00',120,'undefined','2017-12-20 14:52:03'),(195,1,1,'2017-12-20 15:08:00',120,'undefined','2017-12-20 15:08:07'),(196,1,1,'2017-12-20 15:16:00',60,'undefined','2017-12-20 15:16:51'),(197,1,1,'2017-12-20 15:16:00',150,'undefined','2017-12-20 15:17:01'),(198,1,1,'2017-12-20 15:28:00',60,'undefined','2017-12-20 15:28:33'),(199,1,1,'2017-12-20 15:29:00',120,'undefined','2017-12-20 15:29:15'),(200,1,1,'2017-12-20 15:39:00',120,'undefined','2017-12-20 15:39:20'),(201,1,1,'2017-12-20 15:39:00',120,'undefined','2017-12-20 15:39:24'),(202,1,1,'2017-12-20 15:39:00',120,'undefined','2017-12-20 15:39:28'),(203,1,1,'2017-12-20 15:39:00',120,'undefined','2017-12-20 15:39:51'),(204,1,1,'2017-12-20 15:39:00',120,'undefined','2017-12-20 15:39:54'),(205,1,1,'2017-12-20 15:40:00',120,'undefined','2017-12-20 15:40:07'),(208,1,1,'2017-12-20 16:03:00',130,'undefined','2017-12-20 16:06:19'),(209,3,4,'2017-12-20 17:05:00',110,'undefined','2017-12-20 18:57:18'),(210,3,4,'2017-12-20 20:03:00',110,'undefined','2017-12-20 20:03:20'),(211,1,1,'2017-12-20 22:09:00',120,'undefined','2017-12-20 22:09:40'),(212,1,3,'2017-12-20 22:14:00',130,'undefined','2017-12-20 22:14:36'),(213,3,4,'2017-12-21 00:23:00',120,'undefined','2017-12-21 00:23:39');
/*!40000 ALTER TABLE `sy_user_babynurse` ENABLE KEYS */;

#
# Structure for table "sy_user_babyphoto"
#

DROP TABLE IF EXISTS `sy_user_babyphoto`;
CREATE TABLE `sy_user_babyphoto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_babyid` int(11) DEFAULT NULL COMMENT '宝宝id',
  `img` varchar(255) DEFAULT NULL COMMENT '照片路径',
  `time` datetime DEFAULT NULL COMMENT '上传时间',
  `remarks` varchar(255) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='宝宝照片';

#
# Data for table "sy_user_babyphoto"
#

/*!40000 ALTER TABLE `sy_user_babyphoto` DISABLE KEYS */;
/*!40000 ALTER TABLE `sy_user_babyphoto` ENABLE KEYS */;

#
# Structure for table "sy_userlife"
#

DROP TABLE IF EXISTS `sy_userlife`;
CREATE TABLE `sy_userlife` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) DEFAULT NULL COMMENT '用户ID',
  `content` varchar(255) DEFAULT NULL COMMENT '内容',
  `files` varchar(255) DEFAULT NULL COMMENT '文件',
  `video` varchar(255) DEFAULT NULL COMMENT '视频',
  `remarks` varchar(255) DEFAULT NULL COMMENT '备注',
  `createtime` datetime DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COMMENT='用户生活';

#
# Data for table "sy_userlife"
#

/*!40000 ALTER TABLE `sy_userlife` DISABLE KEYS */;
INSERT INTO `sy_userlife` VALUES (1,1,'我爱我的老婆，么么','https://bjlsjp.cn/img/user/1/2017-12-11_153228.jpg;https://bjlsjp.cn/img/user/1/2017-12-11_153232.jpg;https://bjlsjp.cn/img/user/1/2017-12-11_153236.jpg',NULL,'','2017-12-11 23:32:29'),(2,1,'哈哈哈哈','https://bjlsjp.cn/img/user/1/2017-12-11_162809.jpg',NULL,'','2017-12-12 00:27:43'),(3,1,'睡觉，原来做一件有意义的事情可以这么投入','https://bjlsjp.cn/img/user/1/2017-12-11_164834.jpg',NULL,'','2017-12-12 00:48:44'),(4,1,'睡不着了，下次可不能弄这么晚了……','',NULL,'','2017-12-12 01:09:23'),(5,1,'早上好，亲爱的老婆','https://bjlsjp.cn/img/user/1/2017-12-11_230205.jpg',NULL,'','2017-12-12 07:02:11'),(6,1,'早上好，亲爱的老婆123','https://bjlsjp.cn/img/user/1/2017-12-11_233351.jpg',NULL,'','2017-12-12 07:33:53'),(7,3,'辛苦老公啦，谢谢老公','https://bjlsjp.cn/img/user/3/2017-12-12_103828.jpg',NULL,'','2017-12-12 18:38:45'),(8,1,'下班回家','https://bjlsjp.cn/img/user/1/2017-12-12_112641.jpg',NULL,'','2017-12-12 19:26:45'),(9,1,'生活圈添加了下拉刷新功能1','https://bjlsjp.cn/img/user/1/2017-12-13_052414.jpg',NULL,'','2017-12-13 13:24:15'),(10,1,'压缩图片','https://bjlsjp.cn/img/user/1/2017-12-13_063850.jpg',NULL,'','2017-12-13 14:39:13'),(11,1,'视频上传只能上传一个，最大10M','https://bjlsjp.cn/img/user/1/2017-12-13_080545.jpg;https://bjlsjp.cn/img/user/1/2017-12-13_080545.jpg;https://bjlsjp.cn/img/user/1/2017-12-13_080545.jpg','https://bjlsjp.cn/img/user/1/2017-12-13_080557.mp4','','2017-12-13 16:06:07'),(12,1,'测试图片和视频','https://bjlsjp.cn/img/user/1/2017-12-13_110401.jpg;https://bjlsjp.cn/img/user/1/2017-12-13_110405.jpg','https://bjlsjp.cn/img/user/1/2017-12-13_110413.mp4','','2017-12-13 19:04:23'),(13,1,'代码重构完成，新增上传视频，下拉刷新','https://bjlsjp.cn/img/user/1/2017-12-13_124817.jpg;https://bjlsjp.cn/img/user/1/2017-12-13_124825.jpg;https://bjlsjp.cn/img/user/1/2017-12-13_124846.jpg','https://bjlsjp.cn/img/user/1/2017-12-13_124808.mp4','','2017-12-13 20:48:51'),(14,1,'今年过生日吃的长寿面，饺子，鸡蛋，肉，饼','https://bjlsjp.cn/img/user/1/2017-12-13_135344.jpg','','','2017-12-13 21:55:37'),(15,1,'睡觉啦','https://bjlsjp.cn/img/user/1/2017-12-13_145911.jpg','https://bjlsjp.cn/img/user/1/2017-12-13_145846.mp4','','2017-12-13 22:59:17'),(16,1,'优化mysql查询速度，比之前快了20-50倍','','','','2017-12-14 10:36:25'),(17,1,'哈哈哈哈哈哈','https://bjlsjp.cn/img/user/1/2017-12-14_032414.jpg;https://bjlsjp.cn/img/user/1/2017-12-14_032428.jpg','https://bjlsjp.cn/img/user/1/2017-12-14_032422.mp4','','2017-12-14 11:24:32'),(18,1,'有点心酸','https://bjlsjp.cn/img/user/1/2017-12-14_070831.jpg','https://bjlsjp.cn/img/user/1/2017-12-14_070818.mp4','','2017-12-14 15:08:35'),(19,1,'下班了，我还要加班，我开心我快乐','https://bjlsjp.cn/img/user/1/2017-12-14_100216.jpg','','','2017-12-14 18:02:17'),(20,1,'这算不算淘气呢哈哈','','https://bjlsjp.cn/img/user/1/2017-12-14_112039.mp4','','2017-12-14 19:20:41'),(21,1,'还有20多个小时就回家了，好兴奋呀，哈哈，加油加油','https://bjlsjp.cn/img/user/1/2017-12-14_155749.jpg;https://bjlsjp.cn/img/user/1/2017-12-14_155758.jpg;https://bjlsjp.cn/img/user/1/2017-12-14_155811.jpg','https://bjlsjp.cn/img/user/1/2017-12-14_155831.mp4','','2017-12-14 23:58:35'),(22,3,'孩他爸今天晚上就回来啦，棒棒哒','https://bjlsjp.cn/img/user/3/2017-12-15_004321.jpg;https://bjlsjp.cn/img/user/3/2017-12-15_004413.jpg','https://bjlsjp.cn/img/user/3/2017-12-15_004406.mp4','','2017-12-15 08:44:16'),(23,1,'我买了一个充电宝，罗马仕的，119块钱，25000毫安的，可以当板砖用了','https://bjlsjp.cn/img/user/1/2017-12-15_070117.jpg','','','2017-12-15 15:01:20'),(25,1,'精彩的生活，不一样的人生，我爱你们么么哒','https://bjlsjp.cn/img/user/1/2017-12-15_182836.jpg;https://bjlsjp.cn/img/user/1/2017-12-15_182909.jpg;https://bjlsjp.cn/img/user/1/2017-12-15_182922.jpg','https://bjlsjp.cn/img/user/1/2017-12-15_182816.mp4','','2017-12-16 02:30:09'),(26,3,'我希望老公你能爱自己，在爱亲人，再次谢谢你啦，别让我在难受啦','https://bjlsjp.cn/img/user/3/2017-12-18_104859.jpg','','','2017-12-18 18:49:39'),(27,3,'早上好，老公','https://bjlsjp.cn/img/user/3/2017-12-19_013203.jpg;https://bjlsjp.cn/img/user/3/2017-12-19_013227.jpg','','','2017-12-19 09:32:33'),(28,1,'开心也是一天不开心也是一天，我们都要学会开开心心的过好每一天！','https://bjlsjp.cn/img/user/1/2017-12-20_043215.jpg;https://bjlsjp.cn/img/user/1/2017-12-20_043221.jpg;https://bjlsjp.cn/img/user/1/2017-12-20_043236.jpg','https://bjlsjp.cn/img/user/1/2017-12-20_043247.mp4','','2017-12-20 12:33:09'),(29,1,'晚安啦老婆','https://bjlsjp.cn/img/user/1/2017-12-20_142913.jpg','https://bjlsjp.cn/img/user/1/2017-12-20_142952.mp4','','2017-12-20 22:29:56'),(30,17,'我老公棒棒哒','https://bjlsjp.cn/img/user/17/2017-12-20_202746.jpg','','','2017-12-21 04:28:01');
/*!40000 ALTER TABLE `sy_userlife` ENABLE KEYS */;

#
# Structure for table "sy_voteip"
#

DROP TABLE IF EXISTS `sy_voteip`;
CREATE TABLE `sy_voteip` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `mid` int(8) NOT NULL COMMENT '留言ID',
  `ip` varchar(15) NOT NULL COMMENT '赞一下IP',
  `addtime` varchar(13) NOT NULL COMMENT '赞一下时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "sy_voteip"
#

/*!40000 ALTER TABLE `sy_voteip` DISABLE KEYS */;
/*!40000 ALTER TABLE `sy_voteip` ENABLE KEYS */;
