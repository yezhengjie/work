<?php 
  require("../dbconnect.php");
  require("../redirect.php");
  $sql="select * from business_massage order by id";
  // echo $sql;
  $result=mysql_query($sql);
  $total=mysql_num_rows($result);

  $page=isset($_GET['page'])?intval($_GET['page']):1;
  $num=5;
  $url='index.php';
  $pagenum=ceil($total/$num);
  $page=min($pagenum,$page);
  $prepg=$page-1;
  $nextpg=($page==$pagenum? 0:$page+1);
  $new_sql=$sql." limit ".($page-1)*$num.",".$num;
  $new_result=mysql_query($new_sql);
  // $new_row=mysql_fetch_array($new_result);
?>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="imgs/logo.png" type="images/png'" size="20*20">
    <title>信息列表| travel</title>
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
 </head>
  	<body>
   <div  class="home-section-wrap center">
    <div class="container home">
        <div class="row">     
        <h3 class="section-title">信息列表</h3> 
        <div class="col-md-8 col-md-offset-2">
     </div>
    </div>
     <?php
        if($new_row=mysql_fetch_array($new_result)){
            echo "<table class='table table-hover' ><tr class='success' ><td>ID</td><td>姓名</td><td>邮箱</td><td>手机号</td><td>信息</td></tr>";
            do{
              list($id,$xm,$email,$moblie,$message)=$new_row;
              echo "<tr ><td>$id</td>";
              echo "<td>$xm</td>";
              echo "<td>$email</td>";
              echo "<td>$moblie</td>";
              echo "<td>$message</td>";
              echo "</tr>";   
            }while($new_row=mysql_fetch_array($new_result));
            echo "</table>";
            $pagenav="";
            if($prepg)
              $pagenav.="<a href='$url?page=$prepg' class='btn btn-default'>上一页 </a>";
            for($i=1;$i<=$pagenum;$i++){
              if($page==$i)
                $pagenav.=" <span class='btn btn-default active'>".$i." </span>";
              else
                $pagenav.="<a href='$url?page=$i' class='btn btn-default'>     $i   </a>";
              }
            if($nextpg){
              $pagenav.="<a href='$url?page=$nextpg'class='btn btn-default'> 下一页</a>";
            }
            $pagenav.="<span class='label label-default'>共(".$pagenum.")页</span>";
            echo"<br><div algin=center class=STYLE1><b>".$pagenav."</b></div>";
          }
          else
            echo"<script>alert('无记录！');location.href='StuSearch.php';</script>";
          ?>
        </div>
      </div>
    </div>

<html>