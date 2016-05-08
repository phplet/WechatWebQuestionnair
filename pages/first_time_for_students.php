<?php
//此行代码用于避免iPhone上出现的乱码问题
header("Content-type: text/html; charset=utf-8");
?>

<!-- 调用的时候必须提供家长的code和teacherOpenID update：2016年4月23日01:30:32-->
<!-- 调用的时候必须以get方法提供teacherOpenID和parentOpenID-->
<!--
<?php
require_once "../util/commonFuns.php";
$parentOpenID=getOpenId($_REQUEST['code']);
$teacherOpenID=$_REQUEST['teacherOpenID'];
?>
-->
<!DOCTYPE html>
<html>
<head>
    <title>家长注册页</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0,charset=utf-8">
    <meta content="text/html;charset=utf-8">
    <link href="./reference/bootstrap.min.css" rel="stylesheet">
    <script src="./reference/jquery.min.js"></script>
    <script src="./reference/bootstrap.min.js"></script>
    <script src="./reference/bootstrap-theme.min.css"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="navbar-header">

        <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target="#example-navbar-collapse">
            <span class="sr-only">切换导航</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="homepage.php">首页</a>
    </div>

    <div class="collapse navbar-collapse" id="example-navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="./question_home.html" class="dropdown-toggle" data-toggle="dropdown">
                    问卷 <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="questionnaire_create.php">创建问卷</a></li>
                    <li><a href="./question_history.html">历史问卷</a></li>
                    <li class="divider"></li>
                    <li><a href="./question_draft.html">问卷草稿</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="./notice_home.html" class="dropdown-toggle" data-toggle="dropdown">
                    通知 <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="notice_create.php">创建通知</a></li>
                    <li><a href="./notice_history.html">历史通知</a></li>
                    <li class="divider"></li>
                    <li><a href="./notice_draft.html">通知草稿</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="./group_home.html" class="dropdown-toggle" data-toggle="dropdown">
                    群 <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="./group_create.html">创建群</a></li>
                    <li><a href="./group_manage.html">管理群</a></li>
                    <li><a href="./group_join.html">加入群</a></li>
                    <li class="divider"></li>
                    <li><a href="./group_search.html">查找群</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

<br>
<br>
<h3>
    <strong>欢迎家长注册！</strong>
</h3>
<form class="form-horizontal" role="form" method="get" action="../reg/parentRegWithStudent.php">
    <div class="form-group">
        <label for="parentName" class="col-sm-2 control-label">您的姓名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="parentName" name="parentName"
                   placeholder="请输入用户名">
        </div>
    </div>
    <div class="form-group">
        <label for="studentName" class="col-sm-2 control-label">孩子姓名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="studentName" name="studentName"
                   placeholder="请输入您孩子的姓名">
        </div>
    </div>
    <div class="form-group">
        <label for="studentID" class="col-sm-2 control-label">孩子学号</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="studentID" name="studentID"
                   placeholder="请输入您孩子的学号">
        </div>
    </div>
    <!-- 用于在页面中保存teacherOpenID-->
    <div class="form-group" style="display: none" >
        <label for="teacherOpenID" class="col-sm-2 control-label">OpenID</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="teacherOpenID" name="teacherOpenID"
                   value=<?php echo $teacherOpenID?>>
        </div>
    </div>
    <!-- 用于在页面中保存parentOpenID-->
    <div class="form-group" style="display: none" >
        <label for="parentOpenID" class="col-sm-2 control-label">OpenID</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="parentOpenID" name="parentOpenID"
                   value=<?php echo $parentOpenID?>>
        </div>
    </div>
    <div class="form-group">
        <label for="email_adress" class="col-sm-2 control-label">邮件地址</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="email_adress"
                   placeholder="请输入邮件地址">
        </div>
    </div>

    <div class="form-group">
        <label for="password" class="col-sm-2 control-label">设置密码</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="password"
            placeholder="请设置密码">
            <span class="help-block">请包括至少字母和数字</span>
        </div>
    </div>
    <div class="form-group">
        <label for="password_again" class="col-sm-2 control-label">确认密码</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="password_again"
            placeholder="请再次输入密码">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-large btn-block">注册</button>
        </div>
    </div>
</form>

</body>
</html>