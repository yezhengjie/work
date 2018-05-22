<?php 
	require("../dbconnect.php");
	require("../redirect.php");

	// v($_POST);
	// echo "<hr>";
	// v($_GET);
	$a=$_GET['a'];	
	switch ($a) {
		case 'del':
			$id=$_GET['id'];
			// echo "啊哦，数据被删除了";
			$sql="delete from business_user where id=$id";
			 // echo $sql;
			$result=mysql_query($sql);
			//删除返回提示，并跳转会用户列表首页
			if($result && mysql_affected_rows()>0){
				echo '<div class="alert alert-success container center home" role="alert">删除成功！<a href="./index.php">返回首页</a></div>';
				echo '<meta http-equiv="refresh" content="3;index.php">';
			}else{
				echo '<div class="alert alert-denger container center home" role="alert">删除失败！</div>';
				echo '<meta http-equiv="refresh" content="3;index.php">';
			}
		break; 	
		case 'edit':
	    //提交修改 update
		    $id=$_SESSION['id'];
		    $user_name=$_POST['user_name'];
		    $password=$_POST['password'];
		    $email=$_POST['email'];
		    $sql="update business_user set `user_name`='$user_name',`password`='$password', `email`='$email' where `id`=$id";
		    // echo $sql;exit;
		    $result=mysql_query($sql);
		    //修改返回提示，并跳转会用户列表首页
		    if($result){
		    	echo '<div class="alert alert-success container center alert" role="alert">修改成功！<a href="./index.php">  返回首页</a></div>';
		    }else{
		    	echo '<div class="alert alert-denger container center home" role="alert">修改失败！<a href="./index.php">  返回首页</a></div>';
		    }
	    break;
		case 'add':
			$user_name=@$_POST['user_name'];
			$password=@$_POST['password'];
			$email=@$_POST['email'];
			$str="insert business_user(user_name,password,email) values('$user_name','$password','$email')";
			// echo $str;
			$result=mysql_query($str,$link_id);		
			if($result){
				if(mysql_insert_id()>0){//返回自增id
					echo '<div class="alert alert-success container center alert" role="alert">添加成功！ID为：<strong>';
					echo mysql_insert_id();
					echo '  </strong><a href="./index.php">返回首页</a></div>';
				
				}
			}
			else{
				echo '<div class="alert alert-denger container center home" role="alert">添加失败！</div>';
			}
		break;
	}
?>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="imgs/logo.png" type="images/png'" size="20*20">
    <title>用户列表| travel</title>
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->

	 <!-- Bootstrap -->
    
    <link href="../css/bootstrap.min.css" rel="stylesheet">
 	<!-- <link href="../css/style.css" rel="stylesheet"> -->
 	<link rel="stylesheet" href="../css/animate.css" />
    <!-- <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.css"> -->

	<script  type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/jquery.appear.js"></script>
	<script  type="text/javascript" src="../js/custom.js" ></script>

	<script type="text/javascript"  src="../js/bootstrap.min.js"></script>
</head>