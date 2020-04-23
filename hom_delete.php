
    <?php
    include("mysqli_connect.php");
    session_start();
    header("content-type:text/html;charset=utf-8");
    $name = $_SESSION['name'];
    $sqlstr = "select *from  content where name='" . $name . "' order by time  DESC";
    $sql = mysqli_query($conn, $sqlstr);
    if (mysqli_num_rows($sql) == 0) {
    echo "<strong class='my'>对不起，没有找到数据！<strong>";
    } else {
    echo <<<std
    <table  width='600'border='1'cellpadding='1'cellspacing='1'bordercolor='#ffffcc'
        bgcolor='#666666'>
     <tr>
        <td width='350'align='center'bgcolor='#ffffff'>标题</td>  
        <td width='150' align='center' bgcolor='#ffffff'>作者</td>
         <td width='100'align='center' bgcolor='#ffffff'>操作</td>
        </tr>
std;
    while ($results = mysqli_fetch_array($sql)) {
        $title = $results['title'];
        $name = $results['name'];
        $id= $results['id'];
        echo <<<std
  <tr>
     <td height="30"align="center"bgcolor="#ffffff"> $title
     </td>  
     <td align="center" bgcolor="#ffffff"> $name
     </td>
       <td align="center" bgcolor="#ffffff">
       <a href="#" onclick="shanchu($id)">删除</a>
       </td>
</tr>
std;
    }
    echo "</table>";
}
?>