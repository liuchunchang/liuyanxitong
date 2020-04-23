<?php
header("content-type:text/html;charset=utf-8");
include("mysqli_connect.php");
session_start();
$id = $_GET['id'];
$_SESSION['id']=$id;
$name = $_SESSION['name'];
$sqlstr = "select *from  content where id=" . $id . "";
$sql = mysqli_query($conn, $sqlstr);
while ($myrow = mysqli_fetch_array($sql)) {
    $title = $myrow['title'];
    $content = $myrow['content'];
    $name = $myrow['name'];
    $time = $myrow['time'];
    $type = $myrow['type'];
    echo <<<std
    <div class="fabiao">
    <form method="post" action="ame_backstage.php">
        <h3>查看留言</h3>
        <span>留言主题：</span>
        <input type="text" name="title" id="title" size="50"value=" $title"> 
        <br>
        <br>
        <span>留言内容：</span>
        <textarea name="content" class="form-item" rows="10" cols="55"> $content</textarea>
        <br><br>  
        <span>类型：</span>
        <select name="type">
            <option value="留言">留言</option>
            <option value="文章">文章</option>
        </select>
        <br><br>
        <input type="submit" value="修改">
        <input type="reset" value="重写">
    </form>
    </div>
std;
}
?>