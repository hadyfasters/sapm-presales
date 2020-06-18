/*
Navicat MySQL Data Transfer

Source Server         : DB Local
Source Server Version : 50726
Source Host           : localhost:3306
Source Database       : sam_db

Target Server Type    : MYSQL
Target Server Version : 50726
File Encoding         : 65001

Date: 2020-06-18 17:23:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ms_product`
-- ----------------------------
DROP TABLE IF EXISTS `ms_product`;
CREATE TABLE `ms_product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) DEFAULT NULL,
  `product_desc` text,
  `is_active` tinyint(2) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ms_product
-- ----------------------------
INSERT INTO `ms_product` VALUES ('1', 'Tabungan', 'Produk Tabungan', '1', '2020-05-17 20:32:51', 'Super Administrator');
INSERT INTO `ms_product` VALUES ('2', 'Giro', 'Produk Giro', '1', '2020-05-17 20:52:10', 'Super Administrator');
INSERT INTO `ms_product` VALUES ('3', 'Deposito', 'Produk Deposito', '1', '2020-05-17 21:04:11', 'Super Administrator');
INSERT INTO `ms_product` VALUES ('4', 'Testing Produk 1', 'Testing Produks', null, '2020-06-13 10:23:19', 'Muhammad Hadiansyah');
