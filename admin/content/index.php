 <?php 
  require("../dbconnect.php");
  require("../redirect.php");
  $sql="select * from business_content order by id";
  $result=mysql_query($sql);
  $total=mysql_num_rows($result);

  $page=isset($_GET['page'])?intval($_GET['page']):1;
  $num=3;
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
    <title>内容列表| travel</title>
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
   <style type="text/css">
    .row{
        margin-top: 40px;
        border-radius: 0.8em;/*制作圆角*/ /* transition动画效果*/ 
    }
    .table a{
  margin: 0px 2px; 
}
    </style>
	</head>
<body>
   <div  class="home-section-wrap center">
    <div class="container home">
        <div class="row center">     
        <h3 class="section-title">内容列表</h3> 
        <div class="col-md-10 col-md-offset-2">
    </div>
     <?php
        if($new_row=mysql_fetch_array($new_result)){
            echo "<table class='table table-hover'><tr><td>ID</td><td>分组</td><td>标题</td><td>内容</td><td>图片</td><td>操作</td></tr>";
            // print_r($new_row);
            do{
              list($id,$keyword,$title,$content,$img)=$new_row;
                $_SESSION['id']=$id;
              echo "<tr><td>$id</td>";
              echo "<td>$keyword</td>";
              echo "<td>$title</td>";
              echo "<td>$content</td>";
              echo "<td>";       
             if($img)
                echo "<img width='140px' src='".$img."'/>" ;
              else
                echo "<div>暂无照片</div>";
      
              echo"</td>";
              echo "<td>";
                echo "<a href='./edit.php?a=edit&id=$id' class='btn btn-info'>编辑</a>"; 
                echo "<a href='./action.php?a=del&id=$id' class='btn btn-danger'>删除</a>";
              echo "</td></tr>";   
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
 
</html>