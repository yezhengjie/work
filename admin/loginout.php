<?php
	//require("redirect.php")
	session_start();
	$admin_name=$_SESSION['admin_name'];
	
	require("dbconnect.php");
	// $str="update member set isonline=0 where nickname='$name'";
	// mysql_query($str,$link_id) or die("更新数据库失败".mysql_error());
	mysql_close($link_id);
	
	$_SESSION=array();
	session_destroy();
	 echo("<script>window.top.location='admin_login.php';</script>");
	
?>
