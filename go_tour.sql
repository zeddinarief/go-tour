/*
 Navicat MySQL Data Transfer

 Source Server         : localhostmysql
 Source Server Type    : MySQL
 Source Server Version : 80026
 Source Host           : localhost:3306
 Source Schema         : go_tour

 Target Server Type    : MySQL
 Target Server Version : 80026
 File Encoding         : 65001

 Date: 03/07/2022 10:33:48
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `is_active` enum('yes','no') CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT 'yes',
  `role` enum('admin','member') COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- ----------------------------
-- Table structure for jenis_wisata
-- ----------------------------
DROP TABLE IF EXISTS `jenis_wisata`;
CREATE TABLE `jenis_wisata` (
  `id` int NOT NULL AUTO_INCREMENT,
  `jenis` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `kode_jenis` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- ----------------------------
-- Table structure for paket_wisata
-- ----------------------------
DROP TABLE IF EXISTS `paket_wisata`;
CREATE TABLE `paket_wisata` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kode_paket_wisata` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `nama_paket_wisata` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `jumlah_rombongan` int DEFAULT NULL,
  `harga` int DEFAULT NULL,
  `id_jenis` int DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `img_paket_wisata` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kode_paket_wisata` (`kode_paket_wisata`),
  KEY `id_jenis_fk` (`id_jenis`),
  CONSTRAINT `id_jenis_fk` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_wisata` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- ----------------------------
-- Table structure for pemesanan
-- ----------------------------
DROP TABLE IF EXISTS `pemesanan`;
CREATE TABLE `pemesanan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kode_pesanan` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `date_pesanan` datetime DEFAULT NULL,
  `id_user` int DEFAULT NULL,
  `id_wisata` int DEFAULT NULL,
  `id_jadwal` int DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `jumlah_rombongan` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kode_pesanan` (`kode_pesanan`),
  KEY `id_user_fk` (`id_user`),
  KEY `id_wisata_fk` (`id_wisata`),
  KEY `id_jadwal_fk` (`id_jadwal`),
  CONSTRAINT `id_jadwal_fk` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal_keberangkatan` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `id_user_fk` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `id_wisata_fk` FOREIGN KEY (`id_wisata`) REFERENCES `paket_wisata` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- ----------------------------
-- Table structure for daftar_peserta
-- ----------------------------
DROP TABLE IF EXISTS `daftar_peserta`;
CREATE TABLE `daftar_peserta` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_pesanan` int DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pesanan_fk2` (`id_pesanan`),
  CONSTRAINT `id_pesanan_fk2` FOREIGN KEY (`id_pesanan`) REFERENCES `pemesanan` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- ----------------------------
-- Table structure for pembayaran
-- ----------------------------
DROP TABLE IF EXISTS `pembayaran`;
CREATE TABLE `pembayaran` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kode_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `id_pesanan` int DEFAULT NULL,
  `nama_paket` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `total_biaya` int DEFAULT NULL,
  `metode_bayar` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `status_bayar` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `bukti_bayar` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kode_pembayaran` (`kode_pembayaran`),
  KEY `id_pesanan_fk` (`id_pesanan`),
  CONSTRAINT `id_pesanan_fk` FOREIGN KEY (`id_pesanan`) REFERENCES `pemesanan` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- ----------------------------
-- Table structure for jadwal_keberangkatan
-- ----------------------------
DROP TABLE IF EXISTS `jadwal_keberangkatan`;
CREATE TABLE `jadwal_keberangkatan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_pembayaran` int DEFAULT NULL,
  `id_paket_wisata` int DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pembayaran_fk` (`id_pembayaran`),
  KEY `id_paket_wisata` (`id_paket_wisata`),
  CONSTRAINT `id_paket_wisata` FOREIGN KEY (`id_paket_wisata`) REFERENCES `paket_wisata` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `id_pembayaran_fk` FOREIGN KEY (`id_pembayaran`) REFERENCES `pembayaran` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- ----------------------------
-- Records of user
-- ----------------------------
BEGIN;
INSERT INTO `user` VALUES (1, 'admin', '$2y$10$KKKy9/XNNE7.LcVaa6uOb.L.ddk3JQH/i1Cw2s1kaw8gSmvLStaxO', 'Admin GoTour', NULL, NULL, NULL, 'yes', 'admin');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
