<?php 
function __autoload($class){
	// print_r($class);die;
	require "{$class}.php";
}
$thiss=new curd();
$data=$_POST;
$res=$thiss->adds("lianxi",$data);
echo $res;

