<!DOCTYPE HTML>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="imgs/logo.png" type="images/png'" size="20*20">
    <title>【安旅】 | travel</title>
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
			    <div class="collapse navbar-collapse bs-js-navbar-scrolls">
			        <ul class="nav navbar-nav navbar-right ">
			            <li class="active"><a href="index.php">热门景区</a></li>
			            <span class="line"></span>
			            <li><a href="#section-1">国内游</a></li>
			            <li><a href="#section-2">出境游</a></li>
			            <li><a href="#section-3">定制游</a></li>
			            <li><a href="#section-4">高端跟团</a></li>
			            <li><a href="#section-5">旅游攻略</a></li>
			            <li><a href="./index-2.php">关于我们</a></li>
			            <!-- 下拉框 -->
			            <?php if(empty($_SESSION['user_name'])): ?>
			            <li class="dropdown">
			                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
			                   更多 <span class="glyphicon glyphicon-collapse-down"></span> <!-- <b class="caret"></b> -->
			                </a>
			                <ul class="dropdown-menu">    		        
			                    <li><a href="index_new.php"><span class="glyphicon glyphicon-log-in"></span>     会员登录</a></li>
			                    <li class="divider"></li>
			                    <li><a href="index_new.php"><span class="glyphicon glyphicon-user"></span>     注册会员</a></li>
			                    <li role="separator" class="divider"></li>
						        <li><a href="./admin/admin_login.php"><span class="glyphicon glyphicon-briefcase"></span>     网站后台</a></li>		                    
			                	<li role="separator" class="divider"></li>
			                </ul>
			            </li> 
			            <?php else: ?>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
				          <span class="glyphicon glyphicon-user" aria-hidden="true"></span>    <strong> 【
				          <?php echo $_SESSION['user_name'] ?>】</strong></a>
				          <ul class="dropdown-menu">
				            <li role="separator" class="divider"></li>
				            <li><a href="loginout.php"><span class="glyphicon glyphicon-log-out"></span>     退出</a></li>
				          </ul>
				        </li>
						<?php endif ?>
			        </ul>
			    </div>
		    </div>
		</nav>
	<!-- 导航条end -->

	<!-- 大图轮播项 -->
	<div id="myCarousel" class="carousel slide"  data-ride="carousel" data-interval="2000" style="margin-top:50px;">
		<!-- 轮播（Carousel）指标 -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>   
		<!-- 轮播（Carousel）项目 -->
		<div class="carousel-inner">
			
		 <?php
				 $sql="select * from business_content where keyword='轮播图' order by id  limit 3" ;
			 // echo $sql;
					$result=mysql_query($sql);
					while ($row=mysql_fetch_array($result)) {
						$contents0[]=$row;
					}
				 	echo "<div class='item active'>";
				 	echo "<img src=admin/content/".$contents0[0]['img']." alt='First slide'>"; 
				 	echo "<div class='carousel-caption'><p>";
				 	echo $contents0[0]['content'];
				 	echo "</p></div></div>";

					echo "<div class='item '>";
				 	echo "<img src=admin/content/".$contents0[1]['img']." alt='Second  slide'>"; 
				 	echo "<div class='carousel-caption'><p>";
				 	echo $contents0[1]['content'];
				 	echo "</p></div></div>";

				 	echo "<div class='item 、'>";
				 	echo "<img src=admin/content/".$contents0[2]['img']." alt='Third slide'>"; 
				 	echo "<div class='carousel-caption'><p>";
				 	echo $contents0[2]['content'];
				 	echo "</p></div></div>";
     			 ?>		
		</div>
		<!-- 轮播（Carousel）导航 -->
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		</a>
	</div> 
	<!-- 轮播end -->

	<!-- 五大模块 -->
<div class="container">
    <div class="row">
    <!-- 副导航 -->
        <div class="col-xs-3" id="myScrollspy">
            <ul class="nav nav-tabs nav-stacked animated" data-spy="affix" data-offset-top="125" data-animation="rotateInUpLeft" data-animation-delay="500" >
                <li><a href="#section-1">国内游</a></li>
                <li><a href="#section-2">出境游</a></li> 
                <li><a href="#section-3">定制游</a></li>
                <li><a href="#section-4">高端跟团</a></li>
                <li><a href="#section-5">旅游攻略</a></li>
            </ul>
        </div>
        <div class="col-xs-9">
            <h2 id="section-1">国内游</h2>
            <hr>        
	            <!-- 模块一：国内游 -->
	            <div class="col-xs-6 sec1 animated" data-animation="fadeInLeft" data-animation-delay="500">
	            <?php
				 	$sql="select * from business_content where keyword='国内游' order by id desc limit 3" ;
			 		// echo $sql;
					$result=mysql_query($sql);
					while ($row=mysql_fetch_array($result)) {
						$contents1[]=$row;
					}
				?>
		            <h2>top-1</h2>
		            <?php echo " <h3>".$contents1[0]['title']."</h3>";?>
		            <?php echo " <p>".$contents1[0]['content']."</p>";?>
				</div>
				<div class="col-xs-6 sec1 animated" data-animation="fadeInUp" data-animation-delay="1000">
				<?php echo "<img src=admin/content/".$contents1[0]['img']." width='400px' class='img-rounded'>"; ?>
	             	
	            </div>     
	            <!-- top2-->
	            <div class="col-xs-6 sec1 animated" data-animation="fadeInUp" data-animation-delay="1000">
	            	<?php echo "<img src=admin/content/".$contents1[1]['img']." width='400px' class='img-rounded'>"; ?>
				</div>
				<div class="col-xs-6 sec1 animated" data-animation="fadeInLeft" data-animation-delay="500">
		            <h2>top-2</h2>
		            <?php echo " <h3>".$contents1[1]['title']."</h3>";?>
		            <?php echo " <p>".$contents1[1]['content']."</p>";?>

	            </div>
	            <!-- top3 -->
	            <div class="col-xs-6 sec1 animated" data-animation="fadeInLeft" data-animation-delay="500">
		            <h2>top-3</h2>
		          	<?php echo " <h3>".$contents1[2]['title']."</h3>";?>
		            <?php echo " <p>".$contents1[2]['content']."</p>";?>
				</div>
				<div class="col-xs-6 sec1 animated" data-animation="fadeInUp" data-animation-delay="1000">
	             	<?php echo "<img src=admin/content/".$contents1[2]['img']." width='400px' class='img-rounded'>"; ?>
	            </div>
            <hr>
            <!-- 模块二：出境游 -->
            <h2 id="section-2">出境游</h2>   
            <hr> 
                <ul>
                    <li>
                        <div class="port effect-1">
                        <?php
							 	$sql="select * from business_content where keyword='出境游' order by id desc limit 3" ;
						 		// echo $sql;
								$result=mysql_query($sql);
								while ($row=mysql_fetch_array($result)) {
									$contents2[]=$row;
								}
							?>
                            <div class="image-box">
                           		<?php echo "<img src=admin/content/".$contents2[0]['img']." alt='Image-1'"; ?>
                            </div>
                            <div class="text-desc">                            
								 <?php echo " <h3>".$contents2[0]['title']."</h3>";?>
			          			 <?php echo " <p>".$contents2[0]['content']."</p>";?>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="port effect-2">
                            <div class="image-box">
                                <?php echo "<img src=admin/content/".$contents2[1]['img']." alt='Image-2'"; ?>
                            </div>
                            <div class="text-desc">
                                <?php echo " <h3>".$contents2[1]['title']."</h3>";?>
                                <?php echo " <p>".$contents2[1]['content']."</p>";?>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="port effect-3">
                            <div class="image-box">
                                <?php echo "<img src=admin/content/".$contents2[2]['img']." alt='Image-3'"; ?>
                            </div>
                            <div class="text-desc">
                            	<?php echo " <h3>".$contents2[2]['title']."</h3>";?>
                                <?php echo " <p>".$contents2[2]['content']."</p>";?>
                            </div>
                        </div>
                    </li>
                </ul>
                <!--  -->
  	 		<hr>
  	 		<!-- 模块三：定制游 -->
            <h2 id="section-3" style="">定制游</h2>
            <hr>
            <?php
			 	$sql="select * from business_content where keyword='定制游' order by id desc limit 1" ;
		 		// echo $sql;
				$result=mysql_query($sql);
				while ($row=mysql_fetch_array($result)) {
					$contents3[]=$row;
				}
			?>
	
			<?php echo "<div class='sec3' style='background: url(admin/content/".$contents3[0]['img'].");'> "; ?>
            	<div class="myform col-lg-6 animated" data-animation="flipInX" data-animation-delay="600" style="">
		         	 <form class=""  action="insertNote.php"  method="post">							
						<label for="name">您的姓名</label>
						<input id="name" class="form-control" type="text" required="required" name="contact-name" placeholder="您的姓名" />
						<label for="name">您的邮箱</label>
						<input id="email" class="form-control" type="email" required="required" name="contact-email" placeholder="您的邮箱" />
						<label for="name">您的电话</label>
						<input id="subject" class="form-control" type="text" required="required" name="contact-moblie" placeholder="您的电话" />
						<label for="name">留下您的定制想法</label>
						<textarea id="message" class="form-control" rows="3" name="contact-message" placeholder="详细的定制旅游描述:地点、时间安排、人数等"></textarea>
						<button type="submit" class="btn  animated" data-animation="bounceIn" data-animation-delay="1200">
						提交信息
						<span class="icon">
							<i class="fa fa-paper-plane-o"></i>
						</span>
						</button>
					</form>
				</div>
				<div class="col-lg-4 sec3-font animated" data-animation="fadeInRightBig" data-animation-delay="800">
					<?php echo " <h3>".$contents3[0]['title']."</h3>";?>
					<?php echo " <p style='margin-top:20px'>".$contents3[0]['content']."</p>";?>
					
				</div>
			</div>
         <!-- 模块四：高端跟团 -->
            <h2 id="section-4">高端跟团</h2>
            <hr>
             <?php
			 	$sql="select * from business_content where keyword='高端跟团' order by id  limit 6" ;
		 		// echo $sql;
				$result=mysql_query($sql);
				while ($row=mysql_fetch_array($result)) {
					$contents4[]=$row;
				}
			?>
                	
        	<div class="single-member sec4">
			  <div class="member-image">
			    	<?php echo "<img src=admin/content/".$contents4[0]['img']." >"; ?>
			  </div>
			  <div class="member-info">
			    <?php echo " <h3>".$contents4[0]['title']."</h3>";?>
                <?php echo " <p>".$contents4[0]['content']."</p>";?>
			    
			  </div>
			</div>

			<div class="single-member sec4">
			  <div class="member-image">
			   	<?php echo "<img src=admin/content/".$contents4[1]['img']." >"; ?>
			  </div>
			  <div class="member-info">
			    <?php echo " <h3>".$contents4[1]['title']."</h3>";?>
                <?php echo " <p>".$contents4[1]['content']."</p>";?>	    
			  </div>
			</div>
			
			<div class="single-member sec4">
			  <div class="member-image">
			    <?php echo "<img src=admin/content/".$contents4[2]['img']." >"; ?>
			  </div>
			  <div class="member-info">
			    <?php echo " <h3>".$contents4[2]['title']."</h3>";?>
                <?php echo " <p>".$contents4[2]['content']."</p>";?>
			  </div>
			</div>

			<div class="single-member sec4">
			  <div class="member-image">
			    <?php echo "<img src=admin/content/".$contents4[3]['img']." >"; ?>
			  </div>
			  <div class="member-info">
			    <?php echo " <h3>".$contents4[3]['title']."</h3>";?>
                <?php echo " <p>".$contents4[3]['content']."</p>";?>
			  </div>
			</div>
			<div class="single-member sec4">
			  <div class="member-image">
			    <?php echo "<img src=admin/content/".$contents4[4]['img']." >"; ?>
			  </div>
			  <div class="member-info">
			    <?php echo " <h3>".$contents4[4]['title']."</h3>";?>
                <?php echo " <p>".$contents4[4]['content']."</p>";?>
			  </div>
			</div>
			<div class="single-member sec4">
			  <div class="member-image">
			    <?php echo "<img src=admin/content/".$contents4[5]['img']." >"; ?>
			  </div>
			  <div class="member-info">
			    <?php echo " <h3>".$contents4[5]['title']."</h3>";?>
                <?php echo " <p>".$contents4[5]['content']."</p>";?>
			  </div>
			</div>
			<!-- 模块五：旅游攻略 -->
            <h2 id="section-5">旅游攻略</h2>
            <hr>
             <?php
			 	$sql="select * from business_content where keyword='旅游攻略' order by id  limit 5" ;
		 		// echo $sql;
				$result=mysql_query($sql);
				while ($row=mysql_fetch_array($result)) {
					$contents5[]=$row;
				}
			?>
             <ul class="media-list">
			<li class="media">
			<a class="media-left" href="#">
			 <?php echo "<img class='media-object' src=admin/content/".$contents5[0]['img']." >"; ?>
			</a>
		<div class="media-body">
			 <?php echo " <h4 class='media-heading'>".$contents5[0]['title']."</h4>";?>
             <?php echo " <p>".$contents5[0]['content']."</p>";?>
			<hr>
			<!-- 嵌套的媒体对象 -->
			<div class="media">
				<a class="media-left" href="#">
					 <?php echo "<img class='media-object' src=admin/content/".$contents5[1]['img']." >"; ?>
				</a>
				<div class="media-body">
					<?php echo " <h4 class='media-heading'>".$contents5[1]['title']."</h4>";?>
             		<?php echo " <p>".$contents5[1]['content']."</p>";?>
					<hr>
					<!-- 嵌套的媒体对象 -->
					<div class="media">
						<a class="media-left" href="#">
							<?php echo "<img class='media-object' src=admin/content/".$contents5[2]['img']." >"; ?>
						</a>
						<div class="media-body">
							<?php echo " <h4 class='media-heading'>".$contents5[2]['title']."</h4>";?>
             				<?php echo " <p>".$contents5[2]['content']."</p>";?><hr>
						</div>
					</div>
				</div>
			</div>
			<!-- 嵌套的媒体对象 -->
			<div class="media">
				<a class="media-left" href="#">
					<?php echo "<img class='media-object' src=admin/content/".$contents5[3]['img']." >"; ?>
				</a>
				<div class="media-body">
					<?php echo " <h4 class='media-heading'>".$contents5[3]['title']."</h4>";?>
            		<?php echo " <p>".$contents5[3]['content']."</p>";?><hr>
				</div>
			</div>
		</div>
	</li>
	<li class="media">
		<a class="pull-right" href="#">
			<?php echo "<img class='media-object' src=admin/content/".$contents5[4]['img']." >"; ?>
		</a>
		<div class="media-body">
			<?php echo " <h4 class='media-heading'>".$contents5[4]['title']."</h4>";?>
            <?php echo " <p>".$contents5[4]['content']."</p>";?><hr>
		</div>
	</li>
</ul>

        </div>
    </div>
</div>
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