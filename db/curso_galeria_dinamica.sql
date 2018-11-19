/*
 Navicat Premium Data Transfer

 Source Server         : LocalHost - MAMP
 Source Server Type    : MySQL
 Source Server Version : 50723
 Source Host           : localhost:3306
 Source Schema         : curso_galeria_dinamica

 Target Server Type    : MySQL
 Target Server Version : 50723
 File Encoding         : 65001

 Date: 18/11/2018 15:11:52
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for fotos
-- ----------------------------
DROP TABLE IF EXISTS `fotos`;
CREATE TABLE `fotos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fotos
-- ----------------------------
BEGIN;
INSERT INTO `fotos` VALUES (4, 'Angular', 'angular.png', 'Descripción de angular...');
INSERT INTO `fotos` VALUES (5, '', 'aurora.jpg', 'Descripcion');
INSERT INTO `fotos` VALUES (6, 'Edificio', 'edificio.jpg', 'Descripción Edificio...');
INSERT INTO `fotos` VALUES (7, 'Naturaleza', 'naturaleza.jpg', 'Naturales con 2 personas...');
INSERT INTO `fotos` VALUES (8, 'Nieve 01', 'nieve-1.jpg', 'Nieve descripción...');
INSERT INTO `fotos` VALUES (9, 'Nubes', 'nubes.jpg', 'Nubes descripción...');
INSERT INTO `fotos` VALUES (10, 'Agua 01', 'agua-01.jpeg', 'Agua 01');
INSERT INTO `fotos` VALUES (11, 'Ciudad 01', 'ciudad-01.jpg', 'Ciudad 01 descripcion...');
INSERT INTO `fotos` VALUES (12, 'Montañas 01', 'montanias-01.jpeg', 'Montañas 01 descripcion...');
INSERT INTO `fotos` VALUES (13, 'Paisaje 01', 'paisaje-01.jpg', 'Paisaje 01 descripcion...');
INSERT INTO `fotos` VALUES (14, 'Paisaje 02', 'paisaje-02.jpeg', 'Paisaje 02 descripcion...');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
