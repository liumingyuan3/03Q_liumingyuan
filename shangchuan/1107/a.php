<?php 
header("content-type:text/html;charset=utf8");
session_start();
// $arr=isset($_SESSION['info'])?$_SESSION['info']:array();
if (session_destroy()) {
	echo "退出成功";
}else{
	echo "失败";
}



 ?>