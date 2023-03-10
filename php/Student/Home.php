<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>数据库原理实验评判系统主页</title>
    <meta name="description" content="数据库原理实验评判系统-在线评判和打分，提供成绩分析功能，节省教师时间成本和工作量">
    <meta name="keywords" content="数据库课程，实验，打分，成绩，统计">
    <link rel="shortcut icon" href="../../static/img/logo/logo.ico">
    <link rel="stylesheet" href="../../static/common/css/init.css">
    <link rel="stylesheet" href="../../static/common/Student/header.css">
    <style>
        #sakura {
            position: absolute;
            /*display: none;*/
            top: 0;
            left: 0;
            z-index: 999;
            transform: rotateY(180deg);
            opacity: 0.4;
            pointer-events: none;
            list-style-type: none;
        }

        .words {
            position: relative;
            border-radius: 10px;
            margin-bottom: 27px;
            padding: 27px;
            background-color: rgba(194,246,132, 0.8);
            box-shadow: 0 0 4px 1px rgba(123, 123, 123, .3);
            height: 260px;
            width: 763px;
            font: 28px/1.5 "\534e\6587\884c\6977", Microsoft YaHei, Heiti SC, tahoma, arial, Hiragino Sans GB, "\5B8B\4F53", sans-serif;
            color: #666;
            margin-left: 50%;
            margin-top: 45vh;
            transform: translateX(-50%) translateY(-50%);
            z-index: 1000;
        }
    </style>
</head>

<body style="height: 100vh; position: relative;">
    <!-- 在刷题页面放置账号中心，可以改密，通向changepwd.html -->
    <?php include '../../static/common/Student/header.html' ?>
    <section class="words">
        这是一个最好的时代，<br>
        科技的发展给予了每个人创造价值的可能性；<br>
        这也是一个最充满想象的时代，<br>
        每一位心怀梦想的人，终会奔向星辰大海。<br>
        <i style="font-family: Microsoft YaHei;">SQLXY</i>开发组与你们一起仰望星辰大海，携手共筑未来！
    </section>
    <!-- 雪花飘落 -->
    <canvas id="sakura" width="1707" height="811"></canvas>
    <?php include '../../static/common/js/love_snowflakes.js.html' ?>
    <footer style="width: 1200px; transform: translateX(-50%); margin-left: 50%; position: absolute; bottom: 0; text-align: center; font-size: 16px; color: black;">
        SQLXY Version1.1 <br>
        <a href="https://beian.miit.gov.cn/#/Integrated/index" target="_blank" style="color: black;">sqlxy.pro 津ICP备2022007169号-1</a> &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="https://github.com/AfetoIris/sqlxy" target="_blank" style="color: black;">Github仓库</a>
    </footer>
</body>
</html>