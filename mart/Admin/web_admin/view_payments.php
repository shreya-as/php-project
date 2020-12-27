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
	<h1>View all Payments</h1></div><br>
<div class='table-responsive'>  
<div style="overflow-x:scroll;">
<table class="table  table-hover table-striped" style="font-size:18px">
<tr><th>Payment No</th><th>Invoice No</th><th>Amount Paid</th> <th>Payment Method</th><th>Ref No</th><th>Payment Date</th>
	</tr>
	
<?php 
$result=mysqli_query($connection,"select * from payments");

$i=0;
while($row=mysqli_fetch_array($result)){


$p_id=$row['payment_id'];
$invoice=$row['invoice_no'];
$amount=$row['amount'];
$payment_m=$row['payment_mode'];

$ref_no=$row['ref_no'];
$payment_d=$row['payment_date'];

$i++;

	?>
<tr>
	<td><?php echo $i;?></td>
	<td><?php echo $invoice;?></td>
	<td><?php echo $amount;?></td>
	
	<td><?php echo $payment_m;?></td>


		<td><?php echo $ref_no;?></td>

		<td><?php echo $payment_d;
		?></td>




		</tr>
	<?php } ?>



			
		</tr>
