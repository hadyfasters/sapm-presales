/*
Navicat MySQL Data Transfer

Source Server         : DB Local
Source Server Version : 50726
Source Host           : localhost:3306
Source Database       : sam_db

Target Server Type    : MYSQL
Target Server Version : 50726
File Encoding         : 65001

Date: 2020-06-18 17:21:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `dt_lead`
-- ----------------------------
DROP TABLE IF EXISTS `dt_lead`;
CREATE TABLE `dt_lead` (
  `lead_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_nasabah` varchar(255) DEFAULT NULL,
  `nama_prospek` varchar(255) DEFAULT NULL,
  `jenis_nasabah` int(11) DEFAULT NULL,
  `alamat` longtext,
  `provinsi` int(11) DEFAULT NULL,
  `kota_kabupaten` int(11) DEFAULT NULL,
  `kecamatan` int(11) DEFAULT NULL,
  `kelurahan` int(11) DEFAULT NULL,
  `no_kontak` int(11) DEFAULT NULL,
  `potensi_dana` int(11) DEFAULT NULL,
  `produk` int(11) DEFAULT NULL,
  `approval` int(11) DEFAULT NULL,
  `approval_by` varchar(100) DEFAULT NULL,
  `approval_note` text,
  `approval_date` datetime DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`lead_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dt_lead
-- ----------------------------
