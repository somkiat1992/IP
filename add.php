<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
<?php 
	include 'config.php';
?>
<form name="add" method="post">
	<table border="1">
		<tr>
			<td>ชื่อ</td>
			<td><input type="text" name="txtname" required="required"> </td>
		</tr>
		<tr>
			<td>นามสกลุ</td>
			<td><input type="text" name="txtsurname"></td>
		</tr>
		<tr>
			<td>user</td>
			<td><input type="text" name="txtuser"></td>
		</tr>
		<tr>
			<td>pass</td>
			<td><input type="text" name="txtpass"></td>
		</tr>
	</table>
	<table>
		<tr>
			<td>
				<input type="submit" name="add" value="เพิ่มข้อมูล">
			</td>
		</tr>
	</table>
</form>
<?php 
	if(isset($_POST["add"])){
		$sql ="INSERT INTO customer (name,surname,user,pass) 
				VALUES ('".$_POST["txtname"]."',	
						'".$_POST["txtsurname"]."',	
						'".$_POST["txtuser"]."',
						'".$_POST["txtpass"]."'	)";
		$query = mysqli_query($conn,$sql);
		if($query){

			echo "<script>alert('บันทึกข้อมูลสำเร็จ') </script>";
			echo "<meta http-equiv='refresh' content='0;url=index.php'>";
		}else{
			echo "<script>alert('บันทึกข้อมูลไม่สำเร็จ') </script>";
			echo "<meta http-equiv='refresh' content='0;url=add.php'>";
		}
	}
	mysqli_close($conn);  
?>
</body>
</html>