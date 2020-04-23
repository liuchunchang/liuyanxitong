<?php
header("content-type:text/html;charset=utf-8");
include("mysqli_connect.php");
session_start();
$id = $_GET['id'];
$name = $_SESSION['name'];
$sqlstr1 = "delete from content where id='" . $id ."'";
$sql1 = mysqli_query($conn, $sqlstr1);
$sqlstr = "select *from  content where name='" . $name . "' order by time  DESC";
$sql = mysqli_query($conn, $sqlstr);
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
    $id = $results['id'];
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

?>