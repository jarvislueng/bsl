/*
Navicat MySQL Data Transfer

Source Server         : Server
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : bsl_copy

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2017-01-02 12:15:47
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `articles`
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` text,
  `create_time` int(10) unsigned NOT NULL,
  `keyword` varchar(32) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('1', '111', '222', '1483032210', '111', '1');

-- ----------------------------
-- Table structure for `column`
-- ----------------------------
DROP TABLE IF EXISTS `column`;
CREATE TABLE `column` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tablename` varchar(50) NOT NULL,
  `field` varchar(20) DEFAULT NULL COMMENT '字段名',
  `title` varchar(30) DEFAULT NULL COMMENT '中文名',
  `align` varchar(20) DEFAULT 'center',
  `width` double DEFAULT NULL,
  `sortable` tinyint(10) DEFAULT '1' COMMENT '是否可以排序',
  `order` varchar(10) DEFAULT 'asc' COMMENT '升序asc或降序desc',
  `formatter` varchar(30) DEFAULT NULL COMMENT '自定义格式,是一个函数',
  `searchable` tinyint(10) DEFAULT '1' COMMENT '是否可被简单搜索',
  `order_num` smallint(11) DEFAULT NULL COMMENT '字段显示顺序',
  `status` tinyint(4) DEFAULT '1',
  `limit` varchar(255) DEFAULT '-' COMMENT '限制用户 -groupid1-groupid2-',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of column
-- ----------------------------
INSERT INTO `column` VALUES ('1', 'articles', 'id', 'ID', 'center', null, '1', 'asc', null, '1', null, '1', '-');
INSERT INTO `column` VALUES ('2', 'articles', 'name', '标题', 'center', null, '1', 'asc', null, '1', null, '1', '-');
INSERT INTO `column` VALUES ('3', 'articles', 'keyword', '关键字', 'center', null, '1', 'asc', null, '1', null, '1', '-');
INSERT INTO `column` VALUES ('4', 'articles', null, '操作', 'center', null, '0', 'asc', null, '0', null, '1', '-');

-- ----------------------------
-- Table structure for `course`
-- ----------------------------
DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `weight` smallint(6) NOT NULL DEFAULT '0',
  `introduction` text,
  `type` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `course_course_type` (`type`),
  CONSTRAINT `course_course_type` FOREIGN KEY (`type`) REFERENCES `course_type` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of course
-- ----------------------------

-- ----------------------------
-- Table structure for `course_type`
-- ----------------------------
DROP TABLE IF EXISTS `course_type`;
CREATE TABLE `course_type` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of course_type
-- ----------------------------

-- ----------------------------
-- Table structure for `dictionary`
-- ----------------------------
DROP TABLE IF EXISTS `dictionary`;
CREATE TABLE `dictionary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tablename` varchar(50) DEFAULT NULL,
  `field` varchar(50) DEFAULT NULL,
  `key` varchar(20) DEFAULT NULL,
  `value` varchar(50) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1' COMMENT '是否启用',
  `order_num` int(11) DEFAULT NULL,
  `limit` varchar(200) DEFAULT '-' COMMENT '限制条件',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dictionary
-- ----------------------------

-- ----------------------------
-- Table structure for `table`
-- ----------------------------
DROP TABLE IF EXISTS `table`;
CREATE TABLE `table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menuname` varchar(50) DEFAULT NULL,
  `tablename` varchar(50) NOT NULL,
  `url` varchar(255) DEFAULT NULL COMMENT 'url',
  `datatype` varchar(20) DEFAULT 'json' COMMENT '数据格式',
  `pagination` tinyint(10) DEFAULT '1' COMMENT '分页',
  `pagesize` int(11) DEFAULT '20' COMMENT '默认分页大小',
  `singleselect` tinyint(10) DEFAULT '0' COMMENT '单选',
  `showrefresh` tinyint(10) DEFAULT '1' COMMENT '是否显示刷新按钮',
  `clicktoselect` tinyint(10) DEFAULT '0' COMMENT '单选',
  `showcolumns` tinyint(10) DEFAULT '1' COMMENT '隐藏column',
  `showtoggle` tinyint(10) DEFAULT '1' COMMENT '切换显示视图',
  `search` tinyint(10) DEFAULT '0' COMMENT '简单搜索',
  `uniqueid` varchar(20) DEFAULT NULL COMMENT '行唯一ID,可用于获取行数据',
  `toolbar` varchar(10) DEFAULT '#toolbar' COMMENT '工具栏ID',
  `sidepagination` varchar(20) DEFAULT 'server' COMMENT '分页处理方式:客户端client,服务端:server',
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of table
-- ----------------------------
INSERT INTO `table` VALUES ('1', '文章管理', 'articles', 'Admin/Article/Index/getArticles', 'json', '1', '20', '0', '1', '0', '1', '1', '1', 'id', '#toolbar', 'server', '1');

-- ----------------------------
-- Table structure for `toolbar`
-- ----------------------------
DROP TABLE IF EXISTS `toolbar`;
CREATE TABLE `toolbar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tablename` varchar(50) DEFAULT NULL,
  `field_id` varchar(50) DEFAULT NULL,
  `field_name` varchar(50) DEFAULT NULL,
  `field_title` varchar(50) DEFAULT NULL,
  `type` tinyint(4) DEFAULT NULL COMMENT '1输入框2下拉框3日期选择4日期范围选择',
  `class` varchar(200) DEFAULT '' COMMENT 'class样式',
  `style` varchar(100) DEFAULT '',
  `default_value` varchar(50) DEFAULT '',
  `order_num` smallint(6) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `limit` varchar(200) DEFAULT '-',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of toolbar
-- ----------------------------

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` varchar(32) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(32) NOT NULL,
  `class_id` int(11) unsigned DEFAULT NULL,
  `identify` tinyint(4) DEFAULT NULL COMMENT '0 普通成员 1 班长',
  PRIMARY KEY (`user_id`),
  KEY `user_user_group` (`class_id`),
  CONSTRAINT `user_user_group` FOREIGN KEY (`class_id`) REFERENCES `user_group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('123', '202cb962ac59075b964b07152d234b70', 'sb', null, null);

-- ----------------------------
-- Table structure for `user_course`
-- ----------------------------
DROP TABLE IF EXISTS `user_course`;
CREATE TABLE `user_course` (
  `user_id` varchar(32) NOT NULL,
  `course_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_course_course` (`course_id`),
  CONSTRAINT `user_course_course` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `user_course_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_course
-- ----------------------------

-- ----------------------------
-- Table structure for `user_group`
-- ----------------------------
DROP TABLE IF EXISTS `user_group`;
CREATE TABLE `user_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `create_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_group
-- ----------------------------
