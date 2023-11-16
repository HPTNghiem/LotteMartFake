<?php
	include 'config.php';
	mysqli_set_charset($conn,'utf8mb4');
	if(isset($_GET['details'])){
		$id=$_GET['details'];
		$query="SELECT * FROM producttb WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();

		$vid=$row['id'];
		$vname=$row['product_name'];
		$vprice=$row['product_price'];
		$vphoto=$row['product_image'];
		$vdetails=$row['ChiTietSP'];
	}

?>