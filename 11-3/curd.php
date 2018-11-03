<?php 
class curd{
	
	public function adds($table,$data){
		header("content-type:text/html;charset=utf8");
		// print_r($table);die;
		$name=$data['name'];
		$username=$data['username'];
		$content=$data['content'];
		// print_r($username);die;
		$dsn="mysql:host=127.0.0.1;dbname=text";
		$db=new PDO($dsn,'root','root');
		$res=$db->exec("insert into $table(name,username,content) values('$name','$username','$content')");
		// return $res;
		if ($res) {
			return "添加成功";
		}else{
			return  "添加失败";
		}
	}
	public function show($table){
		$dsn="mysql:host=127.0.0.1;dbname=text";
		$db=new PDO($dsn,'root','root');
		$res=$db->query("select * from $table");
		$data=$res->fetchAll(PDO::FETCH_ASSOC);
		return $data;

	}
	//票数减一
	public function content($id,$table){
		header("content-type:text/html;charset=utf8");
		$dsn="mysql:host=127.0.0.1;dbname=text";
		$db=new PDO($dsn,'root','root');
		// print_r($id);die;
		$res=$db->query("select * from $table where(id='$id')");
		$data=$res->fetch();
		$content=$data['content']-1;
		$ser=$db->exec("update $table set content='$content' where(id='$id')");
		if ($ser) {
			return "抢票成功";
		}else{
			return "抢票失败";
		}

	}
	public function del($table,$id){
		$dsn="mysql:host=127.0.0.1;dbname=text";
		$db=new PDO($dsn,'root','root');
		$data=$db->exec("delete form $table where(id='$id')");
		if ($data) {
			return  "删除成功";
		}else{
			return "删除失败";
		}
	}
	public function update($table,$id){
		$dsn="mysql:host=127.0.0.1;dbname=text";
		$db=new PDO($dsn,'root','root');
		$data=$db->exec("update form $table where(id='$id')");
		if ($data) {
			return "修改成功";
		}else{
			return  "修改失败";
		}
	}
}


