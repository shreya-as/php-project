<?php
include("connection.php");
if(isset($_GET['delete_cat'])){
	$delete_id = $_GET['delete_cat'];
	$delete_pro ="delete from categories where cat_id='$delete_id'";
	$run=mysqli_query($connection,$delete_pro);
	if($run){
		echo "<script>alert('Your category has been deleted')</script>";
		echo "<script>window.open('view_cat.php','_self')</script>";


	}
}
?>