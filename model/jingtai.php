<?php
ob_start();
require(dirname(dirname(__FILE__)) . "/view/header.html");
require(dirname(dirname(__FILE__)) ."/conf/database.php");
?>
 <div class="by">
   <div class="content">
        <div class="contentl">
<?php
$chaxunsql = "select * from news where id='{$auotid}'";
$result = $conn->query($chaxunsql);

if ($row = $result->fetch_assoc()) {
$imgtichu = '/border="([\s\S]*?)"|width="([\s\S]*?)"|height="([\s\S]*?)"/';
$contents = preg_replace($imgtichu, '', $row["content"]);
$contentss = preg_replace('/style\=".+?"/', "", $contents);
	echo "<br /><h1>".$row["title"]."</h1><br />".$row["con_date"]."<br />".$contents;
}
?>
<b>本文版权归原网站所有,如侵权请联系删除。</b>
        </div>
        </div>
        </div>
<?php
require(dirname(dirname(__FILE__)) ."/view/foot.html");
$info=ob_get_contents();
$filename ='html/'.$auotid.'.html';
$contnt = fopen($filename, "w");
fwrite($contnt, $info);
fclose($contnt);
ob_end_clean();




?>