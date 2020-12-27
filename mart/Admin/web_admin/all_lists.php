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
	<h1>Mobiles List / Page</h1></div><br>
<div class='table-responsive'>  
<div style="overflow-x:scroll;">
<table class="table  table-hover table-striped" style="font-size:18px">
<tr><th>Image</th><th>Name</th> <th>Price</th><th>Total Sold</th><th>Edit</th><th>Delete</th>
	
<?php 
$result=mysqli_query($connection,"select * from products ");
while($row=mysqli_fetch_array($result)){

$p_id=$row['product_id'];



	?>
		<tr>

			<td> <img src="images/<?php echo $row['image'];?>" height="50" width="50"></td>

			<td><?php echo $row['product_name'];?></td>
			<td><?php echo $row['price'];?></td>
<td>
            <?php
           $get_sold ="select * from pending_orders where product_id='$p_id'";
           $run_sold=mysqli_query($connection,$get_sold);
           $count=mysqli_num_rows($run_sold);
           echo $count;
            ?>
            </td>

           
			<td><a class=" btn btn-primary" href="edit_product.php?edit_pro=<?php echo $p_id;?>">Edit</a></td>
			<td><a class=" btn btn-primary" href="delete_pro.php?delete_pro=<?php echo $p_id;?>">Delete</a></td>
		</tr>
<?php		
}

?>
</table>
</div></div>
<nav align="center">
  

</nav>
</div></div>
<?php include("include/js.php");?>
</body>
</html>