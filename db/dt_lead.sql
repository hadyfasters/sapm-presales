/*
Navicat MySQL Data Transfer

Source Server         : DB Local
Source Server Version : 50726
Source Host           : localhost:3306
Source Database       : sam_db

Target Server Type    : MYSQL
Target Server Version : 50726
File Encoding         : 65001

Date: 2020-06-23 09:14:57
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
  `provinsi` char(11) DEFAULT NULL,
  `kota_kabupaten` char(11) DEFAULT NULL,
  `kecamatan` char(11) DEFAULT NULL,
  `kelurahan` char(11) DEFAULT NULL,
  `no_kontak` varchar(15) DEFAULT NULL,
  `potensi_dana` int(11) DEFAULT NULL,
  `produk` int(11) DEFAULT NULL,
  `approval` int(11) DEFAULT NULL,
  `approval_by` varchar(100) DEFAULT NULL,
  `approval_note` text,
  `approval_date` datetime DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`lead_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dt_lead
-- ----------------------------
INSERT INTO `dt_lead` VALUES ('1', '1', 'Hadi', '1', 'Pamulang', '36', '3674', '3674030', '2147483647', '085263777130', '1000000', '1', '1', 'Muhammad Hadiansyah', '', '2020-06-22 18:26:17', '2020-06-22 00:00:00', 'Muhammad Hadiansyah');
INSERT INTO `dt_lead` VALUES ('2', '1', 'Hadi 2', '1', 'Pamulang', '36', '3674', '3674030', '2147483647', '085263777130', '1000000', '1', null, null, null, null, '2020-06-22 00:00:00', 'Muhammad Hadiansyah');
