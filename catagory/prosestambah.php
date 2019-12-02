<?php 
	include "../config/koneksi.php";

	$name=$_POST['name'];

	$sql="INSERT INTO catagory SET name='$name'";
	$result=mysqli_query($koneksi,$sql);

	if ($result) {
		header("location:index.php");
	}

 ?>