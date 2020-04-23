
    <?php
    header("content-type:text/html;charset=utf-8");
    include("mysqli_connect.php");
    $id = $_GET['id'];
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
    <form method="post" action="wri_backstage.php">
        <b><h3>查看留言</h3></b>
       <b> <span>留言主题：</span></b>
        <input type="text" name="title" id="title" size="50"value=" $title"> 
        <br>
        <br>
        <b><span>留言内容：</span></b>
        <textarea name="content" class="form-item" rows="10" cols="55"> $content</textarea>
        <br><br>
        <b> <span>作者：</span></b>
        $name  &nbsp;&nbsp;
       <b> <span>类型：</span></b>
        $type   &nbsp;&nbsp;
       <b> <span>发表时间：</span></b>
         $time       
        <br><br>
    </form>
    </div>
std;
    }
    ?>