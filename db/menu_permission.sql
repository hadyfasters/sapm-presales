/*
Navicat MySQL Data Transfer

Source Server         : DB Local
Source Server Version : 50726
Source Host           : localhost:3306
Source Database       : sam_db

Target Server Type    : MYSQL
Target Server Version : 50726
File Encoding         : 65001

Date: 2020-06-22 12:11:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `menu_permission`
-- ----------------------------
DROP TABLE IF EXISTS `menu_permission`;
CREATE TABLE `menu_permission` (
  `id_pm` int(11) NOT NULL AUTO_INCREMENT,
  `id_position` int(11) DEFAULT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `acl_create` bit(1) NOT NULL DEFAULT b'0',
  `acl_read` bit(1) NOT NULL DEFAULT b'1',
  `acl_update` bit(1) NOT NULL,
  `acl_delete` bit(1) NOT NULL DEFAULT b'0',
  `active` bit(1) DEFAULT b'0',
  PRIMARY KEY (`id_pm`)
) ENGINE=MyISAM AUTO_INCREMENT=193 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of menu_permission
-- ----------------------------
INSERT INTO `menu_permission` VALUES ('192', '1', '25', '', '', '', '', '');
INSERT INTO `menu_permission` VALUES ('191', '1', '7', '', '', '', '', '');
INSERT INTO `menu_permission` VALUES ('190', '1', '29', '', '', '', '', '');
INSERT INTO `menu_permission` VALUES ('189', '1', '27', '', '', '', '', '');
INSERT INTO `menu_permission` VALUES ('188', '1', '26', '', '', '', '', '');
INSERT INTO `menu_permission` VALUES ('187', '1', '10', '', '', '', '', '');
INSERT INTO `menu_permission` VALUES ('186', '1', '23', '', '', '', '', '');
INSERT INTO `menu_permission` VALUES ('185', '1', '22', '', '', '', '', '');
INSERT INTO `menu_permission` VALUES ('184', '1', '21', '', '', '', '', '');
INSERT INTO `menu_permission` VALUES ('183', '1', '9', '', '', '', '', '');
INSERT INTO `menu_permission` VALUES ('182', '1', '16', '', '', '', '', '');
INSERT INTO `menu_permission` VALUES ('181', '1', '15', '', '', '', '', '');
INSERT INTO `menu_permission` VALUES ('180', '1', '6', '', '', '', '', '');
INSERT INTO `menu_permission` VALUES ('179', '1', '20', '', '', '', '', '');
INSERT INTO `menu_permission` VALUES ('178', '1', '19', '', '', '', '', '');
INSERT INTO `menu_permission` VALUES ('177', '1', '8', '', '', '', '', '');
INSERT INTO `menu_permission` VALUES ('176', '1', '14', '', '', '', '', '');
INSERT INTO `menu_permission` VALUES ('175', '1', '13', '', '', '', '', '');
INSERT INTO `menu_permission` VALUES ('174', '1', '12', '', '', '', '', '');
INSERT INTO `menu_permission` VALUES ('173', '1', '11', '', '', '', '', '');
INSERT INTO `menu_permission` VALUES ('172', '1', '2', '', '', '', '', '');
INSERT INTO `menu_permission` VALUES ('171', '1', '18', '', '', '', '', '');
INSERT INTO `menu_permission` VALUES ('170', '1', '17', '', '', '', '', '');
INSERT INTO `menu_permission` VALUES ('169', '1', '1', '', '', '', '', '');
