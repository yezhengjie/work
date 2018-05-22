<!DOCTYPE HTML>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="imgs/logo.png" type="images/png'" size="20*20">
    <title>关于我们</title>
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

<?php
	 session_start();
	require("dbconnect.php");

?>
<body>
	<!-- 导航条 start （固定在顶端）-->
		<nav class="navbar navbar-inverse  navbar-default navbar-static navbar-fixed-top" role="navigation">
		    <div class="container">
			    <!-- logo -->
			    <div class="navbar-header">
					<img class="navbar-brand" src="imgs/logo.png">
			        <a class="navbar-brand" href="index.php" >安旅 travel well</a>
			    </div>
				<!-- 菜单栏 -->
			   
		    </div>
		</nav>
	<!-- 导航条end -->
	<img src="imgs/comon.jpg" width="100%">
	<div class="container" style="text-align:center">
	 <?php
	 	$sql="select * from business_content where keyword='关于我们' order by id  limit 5" ;
 		// echo $sql;
		$result=mysql_query($sql);
		while ($row=mysql_fetch_array($result)) {
			$contents6[]=$row;
		}
	?>		
	<?php echo " <h2>".$contents6[0]['title']."</h2>";?>
    <?php echo " <p>".$contents6[0]['content']."</p>";?><hr>

	<?php echo "<img width='700px' class='animated' data-animation='bounceIn' data-animation-delay='800' src=admin/content/".$contents6[0]['img']." >"; ?>

	<h3>“文明是死去的文化 文化是活着的文明”</h3>
	<hr>
    <?php echo " <p>".$contents6[1]['content']."</p>";?><hr>
<?php echo "<img width='700px' class='animated' data-animation='bounceIn' data-animation-delay='800' src=admin/content/".$contents6[1]['img']." >"; ?>

<h3>通过真诚的私人定制旅行，体验世界不同的文化，滋养旅行者的心灵。</h3>
<hr>
<?php echo " <p>".$contents6[2]['content']."</p>";?><hr>
<br>
<button type="submit" class="btn  animated" data-animation="bounceIn" data-animation-delay="800">
一键注册，即刻加入我们
<span class="icon">
	<i class="fa fa-paper-plane-o"></i>
</span>
</button>
</div>
<footer class="footer  navbar-default">
    <div class="container ">
    <!-- logo -->
	    <div class="brand">
			<img src="imgs/logo.png">
	        <a href="#" >安旅 travel well</a>

	    </div>
			<img src="imgs/wechat.png">
		<hr>
        <p>Copyright © 2017.yezhengjie All rights reserved.</p>
    </div>
</footer>
</body>
</html>