/*
 Navicat Premium Data Transfer

 Source Server         : Local
 Source Server Type    : MySQL
 Source Server Version : 80019
 Source Host           : localhost:3306
 Source Schema         : api

 Target Server Type    : MySQL
 Target Server Version : 80019
 File Encoding         : 65001

 Date: 08/09/2023 21:08:41
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for pacientes
-- ----------------------------
DROP TABLE IF EXISTS `pacientes`;
CREATE TABLE `pacientes`  (
  `id_paciente` int NOT NULL AUTO_INCREMENT,
  `tipo_documento` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `numero_documento` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `primer_nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `segundo_nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `primer_apellido` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `segundo_apellido` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fecha_nacimiento` date NULL DEFAULT NULL,
  `genero` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `direccion` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `ciudad` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `departamento` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `cod_dane_dep` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `cod_dane_ciu` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `cod_dane` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `telefono` varchar(18) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `usuario_crea` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fecha_crea` datetime NULL DEFAULT NULL,
  `usuario_modifica` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fecha_modifica` datetime NULL DEFAULT NULL,
  `tipo` enum('APP','CENSO','CUENTAS','MEDICAMENTOS','CALL','API') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'APP',
  `estado` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_paciente`) USING BTREE,
  INDEX `ID_PACIENTE`(`id_paciente`) USING BTREE,
  INDEX `SEXO`(`genero`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 145551 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pacientes
-- ----------------------------
INSERT INTO `pacientes` VALUES (10, 'CC', '72249578', 'FERNANDO', 'JOSE', 'PEÑALOZA', 'GONZALEZ', '1980-01-08', 'MASCULINO', 'CALLE 107 # 25-120 LOS OLIVOS I ETP', 'BARRANQUILLA', 'ATLANTICO', '08', '001', '08001', '3014770331', 'csanmiguel', '2021-12-10 10:59:41', NULL, NULL, 'CENSO', 1);
INSERT INTO `pacientes` VALUES (11, 'CC', '1082242731', 'JOSE', 'GREGORIO', 'BARRIOS', 'RODRIGUEZ', '2021-12-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3107183530', 'csanmiguel', '2021-12-10 10:59:41', NULL, NULL, 'CENSO', 1);
INSERT INTO `pacientes` VALUES (12, 'CC', '88275654', 'ANGEL', 'DAVID', 'CONTRERAS', '', '2021-12-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3107640594', 'csanmiguel', '2021-12-10 10:59:41', NULL, NULL, 'CENSO', 1);
INSERT INTO `pacientes` VALUES (13, 'CC', '17586119', 'ANGEL', 'GREGORIO', 'LANDAETA', 'CUERVO', '2021-12-10', 'MASCULINO', 'MZ F4 LOTE 17 ATALAYA 1 ETAPA ', 'CUCUTA', 'N. DE SANTANDER', '54', '001', '54001', '3126093387', 'csanmiguel', '2021-12-10 10:59:41', NULL, NULL, 'CENSO', 1);
INSERT INTO `pacientes` VALUES (14, 'CC', '6220186', 'WILLIAM', '', 'ZUÑIGA', '', '2021-12-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3147500665', 'csanmiguel', '2021-12-10 10:59:41', NULL, NULL, 'CENSO', 1);
INSERT INTO `pacientes` VALUES (15, 'CC', '71638531', 'OMAR', 'DE', 'JESUS', 'MONTOYA', '2021-12-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3013639047', 'csanmiguel', '2021-12-10 10:59:41', NULL, NULL, 'CENSO', 1);
INSERT INTO `pacientes` VALUES (16, 'CC', '19617214', 'JULIO ', 'CESAR ', 'MOLINA ', 'VERGARA ', '1965-01-01', 'MASCULINO', 'ZONA BANANERA', 'ZONA BANANERA', 'MAGDALENA', '47', '980', '47980', '123456', 'irmeyer', '2021-12-10 23:36:48', NULL, NULL, 'APP', 1);
INSERT INTO `pacientes` VALUES (17, 'CC', '12546865', 'ISAAC ', 'FRANCISCO ', 'CHAVES ', 'RIVERA', '1957-01-01', 'MASCULINO', 'SANTA MARTA', 'SANTA MARTA', 'MAGDALENA', '47', '001', '47001', '3206723885', 'irmeyer', '2021-12-11 13:30:41', NULL, NULL, 'APP', 1);
INSERT INTO `pacientes` VALUES (18, 'CC', '85490265', 'JOSE ', 'GREGORIO ', 'ESCORCIA ', 'VISBAL', '1981-01-01', 'MASCULINO', 'FUNDACION', 'FUNDACION', 'MAGDALENA', '47', '288', '47288', '3122293425', 'irmeyer', '2021-12-11 13:47:13', NULL, NULL, 'APP', 1);
INSERT INTO `pacientes` VALUES (19, 'CC', '13389454', 'NAUN ', 'ALFONSO ', 'CASTILLA ', 'CRISTANCHO ', '1972-01-01', 'MASCULINO', 'CIENAGA', 'CIENAGA', 'MAGDALENA', '47', '189', '47189', '3012165619', 'irmeyer', '2021-12-11 14:44:36', NULL, NULL, 'APP', 1);
INSERT INTO `pacientes` VALUES (20, 'CC', '7628449', 'JOVANY ', 'ENRIQUE', ' PALMA ', 'MANJARRES', '1979-01-01', 'MASCULINO', 'SANTA MARTA', 'SANTA MARTA', 'MAGDALENA', '47', '001', '47001', '3158351664', 'irmeyer', '2021-12-11 15:08:35', NULL, NULL, 'APP', 1);

SET FOREIGN_KEY_CHECKS = 1;
