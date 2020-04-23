
    <?php
header("content-type:text/html;charset=utf-8");
    echo <<<std
    <div class="fabiao"style="width:60vw">
    <form method="post" action="wri_backstage.php"style="width:60vw">
        <h3>发表留言</h3>
        <span>留言主题：</span>
        <input type="text" name="title" id="title" style="width:30vw">
        <br>
        <br>
        <span style="vertical-align:top">留言内容：</span>
        <textarea name="content" class="form-item" style="width:30vw"rows="10vm" cols="43vm"></textarea>
        <br><br>
        <span>类型：</span>
        <select name="type">
            <option value="留言">留言</option>
            <option value="文章">文章</option>
        </select>
        <br><br>
        <input type="submit" value="发表">
        <input type="reset" value="重写">
    </form>
    </div>
std;
    ?>