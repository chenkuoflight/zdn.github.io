<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
// 获取上传文件对应的字典（对象
$fileInfo = $_FILES["upFile"];
$name=$_POST["name"];
// 获取上传文件的名称
$fileName = $fileInfo["name"];
 
// 获取上传文件保存的临时路径
$filePath = $fileInfo["tmp_name"];
 
 
//移动文件
move_uploaded_file($filePath, "./other/".$fileName);
// 注意这里的路径写法， 第二个参数的字符串和变量拼接 用. 而不是JS里的 +
// "./source/"  不要忘记末尾的斜杠
date_default_timezone_set("PRC");
$showtime=date("Y-m-d H:i:s");
$asd=fopen("test.txt","a+");
fwrite($asd,$name.' '.$showtime.' :'.'<a href="other/'.$fileName.'">'.$fileName.'</a>'."\n");
fclose($asd);
echo '发送成功';
echo '<form action="pass.php" method="post">';
echo '<input type="hidden" name="name" value="'.$name.'">';
echo '<input type="submit" value="返回">';
echo '</form>';
?>
</body>
</html>