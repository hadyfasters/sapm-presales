/*
Navicat MySQL Data Transfer

Source Server         : DB Local
Source Server Version : 50726
Source Host           : localhost:3306
Source Database       : sam_db

Target Server Type    : MYSQL
Target Server Version : 50726
File Encoding         : 65001

Date: 2020-06-22 14:44:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `menu`
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(50) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `sequence` int(11) DEFAULT NULL,
  `active` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id_menu`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', 'Dashboard', '#', null, '0', '1', '');
INSERT INTO `menu` VALUES ('2', 'Input & View', '#', null, '0', '2', '');
INSERT INTO `menu` VALUES ('3', 'Reporting', '#', null, '0', '3', '');
INSERT INTO `menu` VALUES ('4', 'Approval & View', '#', null, '0', '4', '');
INSERT INTO `menu` VALUES ('5', 'View', null, null, '0', null, '');
INSERT INTO `menu` VALUES ('6', 'Reporting', '#', null, '0', '5', '');
INSERT INTO `menu` VALUES ('7', 'User Management', 'user', null, '10', '4', '');
INSERT INTO `menu` VALUES ('8', 'Outlet Management', '#', null, '0', '3', '');
INSERT INTO `menu` VALUES ('9', 'Audit Trail', '#', null, '0', '6', '');
INSERT INTO `menu` VALUES ('10', 'Setting', '#', null, '0', '7', '');
INSERT INTO `menu` VALUES ('11', 'Lead', 'lead', null, '2', '1', '');
INSERT INTO `menu` VALUES ('12', 'Call', 'call', null, '2', '2', '');
INSERT INTO `menu` VALUES ('13', 'Meet', 'meet', null, '2', '3', '');
INSERT INTO `menu` VALUES ('14', 'Close', 'close', null, '2', '4', '');
INSERT INTO `menu` VALUES ('15', 'Activity Report', 'report/activityreport', null, '6', null, '');
INSERT INTO `menu` VALUES ('16', 'Performance Report', 'report/performancereport', null, '6', null, '');
INSERT INTO `menu` VALUES ('17', 'Produk Chart', 'dashboard/produkchart', null, '1', '1', '');
INSERT INTO `menu` VALUES ('18', 'Proses Chart', 'dashboard/proseschart', null, '1', '1', '');
INSERT INTO `menu` VALUES ('19', 'Wilayah', 'outlet/wilayah', null, '8', '3', '');
INSERT INTO `menu` VALUES ('20', 'Cabang', 'outlet/cabang', null, '8', '3', '');
INSERT INTO `menu` VALUES ('21', 'User History', 'user_history', null, '9', null, '');
INSERT INTO `menu` VALUES ('22', 'Activity Log', null, null, '9', null, '');
INSERT INTO `menu` VALUES ('23', 'Location History', null, null, '9', null, '');
INSERT INTO `menu` VALUES ('24', 'Menu Management', 'menu', null, '10', '8', '');
INSERT INTO `menu` VALUES ('25', 'Message Management', 'message', null, '10', '9', '');
INSERT INTO `menu` VALUES ('26', 'User Position', 'userposition', null, '10', '2', '');
INSERT INTO `menu` VALUES ('27', 'Produk Sumber Dana', 'product', null, '10', '2', '');
INSERT INTO `menu` VALUES ('28', 'Master Data', '#', null, '0', '10', '');
INSERT INTO `menu` VALUES ('29', 'Menu Permission', 'menu_permission', null, '10', '2', '');
