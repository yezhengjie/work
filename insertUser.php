<?php
//用户注册 
	require("dbconnect.php");
	$user_name=@$_POST['user_name'];
	$password=@$_POST['password'];
	$email=@$_POST['email'];
	$str="insert business_user(user_name,password,email) values('$user_name','$password','$email')";
	//echo $str;
	$result=mysql_query($str,$link_id) or die("注册失败:".mysql_error());	
	header("Location:index_new.php");
	mysql_close($link_id);
				  
?>