-- MySQL dump 10.13  Distrib 8.0.41, for Win64 (x86_64)
--
-- Host: localhost    Database: radiant_sourcing
-- ------------------------------------------------------
-- Server version	8.0.41

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `about_sections`
--

DROP TABLE IF EXISTS `about_sections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `about_sections` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `type` enum('intro','full_width_image','content_image','quote','services') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'content_image',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_position` enum('left','right') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'left',
  `list_items` json DEFAULT NULL,
  `sort_order` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about_sections`
--

LOCK TABLES `about_sections` WRITE;
/*!40000 ALTER TABLE `about_sections` DISABLE KEYS */;
INSERT INTO `about_sections` VALUES (1,'content_image',NULL,NULL,'<div class=\"elementor-element elementor-element-be960dd elementor-widget elementor-widget-heading animated fadeInUp\" data-id=\"be960dd\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;}\" data-widget_type=\"heading.default\" style=\"--flex-direction: initial; --flex-wrap: initial; --justify-content: initial; --align-items: initial; --align-content: initial; --gap: initial; --flex-basis: initial; --flex-grow: initial; --flex-shrink: initial; --order: initial; --align-self: initial; align-self: auto; flex: 0 1 auto; order: 0; place-content: normal; align-items: normal; flex-flow: row; gap: normal; position: relative; animation-duration: 1.25s; --widgets-spacing: 20px 20px; --widgets-spacing-row: 20px; --widgets-spacing-column: 20px; --swiper-theme-color: #000; --swiper-navigation-size: 44px; --swiper-pagination-bullet-size: 6px; --swiper-pagination-bullet-horizontal-gap: 6px; animation-name: fadeInUp; width: 699px; margin-bottom: 20px; margin-block-end: 20px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\"><div class=\"elementor-widget-container\" style=\"transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s, transform 0.4s;\"><h2 class=\"elementor-heading-title elementor-size-default\" style=\"color: rgb(0, 0, 0); font-family: Helvetica, sans-serif; font-weight: 600; line-height: 1; margin-block: 0.5rem 1rem; font-size: 30px; margin-bottom: 0px;\">OUR EXPERTISE-</h2></div></div><div class=\"elementor-element elementor-element-5c9072b elementor-widget elementor-widget-text-editor animated fadeInUp\" data-id=\"5c9072b\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;}\" data-widget_type=\"text-editor.default\" style=\"--flex-direction: initial; --flex-wrap: initial; --justify-content: initial; --align-items: initial; --align-content: initial; --gap: initial; --flex-basis: initial; --flex-grow: initial; --flex-shrink: initial; --order: initial; --align-self: initial; align-self: auto; flex: 0 1 auto; order: 0; place-content: normal; align-items: normal; flex-flow: row; gap: normal; position: relative; animation-duration: 1.25s; --widgets-spacing: 20px 20px; --widgets-spacing-row: 20px; --widgets-spacing-column: 20px; font-family: Roboto, sans-serif; --swiper-theme-color: #000; --swiper-navigation-size: 44px; --swiper-pagination-bullet-size: 6px; --swiper-pagination-bullet-horizontal-gap: 6px; animation-name: fadeInUp; width: 699px; text-align: justify; font-size: 24px;\"><div class=\"elementor-widget-container\" style=\"transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s, transform 0.4s;\"><ul style=\"background: transparent; border: 0px; margin-block: 0px; outline: 0px; vertical-align: baseline;\"><li style=\"background: transparent; border: 0px; margin-block: 0px; outline: 0px; vertical-align: baseline;\"><span style=\"font-weight: bolder;\">Market Intelligence, Design Support.</span></li><li style=\"background: transparent; border: 0px; margin-block: 0px; outline: 0px; vertical-align: baseline;\"><span style=\"font-weight: bolder;\">R&amp;D &amp; Product Innovation.</span></li><li style=\"background: transparent; border: 0px; margin-block: 0px; outline: 0px; vertical-align: baseline;\"><span style=\"font-weight: bolder;\">Ethical &amp; Responsible Sourcing,</span></li><li style=\"background: transparent; border: 0px; margin-block: 0px; outline: 0px; vertical-align: baseline;\"><span style=\"font-weight: bolder;\">Sustainability &amp; CSR</span></li><li style=\"background: transparent; border: 0px; margin-block: 0px; outline: 0px; vertical-align: baseline;\"><span style=\"font-weight: bolder;\">Quality Assurance &amp; Manufacturing&nbsp;</span><span style=\"font-weight: bolder;\">Excellence</span></li><li style=\"background: transparent; border: 0px; margin-block: 0px; outline: 0px; vertical-align: baseline;\"><span style=\"font-weight: bolder;\">Diversified Product Management</span></li><li style=\"background: transparent; border: 0px; margin-block: 0px; outline: 0px; vertical-align: baseline;\"><span style=\"font-weight: bolder;\">Licensed Character Product Sourcing</span></li><li style=\"background: transparent; border: 0px; margin-block: 0px; outline: 0px; vertical-align: baseline;\"><span style=\"font-weight: bolder;\">Leadership &amp; Industry Expertise</span></li></ul></div></div>','uploads/about/1765654973.jpg','left',NULL,4,1,'2025-12-13 13:42:53','2025-12-13 13:51:31'),(2,'intro','Welcome to Couture Tex Sourcing Ltd, Where Fashion Meets Integrity!!','-Reliable Strategic, Sustainable and Ethical Global Sourcing Partner!!','<p style=\"margin-block: 0px 0.9rem; font-family: Roboto, sans-serif; font-size: 18px; text-align: justify;\">We believe that Fashion is not just about Clothing, it’s an ever evolving statement, an expression of Identity, Culture context of time and place, perception, aspiration, creativity and innovation, value and belief of individual and community. Founded in 2024, we blend creativity, sustainability, and manufacturing excellence to deliver innovative global sourcing solutions.</p><p style=\"margin-block: 0px 0.9rem; font-family: Roboto, sans-serif; font-size: 18px; text-align: justify;\">We drive fashion evolution through market intelligence, trend analysis, innovative design, and versatile product categories. Our commitment spans ethical sourcing, sustainability, social responsibility, and international compliance. With trusted manufacturing partners, quality assurance, licensed character production, and end-to-end logistics, we deliver superior service and exceptional customer value</p>',NULL,'left',NULL,1,1,'2025-12-13 13:43:30','2025-12-13 13:46:11'),(3,'full_width_image',NULL,NULL,NULL,'uploads/about/1765655022.jpg','left',NULL,2,1,'2025-12-13 13:43:43','2025-12-13 13:46:11'),(4,'quote',NULL,NULL,'“Elevating Sourcing, Strengthening Partnership- Together We Achieve More!!',NULL,'left',NULL,3,1,'2025-12-13 13:46:11','2025-12-13 13:46:11'),(5,'content_image',NULL,NULL,'<div class=\"elementor-element elementor-element-13d30cb elementor-widget elementor-widget-heading animated fadeInUp\" data-id=\"13d30cb\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;}\" data-widget_type=\"heading.default\" style=\"--flex-direction: initial; --flex-wrap: initial; --justify-content: initial; --align-items: initial; --align-content: initial; --gap: initial; --flex-basis: initial; --flex-grow: initial; --flex-shrink: initial; --order: initial; --align-self: initial; align-self: auto; flex: 0 1 auto; order: 0; place-content: normal; align-items: normal; flex-flow: row; gap: normal; position: relative; animation-duration: 1.25s; --widgets-spacing: 20px 20px; --widgets-spacing-row: 20px; --widgets-spacing-column: 20px; --swiper-theme-color: #000; --swiper-navigation-size: 44px; --swiper-pagination-bullet-size: 6px; --swiper-pagination-bullet-horizontal-gap: 6px; animation-name: fadeInUp; width: 714px; margin-bottom: 20px; margin-block-end: 20px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\"><div class=\"elementor-widget-container\" style=\"transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s, transform 0.4s;\"><h2 class=\"elementor-heading-title elementor-size-default\" style=\"color: rgb(0, 0, 0); font-family: Helvetica, sans-serif; font-weight: 600; line-height: 1; margin-block: 0.5rem 1rem; font-size: 30px; margin-bottom: 0px;\">DESIGN STUDIO:</h2></div></div><div class=\"elementor-element elementor-element-5d02ebd elementor-widget elementor-widget-heading animated fadeInUp\" data-id=\"5d02ebd\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;}\" data-widget_type=\"heading.default\" style=\"--flex-direction: initial; --flex-wrap: initial; --justify-content: initial; --align-items: initial; --align-content: initial; --gap: initial; --flex-basis: initial; --flex-grow: initial; --flex-shrink: initial; --order: initial; --align-self: initial; align-self: auto; flex: 0 1 auto; order: 0; place-content: normal; align-items: normal; flex-flow: row; gap: normal; position: relative; animation-duration: 1.25s; --widgets-spacing: 20px 20px; --widgets-spacing-row: 20px; --widgets-spacing-column: 20px; --swiper-theme-color: #000; --swiper-navigation-size: 44px; --swiper-pagination-bullet-size: 6px; --swiper-pagination-bullet-horizontal-gap: 6px; animation-name: fadeInUp; width: 714px; margin-bottom: 20px; margin-block-end: 20px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\"><div class=\"elementor-widget-container\" style=\"transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s, transform 0.4s;\"><h2 class=\"elementor-heading-title elementor-size-default\" style=\"color: rgb(0, 0, 0); font-family: Helvetica, sans-serif; font-weight: 600; line-height: 1; margin-block: 0.5rem 1rem; font-size: 26px; margin-bottom: 0px;\">Design Studio in London, UK</h2></div></div><div class=\"elementor-element elementor-element-5bc92ee elementor-widget elementor-widget-text-editor animated fadeInUp\" data-id=\"5bc92ee\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;}\" data-widget_type=\"text-editor.default\" style=\"--flex-direction: initial; --flex-wrap: initial; --justify-content: initial; --align-items: initial; --align-content: initial; --gap: initial; --flex-basis: initial; --flex-grow: initial; --flex-shrink: initial; --order: initial; --align-self: initial; align-self: auto; flex: 0 1 auto; order: 0; place-content: normal; align-items: normal; flex-flow: row; gap: normal; position: relative; animation-duration: 1.25s; --widgets-spacing: 20px 20px; --widgets-spacing-row: 20px; --widgets-spacing-column: 20px; font-family: Roboto, sans-serif; --swiper-theme-color: #000; --swiper-navigation-size: 44px; --swiper-pagination-bullet-size: 6px; --swiper-pagination-bullet-horizontal-gap: 6px; animation-name: fadeInUp; width: 714px; margin-bottom: 20px; margin-block-end: 20px; text-align: justify; font-size: 18px;\"><div class=\"elementor-widget-container\" style=\"transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s, transform 0.4s; margin-top: -12px; margin-bottom: -16px;\"><p style=\"margin-block: 0px 0.9rem;\">COUTURETEX London Studio creates elegant,<br>trend-driven collections guided by in-house<br>expert British designers.</p></div></div><div class=\"elementor-element elementor-element-b9548cc elementor-widget elementor-widget-heading animated fadeInUp\" data-id=\"b9548cc\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;}\" data-widget_type=\"heading.default\" style=\"--flex-direction: initial; --flex-wrap: initial; --justify-content: initial; --align-items: initial; --align-content: initial; --gap: initial; --flex-basis: initial; --flex-grow: initial; --flex-shrink: initial; --order: initial; --align-self: initial; align-self: auto; flex: 0 1 auto; order: 0; place-content: normal; align-items: normal; flex-flow: row; gap: normal; position: relative; animation-duration: 1.25s; --widgets-spacing: 20px 20px; --widgets-spacing-row: 20px; --widgets-spacing-column: 20px; --swiper-theme-color: #000; --swiper-navigation-size: 44px; --swiper-pagination-bullet-size: 6px; --swiper-pagination-bullet-horizontal-gap: 6px; animation-name: fadeInUp; width: 714px; margin-bottom: 20px; margin-block-end: 20px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\"><div class=\"elementor-widget-container\" style=\"transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s, transform 0.4s;\"><h2 class=\"elementor-heading-title elementor-size-default\" style=\"color: rgb(0, 0, 0); font-family: Helvetica, sans-serif; font-weight: 600; line-height: 1; margin-block: 0.5rem 1rem; font-size: 26px; margin-bottom: 0px;\">Design Studio in Dhaka, Bangladesh</h2></div></div><div class=\"elementor-element elementor-element-a3bec58 elementor-widget elementor-widget-text-editor animated fadeInUp\" data-id=\"a3bec58\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;}\" data-widget_type=\"text-editor.default\" style=\"--flex-direction: initial; --flex-wrap: initial; --justify-content: initial; --align-items: initial; --align-content: initial; --gap: initial; --flex-basis: initial; --flex-grow: initial; --flex-shrink: initial; --order: initial; --align-self: initial; align-self: auto; flex: 0 1 auto; order: 0; place-content: normal; align-items: normal; flex-flow: row; gap: normal; position: relative; animation-duration: 1.25s; --widgets-spacing: 20px 20px; --widgets-spacing-row: 20px; --widgets-spacing-column: 20px; font-family: Roboto, sans-serif; --swiper-theme-color: #000; --swiper-navigation-size: 44px; --swiper-pagination-bullet-size: 6px; --swiper-pagination-bullet-horizontal-gap: 6px; animation-name: fadeInUp; width: 714px; margin-bottom: 20px; margin-block-end: 20px; text-align: justify; font-size: 18px;\"><div class=\"elementor-widget-container\" style=\"transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s, transform 0.4s; margin-top: -10px; margin-bottom: -9px;\"><p style=\"margin-block: 0px 0.9rem;\">Our Dhaka studio fuses local craftsmanship<br>with global trends, delivering innovative, high-quality designs.</p></div></div><div class=\"elementor-element elementor-element-ed0daa1 elementor-widget elementor-widget-heading animated fadeInUp\" data-id=\"ed0daa1\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;}\" data-widget_type=\"heading.default\" style=\"--flex-direction: initial; --flex-wrap: initial; --justify-content: initial; --align-items: initial; --align-content: initial; --gap: initial; --flex-basis: initial; --flex-grow: initial; --flex-shrink: initial; --order: initial; --align-self: initial; align-self: auto; flex: 0 1 auto; order: 0; place-content: normal; align-items: normal; flex-flow: row; gap: normal; position: relative; animation-duration: 1.25s; --widgets-spacing: 20px 20px; --widgets-spacing-row: 20px; --widgets-spacing-column: 20px; --swiper-theme-color: #000; --swiper-navigation-size: 44px; --swiper-pagination-bullet-size: 6px; --swiper-pagination-bullet-horizontal-gap: 6px; animation-name: fadeInUp; width: 714px; margin-bottom: 20px; margin-block-end: 20px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\"><div class=\"elementor-widget-container\" style=\"transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s, transform 0.4s;\"><h2 class=\"elementor-heading-title elementor-size-default\" style=\"color: rgb(0, 0, 0); font-family: Helvetica, sans-serif; font-weight: 600; line-height: 1; margin-block: 0.5rem 1rem; font-size: 26px; margin-bottom: 0px;\">We Focus</h2></div></div><div class=\"elementor-element elementor-element-7cb494c elementor-widget elementor-widget-text-editor animated fadeInUp\" data-id=\"7cb494c\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;}\" data-widget_type=\"text-editor.default\" style=\"--flex-direction: initial; --flex-wrap: initial; --justify-content: initial; --align-items: initial; --align-content: initial; --gap: initial; --flex-basis: initial; --flex-grow: initial; --flex-shrink: initial; --order: initial; --align-self: initial; align-self: auto; flex: 0 1 auto; order: 0; place-content: normal; align-items: normal; flex-flow: row; gap: normal; position: relative; animation-duration: 1.25s; --widgets-spacing: 20px 20px; --widgets-spacing-row: 20px; --widgets-spacing-column: 20px; font-family: Roboto, sans-serif; --swiper-theme-color: #000; --swiper-navigation-size: 44px; --swiper-pagination-bullet-size: 6px; --swiper-pagination-bullet-horizontal-gap: 6px; animation-name: fadeInUp; width: 714px; text-align: justify; font-size: 18px;\"><div class=\"elementor-widget-container\" style=\"transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s, transform 0.4s; margin-top: -12px; margin-bottom: -15px;\"><p style=\"margin-block: 0px 0.9rem;\"><span style=\"font-weight: bolder;\">Design &amp; Collaboration:</span><br>Sustainable, trend-driven designs powered by<br>expertise Designers based in London and<br>Dhaka Studio.<br><span style=\"font-weight: bolder;\">Shaping the Future:</span><br>Pushing fashion boundaries for change and<br>sustainability</p></div></div>','uploads/about/1765655326.jpg','right',NULL,5,1,'2025-12-13 13:48:46','2025-12-13 13:52:41');
/*!40000 ALTER TABLE `about_sections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
INSERT INTO `cache` VALUES ('laravel_cache_spatie.permission.cache','a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:30:{i:0;a:4:{s:1:\"a\";i:1;s:1:\"b\";s:14:\"dashboard.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:1;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:10:\"users.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:2;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:12:\"users.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:3;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:10:\"users.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:4;a:4:{s:1:\"a\";i:5;s:1:\"b\";s:12:\"users.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:5;a:4:{s:1:\"a\";i:6;s:1:\"b\";s:13:\"users.approve\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:6;a:4:{s:1:\"a\";i:7;s:1:\"b\";s:10:\"roles.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:7;a:4:{s:1:\"a\";i:8;s:1:\"b\";s:12:\"roles.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:8;a:4:{s:1:\"a\";i:9;s:1:\"b\";s:10:\"roles.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:9;a:4:{s:1:\"a\";i:10;s:1:\"b\";s:12:\"roles.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:10;a:4:{s:1:\"a\";i:11;s:1:\"b\";s:23:\"product_categories.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:11;a:4:{s:1:\"a\";i:12;s:1:\"b\";s:25:\"product_categories.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:12;a:4:{s:1:\"a\";i:13;s:1:\"b\";s:23:\"product_categories.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:13;a:4:{s:1:\"a\";i:14;s:1:\"b\";s:25:\"product_categories.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:14;a:4:{s:1:\"a\";i:15;s:1:\"b\";s:13:\"products.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:15;a:4:{s:1:\"a\";i:16;s:1:\"b\";s:15:\"products.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:16;a:4:{s:1:\"a\";i:17;s:1:\"b\";s:13:\"products.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:17;a:4:{s:1:\"a\";i:18;s:1:\"b\";s:15:\"products.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:18;a:4:{s:1:\"a\";i:19;s:1:\"b\";s:19:\"about_sections.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:19;a:4:{s:1:\"a\";i:20;s:1:\"b\";s:21:\"about_sections.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:20;a:4:{s:1:\"a\";i:21;s:1:\"b\";s:19:\"about_sections.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:21;a:4:{s:1:\"a\";i:22;s:1:\"b\";s:21:\"about_sections.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:22;a:4:{s:1:\"a\";i:23;s:1:\"b\";s:13:\"services.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:23;a:4:{s:1:\"a\";i:24;s:1:\"b\";s:15:\"services.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:24;a:4:{s:1:\"a\";i:25;s:1:\"b\";s:13:\"services.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:25;a:4:{s:1:\"a\";i:26;s:1:\"b\";s:15:\"services.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:26;a:4:{s:1:\"a\";i:27;s:1:\"b\";s:12:\"offices.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:27;a:4:{s:1:\"a\";i:28;s:1:\"b\";s:14:\"offices.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:28;a:4:{s:1:\"a\";i:29;s:1:\"b\";s:12:\"offices.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:29;a:4:{s:1:\"a\";i:30;s:1:\"b\";s:14:\"offices.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}}s:5:\"roles\";a:2:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:5:\"admin\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:2;s:1:\"b\";s:4:\"user\";s:1:\"c\";s:3:\"web\";}}}',1765746156);
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2025_12_09_115057_create_permission_tables',1),(5,'2025_12_09_115059_add_approval_status_to_users_table',1),(6,'2025_12_09_122145_create_product_categories_table',1),(7,'2025_12_09_122147_create_products_table',1),(9,'2025_12_13_153552_create_about_sections_table',2),(10,'2025_12_13_175657_create_services_table',2),(11,'2025_12_13_200807_create_values_table',3),(12,'2025_12_14_create_offices_table',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (1,'App\\Models\\User',1),(2,'App\\Models\\User',2);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `offices`
--

DROP TABLE IF EXISTS `offices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `offices` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_order` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `offices`
--

LOCK TABLES `offices` WRITE;
/*!40000 ALTER TABLE `offices` DISABLE KEYS */;
INSERT INTO `offices` VALUES (1,'Head Quarter and Primary Office','House-38, Level-5, Road-3B, Block-F, Sector-15, Uttara, Dhaka, Bangladesh.\nEmail: info@couturetexbd.com\nCEO: ceo@couturetexbd.com',1,1,'2025-12-13 14:57:24','2025-12-13 14:57:24'),(2,'UK Sourcing Office','129 Mile End Road, E1 4BG, London.\nUnited Kingdom.\nEmail: info.uk@couturetexbd.com\ninfo@couturetexbd.com',2,1,'2025-12-13 14:57:24','2025-12-13 14:57:24'),(3,'Sweden Sourcing Office Sourcing Office','Nebulosagatan 8, 415 63 Gothenburg.\nSweden\nEmail: sourcing.sweden@couturetexbd.com\ninfo@couturetexbd.com',3,1,'2025-12-13 14:57:24','2025-12-13 14:57:24'),(4,'Canada Sourcing Office','205-191 Hollywood Road North, Kelowna, British Columbia, V1X 3R1, Canada.\nEmail: info.canada@couturetexbd.com\ninfo@couturetexbd.com',4,1,'2025-12-13 14:57:24','2025-12-13 14:57:24');
/*!40000 ALTER TABLE `offices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'dashboard.view','web','2025-12-12 07:16:27','2025-12-12 07:16:27'),(2,'users.view','web','2025-12-12 07:16:27','2025-12-12 07:16:27'),(3,'users.create','web','2025-12-12 07:16:27','2025-12-12 07:16:27'),(4,'users.edit','web','2025-12-12 07:16:27','2025-12-12 07:16:27'),(5,'users.delete','web','2025-12-12 07:16:27','2025-12-12 07:16:27'),(6,'users.approve','web','2025-12-12 07:16:27','2025-12-12 07:16:27'),(7,'roles.view','web','2025-12-12 07:16:27','2025-12-12 07:16:27'),(8,'roles.create','web','2025-12-12 07:16:27','2025-12-12 07:16:27'),(9,'roles.edit','web','2025-12-12 07:16:27','2025-12-12 07:16:27'),(10,'roles.delete','web','2025-12-12 07:16:27','2025-12-12 07:16:27'),(11,'product_categories.view','web','2025-12-12 07:16:27','2025-12-12 07:16:27'),(12,'product_categories.create','web','2025-12-12 07:16:27','2025-12-12 07:16:27'),(13,'product_categories.edit','web','2025-12-12 07:16:27','2025-12-12 07:16:27'),(14,'product_categories.delete','web','2025-12-12 07:16:27','2025-12-12 07:16:27'),(15,'products.view','web','2025-12-12 07:16:27','2025-12-12 07:16:27'),(16,'products.create','web','2025-12-12 07:16:27','2025-12-12 07:16:27'),(17,'products.edit','web','2025-12-12 07:16:27','2025-12-12 07:16:27'),(18,'products.delete','web','2025-12-12 07:16:27','2025-12-12 07:16:27'),(19,'about_sections.view','web','2025-12-13 12:20:52','2025-12-13 12:20:52'),(20,'about_sections.create','web','2025-12-13 12:20:52','2025-12-13 12:20:52'),(21,'about_sections.edit','web','2025-12-13 12:20:52','2025-12-13 12:20:52'),(22,'about_sections.delete','web','2025-12-13 12:20:52','2025-12-13 12:20:52'),(23,'services.view','web','2025-12-13 12:20:52','2025-12-13 12:20:52'),(24,'services.create','web','2025-12-13 12:20:52','2025-12-13 12:20:52'),(25,'services.edit','web','2025-12-13 12:20:52','2025-12-13 12:20:52'),(26,'services.delete','web','2025-12-13 12:20:52','2025-12-13 12:20:52'),(27,'offices.view','web','2025-12-13 15:00:45','2025-12-13 15:00:45'),(28,'offices.create','web','2025-12-13 15:00:45','2025-12-13 15:00:45'),(29,'offices.edit','web','2025-12-13 15:00:45','2025-12-13 15:00:45'),(30,'offices.delete','web','2025-12-13 15:00:45','2025-12-13 15:00:45');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_categories`
--

DROP TABLE IF EXISTS `product_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_categories`
--

LOCK TABLES `product_categories` WRITE;
/*!40000 ALTER TABLE `product_categories` DISABLE KEYS */;
INSERT INTO `product_categories` VALUES (1,'Shirt',NULL,'active','2025-12-12 12:31:48','2025-12-12 12:31:48',NULL),(2,'Pant',NULL,'active','2025-12-12 12:31:55','2025-12-12 12:31:55',NULL),(3,'Shoe',NULL,'active','2025-12-12 12:32:04','2025-12-12 12:32:04',NULL),(4,'Women',NULL,'active','2025-12-12 13:23:12','2025-12-12 13:23:12',NULL);
/*!40000 ALTER TABLE `product_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `price` decimal(10,2) NOT NULL,
  `quantity` int NOT NULL DEFAULT '0',
  `product_category_id` bigint unsigned NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_product_category_id_foreign` (`product_category_id`),
  CONSTRAINT `products_product_category_id_foreign` FOREIGN KEY (`product_category_id`) REFERENCES `product_categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'shirt 1',NULL,400.00,1000,1,'products/uLF9ot702vAYzQqVp0gj7QaSf5aN2s3CwTWPUcGs.jpg','active','2025-12-12 13:20:57','2025-12-12 13:20:57',NULL),(2,'shirt 2',NULL,100.00,100,1,'products/XDjrm8E6sEnPW6uAquhhryJCNb0HCxPJE4QKQ5JK.jpg','active','2025-12-12 13:21:16','2025-12-12 13:21:16',NULL),(3,'shirt 3',NULL,333.00,2,1,'products/omH2unihC9LxQmnoi9ih8zyv9frytvm0kKeNBCj8.jpg','active','2025-12-12 13:21:35','2025-12-12 13:21:35',NULL),(4,'pant 1',NULL,333.00,1,2,'products/kY5iyiY1SNeFaBAJq4yBIOXXSrTzYZNZiF97NazS.jpg','active','2025-12-12 13:21:49','2025-12-12 13:21:49',NULL),(5,'pant 2',NULL,200.00,1,2,'products/BulqAqHgbnVkiruTMnEGzR1whq9EwghDaxgBNlIw.jpg','active','2025-12-12 13:22:04','2025-12-12 13:22:04',NULL),(6,'pant 3',NULL,11.00,1,2,'products/c66pZbnGjqKOg6TWDasplvcR3EdNm60LtHlmEPKK.jpg','active','2025-12-12 13:22:28','2025-12-12 13:22:28',NULL),(7,'shoe 1',NULL,100.00,1,3,'products/fhGP9at6Xf1QSUgkhQDEDh6jjcXhr9OwsOKQQnsX.jpg','active','2025-12-12 13:22:45','2025-12-12 13:22:45',NULL),(8,'shoe 2',NULL,100.00,1,3,'products/MwFSKvz3g0zad0grTQ1kP0wvUyqRhGMHLsuVKady.jpg','active','2025-12-12 13:23:03','2025-12-12 13:23:03',NULL),(9,'women 1',NULL,100.00,5,4,'products/KE1fmcDQF9KY0MvJRiFhNurmUHZXfzDHg6w15jSU.jpg','active','2025-12-12 13:23:29','2025-12-12 13:23:29',NULL),(10,'women 2',NULL,200.00,2,4,'products/0ByuPu3sJhaku6vpCZEwyCfdm8uyGIOmeMAPChs8.jpg','active','2025-12-12 13:23:47','2025-12-12 13:23:47',NULL),(11,'women 3',NULL,100.00,1,4,'products/XLrttdvRuiE0z4ZIV6GXn3TN7MzLsCcwLBtGpqNK.jpg','active','2025-12-12 13:24:04','2025-12-12 13:24:04',NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(1,2),(11,2),(12,2),(13,2),(14,2),(15,2),(16,2),(17,2),(18,2);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','web','2025-12-12 07:16:27','2025-12-12 07:16:27'),(2,'user','web','2025-12-12 07:16:27','2025-12-12 07:16:27');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `front_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `front_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `front_description` text COLLATE utf8mb4_unicode_ci,
  `back_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `back_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `back_description` text COLLATE utf8mb4_unicode_ci,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'uploads/services/front_1765654199.jpg','title 1','<p>test</p><p>test 2</p>','uploads/services/back_1765654199.jpg','title 2','<p>tsst 3</p><p>td</p>','see more','#',2,1,'2025-12-13 13:29:59','2025-12-13 13:33:27'),(2,'uploads/services/front_1765654332.jpg','Enim delectus quide','Nulla debitis esse a. gf','uploads/services/back_1765654332.jpg','Harum proident aspe','Ut ut facere qui con. fd','Quia quaerat qui vol','Aliquam aut at vel i',1,1,'2025-12-13 13:32:12','2025-12-13 13:33:27'),(3,'uploads/services/front_1765654407.png','Deserunt aperiam nih','Quo reprehenderit pe. d','uploads/services/back_1765654407.jpg','Amet omnis cum odio','Assumenda minim quia. d','Ut consequatur est','Expedita et adipisci',0,1,'2025-12-13 13:33:27','2025-12-13 13:33:32');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('Afe1XYUBs2kuLRLLZSCWEA0mf1hoHcRWWP1cXQPw',1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36','YTo2OntzOjY6Il90b2tlbiI7czo0MDoicUh5RFdxdjlydVhyMTF4RUFxaGRjUjg4ODMwd2xVOVkzcHJkT3FMYiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbiI7czo1OiJyb3V0ZSI7czoxNToiYWRtaW4uZGFzaGJvYXJkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo2OiJsb2NhbGUiO3M6MjoiZW4iO30=',1765660596);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `approval_status` enum('pending','approved','rejected') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `profile_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@admin.com','$2y$12$MlEG1hAQlE0KKLuKsyRH4uKN1ncAxt5hughOromrx5YFB6yOCqGhG','active','approved',NULL,NULL,'2025-12-12 07:16:27','2025-12-12 07:16:27',NULL),(2,'mamun','mamun@gmail.com','$2y$12$iT18.K9OT2/LWkrKh3xMvOJhRbxfru6783Qh64qXUtk8Lb4Tuar7O','active','approved','profile-photos/MjQXDWOeNFcKUBNlChNbFtY94J1c4Dw6XCCkj5HD.jpg',NULL,'2025-12-12 08:39:56','2025-12-12 08:54:33',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `values`
--

DROP TABLE IF EXISTS `values`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `values` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `values`
--

LOCK TABLES `values` WRITE;
/*!40000 ALTER TABLE `values` DISABLE KEYS */;
INSERT INTO `values` VALUES (1,'Customer Centricity','Our customers are at the heart of everything we do. We listen to their needs and aim for satisfaction through proactive engagement and superior service.','uploads/values/1765656876.png',0,1,'2025-12-13 14:14:36','2025-12-13 14:14:36'),(2,'Transparency, Accountability and Trust','We prioritize transparency, accountability, and trust to foster open communication and lasting partnerships based on mutual respect.','uploads/values/1765656975.png',1,1,'2025-12-13 14:16:15','2025-12-13 14:16:22'),(3,'Integrity and Ethics','We are committed to trust, integrity, and ethics in all interactions, maintaining high standards of honesty and promoting transparency.','uploads/values/1765656999.png',2,1,'2025-12-13 14:16:39','2025-12-13 14:16:39');
/*!40000 ALTER TABLE `values` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-12-15  8:26:19
