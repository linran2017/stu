<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./static/bt3/css/bootstrap.min.css" />
    <title>Document</title>
</head>
<body>
<div>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">学生管理系统</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="?s=admin/entry/index">去后台</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">学生信息</h3>
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>编号</th>
                    <th>姓名</th>
                    <th>头像</th>
                    <th>性别</th>
                    <th>班级</th>
                    <th>显示详细资料</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data as $k=>$v): ?>

                <tr>
                    <td><?php echo $k+1 ?></td>
                    <td><?php echo $v['sname'] ?></td>
                    <td><img src="<?php echo $v['profile'] ?>" width="80" /></td>
                    <td><?php echo $v['sex'] ?></td>
                    <td><?php echo $v['gname'] ?></td>
                    <td><a class="btn btn-primary" href="?s=home/entry/show&sid=<?php echo $v['sid']?>">详细</a></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>