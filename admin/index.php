<?php
    require("redirect.php");
?>
<!DOCTYPE html>
 <html lang="cn">
 <head>
    <meta charset="UTF-8">
    <link rel="icon" href="imgs/logo.png" type="images/png'" size="20*20">
    <title>管理员界面 | 1024px</title>
 </head>
    <frameset rows="12%,*" border="0">
        <frame src="top.php" name="top">
        <frameset cols="16%,*" border="0">
            <frame src="list" name="menu">
            <frame src="main" name="main">
        </frameset>
    </frameset>
 </html>