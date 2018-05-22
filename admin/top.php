
<?php
	 session_start();
	require("dbconnect.php");	
?>
<!DOCTYPE HTML>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="imgs/logo.png" type="images/png'" size="20*20">
    <title>管理员导航 | travel</title>
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
  
</head>

<body>
<!-- 导航条 start （固定在顶端）-->
	<nav class="navbar navbar-inverse  navbar-default navbar-static navbar-fixed-top" role="navigation">
	    <div class="container">
		    <!-- logo -->
		    <div class="navbar-header">
				<img class="navbar-brand" src="imgs/logo.png">
		        <a class="navbar-brand">安旅 travel well</a>
		    </div>
			<!-- 菜单栏 -->
		    <div class="collapse navbar-collapse bs-js-navbar-scrolls">
		        <ul class="nav navbar-nav navbar-right ">     
		            <span class="line"></span>
		            <li><a href="#">最近登录时间：<?php echo date('Y年m月d日 H:i:s');?></a></li>
		            <li><a href="#">当前管理员:<?php echo $_SESSION['admin_name']; ?></a></li>
		            <li><a href="loginout.php" target="_top">退出</a></li>
		        </ul>
		    </div>
	    </div>
	</nav>
	<img src="imgs/b.jpg" width="100%" height="40px">
<!-- 导航条end -->
</body>