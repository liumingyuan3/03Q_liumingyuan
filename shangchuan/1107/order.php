<?php 
header("content-type:text/html;charset=utf8");
session_start();
$arr=isset($_SESSION['info'])?$_SESSION['info']:array();
print_r($arr);
// print_r($arr);die;
if (!empty($arr)) {
	echo "登录成功，可以看页面";
}else{
	echo "请先登录,再看页面";
}



 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<a href="a.php">退出</a>
 </body>
 </html>