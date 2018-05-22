
<?php require "redirect.php" ?>
<!DOCTYPE HTML>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="imgs/logo.png" type="images/png'" size="20*20">
    <title>管理员列表| travel</title>
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->

	 <!-- Bootstrap -->
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
 	<link href="css/style.css" rel="stylesheet">
 	<link rel="stylesheet" href="css/animate.css" />
    <!-- <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.css"> -->

	<script  type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.appear.js"></script>
	<script  type="text/javascript" src="js/custom.js" ></script>

	<script type="text/javascript"  src="js/bootstrap.min.js"></script>

  	<style type="text/css">
	.list-group,.panel-heading a{
		margin-bottom: 4em; 
		text-shadow: 0 1px 0 rgba(255,255,255,.5);
		position: relative; 
		display: block; 
		padding: 0.4em 0.4em 0.4em 2em; 
		*padding: 0.4em;/*for ie6/7*/ 
		margin: 0.2em 0; 
		background: #ddd; 
		color: black; 
		text-decoration: none; /*CSS3属性*/ 
		border-radius: 0.3em;/*制作圆角*/ /* transition动画效果*/ 
		-moz-transition: all 0.3s ease-out; 
		-webkit-transition: all 0.3s ease-out; 
		-o-transition: all 0.3s ease-out; 
		-ms-transition: all 0.3s ease-out; 
		transition: all 0.3s ease-out;
	}
	.list-group a{
		margin: 0 0 0 2em; 
	}
	.panel a:hover {
		background: #eee;
		color: #f60;
	}
	.panel a:hover::before {
		/*悬停时旋转编码*/
		-moz-transform: rotate(360deg);
		-webkit-transform: rotate(360deg);
		-o-transform: rotate(360deg);
		-ms-transform: rotate(360deg);
		transform: rotate(360deg);
	}
	</style>
</head>
<body>
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	  <div class="panel panel-default">
	    <div class="panel-heading" role="tab" id="headingOne" >
			<a data-toggle="collapse" data-parent="#accordion" href="#menu1">
	    	<h4 class="panel-title">
	    		管理员管理
	    	</h4>
			</a>
	    </div>
	    <div id="menu1" class="panel-collapse collapse">
	    	<div class="list-group">
				<a class="list-group-item" href="./admin_user/add.php" target="main">添加管理员</a>
				<a class="list-group-item" href="./admin_user/index.php" target="main">管理员列表</a>
			</div>
	    </div>
	  </div>

	  <!-- 2 -->
	  <div class="panel panel-default">
	    <div class="panel-heading" role="tab" id="headingOne">
			<a data-toggle="collapse" data-parent="#accordion" href="#menu2">
	    	<h4 class="panel-title">
	    		用户管理
	    	</h4>
			</a>
	    </div>
	    <div id="menu2" class="panel-collapse collapse">
	    	<div class="list-group">
				<a class="list-group-item" href="./user/add.php" target="main">添加用户</a>
				<a class="list-group-item" href="./user/index.php" target="main">用户列表</a>
			</div>
	    </div>
	  </div>
	  <!-- 3 -->
	  <div class="panel panel-default">
	    <div class="panel-heading" role="tab" id="headingTwo">
	      <a data-toggle="collapse" data-parent="#accordion" href="#menu3">
	    	<h4 class="panel-title">
	    		信息管理
	    	</h4>
			</a>
	    </div>
	    <div id="menu3" class="panel-collapse collapse">
	    	<div class="list-group">
				<a href="./note/index.php" target="main" class="list-group-item">信息列表</a>
			</div>
	    </div>
	    <!-- 4 -->
	  <div class="panel panel-default">
	    <div class="panel-heading" role="tab" id="headingTwo">
	      <a data-toggle="collapse" data-parent="#accordion" href="#menu4">
	    	<h4 class="panel-title">
	    		内容管理
	    	</h4>
			</a>
	    </div>
	    <div id="menu4" class="panel-collapse collapse">
	    	<div class="list-group">
				<a href="./content/add.php" target="main" class="list-group-item">发布内容</a>
				<a href="./content/index.php" target="main" class="list-group-item">管理内容</a>
			</div>
	    </div>
	</div>
</body>