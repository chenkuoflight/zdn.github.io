<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
$op=$_POST["change"];
$asd=fopen("test.txt", "w");
fwrite($asd,$op);
fclose($asd);
?>
<p>修改成功</p>
<form action="change.php" method="post">
<input type="submit" value="返回">
</form>
</body>
</html>