-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `buggies`;
CREATE TABLE `buggies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `member_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `buggies` (`id`, `member_id`, `status`, `created_at`, `updated_at`) VALUES
(1,	'0',	'',	NULL,	'2019-01-09 21:43:15');

DROP TABLE IF EXISTS `buggies_info`;
CREATE TABLE `buggies_info` (
  `buggies_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `sale_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `carousel_ad`;
CREATE TABLE `carousel_ad` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `img_src` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `carousel_ad` (`id`, `name`, `start_date`, `end_date`, `img_src`, `created_at`, `updated_at`) VALUES
(1,	'first',	'2018-12-10',	'2019-02-01',	'images/carousel_ad/bird.jpg',	NULL,	NULL),
(2,	'sec',	'2018-12-10',	'2019-02-01',	'images/carousel_ad/coco.jpg',	NULL,	NULL),
(3,	'third',	'2018-12-10',	'2019-02-01',	'images/carousel_ad/kitchen.jpg',	NULL,	NULL),
(4,	'mickey_mouse',	'2018-12-10',	'2019-02-01',	'images/carousel_ad/mickey_mouse.jpg',	NULL,	NULL);

DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `points` int(11) NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `members_account_unique` (`account`),
  UNIQUE KEY `members_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `members` (`id`, `name`, `account`, `password`, `email`, `email_verified_at`, `points`, `phone`, `birthday`, `img`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'彭彭',	'aa123',	'$2y$10$GlpOZjc/jM7MAMDeClsoQ.CPeXlbRa.aB2BvLXla9kW2UD3CBhXfe',	'aa349276@gmail.com',	NULL,	0,	'0911111111',	'2019-01-01',	'images/users/default.jpg',	'VWOeeeJJ2FTnXlzM1OKxNSvnEiZoHfKjvO4AgJ9THQ4ZK6wPtYqHfjk7AHYk',	'2019-01-05 06:11:47',	'2019-01-05 06:11:47');

DROP TABLE IF EXISTS `members_events`;
CREATE TABLE `members_events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `member_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `problem` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `members_notice`;
CREATE TABLE `members_notice` (
  `member_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `frequency` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `members_payment`;
CREATE TABLE `members_payment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `member_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `members_payment` (`id`, `member_id`, `payments`, `key`, `created_at`, `updated_at`) VALUES
(1,	'1',	'信用卡',	'4561259876431576',	NULL,	NULL);

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(72,	'2014_10_12_000000_create_users_table',	1),
(73,	'2014_10_12_100000_create_password_resets_table',	1),
(74,	'2018_12_13_053225_create_products_table',	1),
(75,	'2018_12_13_054429_create_products_classes_table',	1),
(76,	'2018_12_13_054755_create_vendors_table',	1),
(77,	'2018_12_13_055546_create_buggies_table',	1),
(78,	'2018_12_13_060300_create_products_info_table',	1),
(79,	'2018_12_13_061547_create_sales_table',	1),
(80,	'2018_12_13_062051_create_members_table',	1),
(81,	'2018_12_13_063304_create_members_events_table',	1),
(82,	'2018_12_13_063711_create_members_notice_table',	1),
(83,	'2018_12_13_064207_create_on_sale_table',	1),
(84,	'2018_12_15_121441_create_members_payment_table',	1),
(85,	'2018_12_15_145547_create_sales_info_table',	1),
(86,	'2018_12_15_151451_create_buggies_info_table',	1),
(87,	'2018_12_16_071624_create_carousel_ad_table',	2);

DROP TABLE IF EXISTS `on_sale`;
CREATE TABLE `on_sale` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `img_src` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `threshold` int(11) NOT NULL,
  `discount` double(8,2) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `on_sale` (`id`, `name`, `start_date`, `end_date`, `img_src`, `threshold`, `discount`, `type`, `created_at`, `updated_at`) VALUES
(1,	'大顆中秋月餅',	'2018-12-14',	'2018-01-14',	'images/activity_ad/mid_autumn.jpg',	1,	0.80,	'777',	NULL,	NULL),
(2,	'齁齁齁 剩蛋節來了',	'2018-12-15',	'2018-01-15',	'images/activity_ad/merry_christmas.jpg',	1,	0.80,	'777',	NULL,	NULL),
(3,	'double eleven gogogo',	'2018-12-16',	'2018-01-16',	'images/activity_ad/double_eleven.jpg',	1,	0.80,	'777',	NULL,	NULL);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `storage` int(11) NOT NULL,
  `safety_stock` int(11) NOT NULL,
  `discount` double(8,2) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendor_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `products` (`id`, `name`, `price`, `amount`, `storage`, `safety_stock`, `discount`, `img`, `class_id`, `vendor_id`, `created_at`, `updated_at`) VALUES
(1,	'健司 黃金起司',	35,	1,	10,	1,	0.10,	'https://cf.shopee.tw/file/8c0f791d2d76182e11feb87e1fa93755',	'1',	'1',	NULL,	NULL),
(2,	'<維力>大炒一番泡菜燒肉風味',	30,	1,	10,	10,	0.10,	'https://www.savesafe.com.tw/ProdImg/1773/895/00/1773895_00_main.jpg?t=20161128181441',	'2',	'2',	NULL,	NULL),
(3,	'西雅圖咖啡-奶茶',	25,	1,	10,	10,	0.10,	'https://img.biggo.com.tw/s9WMzC9uQ7TpekcukvTWuh4LUy2HfOqQGUk3ptphb1y4/https://tshop.r10s.com/94d/3c1/733b/1b2e/c1e0/4f9e/4aa3/11e8e79a022c600c73774e.jpg',	'1',	'3',	NULL,	NULL),
(4,	'春風超細柔抽取式衛生紙',	185,	72,	10,	10,	0.20,	'https://d.ecimg.tw/items/DAAG0UA90062AZM/000001_1546828590.jpg',	'3',	'4',	NULL,	NULL),
(5,	'舒潔棉柔舒適抽取衛生紙',	338,	24,	10,	10,	0.25,	'http://img2.e-payless.com.tw/content/images/thumbs/0159104_1108x8-.jpeg',	'3',	'5',	NULL,	NULL);

DROP TABLE IF EXISTS `products_classes`;
CREATE TABLE `products_classes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `products_classes` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1,	'食品/零食類',	'下午茶點心、飯後甜點。',	NULL,	NULL),
(2,	'食品/方便類',	'早餐、中餐、晚餐，方便食品。',	NULL,	NULL),
(3,	'家用品/貼身清潔',	'適用一般人體清潔',	NULL,	NULL);

DROP TABLE IF EXISTS `products_info`;
CREATE TABLE `products_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `describe` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contain` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_tax` tinyint(1) NOT NULL,
  `keep_temp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soldedservice` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `otherdescribe` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `products_info` (`id`, `describe`, `contain`, `is_tax`, `keep_temp`, `dateline`, `soldedservice`, `otherdescribe`, `created_at`, `updated_at`) VALUES
(1,	'*點心,下午茶，鹹香好滋味',	'5片/包',	0,	'陰涼通風處，避免曝曬',	'1年',	'1.於Store Go購物所購買之所有商品，本公司將於出貨時，隨貨附上紙本發票或按您的需求寄發電子發票。\r\n\r\n2.依照消費者保護法規定，購物消費者享有商品到貨七天之猶豫期間，但退貨的商品必須為全新狀態且完整包裝未經拆封(包含內外包裝、贈品等)。 此外，消耗性商品(如食品、日用品、內衣褲、個人衛生用品)以及商品銷售網頁上特別載明之商品， 由於其商品屬性特殊，有保存期限或個人衛生等問題，無法享有前開之七天猶豫期間， 但此類商品仍享有本公司新品瑕疵無條件退/換貨的售後服務。\r\n\r\n3.於Store Go購物所購買之商品，暫時無法提供換貨服務，若該商品無法滿足您的需求，煩請直接辦理退貨（大型家俱商品、大型家電商品等若需退貨，可能需要負擔配送運費）。\r\n\r\n4.由於安裝/卸除費用並非商品之對價，謹請您於商品安裝/卸除前，仔細考量對於商品之需求，商品一經安裝/卸除，縱使商品事後進行退貨退款，然安裝費/卸除用仍須收取而無法退還，敬請您留心。\r\n\r\n5.於Store Go購物所購買之商品若有維修之需求時，本公司將協助您處理；惟若該商品無保固或已超過保固期間時，請自行將需維修之商品寄回，且其相關之運費與維修費等費用均應由消費者自行支出。',	'金黃起司餅乾特別選用荷蘭進口的起司，在麵團中大手筆添加高達15%起司含量，經由天然酵母完全自然發酵後，均溫細膩烘焙，完美融合起司與麵糰，每一片聞起來沒有強烈的起司香料味，但入口便能品嘗到厚醇起司香氣，以及酥脆的口感，越咀嚼越能感受到天然食材獨有的好美味。 \r\n\r\n※ 製造日期與有效期限，商品成分與適用注意事項皆標示於包裝或產品中\r\n※ 本產品網頁因拍攝關係，圖檔略有差異，實際以廠商出貨為主\r\n※ 本產品文案若有變動敬請參照實際商品為準',	NULL,	NULL),
(2,	'★媲美現炒炒麵\r\n★Q彈麵條配上獨特醬汁',	'85g/包',	0,	'陰涼通風處，避免曝曬',	'1年',	'1.於Store Go購物所購買之所有商品，本公司將於出貨時，隨貨附上紙本發票或按您的需求寄發電子發票。\r\n\r\n2.依照消費者保護法規定，購物消費者享有商品到貨七天之猶豫期間，但退貨的商品必須為全新狀態且完整包裝未經拆封(包含內外包裝、贈品等)。 此外，消耗性商品(如食品、日用品、內衣褲、個人衛生用品)以及商品銷售網頁上特別載明之商品， 由於其商品屬性特殊，有保存期限或個人衛生等問題，無法享有前開之七天猶豫期間， 但此類商品仍享有本公司新品瑕疵無條件退/換貨的售後服務。\r\n\r\n3.於Store Go購物所購買之商品，暫時無法提供換貨服務，若該商品無法滿足您的需求，煩請直接辦理退貨（大型家俱商品、大型家電商品等若需退貨，可能需要負擔配送運費）。\r\n\r\n4.由於安裝/卸除費用並非商品之對價，謹請您於商品安裝/卸除前，仔細考量對於商品之需求，商品一經安裝/卸除，縱使商品事後進行退貨退款，然安裝費/卸除用仍須收取而無法退還，敬請您留心。\r\n\r\n5.於Store Go購物所購買之商品若有維修之需求時，本公司將協助您處理；惟若該商品無保固或已超過保固期間時，請自行將需維修之商品寄回，且其相關之運費與維修費等費用均應由消費者自行支出。',	'口味是辣的，但是辣的很好吃，喜歡吃辣的人一定會超愛，不敢吃辣的人可能要好好考慮。味道很鮮明，有一點點的泡菜燒肉味。整體的味道讓人吃一口就想吃第二口，吃一包就想煮第二包',	NULL,	NULL),
(3,	'★頂級茶品完美呈現給您 \r\n★完美比例的奶茶口味 \r\n★香濃順口，適合下午茶來一杯!!',	'25k/包',	0,	'陰涼通風處，避免曝曬',	'2年',	'1.於Store Go購物所購買之所有商品，本公司將於出貨時，隨貨附上紙本發票或按您的需求寄發電子發票。\r\n\r\n2.依照消費者保護法規定，購物消費者享有商品到貨七天之猶豫期間，但退貨的商品必須為全新狀態且完整包裝未經拆封(包含內外包裝、贈品等)。 此外，消耗性商品(如食品、日用品、內衣褲、個人衛生用品)以及商品銷售網頁上特別載明之商品， 由於其商品屬性特殊，有保存期限或個人衛生等問題，無法享有前開之七天猶豫期間， 但此類商品仍享有本公司新品瑕疵無條件退/換貨的售後服務。\r\n\r\n3.於Store Go購物所購買之商品，暫時無法提供換貨服務，若該商品無法滿足您的需求，煩請直接辦理退貨（大型家俱商品、大型家電商品等若需退貨，可能需要負擔配送運費）。\r\n\r\n4.由於安裝/卸除費用並非商品之對價，謹請您於商品安裝/卸除前，仔細考量對於商品之需求，商品一經安裝/卸除，縱使商品事後進行退貨退款，然安裝費/卸除用仍須收取而無法退還，敬請您留心。\r\n\r\n5.於Store Go購物所購買之商品若有維修之需求時，本公司將協助您處理；惟若該商品無保固或已超過保固期間時，請自行將需維修之商品寄回，且其相關之運費與維修費等費用均應由消費者自行支出。',	'1886年，在英國東北部一個叫做約克夏(Yorkshire)的地方，英國人開始經營一系列精緻、\r\n溫馨的小茶館。我們的採購人員參訪世界各地的茶園與咖啡園，尋找頂級茶與極品咖啡。\r\n今天我們就將這樣的\'頂級茶品\'完美呈現給您。',	NULL,	NULL),
(4,	'重裝出擊、單抽更便宜！包材少更環保！ 增量環保新包裝、經濟實惠更超值！ 100%原生處女紙漿、不含螢光劑！ 台灣製造、品質有保障！\r\n',	'110抽/包',	0,	'陰涼通風處，避免曝曬',	'5年',	'1.於Store Go購物所購買之所有商品，本公司將於出貨時，隨貨附上紙本發票或按您的需求寄發電子發票。\r\n\r\n2.依照消費者保護法規定，購物消費者享有商品到貨七天之猶豫期間，但退貨的商品必須為全新狀態且完整包裝未經拆封(包含內外包裝、贈品等)。 此外，消耗性商品(如食品、日用品、內衣褲、個人衛生用品)以及商品銷售網頁上特別載明之商品， 由於其商品屬性特殊，有保存期限或個人衛生等問題，無法享有前開之七天猶豫期間， 但此類商品仍享有本公司新品瑕疵無條件退/換貨的售後服務。\r\n\r\n3.於Store Go購物所購買之商品，暫時無法提供換貨服務，若該商品無法滿足您的需求，煩請直接辦理退貨（大型家俱商品、大型家電商品等若需退貨，可能需要負擔配送運費）。\r\n\r\n4.由於安裝/卸除費用並非商品之對價，謹請您於商品安裝/卸除前，仔細考量對於商品之需求，商品一經安裝/卸除，縱使商品事後進行退貨退款，然安裝費/卸除用仍須收取而無法退還，敬請您留心。\r\n\r\n5.於Store Go購物所購買之商品若有維修之需求時，本公司將協助您處理；惟若該商品無保固或已超過保固期間時，請自行將需維修之商品寄回，且其相關之運費與維修費等費用均應由消費者自行支出。',	'◆紙質更柔更韌 超質感\r\n\r\n◆點對點柔滑壓紋 紙張柔軟更好用\r\n\r\n◆使用100%處女紙漿，品質純淨有保障 \r\n\r\n◆科學造林，環保造紙，保護自然生態，永續地球資源\r\n\r\n◆不添加螢光劑，使用更安心\r\n\r\n◆紙張經超高溫瞬間乾燥處理，衛生安全\r\n\r\n◆全新壓花設計，柔軟觸感再升級\r\n\r\n◆本產品可溶於水中，不阻塞馬桶\r\n\r\n※ 製造日期與有效期限，商品成分與適用注意事項皆標示於包裝或產品中\r\n\r\n※ 本產品網頁因拍攝關係，圖檔略有差異，實際以廠商出貨為主\r\n\r\n※ 本產品文案若有變動敬請參照實際商品為準',	NULL,	NULL),
(5,	'重裝出擊、單抽更便宜！包材少更環保！ 增量環保新包裝、經濟實惠更超值！ 100%原生處女紙漿、不含螢光劑！ 台灣製造、品質有保障！\r\n',	'100.00 PC抽',	0,	'陰涼通風處，避免曝曬',	'5年',	'1.於Store Go購物所購買之所有商品，本公司將於出貨時，隨貨附上紙本發票或按您的需求寄發電子發票。\r\n\r\n2.依照消費者保護法規定，購物消費者享有商品到貨七天之猶豫期間，但退貨的商品必須為全新狀態且完整包裝未經拆封(包含內外包裝、贈品等)。 此外，消耗性商品(如食品、日用品、內衣褲、個人衛生用品)以及商品銷售網頁上特別載明之商品， 由於其商品屬性特殊，有保存期限或個人衛生等問題，無法享有前開之七天猶豫期間， 但此類商品仍享有本公司新品瑕疵無條件退/換貨的售後服務。\r\n\r\n3.於Store Go購物所購買之商品，暫時無法提供換貨服務，若該商品無法滿足您的需求，煩請直接辦理退貨（大型家俱商品、大型家電商品等若需退貨，可能需要負擔配送運費）。\r\n\r\n4.由於安裝/卸除費用並非商品之對價，謹請您於商品安裝/卸除前，仔細考量對於商品之需求，商品一經安裝/卸除，縱使商品事後進行退貨退款，然安裝費/卸除用仍須收取而無法退還，敬請您留心。\r\n\r\n5.於Store Go購物所購買之商品若有維修之需求時，本公司將協助您處理；惟若該商品無保固或已超過保固期間時，請自行將需維修之商品寄回，且其相關之運費與維修費等費用均應由消費者自行支出。\r\n',	'※ 製造日期與有效期限，商品成分與適用注意事項皆標示於包裝或產品中\r\n\r\n※ 本產品網頁因拍攝關係，圖檔略有差異，實際以廠商出貨為主\r\n\r\n※ 本產品文案若有變動敬請參照實際商品為準\r\n',	NULL,	NULL);

DROP TABLE IF EXISTS `sales`;
CREATE TABLE `sales` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `member_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `sales` (`id`, `member_id`, `date`, `time`, `created_at`, `updated_at`) VALUES
(5,	'1',	'2019-01-10',	'05:43:15',	'2019-01-09 21:43:15',	'2019-01-09 21:43:15');

DROP TABLE IF EXISTS `sales_info`;
CREATE TABLE `sales_info` (
  `sales_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `sales_info` (`sales_id`, `product_id`, `amount`, `created_at`, `updated_at`) VALUES
('5',	'1',	1,	'2019-01-09 21:43:15',	'2019-01-09 21:43:15'),
('5',	'3',	1,	'2019-01-09 21:43:15',	'2019-01-09 21:43:15');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `vendors`;
CREATE TABLE `vendors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `vendors` (`id`, `name`, `contact_name`, `contact_position`, `country`, `city`, `postal_code`, `address`, `fax_number`, `created_at`, `updated_at`) VALUES
(1,	'台灣真弓通商股份有限公司',	'',	'',	'台灣',	'台北市',	'114',	'台北市內湖區基湖路35巷51號5 樓 之 一',	'',	NULL,	NULL),
(2,	'維力食品工業股份有限公司',	'',	'',	'台灣',	'彰化縣',	'520',	'彰化縣田中鎮員集路三段465號',	'',	NULL,	NULL),
(3,	'馥餘實業股份有限公司',	'',	'',	'台灣',	'台北市',	'114',	'台北市內湖區環山路一段28巷15號',	'',	NULL,	NULL),
(4,	'正隆股份有限公司',	'',	'',	'台灣',	'新竹縣',	'302',	'新竹縣竹北市長青路二段300號',	'',	NULL,	NULL),
(5,	'台灣舒潔股份有限公司',	'',	'',	'台灣',	'台北市',	'114',	'台北市五常街中山區10491',	'',	NULL,	NULL);

-- 2019-01-14 12:33:58
