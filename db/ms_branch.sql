/*
Navicat MySQL Data Transfer

Source Server         : DB Local
Source Server Version : 50726
Source Host           : localhost:3306
Source Database       : sam_db

Target Server Type    : MYSQL
Target Server Version : 50726
File Encoding         : 65001

Date: 2020-06-18 17:23:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ms_branch`
-- ----------------------------
DROP TABLE IF EXISTS `ms_branch`;
CREATE TABLE `ms_branch` (
  `id_branch` int(11) NOT NULL AUTO_INCREMENT,
  `id_region` int(11) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`id_branch`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ms_branch
-- ----------------------------
INSERT INTO `ms_branch` VALUES ('1', '1', 'BDS', 'Cabang Bandung Syariah', '2020-05-19', null, '0');
INSERT INTO `ms_branch` VALUES ('2', '3', 'BSD', 'Cabang Syariah Bumi Serpong Damai', '2020-05-19', null, '1');
INSERT INTO `ms_branch` VALUES ('3', '1', 'PDS', 'Cabang Syariah Padang', '2010-01-01', '2020-12-31', null);
