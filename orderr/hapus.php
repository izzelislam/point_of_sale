<?php 
	include "../config/koneksi.php";

	$id=$_GET['id'];
	$sql="DELETE FROM orderr WHERE id='$id'";
	$result=mysqli_query($koneksi,$sql);

	if ($result) {
		header("location:index.php");
	}

 ?>