<?php 
	include "../config/koneksi.php";

	$catagory=$_POST['catagory'];
	$name    =$_POST['name'];
	$price 	 =$_POST['price'];
	$satus 	 =$_POST['status'];

	$sql="INSERT INTO item (catagory_id,nama,price,satus) VALUES ('$catagory','$name','$price','$satus')";
	$result=mysqli_query($koneksi,$sql);

	if ($result) {
		header("location:index.php");
	}
 ?>