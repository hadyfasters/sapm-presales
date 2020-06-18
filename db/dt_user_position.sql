/*
Navicat MySQL Data Transfer

Source Server         : DB Local
Source Server Version : 50726
Source Host           : localhost:3306
Source Database       : sam_db

Target Server Type    : MYSQL
Target Server Version : 50726
File Encoding         : 65001

Date: 2020-06-18 17:22:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `dt_user_position`
-- ----------------------------
DROP TABLE IF EXISTS `dt_user_position`;
CREATE TABLE `dt_user_position` (
  `up_id` int(11) NOT NULL AUTO_INCREMENT,
  `up_name` varchar(150) DEFAULT NULL,
  `up_level` int(11) DEFAULT '0',
  `up_default` varchar(150) DEFAULT NULL,
  `is_active` int(1) DEFAULT '0',
  `created_date` datetime DEFAULT NULL,
  `created_by` varchar(125) DEFAULT NULL,
  PRIMARY KEY (`up_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dt_user_position
-- ----------------------------
INSERT INTO `dt_user_position` VALUES ('1', 'Super Administrator', '99', 'Admin123!', '1', '2020-04-09 11:27:55', 'Super Administator');
INSERT INTO `dt_user_position` VALUES ('2', 'Administrator', '1', 'webadmin123', '1', '2020-04-19 22:20:29', 'Super Administrator');
INSERT INTO `dt_user_position` VALUES ('3', 'Sales', '0', 'sales12345', '1', '2020-05-15 03:50:10', 'Super Administrator');
INSERT INTO `dt_user_position` VALUES ('4', 'Supervisor Cabang', '0', 'SVC12345', '1', '2020-05-15 04:03:14', 'Super Administrator');
INSERT INTO `dt_user_position` VALUES ('5', 'Supervisor Wilayah', '0', 'SVW12345', '1', '2020-05-15 04:10:51', 'Super Administrator');
INSERT INTO `dt_user_position` VALUES ('6', 'Supervisor Pusat', '0', 'SVP12345', '0', '2020-05-15 04:15:21', 'Super Administrator');
INSERT INTO `dt_user_position` VALUES ('7', 'Test 2', '0', 'test123', '0', '2020-06-10 03:57:21', 'Muhammad Hadiansyah');
INSERT INTO `dt_user_position` VALUES ('8', 'Test', '0', 'test123', '0', '2020-06-08 21:04:51', null);
INSERT INTO `dt_user_position` VALUES ('9', 'Test 2', '0', '123asd', '0', '2020-06-09 14:26:59', 'Muhammad Hadiansyah');
INSERT INTO `dt_user_position` VALUES ('10', 'Test 3 ', '0', '123as12d', '0', '2020-06-09 14:28:27', 'Muhammad Hadiansyah');
INSERT INTO `dt_user_position` VALUES ('11', 'Test 4 ', '0', 'fasdf2', '0', '2020-06-09 17:34:42', 'Muhammad Hadiansyah');
INSERT INTO `dt_user_position` VALUES ('12', 'test 5 ', '0', '12312', '0', '2020-06-09 17:36:24', 'Muhammad Hadiansyah');
INSERT INTO `dt_user_position` VALUES ('13', 'Test 4 ', '0', 'test4123', '0', '2020-06-10 00:33:51', 'Muhammad Hadiansyah');
INSERT INTO `dt_user_position` VALUES ('14', null, '0', null, '3', '2020-06-10 03:54:53', 'Muhammad Hadiansyah');
INSERT INTO `dt_user_position` VALUES ('15', 'Test 2', '0', null, '0', '2020-06-10 03:55:35', 'Muhammad Hadiansyah');
