
 <?php
    header("content-type:text/html;charset=utf-8");
    include("mysqli_connect.php");
    $name = $_POST['user'];
    $pwd = $_POST['pwd'];
    $sex = $_POST['sex'];
    //设置时区;
    ini_set('date.timezone', 'Asia/Shanghai');
    $time = date("Y-m-d");
    if ($name == "" || $pwd == "" || $sex == "") {
        echo "<script>alert('姓名、性别、密码不能为空!');location='register.php';</script>";
    } else {
        $sqlstr = "select *from  guestbook where name='" . $name . " '";
        $sql = mysqli_query($conn, $sqlstr);
        if (mysqli_num_rows($sql) > 0) {
            echo "<script>alert('用户名重复，请另选一个!');location='register.php';</script>";
        } else {
            $sqlstr1 = "insert into guestbook values(NULL, '" . $name . "', '" . $pwd . "', '" . $sex . "', '" . $time . "')";
            $sql1 = mysqli_query($conn, $sqlstr1);
            if ($sql1) {
                echo "<script>alert('注册成功，请登录！');location='index.php';</script>";
                mysqli_close($conn);
            } else {
                echo  "<script>alert('注册失败！');location='register.php';</script>";
            }
        }
    }

    ?>