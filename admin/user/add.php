<!DOCTYPE HTML>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="imgs/logo.png" type="images/png'" size="20*20">
    <title>添加用户 | travel</title>
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
			document.frmModify.user_name.focus();
		}
		function CheckValid(){
		    if(document.frmModify.user_name.value=="您的昵称"){
		        alert("昵称不能为空！");
		        document.rmModify.user_name.focus();
		        return false;
		    }
			if(document.frmModify.password.value=="输入密码"){
				alert("密码不能为空！");
				document.rmModify.password.focus();
				return false;
			}
		    if(document.frmModify.password2.value=="确认密码"){
		        alert("密码不能为空！");
		        document.rmModify.password2.focus();
		        return false;
		    }
		    
			else{
				if(document.frmModify.password.value==document.frmModify.password2.value){
					return true;
				}else{
					alert("密码确认不符！请重新输入新密码！");
					document.frmModify.password.focus();
					return false;
				}
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
		function change2(obj){
		 if(obj.type=="text"){
		    obj.style.display = "none";
		    document.getElementById('pass2').style.display = "block";
		    document.getElementById('pass2').value="";
		    document.getElementById('pass2').focus();//加上
		 }else{
		    var pass = document.getElementById('pass2').value;
		    if(pass.length<1){
		      obj.style.display = "none";
		      document.getElementById('txt2').style.display = "block";
		    }
		  }
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
 	 <form class=""  name="frmModify"  action="./action.php?a=add" method="post">	
 	 <h3>添加用户</h3>						
		<label for="name">姓名</label>
		<input id="name" class="form-control" type="text" required="required"  name="user_name"  placeholder="您的姓名" />
		
		<label for="name">密码</label>
		<input id="txt" type="text"  class="form-control" placeholder="输入密码" onfocus="change(this)"> 
        <input id="pass" type="password" name="password" class="form-control" style="display:none" onblur="change(this)"> 
		
		<label for="name">确认密码</label>
		<input id="txt2" type="text" placeholder="确认密码" onfocus="change2(this)" class="form-control"> 
        <input id="pass2" type="password" name="password2" class="form-control" style="display:none" onblur="change2(this)">        				
        
        <label for="name">邮箱</label>
        <input type="text" name="email"  class="form-control"  placeholder="邮箱"  >

        <input type="submit" value="提交" name="cmdlogin" class="btn btn-info large" onclick="return CheckValid()"; />
        <button type="reset"  class="btn btn-danger large" values="重置">重置</button>   
	</form>
</div>
</body>
	