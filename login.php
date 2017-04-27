<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
<form name="login" method="post">
<table border="1">
	<tr>
		<td>user :</td>
		<td><input type="text" name="txtuser"></td>
	</tr>
	<tr>
		<td>pass :</td>
		<td><input type="password" name="txtpass"></td>
	</tr>
</table>
<table>
	<tr>
		<td>
			<input type="submit" name="login" value="login">
		</td>
	</tr>
</table>
</form>

<?php 
	include 'config.php';
	if(isset($_POST["login"])){
		$sql = "SELECT * FROM customer wHERE user = '".$_POST["txtuser"]."' AND pass = '".$_POST["txtpass"]."'";
		$query = mysqli_query($conn,$sql);
		$result = mysqli_fetch_array($query,MYSQLI_ASSOC);

		if(!$result){
			echo "<script>alert('รหัสผ่านหรือไอดีไม่ถูกต้อง') </script>";
			echo "<meta http-equiv='refresh' content='0;url=login.php'>";
		}else{
			header("location:index.php");
		}

	}
	mysqli_close($conn);

?>

</body>
</html>