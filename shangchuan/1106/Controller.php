<?php 
	class Controller{
		public function __construct(){
			spl_autoload_register(array($this,"loadClass"));
		}
		public function loadClass($class){

			require "{$class}.php";
		}

	}
	$thiss= new Controller();
	$thiss->loadClass("curd");
	$obj = new curd();
	$obj->text();
	


 ?>