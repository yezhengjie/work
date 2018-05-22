
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="imgs/logo.png" type="images/png'" size="20*20">
    <title>添加内容| travel</title>
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
<body>

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
	width: 800px;
	height: 460px;
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
<body  text="#000000" onload="NameGetFocus()">

<!--=== Preloader section Ends ===-->
	<div class="myform col-lg-6 animated" data-animation="flipInX" data-animation-delay="600" >    
	    <form name="frmModify"  action="./action.php?a=add" method="post"  enctype="multipart/form-data" >
	       <h3>添加内容</h3>
	       <label for="name">分组</label>
	        <select class="item form-control " name="keyword">
	        	<option class="form-control"value="轮播图">轮播图</option>
	            <option class="form-control"value="国内游">国内游</option>
	            <option class="form-control" value="出境游">出境游</option>
	            <option class="form-control" value="定制游">定制游</option>
	            <option class="form-control"value="高端跟团">高端跟团</option>
	            <option class="form-control" value="旅游攻略">旅游攻略</option>
	            <option class="form-control" value="关于我们">关于我们</option>
	        </select>
	        <label for="exampleInputEmail1">标题</label>
	        <input type="text" name="title"class="form-control">
	        <label for="exampleInputPassword1">内容</label>
	        <textarea id="txt"  name="content" class="form-control "></textarea> 
	        <label for="exampleInputFile">请选择图片</label>
	        <input type="file" name="file" class="form-control" />

	        <input type="submit" value="提交" name="cmdlogin" class="btn btn-info large" onclick="return CheckValid()"; />
	        <button type="reset"  class="btn btn-danger large" values="重置">重置</button>   
	    </form>
	</div>
</body>


</body>
</html>
