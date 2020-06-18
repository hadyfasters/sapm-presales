/*
Navicat MySQL Data Transfer

Source Server         : DB Local
Source Server Version : 50726
Source Host           : localhost:3306
Source Database       : sam_db

Target Server Type    : MYSQL
Target Server Version : 50726
File Encoding         : 65001

Date: 2020-06-18 17:22:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `log_activity`
-- ----------------------------
DROP TABLE IF EXISTS `log_activity`;
CREATE TABLE `log_activity` (
  `activity_id` int(11) NOT NULL,
  `user` int(11) DEFAULT NULL,
  `issued_date` datetime DEFAULT NULL,
  `actions` varchar(100) DEFAULT NULL,
  `path` varchar(100) DEFAULT NULL,
  `old_value` longtext,
  `new_value` longtext,
  PRIMARY KEY (`activity_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of log_activity
-- ----------------------------
