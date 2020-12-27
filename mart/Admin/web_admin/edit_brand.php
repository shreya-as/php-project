<?php
include("check_session.php");
include("connection.php");

//getting the specific product from table
if(isset($_GET['edit_brand']))
{
  $brand_id=$_GET['edit_brand'];
  $edit_brand ="select * from brands where brand_id='$brand_id'";
  $run_edit=mysqli_query($connection,$edit_brand);
  $row_brand=mysqli_fetch_array($run_edit);
  $update_id=$row_brand['brand_id'];
$brand=$row_brand['brand_title'];


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
  <h1><span class="glyphicon glyphicon-tag"></span> Edit this brand  </h1></div><br>
  <div class="panel-body" style="background-color:#E6EEEE;">
    <div class="col-lg-7">
        <div class="well">
        <form action="" method="post" name="form" enctype="multipart/form-data">
        <p>Edit brand</p>
        <input class="input-lg thumbnail form-control" type="text" name="brand_title1" id="product_name" value="<?php echo $brand;?>" autofocus style="width:100%" placeholder="Brand  Name" required>

</div>

<div align="center">
    <button type="submit" name="submit" id="submit" class="btn btn-default" style="width:100px; height:60px"> Cancel</button>
    <button type="submit" name="submit" id="submit" class="btn btn-success" style="width:150px; height:60px"> Update Brand</button>
    </div>
        </form>
 
  </div>
</div></div></div>
</body>
</html>
<?php

if(isset($_POST['submit']))
{
  $brand_title12=$_POST['brand_title1'];

     $sql="update brands set brand_title='$brand_title12' where brand_id='$update_id'" ;
    $run_sql=mysqli_query($connection,$sql);
// or die ("query incorrect");
if($run_sql){

  echo "<script>alert(' Brand has been updated')</script>";
echo "<script>window.open('view_brand.php','_self')</script>";
 
 
}
}

?>