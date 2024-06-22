<html>
<head>
<meta charset="utf-8">
</head>
<body background="picture/b.jpeg" style="background-repeat:no-repeat;background-attachment:fixed;background-size:100% 100%;">
<?php
$a=$_POST["name"];
$b=$_POST["password"];
if($a=="陈阔"&&$b=="12345678"||$a=="郑丹妮"&&$b=="12345678"){
echo '<form action="pass.php" method="post">';
echo '登陆成功<br>';
echo '<input type="hidden" name="name" value="'.$a.'">';
echo '<input type="submit" value="继续">';
echo '</form>';
}else{
echo '<form action="index.html" method="post">';
echo '账号或密码错误<br>';
echo '<input type="submit" value="返回">';
echo '</form>';
}
?>
</body>
</html>