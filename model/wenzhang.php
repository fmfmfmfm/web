<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="http://localhost/mdui-v0.1.2/css/mdui.css">
	<script src="http://localhost/mdui-v0.1.2/js/mdui.js"></script>
	<link rel="stylesheet" type="text/css" href="http://localhost/ionicons-2.0.1/css/ionicons.css">
</head>
<body>
<div class="mdui-textfield mdui-textfield-expandable mdui-float-right">
  <button class="mdui-textfield-icon mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">&#xe8b6;</i></button>
  <input class="mdui-textfield-input" type="text" placeholder="Search"/>
  <button class="mdui-textfield-close mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">&#xe5cd;</i></button>
</div>
<?php
header("content-Type: text/html; charset=utf-8");
require('database.php');
$result = mysqli_query($conn,"select * from news order by id");
while ($row = mysqli_fetch_array($result)) {
	echo $row["title"];
	echo "<br />";
	echo $row["con_date"];
	echo "<br />";
    echo strip_tags(mb_substr($row["content"],0,100,'utf-8'))."...";
    echo "<br />";
}
?>

</body>
</html>
