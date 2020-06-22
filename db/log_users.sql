/*
Navicat MySQL Data Transfer

Source Server         : DB Local
Source Server Version : 50726
Source Host           : localhost:3306
Source Database       : sam_db

Target Server Type    : MYSQL
Target Server Version : 50726
File Encoding         : 65001

Date: 2020-06-22 12:11:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `log_users`
-- ----------------------------
DROP TABLE IF EXISTS `log_users`;
CREATE TABLE `log_users` (
  `usr_history_id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(255) DEFAULT NULL,
  `previous_data` longtext,
  `latest_data` longtext,
  `updated_date` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`usr_history_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of log_users
-- ----------------------------
INSERT INTO `log_users` VALUES ('1', '2', '{\"npp\":\"81824\",\"nama\":\"Dherry Sasono Handhito\",\"position\":\"2\",\"branch_code\":\"4\"}', '{\"npp\":\"81824\",\"nama\":\"Dherry Sasono\",\"position\":\"2\",\"branch_code\":\"4\"}', '2020-06-22 03:30:52', 'Muhammad Hadiansyah');
