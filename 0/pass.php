<html>
<head>
<meta charset="utf-8">
</head>
<body background="picture/b.jpeg" style="background-repeat:no-repeat;background-attachment:fixed;background-size:100% 100%;">
<?php
$ck=$_POST["name"];
if(empty($ck)){
echo '<form action="index.html" method="post">';
echo '请重新登录<br>';
echo '<input type="submit" value="返回">';
echo '</form>';
return;
}
echo $ck;
$aaa="，欢迎您！";
echo $aaa;
$do=fopen("find.txt","a+");
date_default_timezone_set("PRC");
$showtime=date("Y-m-d H:i:s");
fwrite($do,$ck." ".$showtime."\n");
fclose($do);
echo '<a name="top" href="#bottom">到底端</a><br>';
$asd=fopen("test.txt", "r");
for($i=1;! feof($asd);$i++){
echo fgets($asd). "<br>";
}
fclose($asd);
echo '<form action="send.php" method="post">';
echo '<input type="text" name="word" size="40">';
echo '<input type="hidden" name="name" value="'.$ck.'">';
echo '<input type="submit" value="发送">';
echo '</form>';
?>
<br>
<form action="special.php" method="post">
<select name="special">
<option>图片
<option>其他
</select>
<input type="hidden" name="name" value="<?php echo $ck; ?>">
<input type="submit" value="特殊格式发送">
</form> 
<a name="bottom" href="#top">到顶端</a>
</body>
</html>