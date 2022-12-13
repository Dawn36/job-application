/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 5.7.33 : Database - job_application
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`job_application` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `job_application`;

/*Table structure for table `dynamic_content_pages` */

DROP TABLE IF EXISTS `dynamic_content_pages`;

CREATE TABLE `dynamic_content_pages` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) DEFAULT NULL,
  `description` longtext,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `dynamic_content_pages` */

insert  into `dynamic_content_pages`(`id`,`user_id`,`description`,`created_at`,`updated_at`) values (1,1,'<p>dsdsfdsd d<strong>aw</strong></p>','2022-12-12 11:50:03','2022-12-12 00:00:00');

/*Table structure for table `employers_information` */

DROP TABLE IF EXISTS `employers_information`;

CREATE TABLE `employers_information` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `job_confirmation_id` bigint(20) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `position_held` varchar(255) DEFAULT NULL,
  `from` varchar(255) DEFAULT NULL,
  `to` varchar(255) DEFAULT NULL,
  `starting_ending_salary` varchar(255) DEFAULT NULL,
  `duties` varchar(255) DEFAULT NULL,
  `reason_for_leaving` varchar(255) DEFAULT NULL,
  `supervisor_name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `employers_information` */

insert  into `employers_information`(`id`,`job_confirmation_id`,`company_name`,`telephone`,`address`,`city`,`state`,`zip_code`,`position_held`,`from`,`to`,`starting_ending_salary`,`duties`,`reason_for_leaving`,`supervisor_name`,`created_at`) values (1,2,'Heath Mccarthy Trading','+1 (162) 338-4498','Aut cum quas odit ni','Tenetur dolores repr','Placeat est vitae u','72662','Vel non est dicta al','Eveniet irure cupid','Et voluptatem Quasi','Voluptas numquam ven','Officiis mollit accu','Dolor porro dolorem','Ullam illum aliqua','2022-12-12 00:00:00'),(2,2,'Heath Mccarthy Trading','+1 (162) 338-4498','Aut cum quas odit ni','Tenetur dolores repr','Placeat est vitae u','72662','Vel non est dicta al','Eveniet irure cupid','Et voluptatem Quasi','Voluptas numquam ven','Officiis mollit accu','Dolor porro dolorem','Ullam illum aliqua','2022-12-12 00:00:00');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `job_confirmation` */

DROP TABLE IF EXISTS `job_confirmation`;

CREATE TABLE `job_confirmation` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `current_address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `previous_address` varchar(255) DEFAULT NULL,
  `previous_city` varchar(255) DEFAULT NULL,
  `previous_state` varchar(255) DEFAULT NULL,
  `previous_zip_code` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `alternate_telephone` varchar(255) DEFAULT NULL,
  `best_contact_time` varchar(255) DEFAULT NULL,
  `e_mail_address` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `social_security_number` varchar(255) DEFAULT NULL,
  `driving_license_number` varchar(255) DEFAULT NULL,
  `position_apply_for` varchar(255) DEFAULT NULL,
  `type_of_work_desired` varchar(255) DEFAULT NULL,
  `job_post_number` varchar(255) DEFAULT NULL,
  `available_to_begin_work` varchar(255) DEFAULT NULL,
  `work_overtime` varchar(255) DEFAULT NULL,
  `authorized_age` varchar(255) DEFAULT NULL,
  `background_check` varchar(255) DEFAULT NULL,
  `emergency` varchar(255) DEFAULT NULL,
  `emergency_telephone` varchar(255) DEFAULT NULL,
  `name_of_nearest_relative` varchar(255) DEFAULT NULL,
  `relative_telephone` varchar(255) DEFAULT NULL,
  `high_school_name` varchar(255) DEFAULT NULL,
  `high_school_course_of_study` varchar(255) DEFAULT NULL,
  `high_school_year_completed` varchar(255) DEFAULT NULL,
  `high_school_degree` varchar(255) DEFAULT NULL,
  `business_school_name` varchar(255) DEFAULT NULL,
  `business_course_of_study` varchar(255) DEFAULT NULL,
  `business_year_completed` varchar(255) DEFAULT NULL,
  `business_degree` varchar(255) DEFAULT NULL,
  `college_name` varchar(255) DEFAULT NULL,
  `college_course_of_study` varchar(255) DEFAULT NULL,
  `college_year_completed` varchar(255) DEFAULT NULL,
  `college_degree` varchar(255) DEFAULT NULL,
  `graduate_name` varchar(255) DEFAULT NULL,
  `graduate_course_of_study` varchar(255) DEFAULT NULL,
  `graduate_year_completed` varchar(255) DEFAULT NULL,
  `graduate_degree` varchar(255) DEFAULT NULL,
  `other_name` varchar(255) DEFAULT NULL,
  `other_course_of_study` varchar(255) DEFAULT NULL,
  `other_year_completed` varchar(255) DEFAULT NULL,
  `other_degree` varchar(255) DEFAULT NULL,
  `computer_knowledge` varchar(255) DEFAULT NULL,
  `programing_knowledge` varchar(255) DEFAULT NULL,
  `graphic_video_editing_knowledge` varchar(255) DEFAULT NULL,
  `you_served_in_usa` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `start_date` varchar(255) DEFAULT NULL,
  `end_date` varchar(255) DEFAULT NULL,
  `rate_discharge` varchar(255) DEFAULT NULL,
  `type_of_service` varchar(255) DEFAULT NULL,
  `type_of_discharge` varchar(255) DEFAULT NULL,
  `special_training` varchar(255) DEFAULT NULL,
  `draft_status` varchar(255) DEFAULT NULL,
  `reserve_status` varchar(255) DEFAULT NULL,
  `criminal_offense` varchar(255) DEFAULT NULL,
  `criminal_actions_pending` varchar(255) DEFAULT NULL,
  `probation_or_parole` varchar(255) DEFAULT NULL,
  `explain_the_nature_of_the_offense` varchar(255) DEFAULT NULL,
  `reference_1_name` varchar(255) DEFAULT NULL,
  `reference_1_address` varchar(255) DEFAULT NULL,
  `reference_1_phone` varchar(255) DEFAULT NULL,
  `reference_1_occupation` varchar(255) DEFAULT NULL,
  `reference_1_relationship` varchar(255) DEFAULT NULL,
  `reference_2_name` varchar(255) DEFAULT NULL,
  `reference_2_address` varchar(255) DEFAULT NULL,
  `reference_2_phone` varchar(255) DEFAULT NULL,
  `reference_2_occupation` varchar(255) DEFAULT NULL,
  `reference_2_relationship` varchar(255) DEFAULT NULL,
  `professional_reference_1_name` varchar(255) DEFAULT NULL,
  `professional_reference_1_address` varchar(255) DEFAULT NULL,
  `professional_reference_1_phone` varchar(255) DEFAULT NULL,
  `professional_reference_1_occupation` varchar(255) DEFAULT NULL,
  `professional_reference_1_relationship` varchar(255) DEFAULT NULL,
  `professional_reference_2_name` varchar(255) DEFAULT NULL,
  `professional_reference_2_address` varchar(255) DEFAULT NULL,
  `professional_reference_2_phone` varchar(255) DEFAULT NULL,
  `professional_reference_2_occupation` varchar(255) DEFAULT NULL,
  `professional_reference_2_relationship` varchar(255) DEFAULT NULL,
  `print_name` varchar(255) DEFAULT NULL,
  `signature_date` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `status` enum('Sent Email','Keep','Delete') DEFAULT 'Sent Email',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `job_confirmation` */

/*Table structure for table `job_listings` */

DROP TABLE IF EXISTS `job_listings`;

CREATE TABLE `job_listings` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) DEFAULT NULL,
  `job_title` varchar(255) DEFAULT NULL,
  `job_number` varchar(255) DEFAULT NULL,
  `is_active` enum('yes','no') DEFAULT 'no',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `job_listings` */

insert  into `job_listings`(`id`,`user_id`,`job_title`,`job_number`,`is_active`,`created_at`,`updated_at`) values (2,1,'dawn','aaa','no','2022-12-12 11:05:00','2022-12-12 11:12:14'),(3,1,'dawn','aa','yes','2022-12-12 11:12:22','2022-12-12 11:12:27');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1);

/*Table structure for table `partner_form` */

DROP TABLE IF EXISTS `partner_form`;

CREATE TABLE `partner_form` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `description` longtext,
  `path` varchar(255) DEFAULT NULL,
  `status` enum('individual','company') DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `partner_form` */

insert  into `partner_form`(`id`,`first_name`,`last_name`,`email`,`mobile_no`,`description`,`path`,`status`,`created_at`) values (2,'Nita','Mclaughlin','mulaqigafo@mailinator.com','Ullam adipisci modi','Tempore unde volupt',NULL,'individual','2022-12-12 00:00:00'),(3,'Nita','Mclaughlin','mulaqigafo@mailinator.com','Ullam adipisci modi','Tempore unde volupt',NULL,'individual','2022-12-12 00:00:00'),(4,'Nita','Mclaughlin','mulaqigafo@mailinator.com','Ullam adipisci modi','Tempore unde volupt','','individual','2022-12-12 00:00:00'),(5,'Katelyn','Monroe','juruciz@mailinator.com','Commodi sunt conseq','Ipsum excepteur ius','uploads/partner/202212121447demo16.png','company','2022-12-12 00:00:00');

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` bigint(20) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_show` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'blank.png',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`first_name`,`last_name`,`contact_no`,`company_name`,`email`,`user_type`,`email_verified_at`,`password`,`password_show`,`profile_picture`,`remember_token`,`created_at`,`updated_at`,`deleted_at`,`updated_by`,`created_by`) values (1,'Dawn1','Gill','020','asdasd','dawngill08@gmail.com',1,NULL,'$2y$10$.o8YXhFiVpG9vM8yb0XvHeu4tHbkI4y7IPZD9P9qCOyWbG5hqhIBy','aaa','blank.png',NULL,NULL,'2022-12-12 09:57:04',NULL,1,NULL),(3,'Colleen','Maldonado','09451531651','Colon and Hale Inc','dulib@mailinator.com',1,NULL,'$2y$10$.o8YXhFiVpG9vM8yb0XvHeu4tHbkI4y7IPZD9P9qCOyWbG5hqhIBy','aaa','blank.png',NULL,'2022-09-30 21:40:05','2022-10-02 10:48:42',NULL,NULL,1),(4,'Autumna','Knapp','66','Mcgowan Bean Trading','quba@mailinator.com',1,NULL,'$2y$10$XUsmoIRl.ExGU1kkXfgl3OXeSqHUMUX3faQU1D/MgtOP/WXxl6Cu2','Pa$$w0rd!','blank.png',NULL,'2022-11-05 19:06:16','2022-11-05 00:00:00',NULL,1,1),(5,'Lars','Alexander',NULL,NULL,'vezujocecu@mailinator.com',1,NULL,'$2y$10$MFUTHJ.AhNF2JXKwrV8Wg.Rm7WWrefgQfFIO69FVQ1wee6sCkfWp6','Pa$$w0rd!','blank.png',NULL,'2022-11-06 03:33:32','2022-11-06 03:33:32',NULL,NULL,NULL),(6,'Megan','Harper',NULL,NULL,'syfutujyk@mailinator.com',1,NULL,'$2y$10$N/MjF.y/2p9fskmY0oUSwO7xiv3bu0tm0bZ2bYykSSs.slGFxC90m','Pa$$w0rd!','blank.png',NULL,'2022-11-24 07:07:26','2022-11-24 07:07:26',NULL,NULL,NULL),(7,'Chloe','Finley',NULL,NULL,'zumypito@mailinator.com',1,NULL,'$2y$10$BEAc7slF0mkacBImT9U36eARaVSAgfl9RE6oaLAPXR04gwukG19Oq','Pa$$w0rd!','blank.png',NULL,'2022-11-24 08:06:05','2022-11-24 08:06:05',NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
