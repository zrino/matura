/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.7.14 : Database - matura
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `kviz` */

DROP TABLE IF EXISTS `kviz`;

CREATE TABLE `kviz` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `naziv` varchar(255) NOT NULL,
  `korisnik` int(11) DEFAULT NULL,
  `godina` int(11) DEFAULT NULL,
  `predmet` varchar(255) DEFAULT NULL,
  `rok` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `kviz` */

insert  into `kviz`(`id`,`naziv`,`korisnik`,`godina`,`predmet`,`rok`) values (1,'bananko',NULL,NULL,NULL,NULL);

/*Table structure for table `kviz_odgovori` */

DROP TABLE IF EXISTS `kviz_odgovori`;

CREATE TABLE `kviz_odgovori` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_pitanja` int(10) unsigned NOT NULL,
  `tekst_odgovora` varchar(255) DEFAULT NULL,
  `tocan` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `kviz_odgovori` */

/*Table structure for table `kviz_pitanja` */

DROP TABLE IF EXISTS `kviz_pitanja`;

CREATE TABLE `kviz_pitanja` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_kviza` int(10) unsigned NOT NULL,
  `id_sekcije` int(11) DEFAULT NULL,
  `tip` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `kviz_pitanja` */

/*Table structure for table `kviz_sekcije` */

DROP TABLE IF EXISTS `kviz_sekcije`;

CREATE TABLE `kviz_sekcije` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_kviza` int(11) NOT NULL,
  `tekst` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `kviz_sekcije` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
