<?php
include("connection.php");

//getting the specific product from table

if(isset($_GET['edit_cat']))
{
  $edit_id=$_GET['edit_cat'];
  $get_edit ="select * from categories where cat_id='$edit_id'";
  $run_edit=mysqli_query($connection,$get_edit);
  $row_edit =mysqli_fetch_array($run_edit);
$update_id=$row_edit['cat_id'];

$cat_title=$row_edit['cat_title'];
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
  <h1><span class="glyphicon glyphicon-tag"></span> Edit Category  </h1></div><br>
  <div class="panel-body" style="background-color:#E6EEEE;">
    <div class="col-lg-7">
        <div class="well">
        <form action="" method="post" name="form" enctype="multipart/form-data">
        <p>Edit Category</p>
        <input class="input-lg thumbnail form-control" type="text" name="cat_title" id="product_name"  autofocus style="width:100%" placeholder="Category  Name" required value="<?php echo $cat_title; ?>">

</div>

<div align="center">

    <button type="submit" name="submit" id="submit" class="btn btn-success" style="width:150px; height:60px"> Update Category</button>
    </div>
        </form>
 </div>
</div>
</div>
</div>
</div>

  </div>
</div></div></div>

</body>
</html>


<?php


if(isset($_POST['submit']))
{
  $cat_title1=$_POST['cat_title'];


    echo $sql="update categories set cat_title='$cat_title1' where cat_id='$update_id'" ;
    $run_sql=mysqli_query($connection,$sql);
// or die ("query incorrect");
if($run_sql){

   echo "<script>alert('Your category has been updated')</script>";
   echo "<script>window.open('view_cat.php','_self')</script>";

 
}
}

?>