-- MySQL dump 10.13  Distrib 8.0.41, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: webbanhang
-- ------------------------------------------------------
-- Server version	9.2.0

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
-- Table structure for table `app_category`
--

DROP TABLE IF EXISTS `app_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `app_category` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `is_sub` tinyint(1) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `sub_category_id` bigint DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`),
  KEY `app_category_sub_category_id_7b7f6a7f_fk_app_category_id` (`sub_category_id`),
  CONSTRAINT `app_category_sub_category_id_7b7f6a7f_fk_app_category_id` FOREIGN KEY (`sub_category_id`) REFERENCES `app_category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `app_category`
--

LOCK TABLES `app_category` WRITE;
/*!40000 ALTER TABLE `app_category` DISABLE KEYS */;
INSERT INTO `app_category` VALUES (1,0,'Oppo','oppo',NULL),(2,1,'Oppo A06','oppo-A06',1),(3,1,'Oppo A3','oppo-A3',1),(4,1,'Oppo A3x','oppo-A3x',1),(5,1,'Oppo Reno 13','oppo-Reno-13',1),(6,0,'Samsung','samsung',NULL),(7,1,'Samsung Galaxy S25 Plus','samsung-galaxy-s25-plus',6),(8,1,'Samsung Galaxy S25 Ultra','samsung-galaxy-s25-ultra',6),(9,1,'Samsung Galaxy Z Flip6','samsung-galaxy-z-flip6',6),(10,1,'Samsung Galaxy Z Fold6','samsung-galaxy-z-fold6',6),(11,0,'Vivo','vivo',NULL),(12,1,'Vivo Y03','vivo-y03',11),(13,1,'Vivo Y19S','vivo-y19s',11),(14,1,'Vivo Y28','vivo-y28',11),(15,1,'Vivo V40 Lite','vivo-v40-lite',11),(16,0,'Xiaomi','xiaomi',NULL),(17,1,'Xiaomi Rredmi Note 14 Pro Plus','xiaomi-redmi-note-14-pro-plus',16),(18,1,'Xiaomi Redmi Note 14 Pro','xiaomi-redmi-note-14-pro',16),(19,1,'Xiaomi 14T','xiaomi-14t',16),(20,1,'Xiaomi Redmi 14C','xiaomi-redmi-14c',16);
/*!40000 ALTER TABLE `app_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `app_order`
--

DROP TABLE IF EXISTS `app_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `app_order` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `data_order` datetime(6) NOT NULL,
  `complete` tinyint(1) DEFAULT NULL,
  `transaction_id` varchar(200) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `customer_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `app_order_customer_id_7c27c407_fk_auth_user_id` (`customer_id`),
  CONSTRAINT `app_order_customer_id_7c27c407_fk_auth_user_id` FOREIGN KEY (`customer_id`) REFERENCES `auth_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `app_order`
--

LOCK TABLES `app_order` WRITE;
/*!40000 ALTER TABLE `app_order` DISABLE KEYS */;
INSERT INTO `app_order` VALUES (1,'2025-02-15 03:18:50.711380',0,NULL,1),(2,'2025-02-17 13:05:17.236527',0,NULL,2);
/*!40000 ALTER TABLE `app_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `app_orderitem`
--

DROP TABLE IF EXISTS `app_orderitem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `app_orderitem` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `date_added` datetime(6) NOT NULL,
  `product_id` bigint DEFAULT NULL,
  `order_id` bigint DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `app_orderitem_product_id_5f40ddb0_fk_app_product_id` (`product_id`),
  KEY `app_orderitem_order_id_41257a1b_fk_app_order_id` (`order_id`),
  CONSTRAINT `app_orderitem_order_id_41257a1b_fk_app_order_id` FOREIGN KEY (`order_id`) REFERENCES `app_order` (`id`),
  CONSTRAINT `app_orderitem_product_id_5f40ddb0_fk_app_product_id` FOREIGN KEY (`product_id`) REFERENCES `app_product` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `app_orderitem`
--

LOCK TABLES `app_orderitem` WRITE;
/*!40000 ALTER TABLE `app_orderitem` DISABLE KEYS */;
INSERT INTO `app_orderitem` VALUES (1,'2025-02-15 03:41:37.566419',1,1,3);
/*!40000 ALTER TABLE `app_orderitem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `app_product`
--

DROP TABLE IF EXISTS `app_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `app_product` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `price` double NOT NULL,
  `digital` tinyint(1) DEFAULT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_520_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `app_product`
--

LOCK TABLES `app_product` WRITE;
/*!40000 ALTER TABLE `app_product` DISABLE KEYS */;
INSERT INTO `app_product` VALUES (1,'Oppo A06',1000,1,'oppo-a60_NN7JK4Y.jpg','- Màn hình: Kích thước khoảng 6.5 inch, độ phân giải HD+ hoặc Full HD+. \r\n- Hiệu năng: Chip MediaTek hoặc Snapdragon tầm trung, RAM 4GB-6GB, bộ nhớ trong 64GB-128GB.\r\n\r\n- Camera: Camera chính 50MP, camera selfie 8MP.\r\n- Pin: Dung lượng lớn (khoảng 5000mAh), hỗ trợ sạc nhanh.\r\n- Hệ điều hành: ColorOS trên nền Android mới nhất.'),(2,'Oppo A3',1500,1,'oppo-a3_Mp18IP8.jpg','- Màn hình: 6.2 inch, độ phân giải Full HD+ (2280 × 1080), thiết kế \"tai thỏ\".\r\n- Chipset: MediaTek Helio P60.\r\n- RAM & ROM: 4GB RAM, 128GB ROM (hỗ trợ thẻ nhớ).\r\n- Camera: Sau 16MP, trước 8MP.\r\n- Pin: 3400mAh, không hỗ trợ sạc nhanh.\r\n- Hệ điều hành: Android 8.1 (ColorOS 5.0).\r\n- Thiết kế: Mỏng nhẹ, mặt lưng vân kim cương độc đáo.'),(3,'Oppo A3x',2500,1,'oppo-a3x_iuBbK3r.jpg','- Màn hình: 6.67 inch, HD+, 90Hz.\r\n- Chipset: Snapdragon 6s Gen 1.\r\n- RAM & ROM: 4GB/6GB RAM, 64GB/128GB/256GB ROM (hỗ trợ thẻ nhớ 1TB).\r\n- Camera: Sau 8MP, trước 5MP.\r\n- Pin: 5100mAh, sạc nhanh 45W.\r\n- Hệ điều hành: Android 14, ColorOS 14.\r\n- Tính năng: IP54, 4G, NFC, USB-C, jack 3.5mm.'),(4,'Oppo Reno 13 F',5000,1,'oppo-reno13_KrIyjGQ.jpg','- Màn hình: AMOLED 6.59 inch, độ phân giải 1.5K (2760 x 1256 pixel), tần số quét 120Hz. \r\n- Chipset: MediaTek Dimensity 8350 5G 8 nhân. \r\n- RAM & ROM: 12GB/16GB RAM, 256GB/512GB/1TB ROM. \r\n- Camera sau: Chính 50MP, phụ 8MP. \r\n- Camera trước: 50MP. \r\n- Pin: 5600mAh, sạc nhanh 80W. \r\n- Hệ điều hành: Android 15. \r\n- Tính năng khác: Kháng nước và bụi chuẩn IP66, IP68, IP69.'),(5,'Samsung Galaxy S25 Plus',23000,1,'samsung-galaxy-s25-plus_yAbHt4x.jpg','- Màn hình: Dynamic AMOLED 2X 6.7 inch, độ phân giải 3120 x 1440 pixel, tần số quét 120Hz.\r\n- Chipset: Qualcomm Snapdragon 8 Elite (3nm).\r\n- RAM & ROM: 12GB RAM, tùy chọn 256GB hoặc 512GB bộ nhớ trong.\r\n- Camera sau: Chính 50MP, góc siêu rộng 12MP, tele 10MP (zoom quang 3x).\r\n- Camera trước: 12MP.\r\n- Pin: 4900mAh, hỗ trợ sạc nhanh 45W.\r\n- Hệ điều hành: Android 15 với giao diện One UI 7.\r\n- Kích thước & Trọng lượng: 158.4 x 75.8 x 7.3 mm, 190g.'),(6,'Samsung Galaxy S25 Ultra',21000,1,'samsung-galaxy-s25-ultra_hacA7Qv.jpg','- Màn hình: Dynamic AMOLED 2X 6.9 inch, độ phân giải 3120 x 1440 pixel, tần số quét 120Hz, độ sáng tối đa 2600 nits.\r\n\r\n- Chipset: Qualcomm Snapdragon 8 Elite (3nm).\r\n\r\n- RAM & ROM: 12GB RAM, tùy chọn 256GB, 512GB hoặc 1TB bộ nhớ trong.\r\n\r\n- Camera sau: Chính 200MP, góc siêu rộng 50MP, tele 50MP (zoom quang 3x), tele 10MP (zoom quang 5x).\r\n\r\n- Camera trước: 12MP.\r\n\r\n- Pin: 5000mAh, hỗ trợ sạc nhanh 45W.\r\n\r\n- Hệ điều hành: Android 15 với giao diện One UI 7.\r\n\r\n- Kích thước & Trọng lượng: 162.8 x 77.6 x 8.2 mm, 218g.\r\n\r\n- Tính năng khác: Khung titan, hỗ trợ bút S Pen (không có Bluetooth), kháng nước và bụi chuẩn IP68.'),(7,'Samsung Galaxy Z Flip6',20000,1,'samsung-galaxy-z-flip6_PKO7dBb.jpg','- Màn hình chính: Dynamic LTPO AMOLED 2X 6.7 inch, độ phân giải 1080 x 2640 pixel, tần số quét 120Hz, độ sáng tối đa 2600 nits.\r\n\r\n- Màn hình phụ: Super AMOLED 3.4 inch, độ phân giải 720 x 748 pixel.\r\n\r\n- Chipset: Qualcomm Snapdragon 8 Gen 3 (4nm).\r\n\r\n- RAM & ROM: 12GB RAM, tùy chọn 256GB hoặc 512GB bộ nhớ trong.\r\n\r\n- Camera sau: Chính 50MP, góc siêu rộng 12MP.\r\n\r\n- Camera trước: 10MP.\r\n\r\n- Pin: 4000mAh, hỗ trợ sạc nhanh 25W.\r\n\r\n- Hệ điều hành: Android 14 với giao diện One UI 6.1.1.\r\n\r\n- Kích thước & Trọng lượng: 165.1 x 71.9 x 6.9 mm (mở), 85.1 x 71.9 x 14.9 mm (gập); 187g.\r\n\r\n- Tính năng khác: Khung nhôm bọc thép, kháng nước IP48.'),(8,'Samsung Galaxy Z Fold6',19000,1,'samsung-galaxy-z-fold6_l8vkadi.jpg','- Màn hình chính: Dynamic AMOLED 2X 7.6 inch, độ phân giải QXGA+, tần số quét 1-120Hz. \r\n\r\n- Màn hình phụ: Dynamic AMOLED 2X 6.3 inch, tần số quét 120Hz.\r\n\r\n- Chipset: Qualcomm Snapdragon 8 Gen 3 (4nm). \r\n\r\n- RAM & ROM: 12GB RAM, tùy chọn 256GB, 512GB hoặc 1TB bộ nhớ trong. \r\n\r\n- Camera sau: Chính 50MP, góc siêu rộng 12MP, tele 10MP (zoom quang 3x). \r\n\r\n- Camera trước: 10MP (màn hình phụ), 4MP (camera ẩn dưới màn hình chính).\r\n\r\n- Pin: 4400mAh, hỗ trợ sạc nhanh 25W. \r\n\r\n- Hệ điều hành: Android 14 với giao diện One UI 6.1.1. \r\n\r\n- Kích thước & Trọng lượng: 153.5 x 132.6 x 5.6 mm (mở), 153.5 x 68.1 x 12.1 mm (gập); 239g. \r\n\r\n\r\n- Tính năng khác: Khung nhôm, mặt lưng kính cường lực, kháng nước IP48.'),(9,'Vivo Y03',2600,1,'vivo-y03.jpg','Vivo Y03 là một chiếc điện thoại thông minh với màn hình 6.51 inch HD+, trang bị bộ vi xử lý MediaTek Helio P35, RAM 3GB và bộ nhớ trong 32GB, có thể mở rộng qua thẻ nhớ. Máy sở hữu camera sau 13MP và camera trước 5MP. Pin của Vivo Y03 có dung lượng 5000mAh, hỗ trợ sử dụng lâu dài. Thiết bị này chạy trên hệ điều hành Funtouch OS dựa trên Android 12.'),(10,'Vivo Y19S',2000,1,'vivo-y19s.jpg','Vivo Y19s là một chiếc điện thoại tầm trung với màn hình 6.53 inch Full HD+, sử dụng bộ vi xử lý MediaTek Helio P65, RAM 4GB và bộ nhớ trong 128GB, có thể mở rộng qua thẻ nhớ. Máy có hệ thống camera kép phía sau gồm camera chính 16MP và camera phụ 8MP, camera trước 16MP. Vivo Y19s trang bị pin 5000mAh với khả năng sạc nhanh 18W. Nó chạy trên hệ điều hành Funtouch OS dựa trên Android 9.0.'),(11,'Vivo Y28',3999,0,'vivo-y28.jpg','- Màn hình: 6.56 inch, độ phân giải 720 x 1612 pixels, tần số quét 90Hz.\r\n- Bộ vi xử lý: MediaTek Dimensity 6020.\r\n- RAM và bộ nhớ trong: Tùy chọn 4GB/6GB/8GB RAM và 128GB bộ nhớ trong, hỗ trợ thẻ nhớ microSD lên đến 1TB.\r\n- Camera: Camera sau 50MP + 2MP; camera trước 8MP.\r\n- Pin: Dung lượng 5000mAh, hỗ trợ sạc nhanh 15W.\r\n- Hệ điều hành: Android 13 với giao diện Funtouch 13.\r\n- Khả năng chống nước và bụi: Tiêu chuẩn IP54.'),(12,'Vivo V40 Lite',6900,1,'vivo-v40-lite.jpg','- Màn hình: 6.67 inch AMOLED, độ phân giải 1080 x 2400 pixels, tần số quét 120Hz.\r\n- Bộ vi xử lý: Qualcomm Snapdragon 4 Gen 2.\r\n- RAM và bộ nhớ trong: Tùy chọn 8GB/12GB RAM và 256GB/512GB bộ nhớ trong, hỗ trợ thẻ nhớ microSD.\r\n- Camera: Camera sau 50MP; camera trước 8MP.\r\n- Pin: Dung lượng 5000mAh, hỗ trợ sạc nhanh 80W.\r\n- Hệ điều hành: Android 14 với giao diện Funtouch 14.\r\n- Khả năng chống nước và bụi: Tiêu chuẩn IP64.'),(13,'Xiaomi Rredmi Note 14 Pro Plus',6900,1,'xiaomi-redmi-note-14-pro-plus.jpg','- Màn hình: 6.67 inch AMOLED, độ phân giải 1.5K, tần số quét 120Hz, hỗ trợ HDR10+ và Dolby Vision.\r\n- Bộ vi xử lý: Snapdragon 7s Gen 3, giúp mang lại hiệu năng mượt mà cho các tác vụ và chơi game.\r\n- RAM và bộ nhớ trong: Tùy chọn 8GB/12GB RAM và bộ nhớ trong từ 128GB đến 512GB.\r\n- Camera: Camera chính 50MP, camera siêu rộng 50MP, và camera macro 8MP.\r\n- Pin: Dung lượng 6200mAh, hỗ trợ sạc nhanh 90W.\r\n- Hệ điều hành: Chạy trên MIUI 15, dựa trên Android 14.\r\n- Khả năng chống nước: Tiêu chuẩn IP68, bảo vệ khỏi nước và bụi.'),(14,'Xiaomi Redmi Note 14 Pro',7000,1,'xiaomi-redmi-note-14-pro.jpg','- Màn hình: 6.67 inch AMOLED, độ phân giải 1.5K, tần số quét 120Hz, hỗ trợ HDR10+ và Dolby Vision.\r\n\r\n- Bộ vi xử lý: MediaTek Dimensity 7300-Ultra, mang lại hiệu năng mượt mà cho các tác vụ hàng ngày và chơi game.\r\n\r\n- RAM và bộ nhớ trong: Tùy chọn 8GB/12GB RAM và bộ nhớ trong từ 128GB đến 512GB.\r\n\r\n- Camera: Hệ thống camera sau 200MP với OIS (chống rung quang học), hỗ trợ chụp ảnh chất lượng cao trong nhiều điều kiện ánh sáng.\r\n\r\n- Pin và sạc: Pin dung lượng 5110mAh, hỗ trợ sạc nhanh 45W, cho phép sử dụng lâu dài và sạc nhanh chóng.\r\n\r\n- Khả năng chống nước và bụi: Tiêu chuẩn IP68, bảo vệ thiết bị khỏi nước và bụi.'),(15,'Xiaomi 14T',4300,1,'xiaomi-14t.jpg','- Màn hình: 6.67 inch AMOLED, độ phân giải 2712 x 1220 pixels, tần số quét lên đến 144Hz, hỗ trợ HDR10+ và Dolby Vision. \r\n\r\n- Bộ vi xử lý: MediaTek Dimensity 8300 Ultra (4nm), với CPU 8 nhân và GPU Mali G615-MC6, mang lại hiệu năng mượt mà cho các tác vụ hàng ngày và chơi game. \r\n\r\n- RAM và bộ nhớ trong: Tùy chọn 12GB/16GB RAM và bộ nhớ trong 256GB/512GB, không hỗ trợ thẻ nhớ microSD. \r\n\r\n- Camera: Hệ thống ba camera sau với cảm biến chính 50MP, hỗ trợ chụp ảnh chất lượng cao trong nhiều điều kiện ánh sáng. \r\n\r\n\r\n- Pin và sạc: Pin dung lượng 5000mAh, hỗ trợ sạc nhanh 67W, cho phép sạc đầy trong khoảng 45 phút. \r\n\r\n- Khả năng chống nước và bụi: Tiêu chuẩn IP68, bảo vệ thiết bị khỏi nước và bụi. \r\n\r\n- Hệ điều hành: Chạy trên HyperOS dựa trên Android 14, cung cấp trải nghiệm người dùng mượt mà và nhiều tính năng thông minh.'),(16,'Xiaomi Redmi 14C',4990,1,'xiaomi-redmi-14c.jpg','- Màn hình: 6.88 inch, độ phân giải HD+ (720 x 1640 pixels), tần số quét lên đến 120Hz, mang đến trải nghiệm mượt mà khi lướt web và chơi game. \r\n\r\n- Bộ vi xử lý: MediaTek Helio G81 Ultra, hỗ trợ hiệu năng ổn định cho các tác vụ hàng ngày và giải trí. \r\n\r\n- RAM và bộ nhớ trong: Tùy chọn 4GB/6GB/8GB RAM và bộ nhớ trong 128GB/256GB, hỗ trợ mở rộng bộ nhớ qua thẻ microSDXC. \r\n\r\n- Camera: Camera chính 50MP và camera selfie 13MP, hỗ trợ chụp ảnh sắc nét và rõ ràng. \r\n\r\n- Pin và sạc: Pin dung lượng 5160mAh, hỗ trợ sạc nhanh 18W, cho phép sử dụng lâu dài và sạc nhanh chóng. \r\n\r\n- Hệ điều hành: Chạy trên HyperOS dựa trên Android 14, cung cấp trải nghiệm người dùng mượt mà và nhiều tính năng thông minh. \r\n\r\n\r\n- Khả năng kết nối: Hỗ trợ kết nối LTE, Bluetooth 5.4, WiFi ac, NFC và radio FM.');
/*!40000 ALTER TABLE `app_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `app_product_category`
--

DROP TABLE IF EXISTS `app_product_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `app_product_category` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `product_id` bigint NOT NULL,
  `category_id` bigint NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `app_product_category_product_id_category_id_73528da5_uniq` (`product_id`,`category_id`),
  KEY `app_product_category_category_id_369a9753_fk_app_category_id` (`category_id`),
  CONSTRAINT `app_product_category_category_id_369a9753_fk_app_category_id` FOREIGN KEY (`category_id`) REFERENCES `app_category` (`id`),
  CONSTRAINT `app_product_category_product_id_c059d7b6_fk_app_product_id` FOREIGN KEY (`product_id`) REFERENCES `app_product` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `app_product_category`
--

LOCK TABLES `app_product_category` WRITE;
/*!40000 ALTER TABLE `app_product_category` DISABLE KEYS */;
INSERT INTO `app_product_category` VALUES (1,1,1),(2,1,2),(3,2,1),(4,2,3),(5,3,1),(6,3,4),(7,4,1),(8,4,5),(9,5,6),(10,5,7),(12,6,6),(11,6,8),(14,7,6),(13,7,9),(16,8,6),(15,8,10),(17,9,11),(18,9,12),(19,10,11),(20,10,13),(21,11,11),(22,11,14),(23,12,11),(24,12,15),(25,13,16),(26,13,17),(27,14,16),(28,14,18),(29,15,16),(30,15,19),(31,16,16),(32,16,20);
/*!40000 ALTER TABLE `app_product_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `app_shippingaddress`
--

DROP TABLE IF EXISTS `app_shippingaddress`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `app_shippingaddress` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `address` varchar(200) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `city` varchar(200) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `state` varchar(200) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `mobile` varchar(10) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `date_added` datetime(6) NOT NULL,
  `customer_id` int DEFAULT NULL,
  `order_id` bigint DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `app_shippingaddress_order_id_220f1517_fk_app_order_id` (`order_id`),
  KEY `app_shippingaddress_customer_id_24c9534f_fk_auth_user_id` (`customer_id`),
  CONSTRAINT `app_shippingaddress_customer_id_24c9534f_fk_auth_user_id` FOREIGN KEY (`customer_id`) REFERENCES `auth_user` (`id`),
  CONSTRAINT `app_shippingaddress_order_id_220f1517_fk_app_order_id` FOREIGN KEY (`order_id`) REFERENCES `app_order` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `app_shippingaddress`
--

LOCK TABLES `app_shippingaddress` WRITE;
/*!40000 ALTER TABLE `app_shippingaddress` DISABLE KEYS */;
/*!40000 ALTER TABLE `app_shippingaddress` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_group`
--

DROP TABLE IF EXISTS `auth_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `auth_group` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_group`
--

LOCK TABLES `auth_group` WRITE;
/*!40000 ALTER TABLE `auth_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_group_permissions`
--

DROP TABLE IF EXISTS `auth_group_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `auth_group_permissions` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `group_id` int NOT NULL,
  `permission_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `auth_group_permissions_group_id_permission_id_0cd325b0_uniq` (`group_id`,`permission_id`),
  KEY `auth_group_permissio_permission_id_84c5c92e_fk_auth_perm` (`permission_id`),
  CONSTRAINT `auth_group_permissio_permission_id_84c5c92e_fk_auth_perm` FOREIGN KEY (`permission_id`) REFERENCES `auth_permission` (`id`),
  CONSTRAINT `auth_group_permissions_group_id_b120cbf9_fk_auth_group_id` FOREIGN KEY (`group_id`) REFERENCES `auth_group` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_group_permissions`
--

LOCK TABLES `auth_group_permissions` WRITE;
/*!40000 ALTER TABLE `auth_group_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_group_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_permission`
--

DROP TABLE IF EXISTS `auth_permission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `auth_permission` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `content_type_id` int NOT NULL,
  `codename` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `auth_permission_content_type_id_codename_01ab375a_uniq` (`content_type_id`,`codename`),
  CONSTRAINT `auth_permission_content_type_id_2f476e4b_fk_django_co` FOREIGN KEY (`content_type_id`) REFERENCES `django_content_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_permission`
--

LOCK TABLES `auth_permission` WRITE;
/*!40000 ALTER TABLE `auth_permission` DISABLE KEYS */;
INSERT INTO `auth_permission` VALUES (1,'Can add log entry',1,'add_logentry'),(2,'Can change log entry',1,'change_logentry'),(3,'Can delete log entry',1,'delete_logentry'),(4,'Can view log entry',1,'view_logentry'),(5,'Can add permission',2,'add_permission'),(6,'Can change permission',2,'change_permission'),(7,'Can delete permission',2,'delete_permission'),(8,'Can view permission',2,'view_permission'),(9,'Can add group',3,'add_group'),(10,'Can change group',3,'change_group'),(11,'Can delete group',3,'delete_group'),(12,'Can view group',3,'view_group'),(13,'Can add user',4,'add_user'),(14,'Can change user',4,'change_user'),(15,'Can delete user',4,'delete_user'),(16,'Can view user',4,'view_user'),(17,'Can add content type',5,'add_contenttype'),(18,'Can change content type',5,'change_contenttype'),(19,'Can delete content type',5,'delete_contenttype'),(20,'Can view content type',5,'view_contenttype'),(21,'Can add session',6,'add_session'),(22,'Can change session',6,'change_session'),(23,'Can delete session',6,'delete_session'),(24,'Can view session',6,'view_session'),(25,'Can add order',7,'add_order'),(26,'Can change order',7,'change_order'),(27,'Can delete order',7,'delete_order'),(28,'Can view order',7,'view_order'),(29,'Can add product',8,'add_product'),(30,'Can change product',8,'change_product'),(31,'Can delete product',8,'delete_product'),(32,'Can view product',8,'view_product'),(33,'Can add shipping address',9,'add_shippingaddress'),(34,'Can change shipping address',9,'change_shippingaddress'),(35,'Can delete shipping address',9,'delete_shippingaddress'),(36,'Can view shipping address',9,'view_shippingaddress'),(37,'Can add order item',10,'add_orderitem'),(38,'Can change order item',10,'change_orderitem'),(39,'Can delete order item',10,'delete_orderitem'),(40,'Can view order item',10,'view_orderitem'),(41,'Can add category',11,'add_category'),(42,'Can change category',11,'change_category'),(43,'Can delete category',11,'delete_category'),(44,'Can view category',11,'view_category');
/*!40000 ALTER TABLE `auth_permission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_user`
--

DROP TABLE IF EXISTS `auth_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `auth_user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `password` varchar(128) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `last_login` datetime(6) DEFAULT NULL,
  `is_superuser` tinyint(1) NOT NULL,
  `username` varchar(150) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `first_name` varchar(150) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `last_name` varchar(150) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(254) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `is_staff` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `date_joined` datetime(6) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_user`
--

LOCK TABLES `auth_user` WRITE;
/*!40000 ALTER TABLE `auth_user` DISABLE KEYS */;
INSERT INTO `auth_user` VALUES (1,'pbkdf2_sha256$260000$Ew709gqk6KaItYbaVMN6tY$/JrKOuNDTVQB2TVYGDWBj+dFpbw7NwQl8TjDhjdPn+s=','2025-02-17 13:53:54.123283',1,'admin','','','nduytam12@gmail.com',1,1,'2025-02-14 14:23:58.882568'),(2,'pbkdf2_sha256$260000$EY2dqsXDCMio0b3IQyho6O$Q3FFVdCCMh6AAQoxPXGv30zHlmpqqSMosCwMXXbXCyE=','2025-02-17 13:05:17.163373',0,'Tam','Tai','Nguyen','nduytam122@gmail.com',0,1,'2025-02-17 13:04:13.190701');
/*!40000 ALTER TABLE `auth_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_user_groups`
--

DROP TABLE IF EXISTS `auth_user_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `auth_user_groups` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `group_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `auth_user_groups_user_id_group_id_94350c0c_uniq` (`user_id`,`group_id`),
  KEY `auth_user_groups_group_id_97559544_fk_auth_group_id` (`group_id`),
  CONSTRAINT `auth_user_groups_group_id_97559544_fk_auth_group_id` FOREIGN KEY (`group_id`) REFERENCES `auth_group` (`id`),
  CONSTRAINT `auth_user_groups_user_id_6a12ed8b_fk_auth_user_id` FOREIGN KEY (`user_id`) REFERENCES `auth_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_user_groups`
--

LOCK TABLES `auth_user_groups` WRITE;
/*!40000 ALTER TABLE `auth_user_groups` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_user_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_user_user_permissions`
--

DROP TABLE IF EXISTS `auth_user_user_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `auth_user_user_permissions` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `permission_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `auth_user_user_permissions_user_id_permission_id_14a6b632_uniq` (`user_id`,`permission_id`),
  KEY `auth_user_user_permi_permission_id_1fbb5f2c_fk_auth_perm` (`permission_id`),
  CONSTRAINT `auth_user_user_permi_permission_id_1fbb5f2c_fk_auth_perm` FOREIGN KEY (`permission_id`) REFERENCES `auth_permission` (`id`),
  CONSTRAINT `auth_user_user_permissions_user_id_a95ead1b_fk_auth_user_id` FOREIGN KEY (`user_id`) REFERENCES `auth_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_user_user_permissions`
--

LOCK TABLES `auth_user_user_permissions` WRITE;
/*!40000 ALTER TABLE `auth_user_user_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_user_user_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `django_admin_log`
--

DROP TABLE IF EXISTS `django_admin_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `django_admin_log` (
  `id` int NOT NULL AUTO_INCREMENT,
  `action_time` datetime(6) NOT NULL,
  `object_id` longtext COLLATE utf8mb4_unicode_520_ci,
  `object_repr` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `action_flag` smallint unsigned NOT NULL,
  `change_message` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `content_type_id` int DEFAULT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `django_admin_log_content_type_id_c4bce8eb_fk_django_co` (`content_type_id`),
  KEY `django_admin_log_user_id_c564eba6_fk_auth_user_id` (`user_id`),
  CONSTRAINT `django_admin_log_content_type_id_c4bce8eb_fk_django_co` FOREIGN KEY (`content_type_id`) REFERENCES `django_content_type` (`id`),
  CONSTRAINT `django_admin_log_user_id_c564eba6_fk_auth_user_id` FOREIGN KEY (`user_id`) REFERENCES `auth_user` (`id`),
  CONSTRAINT `django_admin_log_chk_1` CHECK ((`action_flag` >= 0))
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `django_admin_log`
--

LOCK TABLES `django_admin_log` WRITE;
/*!40000 ALTER TABLE `django_admin_log` DISABLE KEYS */;
INSERT INTO `django_admin_log` VALUES (1,'2025-02-15 03:24:57.790757','1','Oppo',1,'[{\"added\": {}}]',11,1),(2,'2025-02-15 03:25:26.633158','2','Oppo A06',1,'[{\"added\": {}}]',11,1),(3,'2025-02-15 03:25:38.685480','3','Oppo A3',1,'[{\"added\": {}}]',11,1),(4,'2025-02-15 03:25:51.644265','4','Oppo A3x',1,'[{\"added\": {}}]',11,1),(5,'2025-02-15 03:26:17.832076','5','Oppo Reno 13',1,'[{\"added\": {}}]',11,1),(6,'2025-02-15 03:26:33.334704','6','Samsung',1,'[{\"added\": {}}]',11,1),(7,'2025-02-15 03:27:29.459451','7','Samsung Galaxy S25 Plus',1,'[{\"added\": {}}]',11,1),(8,'2025-02-15 03:28:02.239717','8','Samsung Galaxy S25 Ultra',1,'[{\"added\": {}}]',11,1),(9,'2025-02-15 03:28:30.768634','9','Samsung Galaxy Z Flip6',1,'[{\"added\": {}}]',11,1),(10,'2025-02-15 03:28:59.477048','10','Samsung Galaxy Z Fold6',1,'[{\"added\": {}}]',11,1),(11,'2025-02-15 03:41:09.922629','1','Oppo A06',1,'[{\"added\": {}}]',8,1),(12,'2025-02-15 13:34:27.595271','1','Oppo A06',2,'[{\"changed\": {\"fields\": [\"Detail\"]}}]',8,1),(13,'2025-02-15 13:34:57.259493','1','Oppo A06',2,'[{\"changed\": {\"fields\": [\"Detail\"]}}]',8,1),(14,'2025-02-15 13:37:01.358915','9','Samsung Galaxy Z Flip6',2,'[{\"changed\": {\"fields\": [\"Is sub\"]}}]',11,1),(15,'2025-02-15 13:44:46.296725','2','Oppo A3',1,'[{\"added\": {}}]',8,1),(16,'2025-02-15 13:46:06.597681','3','Oppo A3x',1,'[{\"added\": {}}]',8,1),(17,'2025-02-15 13:47:43.302037','4','Oppo Reno 13',1,'[{\"added\": {}}]',8,1),(18,'2025-02-15 13:48:02.328496','4','Oppo Reno 13 F',2,'[{\"changed\": {\"fields\": [\"Name\"]}}]',8,1),(19,'2025-02-15 13:50:04.308449','5','Samsung Galaxy S25 Plus',1,'[{\"added\": {}}]',8,1),(20,'2025-02-15 13:51:51.332116','6','Samsung Galaxy S25 Ultra',1,'[{\"added\": {}}]',8,1),(21,'2025-02-15 13:53:16.550313','7','Samsung Galaxy Z Flip6',1,'[{\"added\": {}}]',8,1),(22,'2025-02-15 13:54:59.724629','8','Samsung Galaxy Z Fold6',1,'[{\"added\": {}}]',8,1),(23,'2025-02-17 13:54:11.758163','11','Vivo',1,'[{\"added\": {}}]',11,1),(24,'2025-02-17 13:54:42.572604','12','Vivo Y03',1,'[{\"added\": {}}]',11,1),(25,'2025-02-17 13:55:13.670834','13','Vivo Y19S',1,'[{\"added\": {}}]',11,1),(26,'2025-02-17 13:55:37.113690','14','Vivo Y28',1,'[{\"added\": {}}]',11,1),(27,'2025-02-17 13:56:06.033430','15','Vivo V40 Lite',1,'[{\"added\": {}}]',11,1),(28,'2025-02-17 13:57:30.876626','9','Vivo Y03',1,'[{\"added\": {}}]',8,1),(29,'2025-02-17 13:58:17.157310','10','Vivo Y19S',1,'[{\"added\": {}}]',8,1),(30,'2025-02-17 13:59:38.219411','11','Vivo Y28',1,'[{\"added\": {}}]',8,1),(31,'2025-02-17 14:00:19.915445','12','Vivo V40 Lite',1,'[{\"added\": {}}]',8,1),(32,'2025-02-17 14:03:01.395517','16','Xiaomi',1,'[{\"added\": {}}]',11,1),(33,'2025-02-17 14:03:40.468677','17','Xiaomi Rredmi Note 14 Pro Plus',1,'[{\"added\": {}}]',11,1),(34,'2025-02-17 14:04:15.397858','18','Xiaomi Redmi Note 14 Pro',1,'[{\"added\": {}}]',11,1),(35,'2025-02-17 14:04:35.128575','19','Xiaomi 14T',1,'[{\"added\": {}}]',11,1),(36,'2025-02-17 14:04:58.982676','20','Xiaomi Redmi 14C',1,'[{\"added\": {}}]',11,1),(37,'2025-02-17 14:06:35.700531','13','Xiaomi Rredmi Note 14 Pro Plus',1,'[{\"added\": {}}]',8,1),(38,'2025-02-17 14:07:50.878411','14','Xiaomi Redmi Note 14 Pro',1,'[{\"added\": {}}]',8,1),(39,'2025-02-17 14:10:28.167845','15','Xiaomi 14T',1,'[{\"added\": {}}]',8,1),(40,'2025-02-17 14:11:49.380124','16','Xiaomi Redmi 14C',1,'[{\"added\": {}}]',8,1);
/*!40000 ALTER TABLE `django_admin_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `django_content_type`
--

DROP TABLE IF EXISTS `django_content_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `django_content_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `app_label` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `model` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `django_content_type_app_label_model_76bd3d3b_uniq` (`app_label`,`model`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `django_content_type`
--

LOCK TABLES `django_content_type` WRITE;
/*!40000 ALTER TABLE `django_content_type` DISABLE KEYS */;
INSERT INTO `django_content_type` VALUES (1,'admin','logentry'),(11,'app','category'),(7,'app','order'),(10,'app','orderitem'),(8,'app','product'),(9,'app','shippingaddress'),(3,'auth','group'),(2,'auth','permission'),(4,'auth','user'),(5,'contenttypes','contenttype'),(6,'sessions','session');
/*!40000 ALTER TABLE `django_content_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `django_migrations`
--

DROP TABLE IF EXISTS `django_migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `django_migrations` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `app` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `applied` datetime(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `django_migrations`
--

LOCK TABLES `django_migrations` WRITE;
/*!40000 ALTER TABLE `django_migrations` DISABLE KEYS */;
INSERT INTO `django_migrations` VALUES (1,'contenttypes','0001_initial','2025-02-14 14:07:21.232539'),(2,'auth','0001_initial','2025-02-14 14:07:22.428754'),(3,'admin','0001_initial','2025-02-14 14:07:22.729414'),(4,'admin','0002_logentry_remove_auto_add','2025-02-14 14:07:22.751713'),(5,'admin','0003_logentry_add_action_flag_choices','2025-02-14 14:07:22.802372'),(6,'app','0001_initial','2025-02-14 14:07:23.642340'),(7,'app','0002_auto_20250208_2013','2025-02-14 14:07:24.145994'),(8,'app','0003_auto_20250211_2055','2025-02-14 14:07:24.762806'),(9,'app','0004_category','2025-02-14 14:07:24.954427'),(10,'app','0005_product_category','2025-02-14 14:07:25.239231'),(11,'app','0006_product_detail','2025-02-14 14:07:25.330381'),(12,'contenttypes','0002_remove_content_type_name','2025-02-14 14:07:25.515434'),(13,'auth','0002_alter_permission_name_max_length','2025-02-14 14:07:25.688729'),(14,'auth','0003_alter_user_email_max_length','2025-02-14 14:07:25.759206'),(15,'auth','0004_alter_user_username_opts','2025-02-14 14:07:25.781814'),(16,'auth','0005_alter_user_last_login_null','2025-02-14 14:07:25.897118'),(17,'auth','0006_require_contenttypes_0002','2025-02-14 14:07:25.905160'),(18,'auth','0007_alter_validators_add_error_messages','2025-02-14 14:07:25.924850'),(19,'auth','0008_alter_user_username_max_length','2025-02-14 14:07:26.072507'),(20,'auth','0009_alter_user_last_name_max_length','2025-02-14 14:07:26.272896'),(21,'auth','0010_alter_group_name_max_length','2025-02-14 14:07:26.345942'),(22,'auth','0011_update_proxy_permissions','2025-02-14 14:07:26.385773'),(23,'auth','0012_alter_user_first_name_max_length','2025-02-14 14:07:26.507643'),(24,'sessions','0001_initial','2025-02-14 14:07:26.580315');
/*!40000 ALTER TABLE `django_migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `django_session`
--

DROP TABLE IF EXISTS `django_session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `django_session` (
  `session_key` varchar(40) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `session_data` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `expire_date` datetime(6) NOT NULL,
  PRIMARY KEY (`session_key`),
  KEY `django_session_expire_date_a5c62663` (`expire_date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `django_session`
--

LOCK TABLES `django_session` WRITE;
/*!40000 ALTER TABLE `django_session` DISABLE KEYS */;
/*!40000 ALTER TABLE `django_session` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-02-18 10:11:05
