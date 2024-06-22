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
//echo "post page";
//print_r($_FILES);
 
// 获取上传文件对应的字典（对象
$fileInfo = $_FILES["upFile"];

// print_r($fileInfo);
// echo "<br>";
 
// 获取上传文件的名称
$filename = $fileInfo["name"];
$qwe=substr($filename,strripos($filename,'.'));
date_default_timezone_set("PRC");
$fileName=date("Y-m-d H i s").' '.$name.$qwe;
// 获取上传文件保存的临时路径
$filePath = $fileInfo["tmp_name"];
 
// echo $fileName;
// echo "<br>";
// echo $filePath;
 
//移动文件
move_uploaded_file($filePath, "./picture/".$fileName);
// 注意这里的路径写法， 第二个参数的字符串和变量拼接 用. 而不是JS里的 +
// "./source/"  不要忘记末尾的斜杠
date_default_timezone_set("PRC");
$showtime=date("Y-m-d H:i:s");
$asd=fopen("test.txt","a+");
fwrite($asd,$name.' '.$showtime.' :'.'<a href="picture/'.$fileName.'"><img src="picture/'.$fileName.'" width="30" height="40"></a>'."\n");
fclose($asd);
echo '发送成功';
echo '<form action="pass.php" method="post">';
echo '<input type="hidden" name="name" value="'.$name.'">';
echo '<input type="submit" value="返回">';
echo '</form>';
?>
</body>
</html>