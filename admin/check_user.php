<?php
session_start();
$admin_name=@$_POST['admin_name'];
$admin_pass=@$_POST['admin_pass'];
$_SESSION['admin_name']=$admin_name;

require("dbconnect.php");
$str="select admin_name,admin_pass from business_admin where admin_name='$admin_name'";
// echo $str;
$result=mysql_query($str,$link_id) or die("查询用户信息失败：".mysql_error());
$rows=mysql_num_rows($result);
if($rows!=0){
	list($name,$password)=mysql_fetch_row($result);
	// echo $admin_pass;
	if($password==$admin_pass){		
		echo"<script>location.href='index.php';</script>";
	}else{
		echo"<script>alert('您输入的密码错误。请重新输入！');location.href='admin_login.php';</script>";
		}
}else{
	echo"<script>alert('管理员名字不存在，请联系管理员！');location.href='admin_login.php';</script>";
}
/*else{
	$str="insert into member (nickname,password,isonline) values('$user_name','$pwd',1)";
	mysql_query($str.$lind_id);
	echo"<script>location.href='main.php';</script>";
}*/
mysql_close($link_id);

?>