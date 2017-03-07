<?php
header("content-Type: text/html; charset=utf-8"); 
require('database.php');
require('function.php');
// 创建一个新cURL资源
$ch = curl_init();
$url=$_POST['link'];
// 设置URL和相应的选项
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//设置编码
// curl_setopt($ch, CURLOPT_ENCODING, 'gzip');

// 抓取URL并把它传递给浏览器
$con=curl_exec($ch);
// 关闭cURL资源，并且释放系统资源
curl_close($ch);
//正则表达式
$title= "/<h1 itemprop=\"headline\".*?>([\s\S]*?)<\/h1>/";
$content= "/<div itemprop=\"articleBody\".*?>([\s\S]*?)<\!/";

//正则获取数据
preg_match_all($title, $con, $xianshi);
//数组转为字符串
$titlecon = iconv("gb2312//IGNORE","utf-8",strip_tags(join($xianshi[1])));
// echo $titlecon."<br>";
//正则获取正文
preg_match_all($content, $con, $xianshi1);
$contentcon = iconv("gb2312//IGNORE","utf-8",strip_tags(join($xianshi1[1]),"<p><img><div><span>"));
// echo $contentcon;
if (preg_match_all("/media_span_url.*?\)/", $contentcon)) {
	$quchu = preg_replace("//\/\/([^\"]+)media_span_url.*?([^\"]+)\>/", "", $contentcon,"1");
}else{
	$quchu = $contentcon;
}
$yanzhengimg = "/src=\"([^\"]+)\/([^\"]+)\/([^\"]+)(.jpg|.jpeg|.png|.gif)/";
if(preg_match_all($yanzhengimg, $quchu)==TRUE){
$str = str_replace("http://photocdn.sohu.com", "http://localhost/news/model", $quchu);
$imgss= "/http:\/\/photocdn.sohu.com\/([^']+?)\/Img([^']+?)(.jpg|.jpeg|.png|.gif)/";
preg_match_all($imgss, $contentcon, $dizhi);
$arrlength = count($dizhi[0]);
for($x=0;$x<$arrlength;$x++){
	getimage($dizhi[0][$x],$dizhi[1][$x],"Img".$dizhi[2][$x].$dizhi[3][$x]);
}
}else{
	$str = $quchu;
	echo "没有图片";
}
$sqlcha = "INSERT INTO news (title,content) 
VALUES ('{$titlecon}','{$str}')";
if ($conn->query($sqlcha) === TRUE) {
    echo "发布成功<br />";
    $auotid = mysqli_insert_id($conn);
    require('jingtai.php');
    echo "查看刚刚发布的文章："."<a href='http://localhost/news/model/html/{$auotid}.html'>".$titlecon."</a>";
} else {
    echo "Error: " . $sqlcha . "<br>" . $conn->error;
}

$conn->close();
?>












