<?php 
	include "../config/koneksi.php";

	$id=$_GET['id'];

	$sql="DELETE FROM item WHERE id='$id'";
	$result=mysqli_query($koneksi,$sql);

	if ($result) {
		header("location:index.php");
	}elseif (!$result) {
		header("location:index.php");
	}

 ?>