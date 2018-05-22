<?php 
	require("dbconnect.php");
	$name=@$_POST['contact-name'];
	$email=@$_POST['contact-email'];
	$moblie=@$_POST['contact-moblie'];
	$message=@$_POST['contact-message'];
	$str="insert business_massage(name,email,mobile,message) values('$name','$email','$moblie','$message')";	
	// echo $str;
	$result=mysql_query($str,$link_id);		
	if($result){
		if(mysql_insert_id()>0){//返回自增id
			echo '<script language="javascript"> alert("提交成功！"); </script>';
		}
	}
	else{
		echo '<script language="javascript"> alert("提交失败！请稍后再试"); </script>';
	}
		header("Location:index.php");	
?>