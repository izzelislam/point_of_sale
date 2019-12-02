<?php 
	include "../config/koneksi.php";

	$id=$_POST['id'];
	$name=$_POST['name'];

	$sql="UPDATE catagory SET name='$name' WHERE id='$id'";
	$result=mysqli_query($koneksi,$sql);

	if ($result) {
		header("location:index.php");
	}

 ?>