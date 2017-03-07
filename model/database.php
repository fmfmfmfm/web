<?php
$servername = "localhost";
$username = "root";
$password = "w19971221";
$dbname = "news";
$conn =new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
	die("SERVER ERROR".$conn->error);
}
// else{
// 	echo "SERVER OK";
// }
// $sqltable = "CREATE DATABASE think_data";
// if (mysqli_query($conn,$sqltable)) {
// 	echo "建标 is OK";
// }else{
// 	echo "its ERROR".mysqli_error($conn);
// }
// $ccc = "CREATE TABLE IF	NOT	EXISTS	`think_data`(			
// `id` int(8)	unsigned NOT NULL AUTO_INCREMENT,		
// `data` varchar(255) NOT	NULL,			
// PRIMARY	KEY	(`id`) 
// ) ENGINE=MyISAM	 DEFAULT	CHARSET=utf8";

// $bbb="INSERT INTO `think_data`(`id`,`data`)	VALUES 
// (1,'thinkphp'), 
// (2,'php'), 
// (3,'framework')";
// if (mysqli_query($conn,$ccc)) {
// 	echo "table is OK";
// }else{
// 	echo "its ERROR".mysqli_error($conn);
// }
// if (mysqli_query($conn,$bbb)) {
// 	echo "value is OK";
// }else{
// 	echo "its ERROR".mysqli_error($conn);
// }

// $sqltable = "CREATE DATABASE news";
// if (mysqli_query($conn,$sqltable)) {
// 	echo "table is OK";
// }else{
// 	echo "its ERROR".mysqli_error($conn);
// }
// $sql = "CREATE TABLE news (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// title VARCHAR(30) NOT NULL,
// usename VARCHAR(30) NOT NULL,
// connton VARCHAR(50),
// con_date TIMESTAMP

// )";
// if ($conn->query($sql)===TRUE) {
// 	echo "its OK";
// }else{
// 	echo "table ERROR".$conn->error;
// }
