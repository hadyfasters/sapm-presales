/*
Navicat MySQL Data Transfer

Source Server         : DB Local
Source Server Version : 50726
Source Host           : localhost:3306
Source Database       : sam_db

Target Server Type    : MYSQL
Target Server Version : 50726
File Encoding         : 65001

Date: 2020-06-18 17:23:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ms_region`
-- ----------------------------
DROP TABLE IF EXISTS `ms_region`;
CREATE TABLE `ms_region` (
  `id_region` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`id_region`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ms_region
-- ----------------------------
INSERT INTO `ms_region` VALUES ('1', 'WBA', 'Kantor Wilayah Barat', '2020-05-18', '2020-05-18', '1');
INSERT INTO `ms_region` VALUES ('2', 'WTI', 'Kantor Wilayah Timur', '2020-05-18', '2020-05-18', '1');
INSERT INTO `ms_region` VALUES ('3', 'WJP', 'Kantor Wilayah Jabodetabek Plus', '2020-05-18', '2020-05-18', '1');
INSERT INTO `ms_region` VALUES ('4', 'TIR', 'Testing Input Region', '2020-01-01', '2020-12-31', '0');
INSERT INTO `ms_region` VALUES ('5', 'TIR 2', 'Testing Input Region 2', '2020-01-06', '2020-12-31', '0');
INSERT INTO `ms_region` VALUES ('6', 'TIR 3', 'Testing Input Region 3', '2020-06-01', '2020-06-30', '0');
INSERT INTO `ms_region` VALUES ('7', 'TIR 4', 'Testing Input Region 4', '2020-01-01', '2020-12-31', null);
