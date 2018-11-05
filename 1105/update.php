<?php 
function __autoload($class){
	require "{$class}.php";
}
$thiss =new curd();
$id=$_GET['id'];
$data=$thiss->finds('zhoukao',$id);
?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="updata.php" method="post">
		<input type="hidden" value="<?php echo $id ?>">
		<table>
			<tr>
				<td>标题</td>
				<td><input type="text" name="name" value="<?php echo $data['name'] ?>"></td>
			</tr>
			<tr>
				<td>分类</td>
				<td><input type="text" name="fen" value="<?php echo $data['fen'] ?>"></td>
			</tr>
			<tr>
				<td>描述</td>
				<td><input type="text" name="commit" value="<?php echo $data['commit'] ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="提交"></td>
			</tr>
		</table>
	</form>
</body>
</html>