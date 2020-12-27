<?php

 include("connection/db.php");
 include ("functions/functions.php");
 
 

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
 -->
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
                            <div class="product_box">
    <div class="features_items"><!--features_items-->
<h2 class="title text-center">New Items</h2>


<?php
                    $get_products = "select * from products ";
                    $run_products = mysqli_query($con,$get_products);
                    while ($row_products=mysqli_fetch_array($run_products)){
                        $product_id= $row_products['product_id'];
                        $product_name=$row_products['product_name'];
                      $details=$row_products['details'];
                  
                         $pro_cat= $row_products['cat_id'];
                         $pro_brand= $row_products['brand_id'];
                        $pro_price=$row_products['price'];
                       $pro_cprice=$row_products['c_price'];
                         $pro_image= $row_products['image']; 

                         echo"
<div class='col-sm-3'>
    <div class='product-image-wrapper'>
    <div class='single-products'>
    <div class='productinfo text-center'>

             <a href='product_details.php?pro_id=$product_id' class='thumbnail'><img src='Admin/web_admin/images/products/$pro_image' class='img-responsive'  alt='' style='width:250px; height:250px'></a>
<h2>Rs: $pro_price <span><strike><p>Rs: $pro_cprice</p></strike></span></h2>                             <h4>$product_name</h4>
<a href='index.php?add_cart=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
    </div>
    <img src='images/new.jpg' class='new' alt=''></div>
    </div></div>
";


                         
                         

                                
                                    

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




                    
