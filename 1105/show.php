<?php 
function __autoload($class){
	require "{$class}.php";
}
$thiss =new curd();
$data=$thiss->show('zhoukao');
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<center>
 		<table border="1px">
 			<tr>
 				<td>标题</td>
 				<td>分类</td>
 				<td>描述</td>
 				<td>操作</td>
 			</tr>
 			<?php foreach ($data as $key => $v) { ?>
 			<tr>
 				<td><?php echo $v['name'] ?></td>
 				<td><?php echo $v['fen'] ?></td>
 				<td><?php echo $v['commit'] ?></td>
 				<td>
 				<a href="update.php?id=<?php echo $v['id'] ?>">修改</a> |
 				 <a href="del.php?id=<?php echo $v['id'] ?>">删除</a></td>
 			</tr>
 			<?php } ?>
 		</table>
 	</center>
 </body>
 </html>