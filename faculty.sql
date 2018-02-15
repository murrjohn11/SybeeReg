# File name: C:/Users/User/Desktop/faculty.sql
# Creation date: 02/14/2018
# Created by PostgreSQL to MySQL 2.5 [Demo]
# --------------------------------------------------
# More conversion tools at http://www.convert-in.com

SET NAMES utf8;

#
# Table structure for table 'faculty'
#

DROP TABLE IF EXISTS `faculty` CASCADE;
CREATE TABLE `faculty` (
  `idnumber` VARCHAR(50) CHARACTER SET utf8 NOT NULL,
  `familyname` VARCHAR(50) CHARACTER SET utf8,
  `firstname` VARCHAR(50) CHARACTER SET utf8,
  PRIMARY KEY (`idnumber`)
) ENGINE=MyISAM;

#
# Dumping data for table 'faculty'
#

LOCK TABLES `faculty` WRITE;
INSERT IGNORE INTO `faculty`(`idnumber`, `familyname`, `firstname`) VALUES('151F868                                           ', 'AGOSTO                                            ', 'AUGUSTO                                           '), ('121F271                                           ', 'ALBIA                                             ', 'EDGARDO                                           '), ('1055202                                           ', 'ALVIOLA                                           ', 'CARMENCITA                                        '), ('911237                                            ', 'AMORES                                            ', 'KLIEF                                             '), ('101F029                                           ', 'ANG                                               ', 'FERDINAND                                         '), ('064B215                                           ', 'ANZANO                                            ', 'CORAZON                                           '), ('071F533                                           ', 'ARNAIZ                                            ', 'JOVENAL                                           '), ('765202                                            ', 'BACUDO                                            ', 'LOURDES                                           '), ('064C144                                           ', 'BAGANO                                            ', 'APRIL JOAN                                        '), ('064C134                                           ', 'BAGANO                                            ', 'GINO JUN                                          '), ('064B246                                           ', 'BALORAN                                           ', 'ANNA MARIE                                        '), ('121F290                                           ', 'BERAY                                             ', 'GRACE                                             '), ('171F039                                           ', 'BETT                                              ', 'PIUS                                              '), ('142F818                                           ', 'BORRES                                            ', 'CAROLINE                                          '), ('171F040                                           ', 'CABAHUG                                           ', 'KIM MARIELLE                                      '), ('111F173                                           ', 'CHUA                                              ', 'LESLIE-ANNE                                       '), ('161F034                                           ', 'CONFESOR                                          ', 'ZENAIDA                                           '), ('064B289                                           ', 'DE OCAMPO                                         ', 'MELANIE                                           '), ('141F758                                           ', 'DICDICAN                                          ', 'ETHEL                                             '), ('064C147                                           ', 'ECHAVEZ                                           ', 'PEPITO                                            '), ('121F272                                           ', 'ESCALA                                            ', 'JEOFFREY                                          '), ('111F139                                           ', 'GAANAN                                            ', 'EDUARDO                                           '), ('061F294                                           ', 'GALLUR                                            ', 'JOSEPH                                            '), ('141F784                                           ', 'GOZON                                             ', 'ALLAN                                             '), ('064B268                                           ', 'JANULGUE                                          ', 'FELIXBERTO                                        '), ('081F733                                           ', 'JAVA                                              ', 'GLENN                                             '), ('121F274                                           ', 'JUMAO-AS                                          ', 'IVY                                               '), ('101F967                                           ', 'KHANSER                                           ', 'MARITES                                           '), ('171F048                                           ', 'KINDICA                                           ', 'JOSE LORENZO                                      '), ('064B236                                           ', 'LAPE                                              ', 'GRACE MARIE                                       '), ('063N154                                           ', 'LIM                                               ', 'MARIA MELGIE                                      '), ('064B282                                           ', 'LUCERO                                            ', 'JIMMY                                             '), ('131F523                                           ', 'LUZANO                                            ', 'ALLAN                                             '), ('151F943                                           ', 'MAGNASE                                           ', 'ELISA                                             '), ('171F042                                           ', 'MENGUITO                                          ', 'CHRISTOPHER JOHN                                  '), ('1041238                                           ', 'MORENO                                            ', 'ALAN                                              '), ('172F021                                           ', 'ORNOPIA                                           ', 'JEROME                                            '), ('171F046                                           ', 'PARAZ                                             ', 'NOEL                                              '), ('051F074                                           ', 'PONTEVEDRA                                        ', 'JANET                                             '), ('061F311                                           ', 'REYES                                             ', 'LIBERATO                                          '), ('754202                                            ', 'RUBIA                                             ', 'EDNA                                              '), ('051F200                                           ', 'SACDALAN                                          ', 'RANDOLPH                                          '), ('092F960                                           ', 'SERENIO                                           ', 'DARLON                                            '), ('051F075                                           ', 'SILAPAN                                           ', 'LAURO CIPRIANO                                    '), ('064B284                                           ', 'TAN                                               ', 'ANA LIZA                                          '), ('071F547                                           ', 'VALLES                                            ', 'MARIA ANGELITA RAMONA                             '), ('071F505                                           ', 'VELITA                                            ', 'LOLITA                                            '), ('051F136                                           ', 'VILLAR                                            ', 'ALICIA                                            '), ('061F295                                           ', 'VISITACION                                        ', 'ROBERTO                                           '), ('064B288                                           ', 'YANG                                              ', 'JOYCE NATALIE                                     ');
UNLOCK TABLES;