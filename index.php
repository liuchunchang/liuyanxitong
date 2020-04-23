<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>登录界面</title>
    <link rel="shortcut icon" href="./favicon.ico" />
    <link rel="bookmark"href="./favicon.ico" />
    <script>
        function checkform() {
            if (form.user.value == "") {
                alert('请输入用户名');
                form.user.focus();
                return false;
            }
            if (form.pwd.value == "") {
                alert('请输入密码');
                form.pwd.focus();
                return false;
            }
        }
    </script>
    <style>
        body {
            text-align: center;
            font-family: 'kaiti';
            background-size: cover;
            /* 背景图片 */
            background-image: url(images/bg1.jpg);
            /* 背景图片不平铺：no-repeat  背景图片只向x平铺:reppeat-x 背景图片只向y平铺:reppeat-y*/
            background-repeat: no-repeat;
            background-position: 0% 0%;
            color: #3f7241;

        }

        input {
            padding: 4px;
        }
    </style>
</head>

<body>

    <div>
        <form id="form" name="form" method="post" action="ind_backstage.php" onsubmit="return checkform()">
            <br><br><br>
            <h2>——用户登录——</h2>
            <br><br><br>
            <span>用户名：</span>
            <input name="user" type="text" id="user" size="24">
            <br><br><br>
            <span> 密 码：</span>
            <input type="password" name="pwd" id="pwd" size="25" />
            <br><br><br>
            <input type="submit" name="sub" value="登录">
            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
            <input type="button" name="zhuce" value="注册" onclick="location.href='register.php'">

        </form>
    </div>

</body>

</html>