<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>主页</title>
    <script type="text/javascript" src="hom_ajax.js"></script>
    <style>
        #test {
            position: relative;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            margin: auto;
            width:50vw;
        }

        strong {
            margin-top: -20%;
        }
        p{
            position:relative;
        }
        ul {
            position:relative;
           
            /* overflow: hidden; */
        }

        li {
            list-style: none;
            float: center;
            background: #f2f2f2;
            width: 10vw;;
            height: 3vw;
            line-height: 3vw;
            text-align: center;
        }
        .nav2{
            width:10vw;
        }
     
        .nav2 a {
            display: block;
            text-decoration: none;
            color: #000;
            width:10vw;
        }

        .nav2 a:hover {
            background: #ff00ff;
        }

        .abc {
            position: relative;
            width:100vw;
            text-align: center;
        }

        img {
            background-size: cover;
            width: 100%;
            margin-right: auto;
            margin-left: auto;
        }

        .fabiao {
            margin-top: -40%;          
        }

        table {
            /* position:relative; */
            width:50vw;
            margin-top: -40%;
            /* margin-right: auto; */
            /* margin-left: auto; */
        }

        /* .form-item {
            margin-left: 20px;
        } */

        .chakan {
            margin-top: -40%;
        }

        .my {
            margin-top: -40%;
        }

        .form2 {
            margin-top: -40%;
        }
        html{
            position: relative;
            width:100%;
            height:100%;
        }
        tbody{
            width:100vw;
        }
        body {
            position: relative;
            margin: 0;
            padding: 0;
            text-align: center;
            font-family: 'kaiti';
            font-size:1vw;
            /* background-size: cover;
            /* 背景图片 */
            /* background-image: url(images/bg3.jpg); */
            /* 背景图片不平铺：no-repeat  背景图片只向x平铺:reppeat-x 背景图片只向y平铺:reppeat-y*/
            /* background-repeat: no-repeat; */
            /* background-position: 0% 0%; */
           /* background-color:  #00ffff; */
           width:100%;
           /* height：auto; */
           /* overflow:script; */
           /* margin：0 auto; */
        }
    </style>
</head>

<body>
    <img src="images/1234.jpg" />
    <div class="abc">
        <ul class="nav2">
            <li><a href="#" onclick="wri_ajax()">编写信息</a></li>
            <li><a href="#" onclick="hom_ajax()">查看信息 </a> </li>
            <li><a href="#" onclick="revamp()">修改信息 </a> </li>
            <li><a href="#" onclick="sea()">搜索信息 </a> </li>
            <li><a href="#" onclick="exp()">删除信息 </a> </li>
            <li><a href="#" onclick="my()">我的资料 </a> </li>
        </ul>
        <p id="test"></p>
    </div>
</body>

</html>
<?php
session_start();
header("content-type:text/html;charset=utf-8");
if (!isset($_SESSION['time'])) {
    echo "<script>alert('你无权查看本页面，请先登录！');location='index.php';</script>";
} else { }
?>