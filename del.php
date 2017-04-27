<?php
	include 'config.php';
	
	$sql = "DELETE FROM customer WHERE id = '".$_GET["id"]."' ";
	$query = mysqli_query($conn,$sql);

	if($query){
			echo "<script>alert('ลบ้อมูลสำเร็จ') </script>";
			echo "<meta http-equiv='refresh' content='0;url=index.php'>";
		}else{
			echo "<script>alert('ลบ้อมูลไม่สำเร็จ') </script>";
			echo "<meta http-equiv='refresh' content='0;url=index.php'>";
		}
	mysqli_close($conn);
?>