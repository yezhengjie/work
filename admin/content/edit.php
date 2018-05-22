<?php
  // var_dump($_GET);
  // exit;
	require("../dbconnect.php");
	require("../redirect.php");
	$id=$_GET['id'];
	//sql语句
	$sql="select * from business_content where id=$id" ;
	 // echo $sql;
	$result=mysql_query($sql);

	$row=mysql_fetch_array($result);
	// print_r($row);
	$_SESSION['id']=$row['id'];
	//关闭链接
	mysql_close($link_id);

	//v($user['0']);exit;

?>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="imgs/logo.png" type="images/png'" size="20*20">
    <title>修改内容| travel</title>
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
</head>
<body>

<script language="javascript">
function NameGetFocus(){
	document.frmModify.user_name.focus();
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
.form1{
    margin-bottom: 10px;
}
</style>
</head>
<body  text="#000000" onload="NameGetFocus()">

 <div class="myform col-lg-6 animated" data-animation="flipInX" data-animation-delay="600" >                
    <form name="frmModify"  action="./action.php?a=edit" method="post"   enctype="multipart/form-data">
    <h3>修改内容</h3>
    <label for="exampleInputEmail1">分组</label>
    	<select class="item form-control " name="keyword">
            <option class="form-control"value="轮播图">轮播图</option>
            <option class="form-control" value="国内游">国内游</option>
            <option class="form-control" value="出境游">出境游</option>
            <option class="form-control" value="定制游">定制游</option>
            <option class="form-control" value="高端跟团">高端跟团</option>
            <option class="form-control" value="旅游攻略">旅游攻略</option>
            <option class="form-control" value="关于我们">关于我们</option>
        </select>
        <label for="exampleInputEmail1">标题</label>
    	<input type="text" name="title" class="form-control"   value="<?php echo $row['title'] ?>"/>
    	<label for="exampleInputPassword1">内容</label>
        <textarea id="txt"  name="content" class="form-control form1" ><?php echo $row['content'];  ?>
        </textarea> 
           <?php echo "<img width='180' ' display='block' class='form1' src='".$row['img']."'/>" ?>
            <input type="file" name="file" class="item3" /> 
        <input type="submit" value="提交" name="cmdlogin" class="btn btn-info large"; />
        <button type="reset"  class="btn btn-danger large" values="重置">重置</button>   
    </form>
           
</div>
</body>


</body>
</html>
