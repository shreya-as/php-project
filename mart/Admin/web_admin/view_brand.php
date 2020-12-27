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
	<h1>View all Brands</h1></div><br>
<div class='table-responsive'>  
<div style="overflow-x:scroll;">
<table class="table  table-hover table-striped" style="font-size:18px">
<tr><th>Brand ID</th><th>Brand Title</th><th>Edit</th> <th>Delete</th>
	
<?php 
$result=mysqli_query($connection,"select * from brands ");
while($row=mysqli_fetch_array($result)){

$b_id=$row['brand_id'];

	?>
		<tr>

			<td><?php echo $row['brand_id'];?></td>
			<td><?php echo $row['brand_title'];?></td>

			<td><a class=" btn btn-primary" href="edit_brand.php?edit_brand=<?php echo $b_id;?>">Edit</a></td>
			<td><a class=" btn btn-primary" href="delete_brand.php?delete_brand=<?php echo $b_id;?>">Delete</a></td>



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