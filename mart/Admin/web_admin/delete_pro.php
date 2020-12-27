<?php
include("connection.php");
if(isset($_GET['delete_pro'])){
	$delete_id = $_GET['delete_pro'];
	$delete_pro ="delete from products where product_id='$delete_id'";
	$run=mysqli_query($connection,$delete_pro);
	if($run){
		echo "<script>alert('Your product has been deleted')</script>";
		echo "<script>window.open('all_lists.php','_self')</script>";


	}
}
?>