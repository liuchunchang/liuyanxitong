<?php
session_start();
include_once("mysqli_connect.php");
$id =$_SESSION['id'] ;
$title = $_POST['title'];
$content = $_POST['content'];
//设置时区
ini_set('date.timezone', 'Asia/Shanghai');
$time = date("Y-m-d H:i:s");
$user = $_SESSION['name'];
$type = $_POST['type'];
if ($title == "" || $content == "") {
    echo "<script>alert('标题和内容不能为空!');location='hom_write.php';</script>";
} else {
    $sqlstr1 = "update content set title='". $title."',content='". $content."',
    type='". $type."',time='". $time."'where id='". $id."'";
    $sql1 = mysqli_query($conn, $sqlstr1);
    if ($sql1) {
        echo "<script>alert('修改成功！');location='home.php';</script>";
        mysqli_close($conn);
    } else {
        echo  "<script>alert('发表失败！');location='hom_write.php';</script>";
    }
}
