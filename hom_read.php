 <script type="text/javascript" src="hom_ajax.js"></script>
 <?php
    header("content-type:text/html;charset=utf-8");
    include("mysqli_connect.php");
    $sqlstr = "select *from  content order by time  DESC";
    $sql = mysqli_query($conn, $sqlstr);
    echo "<table  width='60vw'border='1'cellpadding='1'cellspacing='1'bordercolor='#ffffcc'
        bgcolor='#666666'>";
    echo "<tr>
        <td width='50vw'align='center'bgcolor='#ffffff'>标题</td>
        <td width='40vw' align='center' bgcolor='#ffffff'>作者</td>
         <td width='10vw'align='center' bgcolor='#ffffff'>操作</td>
        </tr>";
    while ($results = mysqli_fetch_array($sql)) {
        $id = $results['id'];
        echo '<tr>
     <td height="5vh" align="center"bgcolor="#ffffff">' . $results["title"] . '</td>  
     <td align="center" bgcolor="#ffffff">' . $results["name"] . '</td>
     <td align="center" bgcolor="#ffffff"><a href="#" onClick="del(' . $id . ')">查看详情</a></td>
</tr>';
    }
    echo "</table>";
    ?>