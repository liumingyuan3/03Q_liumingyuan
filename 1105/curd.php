<?php 
class curd{
	public function add($table,$data){
		$name=$data['name'];
		$fen=$data['fen'];
		$commit=$data['commit'];
		$dsn="mysql:host=127.0.0.1;dbname=text";
		$db=new PDO($dsn,'root','root');
		$res=$db->exec("insert into $table (name,fen,commit) values ('$name','$fen','$commit')");
		return $res;
	}
	public function show($table){
		$dsn="mysql:host=127.0.0.1;dbname=text";
		$db=new \PDO($dsn,'root','root');
		$res=$db->query("select * from $table");
		$data=$res->fetchAll(PDO::FETCH_ASSOC);
		return $data;
	}
	public function del($table,$id){
		$dsn="mysql:host=127.0.0.1;dbname=text";
		$db=new PDO($dsn,'root','root');
		$res=$db->exec("delete from $table where id='$id'");
		return $res;
	}
	public function finds($table,$id){
		$dsn="mysql:host=127.0.0.1;dbname=text";
		$db=new PDO($dsn,'root','root');
		$res=$db->query("select * from $table where id='$id'");
		$data=$res->fetch();
		return $data;
	}
	public function update($table,$data,$id){
		$dsn="mysql:host=127.0.0.1;dbname=text";
		$db=new PDO($dsn,'root','root');
		$name=$data['name'];
		$fen=$data['fen'];
		$commit=$data['commit'];
		$res=$db->exec("updata $table set name='$name'&&fen='$fen'&&commit='$commit'  where id='$id'");
		return $res;
	}

}







 ?>