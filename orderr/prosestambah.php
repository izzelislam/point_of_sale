<?php 
	include "../config/koneksi.php";




	$table_number=$_POST['table_number'];
	$item=$_POST['item'];
	$qty=$_POST['qty'];

		$sql="SELECT * FROM item WHERE id='$item'";
		$result=mysqli_query($koneksi,$sql);
		$data=mysqli_fetch_assoc($result); 
	
	$total=$qty*$data['price'];
	
	$sql="INSERT INTO orderr (table_number,item_id,qty,total) VALUES ('$table_number','$item','$qty','$total')";
	$result=mysqli_query($koneksi,$sql);

	if ($result) {
		header("location:index.php");
	}




 ?>