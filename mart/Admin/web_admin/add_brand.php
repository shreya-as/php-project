


       <?php

include("connection.php");
error_reporting(0);
if(isset($_POST['submit']))
{
	$brand_title =$_POST['insert'];
	$insert_brand="insert into brands (brand_title) values ('$brand_title')";
	    $run_sql=mysqli_query($connection,$insert_brand);
// or die ("query incorrect");
if($run_sql){
	echo "<script>alert('New Brand has been added')</script>";
echo "<script>window.open('view_brands.php','_self')</script>";
 
 }

}		
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
   	<div class="container-fluid">
	<?php include("include/side_bar.php");?>
    <div class="col-md-9 content" style="margin-left:10px">
  	<div class="panel panel-default">
	<div class="panel-heading" style="background-color:#c4e17f">
	<h1><span class="glyphicon glyphicon-tag"></span>  Add Category  </h1></div><br>
	<div class="panel-body" style="background-color:#E6EEEE;">
		<div class="col-lg-7">
        <div class="well">
        <form action="add_brand.php" method="post" name="form" enctype="multipart/form-data">
        <p>Insert New Brand</p>
        <input class="input-lg thumbnail form-control" type="text" name="insert" id="product_name" autofocus style="width:100%" placeholder="Brand  Name" required>

</div>

<div align="center">
    <button type="submit" name="submit" id="submit" class="btn btn-default" style="width:100px; height:60px"> Cancel</button>
    <button type="submit" name="submit" id="submit" class="btn btn-success" style="width:150px; height:60px"> Insert Brand</button>
    </div>
        </form>
 
	</div>
</div></div></div>
</body>
</html>