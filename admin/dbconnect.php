<?php
// 连接数据安库
$link_id=@mysql_connect("localhost","root","")
        or die("连接数据库服务器失败： ".mysql_error());
@mysql_select_db("business", $link_id) or die ("选择数据库失败: ".mysql_error());
mysql_query("SET NAMES utf8");
?>
