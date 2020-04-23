<?php
session_start();
header("content-type:text/html;charset=utf-8");
include("mysqli_connect.php");
$name = $_POST['user'];
$pwd = $_POST['pwd'];
$_SESSION['name'] = $name;
$sqlstr = "select *from guestbook where name='" . $name . " 'and password='" . $pwd . "'";
$sql = mysqli_query($conn, $sqlstr);
if (mysqli_num_rows($sql) > 0) {  
    $_SESSION['time'] = time();
    echo "<script>alert('登录成功！');location='home.php';</script>";
    // echo   $_SESSION['time'];
} else {
    echo "<script>alert('用户名或密码错误！');location='index.php';</script>";
}
?>