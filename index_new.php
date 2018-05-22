<!DOCTYPE HTML>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="imgs/logo.png" type="images/png'" size="20*20">
    <title>【登录】 | travel</title>
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->

	 <!-- Bootstrap -->
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
 	<link rel="stylesheet" href="css/animate.css" />
    <!-- <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.css"> -->

	<script  type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.appear.js"></script>
	<script  type="text/javascript" src="js/custom.js" ></script>

	 <script type="text/javascript"  src="js/bootstrap.min.js"></script>
	 <script language="javascript">
		function NameGetFocus(){
			document.frmLogin.user_name.focus();
		}
		function CheckValid(){
			if(document.frmLogin.user_name.value=="您的昵称"){
				alert("请输入您的昵称");
				document.frmLogin.user_name.focus();
				return false;
			}
			if(document.frmLogin.password.value==""){
				alert("请输入您的密码");
				document.frmLogin.password.focus();
				return false;
			}
			return true;
		}
		function change(obj){
		 if(obj.type=="text"){
		    obj.style.display = "none";
		    document.getElementById('pass').style.display = "block";
		    document.getElementById('pass').value="";
		    document.getElementById('pass').focus();//加上
		 }else{
		    var pass = document.getElementById('pass').value;
		    if(pass.length<1){
		      obj.style.display = "none";
		      document.getElementById('txt').style.display = "block";
		        }
		    }
		 }
	</script>
	<style type="text/css">	
	.myform{
		margin:0 auto;
		width: 500px;
		height: 260px;
		position:fixed;
		left:35%;
		top:30%;

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
		background:#f60;
		margin-top:10px; 
		color:#fff;
	}
	.myform .btn:hover{
		background:#fff;
		margin-top:10px; 
		border: 2px solid #f60;
		color:#f60;
	}
	</style>
	  
</head>
<body  style="background: url('imgs/bg.jpg'); ">

            	<div class="myform col-lg-6 animated" data-animation="flipInX" data-animation-delay="600" >
		         	 <form class=""  action="check_user.php" method="post">	
		         	 <h3>会员登录</h3>						
						<label for="name">您的姓名</label>
						<input id="name" class="form-control" type="text" required="required" name="user_name" placeholder="您的姓名" />
						<label for="name">您的密码</label>
						 <input id="txt" type="text"  class="form-control" placeholder="您的密码" onfocus="change(this)"> 
                        <input id="pass" type="password" name="password" class="form-control" style="display:none" onblur="change(this)"> 
						
						<button type="submit" class="btn  animated" data-animation="bounceIn" data-animation-delay="1200" name="cmdlogin" onclick="return CheckValid()">
						登录
						</button>
						<a href="zhuce_new.php" style="color:#fff; padding:20px;">马上去注册!</a>
					</form>

</div>
</body>
	