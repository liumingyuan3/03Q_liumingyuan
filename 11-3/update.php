<?php 
function __autoload($class){
	// print_r($class);die;
	require "{$class}.php";
}
$thiss=new curd();
$id=$_GET['id'];
$data=$thiss->content($id,"lianxi");
echo $data;

 ?>