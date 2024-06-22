<html>
<head>
<meta charset="utf-8">
</head>
<body background="picture/b.jpeg" style="background-repeat:no-repeat;background-attachment:fixed;background-size:100% 100%;">
<?php
$name=$_POST["name"];
if(empty($name)){
echo '<form action="index.html" method="post">';
echo '请重新登录<br>';
echo '<input type="submit" value="返回">';
echo '</form>';
return;
}
$fo=$_POST["special"];
echo $fo;
if($fo=="图片"){
echo '<form method=post action="picture.php" enctype="multipart/form-data">';
echo '<input type="file" name="upFile"><br>';
echo '<input type="submit" value="上传">';
echo '<input type="hidden" name="name" value="'.$name.'">';
echo '</form>';
}
if($fo=="其他"){
echo '<form method=post action="other.php" enctype="multipart/form-data">';
echo '<input type="file" name="upFile"><br>';
echo '<input type="submit" value="上传">';
echo '<input type="hidden" name="name" value="'.$name.'">';
echo '</form>';
}
?>
</body>
</html>