/*
Navicat MySQL Data Transfer

Source Server         : DB Local
Source Server Version : 50726
Source Host           : localhost:3306
Source Database       : sam_db

Target Server Type    : MYSQL
Target Server Version : 50726
File Encoding         : 65001

Date: 2020-06-18 17:21:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `dt_call`
-- ----------------------------
DROP TABLE IF EXISTS `dt_call`;
CREATE TABLE `dt_call` (
  `call_id` int(11) NOT NULL AUTO_INCREMENT,
  `lead_id` int(11) DEFAULT NULL,
  `attempt` int(11) DEFAULT NULL,
  `issued_date` date DEFAULT NULL,
  `issued_time` time DEFAULT NULL,
  `attachment` varchar(100) DEFAULT NULL,
  `approval` int(11) DEFAULT NULL,
  `approval_by` varchar(100) DEFAULT NULL,
  `approval_note` text,
  `approval_date` datetime DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`call_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dt_call
-- ----------------------------
