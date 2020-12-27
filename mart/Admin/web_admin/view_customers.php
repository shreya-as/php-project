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
	<h1>View all Customers</h1></div><br>
<div class='table-responsive'>  
<div style="overflow-x:scroll;">
<table class="table  table-hover table-striped" style="font-size:18px">
<tr><th>S.N</th><th>Name</th><th>Email</th> <th>Image</th><th>Country</th><th>Delete</th>
	</tr>
	
<?php 
$result=mysqli_query($connection,"select * from customers");
while($row=mysqli_fetch_array($result)){

$c_id=$row['customer_id'];

$c_name=$row['customer_name'];
$c_email=$row['customer_email'];
$c_image=$row['customer_image'];
$c_country=$row['customer_country'];

	?>
<tr>
	<td><?php echo $c_id;?></td>
	<td><?php echo $c_name;?></td>
	<td><?php echo $c_email;?></td>
	<td><img src="../../customers/customer_photos/<?php echo $c_image; ?>" width ="60" height="60"/></td>
	<!-- out of directory ho vanna lai  -->
	<td><?php echo $c_country;?></td>
<td><a class=" btn btn-primary" href="delete_customer.php?delete_customer=<?php echo $c_id;?>">Delete</a></td>



		</tr>
	<?php } ?>



			
		</tr>
