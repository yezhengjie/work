<?php 
	require("../dbconnect.php");
	require("../redirect.php");
	header("Content-Type:text/html;charset=utf-8");
	// v($_POST);
	// echo "<hr>";
	// v($_GET);
	$a=$_GET['a'];	
	switch ($a) {
		case 'del':
			$id=$_GET['id'];
			// echo "啊哦，数据被删除了";
			$sql="delete from business_content where id=$id";
			// echo $sql;
			$result=mysql_query($sql);
			//删除返回提示，并跳转会用户列表首页
			if($result && mysql_affected_rows()>0){
				echo '<div class="alert alert-success center home" role="alert">删除成功！<a href="./index.php">返回首页</a></div>';
				echo '<meta http-equiv="refresh" content="3;index.php">';
			}else{
				echo '<div class="alert alert-denger container center home" role="alert">删除失败！</div>';
				echo '<meta http-equiv="refresh" content="3;index.php">';
			}
		break; 	
		case 'edit':
	    //提交修改 update
		    $id=$_SESSION['id'];
		    $title=@$_POST['title'];
			$content=@$_POST['content'];
			$keyword=@$_POST['keyword'];

			if($_FILES["file"]["error"]){
			    echo $_FILES["file"]["error"];
			}
			else{
			    //控制上传文件的类型，大小
			    if(($_FILES["file"]["type"]=="image/jpeg" || $_FILES["file"]["type"]=="image/png") && $_FILES["file"]["size"]<10240000){
			        //找到文件存放的位置
			        $filename = "file/".date("YmdHis").$_FILES["file"]["name"];
			        //转换编码格式
			        $filename = iconv("UTF-8","gb2312",$filename);
			        //判断文件是否存在
			        if(file_exists($filename)) {
			            echo "该文件已存在！";
			        }
			        else{
			            //保存文件
			            move_uploaded_file($_FILES["file"]["tmp_name"],$filename);
			            
			            // $sql="insert into image(img) values('{$filename}')";
			            $sql="update business_content set `keyword`='$keyword', `title`='$title', `content`='$content', `img`='{$filename}' where `id`=$id ";
						// echo $sql;
						// $result = mysqli_query($link,$sql);
			            $result=mysql_query($sql,$link_id);		
			        }
			    }
			    else
			    {
			        echo "文件类型不正确！";
			    }
			}
			
		    if($result){
		    	echo '<div class="alert alert-success container center alert" role="alert">修改成功！<a href="./index.php">返回首页</a></div>';
		    	// echo '<meta http-equiv="refresh" content="3;index.php">';
		    }else{
		    	echo '<div class="alert alert-denger container center home" role="alert">修改失败！</div>';
		    	// echo '<meta http-equiv="refresh" content="3;index.php">';
		    }
	    break;
		case 'add':
			$keyword=@$_POST['keyword'];
			$title=@$_POST['title'];
			$content=@$_POST['content'];
			
			if($_FILES["file"]["error"]){
			    echo $_FILES["file"]["error"];
			}
			else{   
			    if(($_FILES["file"]["type"]=="image/jpeg" || $_FILES["file"]["type"]=="image/png") && $_FILES["file"]["size"]<1024000){ //控制上传文件的类型，大小
			        $filename = "file/".date("YmdHis").$_FILES["file"]["name"];  //找到文件存放的位置
			        $filename = iconv("UTF-8","gb2312",$filename);//转换编码格式
			        if(file_exists($filename)) {    //判断文件是否存在
			            echo "该文件已存在！";
			        }else{   
			            move_uploaded_file($_FILES["file"]["tmp_name"],$filename);       //保存文件  
			            $insert_sql="insert into business_content(keyword,title,content,img) values('$keyword','$title','$content','{$filename}')";
						// echo $insert_sql;
			            $result=mysql_query($insert_sql,$link_id);		
			        }
			    }
			    else{
			        echo "文件类型不正确！";
			    }
			}
			if($result){
				if(mysql_insert_id()>0){//返回自增id
					echo '<div class="alert alert-success container center alert" role="alert">添加成功！ID为：<strong>';
					echo mysql_insert_id();
					echo '</strong><a href="./index.php">返回首页</a></div>';
				}
			}
			else
				echo '<div class="alert alert-denger container center home" role="alert">添加失败！</div>';
			//echo $str;
			break;
			// $tmp_file=@$_FILES["file"]["tmp_name"];
			// $handle=@fopen($tmp_file,'r');
			// $picture=@addslashes(fread($handle,filesize($tmp_file)));
			
			// 	$insert_sql="insert into wangzhan_content1(title,content,img) values('$title','$content','$picture')";
			// // echo $insert_sql;
			
			
	}
?>