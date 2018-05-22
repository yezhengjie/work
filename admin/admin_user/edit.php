<?php
  // var_dump($_GET);
  // exit;
	require("../dbconnect.php");
	require("../redirect.php");
	$id=$_GET['id'];
	//sql语句
	$sql="select * from business_admin where admin_id=$id" ;
	// echo $sql;
	$result=mysql_query($sql);

	$row=mysql_fetch_array($result);
	// print_r($row);
	$_SESSION['id']=$row['admin_id'];
	//关闭链接
	mysql_close($link_id);

	//v($user['0']);exit;
?>
<!DOCTYPE HTML>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="imgs/logo.png" type="images/png'" size="20*20">
    <title>编辑管理员 | travel</title>
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
	 <!-- Bootstrap -->
    
    <link href="../css/bootstrap.min.css" rel="stylesheet">
 	<link rel="stylesheet" href="../css/animate.css" />
    <!-- <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.css"> -->

	<script  type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/jquery.appear.js"></script>
	<script  type="text/javascript" src="../js/custom.js" ></script>

	<script type="text/javascript"  src="../js/bootstrap.min.js"></script>
	<script language="javascript">
		function NameGetFocus(){
			document.frmModify.admin_name.focus();
		}
		function CheckValid(){
		    if(document.frmModify.admin_name.value=="您的昵称"){
		        alert("昵称不能为空！");
		        document.rmModify.admin_name.focus();
		        return false;
		    }
			if(document.frmModify.password.value=="输入密码"){
				alert("密码不能为空！");
				document.rmModify.password.focus();
				return false;
			}
		    
			return true;
		}

</script>
<style type="text/css">	
.myform{
	margin:0 auto;
	width: 500px;
	height: 360px;
	position:fixed;
	left:20%;
	top:15%;

	/*margin: 50px 30px;*/
	/*display: none;*/
	background: rgba(0,0,0,0.5);
	/*padding: 30px 30px 30px 30px;*/
	font: 12px Arial, Helvetica, sans-serif;
	color: #fff;
	border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
}
.myform .btn{
	margin: 20px 5px; 
}

	 </style>
  
</head>
<body  style="background: url('imgs/bg.jpg'); ">

            	<div class="myform col-lg-6 animated" data-animation="flipInX" data-animation-delay="600" >
		         	 <form class=""  name="frmModify"   action="./action.php?a=edit" method="post">	
		         	 <h3>编辑管理员</h3>						
						<label for="name">姓名</label>
						<input id="name" class="form-control" type="text" required="required"  name="admin_name"  placeholder="您的姓名" value="<?php echo $row['admin_name'] ?>"/>
						<label for="name">密码</label>
						<input id="txt" type="text" placeholder="密码" name="password" class="form-control" value="<?php echo $row['admin_pass'] ?>">
						<input type="submit" value="提交" name="cmdlogin" class="btn btn-info large" onclick="return CheckValid()"; />
	                    <button type="reset"  class="btn btn-danger large" values="重置">重置</button>   
						
					</form>

</div>
</body>
	