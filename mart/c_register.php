<?php
session_start();
 include("connection/db.php");
include("functions/functions.php");
if(isset($_POST['submit']))
{
$c_name=$_POST['c_name'];
$c_email=$_POST['c_email'];

$c_pass=$_POST['c_pass'];


$customer_country=$_POST['c_country'];
$c_city=$_POST['c_city'];
$c_contactno=$_POST['c_contactno'];
   
$c_address=$_POST['c_address'];
$c_image=$_POST['c_image'];

echo $sql="insert into customers(customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image) values('$c_name','$c_email','$c_pass','
$customer_country','$c_city','
$c_contactno','$c_address','$c_image')";
      //execute query
      mysqli_query($con,$sql);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home|E-Shopper</title>

<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 -->
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="styles/style.css">
<!-- <link rel="stylesheet" type="text/css" href="css/style1.css">
  styles/login.css
 -->
 <link rel="stylesheet" type="text/css" href="styles/login.css">

    <link href="layout/css/bootstrap.min.css" rel="stylesheet">
    <link href="layout/css/font-awesome.min.css" rel="stylesheet">
    <link href="layout/css/prettyPhoto.css" rel="stylesheet">
    <link href="layout/css/price-range.css" rel="stylesheet">
    <link href="layout/css/animate.css" rel="stylesheet">
  <link href="layout/css/main.css" rel="stylesheet">
  <link href="layout/css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head><!--/head-->
<body>
    <?php include("include/header.php"); ?>

  
  <section>
  <div class="container">
    <div class="row">
  <div class="col-sm-3">
  <div class="left-sidebar">
        <!--brands_products-->

      
            
    </div></div>
    <div class="col-sm-12 padding">
                        
    <div class="features_items"><!--features_items-->
  <section id="cart_items">
    <div class="container">
    <div class="register-req">
       <center> <h3 >Registration Form</h3></center>
      </div><!--/register-req-->

      <div class="shopper-informations">
        <div class="row">
                <div class="col-sm-1">
            <div class="order-message">

      <form></form>
                  </div></div>
          
              <div class="form-one">
    

    <form action="c_register.php" method="post" name="form1">

<b>Customer Name</b><input type="text" name="c_name" placeholder="Full Name *" required>

<b>Email</b><input type="text" name="c_email" placeholder="Email*" required>


<b>Customer Password</b><input type="text" name="c_pass" placeholder="password *" required>

 <b> Select Country</b><select name="c_country">
    <option></option>
        <option value="pakistan">Pakistan</option>
    <option value="uk">UK</option>
    <option value="uae">UAE</option>
    <option value="sudia">Sudia Arab</option>
    <option value="India">India </option>
    <option value="Nepal">Nepal</option>
    <option value="Bhutan">Bhutan </option>
  </select>
  <br>

   
<b>City</b><input type="text" name="c_city" placeholder="City # *" required>            
<b>Contact No</b><input type="text" name="c_contactno" placeholder="Contact # *" required>  

<b>Address</b><input type="text" name="c_address" placeholder="Address *" required>

  <b>Customer Image </b><input type="file" name="c_image" placeholder="Customer image *">

 
              </div>
         
            </div>
          </div>
            <div class="col-sm-3">
            <div class="shopper-info">
                          
<a class="btn btn-primary" href="cart.php?cmd=emptycart">Cancel</a>
<button type="submit" name="submit" class="btn btn-primary" >Submit</button>
</form>
</div></div>        
</div></div>
</div></div>
</section> <!--/#cart_items--><br>


        

        </div><!--features_items-->
</form>
</div>
</div>
</div>
</div>
</section>

  
<br>


<?php include("include/footer.php"); ?>
    <script src="layout/js/jquery.js"></script>
  <script src="layout/js/bootstrap.min.js"></script>
  <script src="layout/js/jquery.scrollUp.min.js"></script>
  <script src="layout/js/price-range.js"></script>
    <script src="layout/js/jquery.prettyPhoto.js"></script>
    <script src="layout/js/main.js"></script>
<a id="scrollUp" href="#top" style="display: none; position: fixed; z-index: 2147483647;">
<i class="fa fa-angle-up">
</i></a>
</body>
</html>
