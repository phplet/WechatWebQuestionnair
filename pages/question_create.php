<?php
//此行代码用于避免iPhone上出现的乱码问题
header("Content-type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html>
<head>
    <title>创建问卷</title>
    <meta http-equiv="refresh" content="1;url=./pageUnderConstruction.php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, charset=utf-8">
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
                    <li><a href="question_create.php">创建问卷</a></li>
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

<br><br><br>
<form class="form-horizontal" role="form" action="../reg/newQuestionnaireOneQues.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="question_group_name" class="col-sm-2 control-label">群名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="question_group_name" name="question_group_name" placeholder="请输入群名">
        </div>
    </div>

    <div class="form-group">
        <label for="question_question_name" class="col-sm-2 control-label">问卷名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="question_question_name" name="question_question_name" placeholder="请输入问卷名">
        </div>
    </div>
    <div class="form-group">
        <label for="question_desc" class="col-sm-2 control-label">描述</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="3" id="question_desc" name="question_desc" placeholder="请输入群的描述"></textarea>
        </div>
    </div>

    <div class="form-group">
        <label for="question_one" class="col-sm-2 control-label">第一题</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="question_one" name="question_one" placeholder="请输入题目名">
            <input type="text" class="form-control" id="question_one_A" name="group_desc_A" placeholder="选项A">
            <input type="text" class="form-control" id="question_one_B" name="group_desc_B" placeholder="选项B">
            <input type="text" class="form-control" id="question_one_C" name="group_desc_C" placeholder="选项C">
            <input type="text" class="form-control" id="question_one_D" name="group_desc_D" placeholder="选项D">

        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-large btn-block">发布</button>
        </div>
    </div>
</form>

</body>
</html>