<?php
session_start();
header("content-type:text/html;charset=utf-8");
include("mysqli_connect.php");
$name= $_SESSION['name'] ;
// $sqlstr = "select *from guestbook where name = '" .$name. " '" ;
$sql = mysqli_query($conn, "select *from guestbook where name = '" .$name."'");
while ($results = mysqli_fetch_array($sql)) {
   $user= $results['name'];
   $time=$results['time'];
   $sex=$results['sex'];
    echo <<<std
    <div class="my">
   <b><span>姓名：</span></b> $user <br><br>
    <b><span>性别：</span></b> $sex <br><br>
    <b><span>注册时间：</span></b> $time
   </div>
std;
}
