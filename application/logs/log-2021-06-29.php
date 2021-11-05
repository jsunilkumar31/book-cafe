<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-06-29 22:30:30 --> Could not find the language line "book_total_label"
ERROR - 2021-06-29 22:33:50 --> Could not find the language line "book_total_label"
ERROR - 2021-06-29 22:36:31 --> Could not find the language line "book_total_label"
ERROR - 2021-06-29 22:37:35 --> Could not find the language line "book_total_label"
ERROR - 2021-06-29 22:38:33 --> Could not find the language line "book_total_label"
ERROR - 2021-06-29 22:40:09 --> Could not find the language line "book_total_label"
ERROR - 2021-06-29 22:48:03 --> Could not find the language line "book_total_label"
ERROR - 2021-06-29 22:48:28 --> Could not find the language line "book_total_label"
ERROR - 2021-06-29 22:49:57 --> Could not find the language line "book_total_label"
ERROR - 2021-06-29 22:50:04 --> Could not find the language line "book_plan"
ERROR - 2021-06-29 22:50:10 --> Could not find the language line "book_total_label"
ERROR - 2021-06-29 22:50:24 --> Could not find the language line "book_total_label"
ERROR - 2021-06-29 22:53:50 --> Could not find the language line "book_total_label"
ERROR - 2021-06-29 22:55:47 --> Could not find the language line "book_total_label"
ERROR - 2021-06-29 22:59:40 --> Could not find the language line "book_total_label"
ERROR - 2021-06-29 23:00:35 --> Could not find the language line "book_total_label"
ERROR - 2021-06-29 23:01:23 --> Could not find the language line "book_total_label"
ERROR - 2021-06-29 23:02:30 --> Could not find the language line "book_total_label"
ERROR - 2021-06-29 23:03:42 --> Could not find the language line "book_total_label"
ERROR - 2021-06-29 23:07:46 --> Could not find the language line "book_total_label"
ERROR - 2021-06-29 23:07:46 --> Severity: Notice --> Undefined variable: getCategoryByID C:\xampp\htdocs\bookscafe-ci_old\application\controllers\Home.php 76
ERROR - 2021-06-29 23:07:46 --> Severity: error --> Exception: Function name must be a string C:\xampp\htdocs\bookscafe-ci_old\application\controllers\Home.php 76
ERROR - 2021-06-29 23:08:04 --> Could not find the language line "book_total_label"
ERROR - 2021-06-29 23:08:04 --> Severity: error --> Exception: Too few arguments to function Home_model::getCategoryByID(), 0 passed in C:\xampp\htdocs\bookscafe-ci_old\application\controllers\Home.php on line 76 and exactly 1 expected C:\xampp\htdocs\bookscafe-ci_old\application\models\Home_model.php 126
ERROR - 2021-06-29 23:08:31 --> Could not find the language line "book_total_label"
ERROR - 2021-06-29 23:08:31 --> Query error: Not unique table/alias: 'categories' - Invalid query: SELECT *
FROM `categories`
LEFT JOIN `book_categories` ON `books`.`id`=`book_categories`.`book_id`
LEFT JOIN `categories` ON `book_categories`.`category_id`=`categories`.`id`
WHERE `categories`.`id` = '4'
GROUP BY `categories`.`id`
 LIMIT 1
ERROR - 2021-06-29 23:09:27 --> Could not find the language line "book_total_label"
ERROR - 2021-06-29 23:09:27 --> Query error: Unknown column 'books.id' in 'on clause' - Invalid query: SELECT *
FROM `categories`
LEFT JOIN `book_categories` ON `books`.`id`=`book_categories`.`book_id`
WHERE `categories`.`id` = '4'
GROUP BY `categories`.`id`
 LIMIT 1
ERROR - 2021-06-29 23:10:17 --> Could not find the language line "book_total_label"
ERROR - 2021-06-29 23:12:45 --> Could not find the language line "book_total_label"
ERROR - 2021-06-29 23:13:17 --> Could not find the language line "book_total_label"
ERROR - 2021-06-29 23:14:17 --> Could not find the language line "book_total_label"
ERROR - 2021-06-29 23:17:31 --> Could not find the language line "book_total_label"
