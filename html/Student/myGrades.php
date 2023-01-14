<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>数据库原理实验评判系统主页</title>
    <meta name="description" content="数据库原理实验评判系统-在线评判和打分，提供成绩分析功能，节省教师时间成本和工作量">
    <meta name="keywords" content="数据库课程，实验，打分，成绩，统计">
    <link rel="shortcut icon" href="../static/images/logo.ico">
    <link rel="stylesheet" href="../static/css/css初始化代码.css">
    <link rel="stylesheet" href="../static/css/common.css">
    <link rel="stylesheet" href="../static/css/myGrades.css">
    <script src="../static/javascript/home.js"></script>
</head>

<body>
    <!-- 在刷题页面放置账号中心，可以改密，通向changepwd.html -->
    <!-- 头部 -->
    <header>
        <div class="home_top w clearfix">
            <div class="logo">
                <h1>
                    <a href="home.php" title="数据库原理实验评判系统">数据库原理实验评判系统</a>
                </h1>
            </div>
            <span class="SQL">SQL</span>
            <ul>
                <li><a href="home.php">首页</a></li>
                <li><a href="practiceCenter.php" class="lianxizhongxin">练习中心</a></li>
                <li><a href="myGrades.html" class="wodechengji">我的成绩</a></li>
                <li><a href="collectedQuestions.php">收藏·错题集</a></li>
            </ul>
            <div class="header_service">
                <a href="javascript:;" class="welcomeYou">welcome <i>学号</i></a>
                <a href="changeInfo.php" class="changepwd">更改密码</a>
                <a href="../../index.html" class="goToLogin">退出登录</a>
            </div>
        </div>
    </header>
    <section class="w view_grades">
        <!-- 成绩单集 -->
        <ul class="grades_set">
            <li>
                <span>时间</span>
                <span>试题组ID</span>
                <span>试题ID</span>
                <span>得分</span>
                <span>操作</span>
            </li>
            <li>
                <span>2021-02-12 12:41:39</span>
                <span>3</span>
                <span>6</span>
                <span>20</span>
                <span>我的答案</span>
            </li>
            <li>
                <span>2021-02-12 12:41:39</span>
                <span>3</span>
                <span>6</span>
                <span>20</span>
                <span>我的答案</span>
            </li>
        </ul>
    </section>
</body>

</html>