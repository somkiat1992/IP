<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
<?php 
	include 'config.php';
	$sql = "SELECT * FROM customer WHERE id = '".$_GET["id"]."'";
	$query = mysqli_query($conn,$sql);
	$result = mysqli_fetch_array($query,MYSQLI_ASSOC);
?>
<form name="edit" method="post">
	<table border="1">
		<tr>
			<td>ชื่อ</td>
			<td><input type="text" name="txtname" required="required" value="<?php echo $result["name"];?>"> </td>
		</tr>
		<tr>
			<td>นามสกลุ</td>
			<td><input type="text" name="txtsurname"  value="<?php echo $result["surname"];?>"></td>
		</tr>
		<tr>
			<td>user</td>
			<td><input type="text" name="txtuser"  value="<?php echo $result["user"];?>"></td>
		</tr>
		<tr>
			<td>pass</td>
			<td><input type="text" name="txtpass"  value="<?php echo $result["pass"];?>"></td>
		</tr>
	</table>
	<table>
		<tr>
			<td>
				<input type="submit" name="edit" value="บันทึก">
			</td>
		</tr>
	</table>
</form>
<?php 
	if(isset($_POST["edit"])){
		$sql = "UPDATE  customer SET 
				name = '".$_POST["txtname"]."',
				surname = '".$_POST["txtsurname"]."',
				user = '".$_POST["txtuser"]."',
				pass = '".$_POST["txtpass"]."'

				WHERE id = '".$_GET["id"]."' ";
		$query = mysqli_query($conn,$sql);
		if($query){
			echo "<script>alert('บันทึกข้อมูลสำเร็จ') </script>";
			echo "<meta http-equiv='refresh' content='0;url=index.php'>";
		}else{
			echo "<script>alert('บันทึกข้อมูลไม่สำเร็จ') </script>";
			echo "<meta http-equiv='refresh' content='0;url=edit.php'>";
		}
	}
	mysqli_close($conn);  
?>
</body>
</html>