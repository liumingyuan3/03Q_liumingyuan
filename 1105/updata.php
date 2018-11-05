<?php 
header("content-type:text/html;charset=utf8");
function __autoload($class){
	require "{$class}.php";
}
$thiss =new curd();
$data=$_POST;
$id=$data['id'];
$res=$thiss->add('zhoukao',$data,$id);
if ($res) {
	echo "修改成功";
}else{
	echo "修改失败";
}



 ?>