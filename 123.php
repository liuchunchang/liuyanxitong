
<?php
$id = $_GET['x'];
$a=array(1,2,3);
if($id=="a"){
    echo "成功";
    echo json_encode($a);
}else{
    echo "失败";
}
?>