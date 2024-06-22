<html>
<head>
    <meta charset="utf-8">
    <title>按钮示例</title>
</head>
<body>
    <form method="post">
        <input type="submit" name="show" value="显示内容">
        <?php
            if(isset($_POST["show"]) {
                echo '这是隐藏的内容，当用户单击按钮时将显示出来。';
            }
        ?>
    </form>
</body>
</html>