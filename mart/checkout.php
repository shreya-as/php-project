<?php
session_start();
 include("connection/db.php");
include("functions/functions.php");


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


<?php
//email is nt set so session start hudaena session ko based registration garne
if(!isset($_SESSION['customer_email'])){
      include("customers/customer_login.php");
        }else{
          include("payment_options.php");
        }
        
      ?>


        

        </div><!--features_items-->

  
</div>
</section><br>


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