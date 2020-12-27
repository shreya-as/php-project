<?php
include("connection.php");
if(isset($_GET['delete_orders'])){
	$delete_id = $_GET['delete_orders'];
	$delete_pro ="delete from p_orders where order_id='$delete_id'";
	$run=mysqli_query($connection,$delete_pro);
	if($run){
		echo "<script>alert('Order has been deleted')</script>";
		echo "<script>window.open('view_orders.php','_self')</script>";


	}
}
?>