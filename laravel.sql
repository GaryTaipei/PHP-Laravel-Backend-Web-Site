-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-11-13 04:43:09
-- 伺服器版本： 10.4.28-MariaDB
-- PHP 版本： 8.2.4

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： laravel
--
CREATE DATABASE IF NOT EXISTS laravel DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE laravel;

-- --------------------------------------------------------

--
-- 資料表結構 articles
--

CREATE TABLE articles (
  id bigint(20) UNSIGNED NOT NULL,
  title varchar(100) NOT NULL,
  content varchar(1000) NOT NULL,
  image_path varchar(255) DEFAULT NULL,
  active varchar(1) NOT NULL DEFAULT 'N',
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 articles
--

INSERT INTO articles (id, title, content, image_path, active, created_at, updated_at) VALUES
(3, '測試title--2RXb5e', '測試Content--uCQDBcdjsbYdXNkqio2ZwiX4zKrJ5llrI63sOqTMgyIJ9Eon6dy9BOXXuuJWvDX6p5EJTpXx1b2CCXjCEKyEOuQYlJvM2tSMutsheHFIHVcp3dZfSfN5YspuvLGg4RUSMbFwqx1Aqf99V6mbKziT5QwfYksxJV4T2WNOlFgrr3WHxWbhpKRkzxONgWIzNn4E0xQ6gVMjKrjLQHTSEc07lr5uJ5McWvCCboe4KBj3P0k7yZm6MXrE0oYQssopcll', NULL, 'N', NULL, NULL),
(4, '測試title--3SOxYQ', '測試Content--lyciqkdwHSbI4B34iSDJHMJgjI8TF8Nbd25JYAvPMXfA2CGYxgIWYqS10LDPdE5MAJcc2DfHY2b3GN0oNaTd1gOEe8USn6m721zWIhFD4LzyIcwJG3xP5hQy8iGRABbxEbJz8ANJdz3XV20cyNou6HhzCAjbLOz6xzyPqKjsQ7VUWljskEah1WV9aO4dplEX2L3YMSGjFdTpxjWaAZeZqPdrD1QO3tyzHTKHy4Q2xI8S2snmPzSmo8r8yTlYuFS', NULL, 'N', NULL, NULL),
(5, '測試title--41td6m', '測試Content--5iqNRx3P3r5FAGhIaj5Iiln86pEbcQf6Y5eexFrYb48LwZdJjdDRbP5OV1nQHKUWoY4pypUAkwvoM7tncTitKpNC0H9zc5gJPOGlYaCmGzd69lfjtENvIvXzTI5ia23nsOQJaECPEmsBpOI6wFosj5AufZ6IztWk7bZJXmmBIq6qQQ0YxAp5RAvd5Gs91kRM91VRZMyjz9Hv13lkR22TIC1E4zA6Je8YGBI16yjNSm76MAfBZM0rZsuBB8Id6yV', NULL, 'N', NULL, NULL),
(9, '測試title--88DJbN', '測試Content--hcfk49w9cCySwFDshF7e6eChHbzg6UFMfc7G3sSkGCbpZ5rHfQVLX559ew5dIRkpLCfoFJ1SOTl7klO0yxjDP5MH1wiz7H3kMsP9BdxXCXw9qAHIWYcFAkSLPd2KKmz236PMqZxoWIotP9JIrhTZ1uhlofjhvbcHNH8bHzyDMTWOQDbhe5eWeI4kcSQTh41zolkayIekAUQP1wnduDXpSPvxHCOaJAufJtEIcbI15hQdDi6DN3kPgjxFc764NBH', NULL, 'N', NULL, NULL),
(11, 'this is test 4', 'test content 4', '11.jpg', 'Y', '2023-11-10 08:06:04', '2023-11-12 03:35:54'),
(24, 'test 1112-2', 'content 1112-2', '24.jpg', 'Y', '2023-11-12 01:45:13', '2023-11-12 03:43:58'),
(25, 'test 1112-5', 'content 1112-5', '25.jpg', 'N', '2023-11-12 04:02:11', '2023-11-12 04:02:11');

-- --------------------------------------------------------

--
-- 資料表結構 article_users
--

CREATE TABLE article_users (
  usr_id int(11) NOT NULL,
  name varchar(200) NOT NULL,
  age int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 article_users
--

INSERT INTO article_users (usr_id, name, age) VALUES
(1, 'Prescott Bartlett', 27),
(2, 'Gavin Cortez', 22),
(3, 'Lael Greet', 30);

-- --------------------------------------------------------

--
-- 資料表結構 migrations
--

CREATE TABLE migrations (
  id int(10) UNSIGNED NOT NULL,
  migration varchar(255) NOT NULL,
  batch int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 migrations
--

INSERT INTO migrations (id, migration, batch) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2023_11_10_074415_create_articles_table', 1);

-- --------------------------------------------------------

--
-- 資料表結構 product_purchased
--

CREATE TABLE product_purchased (
  usr_id int(11) NOT NULL,
  brand_name varchar(200) DEFAULT NULL,
  product_name varchar(200) DEFAULT NULL,
  price decimal(10,2) DEFAULT NULL,
  buy_time date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 product_purchased
--

INSERT INTO product_purchased (usr_id, brand_name, product_name, price, buy_time) VALUES
(1, 'Gap', 'Sweater', 35.99, '2010-10-02'),
(3, 'Nike', 'Shoes', 125.99, '2013-06-12'),
(4, 'Adidas', 'Shoes', 105.99, '2013-08-25'),
(5, 'H&M', 'Jacket', 129.99, '2013-05-09');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 articles
--
ALTER TABLE articles
  ADD PRIMARY KEY (id);

--
-- 資料表索引 article_users
--
ALTER TABLE article_users
  ADD PRIMARY KEY (usr_id);

--
-- 資料表索引 migrations
--
ALTER TABLE migrations
  ADD PRIMARY KEY (id);

--
-- 資料表索引 product_purchased
--
ALTER TABLE product_purchased
  ADD PRIMARY KEY (usr_id),
  ADD UNIQUE KEY usr_id (usr_id);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) articles
--
ALTER TABLE articles
  MODIFY id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) migrations
--
ALTER TABLE migrations
  MODIFY id int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
