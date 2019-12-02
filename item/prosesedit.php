<?php 
	include "../config/koneksi.php";

	$id=$_POST['id'];
	$catagory=$_POST['catagory'];
	$nama=$_POST['name'];
	$price=$_POST['price'];
	$status=$_POST['status'];

	$sql="UPDATE item SET catagory_id='$catagory' , nama='$nama', price='$price', satus='$status' WHERE id='$id'";
	$result=mysqli_query($koneksi,$sql);

	if ($result) {
		header("location:index.php");
	}

 ?>