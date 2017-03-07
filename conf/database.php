<?php
$servername = "localhost";
$username = "root";
$password = "w19971221";
$dbname = "news";
$conn =new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
	die("SERVER ERROR".$conn->error);
}//else{
// 	echo "SERVER OK";
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
