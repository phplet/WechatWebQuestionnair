<?php
// 测试链接 https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx75de8782f8e4f99c&redirect_uri=121.201.14.58%2fpages%2ffirst_time_for_teacher.php&response_type=code&scope=snsapi_base#wechat_redirect

require_once "../util/commonFuns.php";
$teacherOpenID=getOpenId($_REQUEST['code']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>注册页</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <a class="navbar-brand" href="./homepage.html">首页</a>
    </div>

    <div class="collapse navbar-collapse" id="example-navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="./question_home.html" class="dropdown-toggle" data-toggle="dropdown">
                    问卷 <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="./question_create.html">创建问卷</a></li>
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
                    <li><a href="./notice_create.html">创建通知</a></li>
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
    <strong>老师初始化</strong>
</h3>
<form class="form-horizontal" role="form" action="../reg/teacherReg.php" method="get">
    <div class="form-group">
        <label for="teacherName" class="col-sm-2 control-label">用户名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="teacherName" name="teacherName"
                   placeholder="请输入用户名">
        </div>
    </div>
    <div class="form-group" style="display: none" >
        <label for="teacherOpenID" class="col-sm-2 control-label">OpenID</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="teacherOpenID" name="teacherOpenID"
                    value=<?php echo $teacherOpenID?>>
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
            placeholder="请再输入密码">
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