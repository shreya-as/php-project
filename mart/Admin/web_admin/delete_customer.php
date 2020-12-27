<?php
include("connection.php");
if(isset($_GET['delete_customer'])){
	$delete_id = $_GET['delete_customer'];
	$delete_pro ="delete from customers where customer_id='$delete_id'";
	$run=mysqli_query($connection,$delete_pro);
	if($run){
		echo "<script>alert('Account has been deleted')</script>";
		echo "<script>window.open('view_customers.php','_self')</script>";


	}
}
?>