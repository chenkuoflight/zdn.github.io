<html>
<head>
<meta charset="utf-8">
</head>
<body background="picture/b.jpeg" style="background-repeat:no-repeat;background-attachment:fixed;background-size:100% 100%;">
<?php
$qwe=fopen("find.txt", "r");
for($i=1;! feof($qwe);$i++){
echo fgets($qwe). "<br>";
}
fclose($qwe);
?>
</body>
</html>