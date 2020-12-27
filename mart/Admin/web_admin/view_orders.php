<?php
include("check_session.php");
include("connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Admin Panel</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/k.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
</head>
<body>
  <?php include("include/header.php");?>
   	<div class="container-fluid main-container">
	<?php include("include/side_bar.php");?>
    <div class="col-md-9 content" style="margin-left:10px">
    <div class="panel-heading" style="background-color:#c4e17f">
	<h1>View all Orders</h1></div><br>
<div class='table-responsive'>  
<div style="overflow-x:scroll;">
<table class="table  table-hover table-striped" style="font-size:18px">
<tr><th>Order No</th><th>Customer</th><th>InvoiceNo</th> <th>Product ID</th><th>QTY</th><th>Status</th><th>Delete</th>
	</tr>
	
<?php 
$result=mysqli_query($connection,"select * from p_orders");
$i=0;
while($row=mysqli_fetch_array($result)){


$o_id=$row['order_id'];
$c_id=$row['customer_id'];
$invoice=$row['invoice_no'];
$p_id=$row['product_id'];
$qty=$row['qty'];
$status=$row['order_status'];
$i++;

	?>
<tr>
	<td><?php echo $i;?></td>

	<td><?php 
$get_customer ="select * from customers where customer_id='$c_id'";
$run_customer= mysqli_query($connection,$get_customer);
$row=mysqli_fetch_array($run_customer);
$customer_email =$row['customer_email'];
echo $customer_email;

?></td>
	<td><?php echo $invoice;?></td>
	<td><?php echo $p_id;?></td>
	
	<!-- out of directory ho vanna lai  -->
	<td><?php echo $qty;?></td>
		<td><?php

if($status=='Pending'){
	echo $status ='Pending';

}
else{
	echo $status='Complete';

}
		?></td>


<td><a class=" btn btn-primary" href="delete_order.php?delete_orders=<?php echo $o_id;?>">Delete</a></td>



		</tr>
	<?php } ?>



			
		</tr>
