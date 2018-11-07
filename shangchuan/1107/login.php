<?php 
$name=$_POST['name'];
$pwd=$_POST['pwd'];
session_start();
$uid=123;
$arr=array(
		'name'=>$name,
		'pwd'=>$pwd,
		'uid'=>$uid,
	);
$_SESSION['info']=$arr;

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<a href="order.php">登录成功后页面</a>
 </body>
 </html>