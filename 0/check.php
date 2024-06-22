<html>
<head>
<meta charset="utf-8">
</head>
<body background="picture/b.jpeg" style="background-repeat:no-repeat;background-attachment:fixed;background-size:100% 100%;">
<?php
$a=$_POST["name"];
echo '登陆成功<br>';
echo '<form action="pass.php" method="post">';
echo '<input type="hidden" name="name" value="'.$a.'">';
echo '<input type="submit" value="继续">';
echo '</form>';
?>
</body>
</html>