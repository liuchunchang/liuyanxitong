<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF8">
    <title>Document</title>
    <style>
        body {
            text-align: center;
            font-family: 'kaiti';
            background-size: cover;
            /* 背景图片 */
            background-image: url(images/bg.jpg);
            /* 背景图片不平铺：no-repeat  背景图片只向x平铺:reppeat-x 背景图片只向y平铺:reppeat-y*/
            background-repeat: no-repeat;
            background-position: 0% 0%;
            color: #ffffff;
        }

        .title {
            position: relative;
            top: 12px;
            font-size: 35px;
        }

        input {
            padding: 4px;
        }

        span {
            /* font-size: 25px; */
        }

        /* div居中 */
        div {
            margin-top: 12.89%;
            text-align: center;
            font-family: kaiti;
            color: #789867;
        }
    </style>
</head>

<body>

    <div>
        <form action="reg_backstage.php" method="post" enctype="multipart/form-data">
            <span class="title">——注册——</span>
            <br><br><br>
            <span>姓 名：</span>
            <input type="text" name="user" id="user">
            <br><br>
            <span>密 码：</span>
            <input type="password" name="pwd" id="pwd">
            <br><br>
            <span>性 别：</span>
            <input type="radio" name="sex" value="女"" />女
            &nbsp;
            <input type="radio" name="sex" value="男" />男
            &nbsp;
            <input type="radio" name="sex" value="未知" checked="checked" />未知
            <br><br>
            <input type="submit" name="submit" id="submit" value="提交">
            &nbsp;&nbsp;
            <input type="reset" name="userrest" id="reset" value="清空">
            &nbsp;&nbsp;
            <input type="button" value="返回" onclick="location.href='index.php'">
        </form>
    </div>
</body>

</html>