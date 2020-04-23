<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php
    // Mysql服务器地址；
    $host = "127.0.0.1";
    // 用户名
    $userName = "root";
    // 密码
    $password = "123";
    //选择连接的数据库名
    $dbName = "php_user";
    if ($conn = mysqli_connect($host, $userName, $password, $dbName)) {
        // 建立与MySQL的连接，并弹出提示对话框
       // echo "数据库连接成功,并且选择连接了user数据库<br>";
    } else {
        echo "<script type='text/javascript'>alert('数据库连接失败');</script>";
    }
    mysqli_query($conn, "set names utf8");
    ?>
</body>

</html>