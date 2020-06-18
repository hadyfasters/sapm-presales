/*
Navicat MySQL Data Transfer

Source Server         : DB Local
Source Server Version : 50726
Source Host           : localhost:3306
Source Database       : sam_db

Target Server Type    : MYSQL
Target Server Version : 50726
File Encoding         : 65001

Date: 2020-06-18 17:23:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ms_provinces`
-- ----------------------------
DROP TABLE IF EXISTS `ms_provinces`;
CREATE TABLE `ms_provinces` (
  `id` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` bit(1) DEFAULT NULL,
  `last_updated` datetime DEFAULT NULL,
  `last_updater` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ms_provinces
-- ----------------------------
INSERT INTO `ms_provinces` VALUES ('11', 'ACEH', '', '2019-04-18 10:36:47', 'Super Admin');
INSERT INTO `ms_provinces` VALUES ('12', 'SUMATERA UTARA', '', '2019-04-18 10:36:47', 'Super Admin');
INSERT INTO `ms_provinces` VALUES ('13', 'SUMATERA BARAT', '', '2019-04-18 10:36:47', 'Super Admin');
INSERT INTO `ms_provinces` VALUES ('14', 'RIAU', '', '2019-04-18 10:36:47', 'Super Admin');
INSERT INTO `ms_provinces` VALUES ('15', 'JAMBI', '', '2019-04-18 10:36:47', 'Super Admin');
INSERT INTO `ms_provinces` VALUES ('16', 'SUMATERA SELATAN', '', '2019-04-18 10:36:47', 'Super Admin');
INSERT INTO `ms_provinces` VALUES ('17', 'BENGKULU', '', '2019-04-18 10:36:47', 'Super Admin');
INSERT INTO `ms_provinces` VALUES ('18', 'LAMPUNG', '', '2019-04-18 10:36:47', 'Super Admin');
INSERT INTO `ms_provinces` VALUES ('19', 'KEPULAUAN BANGKA BELITUNG', '', '2019-04-18 10:36:47', 'Super Admin');
INSERT INTO `ms_provinces` VALUES ('21', 'KEPULAUAN RIAU', '', '2019-04-18 10:36:47', 'Super Admin');
INSERT INTO `ms_provinces` VALUES ('31', 'DKI JAKARTA', '', '2019-04-18 10:36:47', 'Super Admin');
INSERT INTO `ms_provinces` VALUES ('32', 'JAWA BARAT', '', '2019-04-18 10:36:47', 'Super Admin');
INSERT INTO `ms_provinces` VALUES ('33', 'JAWA TENGAH', '', '2019-04-18 10:36:47', 'Super Admin');
INSERT INTO `ms_provinces` VALUES ('34', 'DI YOGYAKARTA', '', '2019-04-18 10:36:47', 'Super Admin');
INSERT INTO `ms_provinces` VALUES ('35', 'JAWA TIMUR', '', '2019-04-18 10:36:47', 'Super Admin');
INSERT INTO `ms_provinces` VALUES ('36', 'BANTEN', '', '2019-04-18 10:36:47', 'Super Admin');
INSERT INTO `ms_provinces` VALUES ('51', 'BALI', '', '2019-04-18 10:36:47', 'Super Admin');
INSERT INTO `ms_provinces` VALUES ('52', 'NUSA TENGGARA BARAT', '', '2019-04-18 10:36:47', 'Super Admin');
INSERT INTO `ms_provinces` VALUES ('53', 'NUSA TENGGARA TIMUR', '', '2019-04-18 10:36:47', 'Super Admin');
INSERT INTO `ms_provinces` VALUES ('61', 'KALIMANTAN BARAT', '', '2019-04-18 10:36:47', 'Super Admin');
INSERT INTO `ms_provinces` VALUES ('62', 'KALIMANTAN TENGAH', '', '2019-04-18 10:36:47', 'Super Admin');
INSERT INTO `ms_provinces` VALUES ('63', 'KALIMANTAN SELATAN', '', '2019-04-18 10:36:47', 'Super Admin');
INSERT INTO `ms_provinces` VALUES ('64', 'KALIMANTAN TIMUR', '', '2019-04-18 10:36:47', 'Super Admin');
INSERT INTO `ms_provinces` VALUES ('65', 'KALIMANTAN UTARA', '', '2019-04-18 10:36:47', 'Super Admin');
INSERT INTO `ms_provinces` VALUES ('71', 'SULAWESI UTARA', '', '2019-04-18 10:36:47', 'Super Admin');
INSERT INTO `ms_provinces` VALUES ('72', 'SULAWESI TENGAH', '', '2019-04-18 10:36:47', 'Super Admin');
INSERT INTO `ms_provinces` VALUES ('73', 'SULAWESI SELATAN', '', '2019-04-18 10:36:47', 'Super Admin');
INSERT INTO `ms_provinces` VALUES ('74', 'SULAWESI TENGGARA', '', '2019-04-18 10:36:47', 'Super Admin');
INSERT INTO `ms_provinces` VALUES ('75', 'GORONTALO', '', '2019-04-18 10:36:47', 'Super Admin');
INSERT INTO `ms_provinces` VALUES ('76', 'SULAWESI BARAT', '', '2019-04-18 10:36:47', 'Super Admin');
INSERT INTO `ms_provinces` VALUES ('81', 'MALUKU', '', '2019-04-18 10:36:47', 'Super Admin');
INSERT INTO `ms_provinces` VALUES ('82', 'MALUKU UTARA', '', '2019-04-18 10:36:47', 'Super Admin');
INSERT INTO `ms_provinces` VALUES ('91', 'PAPUA BARAT', '', '2019-04-18 10:36:47', 'Super Admin');
INSERT INTO `ms_provinces` VALUES ('94', 'PAPUA', '', '2019-04-18 10:36:47', 'Super Admin');
