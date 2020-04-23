<?php
header("content-type:text/html;charset=utf-8");
echo <<<std
    <form action="sea_bac.php" method="post"class="form2">
        <input type="text"name="title5"id="title5">
        <input type="button"value="搜索"onclick="seac()">
    </form>
std;
?>