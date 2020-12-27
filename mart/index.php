<?php 

session_start();
include("connection/db.php");
include("functions/functions.php");?>
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
  <section id="slider"><!--slider-->
  <div class="container">
  <div class="row">
  <div class="col-sm-12">
  <div id="slider-carousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
  </ol>
      <div class="carousel-inner">
    <div class="item">
    <div class="col-sm-6">
<h1><span>SHOP</span>-ONLINE</h1>
<h2>Lpatops</h2>
<p>Lets Shop offers you only one Brand products that are available in the market
</p>
<a href="cosmetics.php" class="btn btn-default get">Get it now
</a>
    </div>
    <div class="col-sm-6">
<img src="images/iphone.png" class="girl img-responsive" alt="">
    </div></div>

    <div class="item">
    <div class="col-sm-6">
<h1><span>SHOP</span>-ONLINE</h1>
<h2>Tablets</h2>
<p>We bring to your doorsteps a wide range of professional brands, like: Dell, Apple,HP and many, many more. </p>
<a href="clothes.php" class="btn btn-defaummlt get">Get it now
</a>
    </div>
    <div class="col-sm-6">
<img src="images/iphone.png" class="girl img-responsive" alt="" height="500px" width="">
    </div></div>
              
    <div class="item active">
    <div class="col-sm-6">
<h1><span>SHOP</span>-ONLINE</h1>
<h2>Best Mobiles</h2>
<p>We bring to your doorsteps a wide range of professional brands, like: Dell, Apple,HP and many, many more.</p>
<a href="clothes.php" class="btn btn-default get">Get it now
</a>
    </div>
    <div class="col-sm-6">
<img src="images/iphone.png" class="girl img-responsive" alt="">
    </div>
    </div>
    </div>
            
<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
<i class="fa fa-angle-left"></i></a>
<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next"><i class="fa fa-angle-right"></i>
    </a>
    </div></div>
    </div></div>
      </section><!--/slider-->
  
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

<?php cart(); 
?>
<?php
                  if(!isset($_GET['cat'])) {
                    if(!isset($_GET['brand'])){
                    $get_products = "select * from products order by rand() LIMIT 0,8";
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
                }
       }
getCatProduct();
getBrandProduct();

       ?>
                

        </div><!--features_items-->

  
</div>
</section><br>

<?php $ip=getRealIpAddr();
echo $ip;
?>

  
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