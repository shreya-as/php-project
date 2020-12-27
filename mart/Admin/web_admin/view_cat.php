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
	<h1>View all categories</h1></div><br>
<div class='table-responsive'>  
<div style="overflow-x:scroll;">
<table class="table  table-hover table-striped" style="font-size:18px">
<tr><th>Category ID</th><th>Category Title</th><th>Edit</th> <th>Delete</th>
	
<?php 
$result=mysqli_query($connection,"select * from categories ");
while($row=mysqli_fetch_array($result)){

$cat_id=$row['cat_id'];
$cat_title=$row['cat_title'];



	?>
		<tr>

			<td><?php echo $row['cat_id'];?></td>
			<td><?php echo $row['cat_title'];?></td>

			<td><a class=" btn btn-primary" href="edit_cat.php?edit_cat=<?php echo $cat_id;?>">Edit</a></td>
			<td><a class=" btn btn-primary" href="delete_cat.php?delete_cat=<?php echo $cat_id;?>">Delete</a></td>
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