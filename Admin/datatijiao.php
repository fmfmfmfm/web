<?php
require_once('../conf/database.php');
$title = $_POST['title'];
$usename = $_POST['usename'];
$content = $_POST['content'];
$sqlinto ="INSERT INTO news (title, usename, content) 
VALUES ('{$title}','{$usename}','{$content}')";
if ($conn->query($sqlinto)===TRUE){
	echo "插入成功";
}else{
	echo "ERROR".$sqlinto."<br />".$conn->error;
}
// $id = mysqli_insert_id($conn); 
// $sqlchaxun = "SELECT * FROM news WHERE id=$id";
// $zhixing = mysqli_query($conn,$sqlchaxun);
// while($row = mysqli_fetch_array($zhixing))
// {
//     echo $row['title'] . " " . $row['content'];
//     echo "<br>";
//}
?>
