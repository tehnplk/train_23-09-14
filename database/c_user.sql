/*
Navicat MySQL Data Transfer

Source Server         : localhost_3309
Source Server Version : 50741
Source Host           : localhost:3309
Source Database       : check

Target Server Type    : MYSQL
Target Server Version : 50741
File Encoding         : 65001

Date: 2023-09-15 08:34:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for c_user
-- ----------------------------
DROP TABLE IF EXISTS `c_user`;
CREATE TABLE `c_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `auth_key` varchar(255) DEFAULT NULL,
  `access_token` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `last` varchar(255) DEFAULT NULL,
  `last_session` varchar(255) DEFAULT NULL,
  `last_ip` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `idx_username` (`username`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=523 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of c_user
-- ----------------------------
INSERT INTO `c_user` VALUES ('1', 'admin', '112233', null, null, 'adm', 'AAAAAA', '2023-09-15 08:32:19', 'f2kjh2mokqh9moim1p967g56gn', '::1');
INSERT INTO `c_user` VALUES ('522', 'demo', '112233', null, null, 'adm', null, '2023-09-15 07:59:40', '93p060ovk9noskiiq5bqqi9eqm', '::1');

-- ----------------------------
-- Table structure for c_user_role
-- ----------------------------
DROP TABLE IF EXISTS `c_user_role`;
CREATE TABLE `c_user_role` (
  `id` varchar(3) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of c_user_role
-- ----------------------------
INSERT INTO `c_user_role` VALUES ('adm', 'แอดมิน');
INSERT INTO `c_user_role` VALUES ('med', 'แพทย์');
INSERT INTO `c_user_role` VALUES ('reg', 'ผู้ลงทะเบียนคนไข้');
INSERT INTO `c_user_role` VALUES ('rxx', 'จ่ายยา');
INSERT INTO `c_user_role` VALUES ('tri', 'ผู้คัดแยกสี');
INSERT INTO `c_user_role` VALUES ('vww', 'ดูอย่างเดียว');
