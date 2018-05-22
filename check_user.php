<?php
// 用户登录
session_start();
$user_name=@$_POST['user_name'];
$pwd=@$_POST['password'];
$_SESSION['user_name']=$user_name;

require("dbconnect.php");
$str="select user_name,password from business_user where user_name='$user_name'";
//echo $str;
$result=mysql_query($str,$link_id) or die("查询用户信息失败：".mysql_error());
$rows=mysql_num_rows($result);
if($rows!=0){
	list($name,$password)=mysql_fetch_row($result);
	if($password==$pwd){		
		echo"<script>location.href='index.php';</script>";
	}else{
		echo"<script>alert('您输入的密码错误。请重新输入！');location.href='index_new.php';</script>";
		}
}else{
	echo"<script>alert('用户名不存在，请先注册！');location.href='zhuce_new.php';</script>";
}
/*else{
	$str="insert into member (nickname,password,isonline) values('$user_name','$pwd',1)";
	mysql_query($str.$lind_id);
	echo"<script>location.href='main.php';</script>";
}*/
mysql_close($link_id);

?>