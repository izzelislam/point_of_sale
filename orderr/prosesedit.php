<?php 
	include "../config/koneksi.php";

	$id=$_POST['id'];
	$table_number=$_POST['table_number'];
	$item=$_POST['item'];
	$qty=$_POST['qty'];

	$sql="SELECT * FROM item WHERE id='$item'";
		$result=mysqli_query($koneksi,$sql);
		$data=mysqli_fetch_assoc($result); 

	$total=$qty*$data['price'];
	if ($total > 100000) {
		$dis=$total*20/100;
		$jml=$total-$dis;
	}else{
		$jml=$total;
	}

	$sql="UPDATE orderr SET table_number='$table_number',item_id='$item',qty='$qty',total='$jml' WHERE id='$id'";
	$result=mysqli_query($koneksi,$sql);

	if ($result) {
		header("location:index.php");
	}

 ?>