<html>
<head>
<meta charset="utf-8">
</head>
<body background="picture/b.jpeg" style="background-repeat:no-repeat;background-attachment:fixed;background-size:100% 100%;">
<?php
$p=$_POST["word"];
$op=$_POST["name"];
if($op!="陈阔"&& $op!="郑丹妮"){
echo '<form action="index.html" method="post">';
echo '请重新登录<br>';
echo '<input type="submit" value="返回">';
echo '</form>';
}else{
date_default_timezone_set("PRC");
$showtime=date("Y-m-d H:i:s");
$sss=fopen("test.txt","a+");
fwrite($sss,$op." ".$showtime." :".$p."\n");
fclose($sss);
echo "发送成功\n";
echo '<form action="pass.php" method="post">';
echo '<input type="hidden" name="name" value="'.$op.'">';
echo '<input type="submit" value="返回">';
echo '</form>';
}
?>
</body>
</html>