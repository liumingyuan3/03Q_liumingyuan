<?php 
function __autoload($class){
	// print_r($class);die;
	require "{$class}.php";
}
$thiss=new curd();
$data=$thiss->show("lianxi");
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<table>
 		<tr>
 			<td>出发地</td>
 			<td>目的地</td>
 			<td>票数</td>
 			<td>抢票</td>
 		</tr>
 		<?php foreach ($data as $key => $v) {?>
 		<tr>
 			<td><?php echo $v['name'] ?></td>
 			<td><?php echo  $v['username']?></td>
 			<td><?php echo  $v['content']?></td>
 			<td>
	 			<?php if ($v['content']>0): ?>
	 				<a href="update.php?id=<?php  echo $v['id']?>">抢票</a>
	 			<?php endif ?>
				<?php if ($v['content']<=0): ?>
					<a href="#" style="color:#ccc">已售完</a>
				<?php endif ?>
 			</td>
 		</tr>
 		<?php } ?>
 	</table>
 </body>
 </html>