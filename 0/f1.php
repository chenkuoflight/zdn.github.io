<html>
<head>
<meta charset="utf-8">
</head>
<body background="picture/b.jpeg" style="background-repeat:no-repeat;background-attachment:fixed;background-size:100% 100%;">
<?php
$asd=fopen("find.txt", "r");

?>
<form action="f2.php" method="post">
<textarea name="change" rows="30" cols="60">
<?php
for($i=1;! feof($asd);$i++){
echo fgets($asd);
}fclose($asd);
?>
</textarea><br>
<input type="submit" value="修改">
</form>
</body>
</html>