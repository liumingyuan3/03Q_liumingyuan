<?php 
header("content-type:text/html;charset=utf8");
function __autoload($class){
	require "{$class}.php";
}
$thiss =new curd();
$id=$_GET['id'];
$res=$thiss->del('zhoukao',$id);
if ($res) {
	echo "删除成功";
}else{
	echo "失败";
}
 ?>
