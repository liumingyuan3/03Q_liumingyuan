<?php
header("content-type:text/html;charset=utf8");
function __autoload($class){
	require "{$class}.php";
}
$thiss =new curd();
$data=$_POST;
$res=$thiss->add('zhoukao',$data);
if ($res) {
	echo "添加成功";
}else{
	echo "添加失败";
}



