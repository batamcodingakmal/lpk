/*
 Navicat Premium Data Transfer

 Source Server         : server local
 Source Server Type    : MySQL
 Source Server Version : 100427 (10.4.27-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : lpkcec

 Target Server Type    : MySQL
 Target Server Version : 100427 (10.4.27-MariaDB)
 File Encoding         : 65001

 Date: 29/12/2022 22:02:32
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for list_pekerjaan
-- ----------------------------
DROP TABLE IF EXISTS `list_pekerjaan`;
CREATE TABLE `list_pekerjaan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_les` varchar(255) CHARACTER SET utf32 COLLATE utf32_bin NULL DEFAULT NULL,
  `durasi` varchar(255) CHARACTER SET utf32 COLLATE utf32_bin NULL DEFAULT NULL,
  `pengajar` varchar(255) CHARACTER SET utf32 COLLATE utf32_bin NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf32 COLLATE = utf32_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of list_pekerjaan
-- ----------------------------
INSERT INTO `list_pekerjaan` VALUES (2, 'Komputer', '1', 'Haris');

-- ----------------------------
-- Table structure for pencari_kerja
-- ----------------------------
DROP TABLE IF EXISTS `pencari_kerja`;
CREATE TABLE `pencari_kerja`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) CHARACTER SET utf32 COLLATE utf32_bin NULL DEFAULT NULL,
  `lastname` varchar(100) CHARACTER SET utf32 COLLATE utf32_bin NULL DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf32 COLLATE utf32_bin NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = utf32 COLLATE = utf32_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pencari_kerja
-- ----------------------------
INSERT INTO `pencari_kerja` VALUES (4, 'jhads', 'adsd', 'afsfa@kbjaf.af');
INSERT INTO `pencari_kerja` VALUES (5, 'adasd', 'dasd', 'aghsgdh@kjaf.afs');
INSERT INTO `pencari_kerja` VALUES (6, 'jkgdaskjd', 'kahdsjk', 'akjgsdjkgkjd@kajfg');
INSERT INTO `pencari_kerja` VALUES (7, '', NULL, 'afjkjkfa2kjabsf');
INSERT INTO `pencari_kerja` VALUES (8, NULL, NULL, 'ajkfsgfgajk');
INSERT INTO `pencari_kerja` VALUES (9, NULL, NULL, 'aklfsnsdfafs');
INSERT INTO `pencari_kerja` VALUES (10, NULL, NULL, 'asfdasf');
INSERT INTO `pencari_kerja` VALUES (11, NULL, NULL, 'asfas');
INSERT INTO `pencari_kerja` VALUES (12, NULL, NULL, 'afs');
INSERT INTO `pencari_kerja` VALUES (13, NULL, NULL, 'gsdfgdfhdh');
INSERT INTO `pencari_kerja` VALUES (14, NULL, NULL, 'hdhwegfs');
INSERT INTO `pencari_kerja` VALUES (15, NULL, NULL, 'wegfwegfv');
INSERT INTO `pencari_kerja` VALUES (16, NULL, NULL, 'dsv');
INSERT INTO `pencari_kerja` VALUES (17, NULL, NULL, 'afef');
INSERT INTO `pencari_kerja` VALUES (18, NULL, NULL, 'asfsdf');

SET FOREIGN_KEY_CHECKS = 1;
