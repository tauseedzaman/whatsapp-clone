<?php 


$host = "localhost";
$username = "root";
$password = "";
$db = "chatapp";

$conn = mysqli_connect($host, $username, $password) or die('connection error');

// create database if not esits
$query = "create database if not exists `chatapp`";

mysqli_query($conn,$query) or die("con't create database");

$query = "USE `chatapp`";

mysqli_query($conn,$query) or die(" database dones not selected");

$query = "CREATE TABLE IF NOT EXISTS `chats` ( 
	`id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT , 
	`name` VARCHAR(100) NOT NULL , 
	`phone` VARCHAR(25) NOT NULL , 
	`photo_path` VARCHAR(255) NOT NULL , 
	`created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , 
	`updated_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , 
	PRIMARY KEY (`id`)) ENGINE = InnoDB";

mysqli_query($conn, $query) or die("con't create Chats table". mysqli_error($conn));


$query = "CREATE TABLE IF NOT EXISTS `phones` ( 
	`id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT , 
	`phone` VARCHAR(25) NOT NULL , 
	`created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP , 
	`updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP , 
	PRIMARY KEY (`id`)) ENGINE = InnoDB";

mysqli_query($conn, $query) or die("con't create phones table");


 ?>