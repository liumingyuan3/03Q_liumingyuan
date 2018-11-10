<?php
namespace Admin\Controller;
use Think\Controller;
class TextController extends Controller {
    public function add(){
        $this->display();
       
    }
    public function add_do(){
    	$img=$_FILES['img'];
		$name=$_POST['name'];
		if (move_uploaded_file($img['tmp_name'],'./Uploads/'.md5($img['name']).'.JPG')) {
			$img='./uploads/'.md5($img['name']).'.JPG';
		}
		mysql_connect('127.0.0.1','root','root');
		mysql_select_db("text");
		$data=mysql_query("insert into xian(name,img)values('$name','$img')");
		if ($data) {
			echo 1;
		}else{
			echo 2;
		}
    }
    public function show(){
    	$User = M('xian'); // 实例化User对象
    	$count      = $User->count();// 查询满足要求的总记录数
    	$Page       = new \Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数(25)
    	$show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
    	$list = $User->limit($Page->firstRow.','.$Page->listRows)->select();
    	$this->assign('list',$list);// 赋值数据集
    	$this->assign('page',$show);// 赋值分页输出$
    	$this->display(); // 输出模板
    }
    
}