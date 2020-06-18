/*
Navicat MySQL Data Transfer

Source Server         : DB Local
Source Server Version : 50726
Source Host           : localhost:3306
Source Database       : sam_db

Target Server Type    : MYSQL
Target Server Version : 50726
File Encoding         : 65001

Date: 2020-06-18 17:22:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `dt_user`
-- ----------------------------
DROP TABLE IF EXISTS `dt_user`;
CREATE TABLE `dt_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `npp` varchar(50) NOT NULL,
  `password` varchar(125) NOT NULL,
  `nama` varchar(150) DEFAULT NULL,
  `position` int(5) NOT NULL,
  `branch_code` mediumint(5) NOT NULL,
  `active` bit(1) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dt_user
-- ----------------------------
INSERT INTO `dt_user` VALUES ('1', '80667', '$2y$10$DwJ5xdSkvRfBI9AY0keqM.ZysPCyUHPU3WCNivsxWakzExszVXOZK', 'Muhammad Hadiansyah', '1', '1', '');
