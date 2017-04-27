<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
<?php 
	include 'config.php';
	$sql = "SELECT * FROM customer WHERE id";
	$query = mysqli_query($conn,$sql);
?>
	<table border="1">
		<tr>
			<th>ชื่อ</th>
			<th>นามสกลุ</th>
			<th>user</th>
			<th>pass</th>
			<th>แก้ไข</th>
			<th>ลบ</th>
		</tr>

<?php while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>
		<tr>
			<td>
				<?php echo $result["name"];?>
			</td>
			<td>
				<?php echo $result["surname"];?>
			</td>
			<td>
				<?php echo $result["user"];?>
			</td>
			<td>
				<?php echo $result["pass"];?>
			</td>
			<td>
				<a href="edit.php?id=<?php echo $result["id"]?>">edit</a>
			</td>
			<td>
				<a href="del.php?id=<?php echo $result["id"]?>">x</a>
			</td>
		</tr>
<?php } ?>
	</table>
	<table>
		<tr>
			<td>
				<a href="add.php">เพิ่มข้อมูล</a>
			</td>
		</tr>
	</table>
	

<?php mysqli_close($conn);  ?>
</body>
</html>