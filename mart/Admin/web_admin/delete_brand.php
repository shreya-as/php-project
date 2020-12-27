<?php
include("connection.php");
if(isset($_GET['delete_brand'])){
	$delete_id = $_GET['delete_brand'];
	$delete_pro ="delete from brands where brand_id='$delete_id'";
	$run=mysqli_query($connection,$delete_pro);
	if($run){
		echo "<script>alert('Selected brand has been deleted')</script>";
		echo "<script>window.open('view_brand.php','_self')</script>";


	}
}
?>