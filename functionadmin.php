<?php
	include 'config.php';
	mysqli_set_charset($conn,'utf8mb4');
	$update=false;
	$id="";
	$name="";
	$price="";
	$photo="";
	$details="";
	if(isset($_POST['add'])){
		$name=$_POST['name'];
		$price=$_POST['price'];
		$details=$_POST['details'];
		$photo=$_FILES['image']['name'];
		$upload="Image/".$photo;

		$query="INSERT INTO producttb(product_name,product_price,product_image,ChiTietSP)VALUES(?,?,?,?)";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("ssss",$name,$price,$upload,$details);
		$stmt->execute();
		move_uploaded_file($_FILES['image']['tmp_name'], $upload);
		header('location:adminpage.php');
		$_SESSION['response']="Successfully Inserted to the database!";
		$_SESSION['res_type']="success";

	}
	if(isset($_GET['delete'])){
		$id=$_GET['delete'];

		$sql="SELECT product_image FROM producttb WHERE id=?";
		$stmt2=$conn->prepare($sql);
		$stmt2->bind_param("i",$id);
		$stmt2->execute();
		$result2=$stmt2->get_result();
		$row=$result2->fetch_assoc();

		$imagepath=$row['product_image'];
		unlink($imagepath);

		$query="DELETE FROM producttb WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();

		header('location:adminpage.php');
		$_SESSION['response']="Successfully Deleted!";
		$_SESSION['res_type']="danger";
	}
	if(isset($_GET['edit'])){
		$id=$_GET['edit'];

		$query="SELECT * FROM producttb WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();

		$id=$row['id'];
		$name=$row['product_name'];
		$price=$row['product_price'];
		$photo=$row['product_image'];
		$details=$row['ChiTietSP'];
		$update=true;
	}
	if(isset($_POST['update'])){
		$id=$_POST['id'];
		$name=$_POST['name'];
		$price=$_POST['price'];
		$details=$_POST['details'];
		$oldimage=$_POST['oldimage'];

		if(isset($_FILES['image']['name'])&&($_FILES['image']['name']!="")){
			$newimage="uploads/".$_FILES['image']['name'];
			unlink($oldimage);
			move_uploaded_file($_FILES['image']['tmp_name'], $newimage);
		}
		else{
			$newimage=$oldimage;
		}
		$query="UPDATE producttb SET product_name=?,product_price=?,product_image=?,ChiTietSP=? WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("ssssi",$name,$price,$newimage,$details,$id);
		$stmt->execute();

		$_SESSION['response']="Updated Successfully!";
		$_SESSION['res_type']="primary";
		header('location:adminpage.php');
	}

?>