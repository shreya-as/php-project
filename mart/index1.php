<?php

 include("connection/db.php");
 include ("functions/functions.php");
 
 

?>


<!doctype html>
<html class="no-js" lang="en">
    <head>
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="stylesheet" type="text/css" href="css/style1.css">

<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 -->
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

    <title> online shopping</title>
        
       

        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
    </head>
    <body>

        <header>
        
    <nav id="nav" class="navbar navbar-expand-lg navbar-white bg-white">
  <a href="index.php"><img id="logo" src="images/logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <!--  responsive ko lagi -->
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- mbl view ko lagi --> 
    <ul class="navbar-nav ml-auto pl-auto"
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="all_products.php">All Products</a>
      </li>
      <li class="nav-item">
 <a class="nav-link" href="my_account.php">My Account</a> 
       
      </li>
       <li class="nav-item">
        <a class="nav-link" href="user_register.php">Sign Up</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="cart.php">Shopping Cart</a>
      </li>

             <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
      </ul>
    <form class="form-inline my-2 my-lg-0" method="get" action="results.php" enctype="multipart/form-data">
      <input class="form-control mr-sm-2" type="search" name="user_query" placeholder="Search a product " aria-label="Search"></input>
      <button class="btn btn-outline-info my-2 my-sm-0" type="submit" name="search">Search</button>
 </form>
</div>
</nav>
</header> 
  <nav id="nav" class="navbar navbar-expand-lg navbar-grey bg-grey ">
  <div class="dropdown">

             <ul class="navbar-nav ml-auto">
             <li class="nav-item active">

             
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white"> Categories</a>
           <ul class="dropdown-menu" style="color: #006699">
            <?php
            getCategoires();
          ?>

          </ul>
        </li>



      <ul class="navbar-nav ml-4">
      <li class="nav-item active">  


<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">Brands</a>
        <ul class="dropdown-menu">
         <?php
            getBrands();
          ?>
          </ul>
                </li>

</div>

 <ul class="navbar-nav ml-auto">
<?php cart(); 
?>
  <div id="headline_content" ></div>
  <b style="padding: 5px 20px">Welcome User!</b>
  <b style="color: yellow">Shopping Cart:</b>
  <span><b style="padding: 5px 20px">- items:- price:-</b></span>
  <span>
  </div>
</span>
</ul>
</nav>
</div>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
 
  </ul>
 
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/iphone2.png" >
    </div>
    <div class="carousel-item">
      <img src="images/huawei1.jpg" alt="Chicago" width="1600" height="785">
       </div>
     <div class="carousel-item">
      <img src="images/huawei2.jpg" alt="Chicago" width="1600" height="785">
    </div>
</div>

   
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span cla
    ss="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<div class="container">

  
</div>
       

   
<
        <section class="new-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titie-section wow fadeInDown animated ">
                            <h1>NEW COLLECTION</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 wow fadeInLeft animated" data-wow-delay="0.2s">
                        <div class="product-item">
                            <img src="images/iphone.png" class="img-responsive" width="255" height="322" alt="">
                            <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class="product-title">
                                <a href="#">
                                    <h3>Blue Tshirt</h3>
                                    <span>$26</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInLeft animated" data-wow-delay="0.4s">
                        <div class="product-item">
                            <img src="images/iphone2.png" class="img-responsive" width="255" height="322" alt="">
                            <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class="product-title">
                                <a href="#">
                                    <h3>WOMAN shirt</h3>
                                    <span>$31</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInLeft animated" data-wow-delay="0.6s">
                        <div class="product-item">
                            <img src="images/iphone4.jpg" class="img-responsive" width="255" height="322" alt="">
                            <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class="product-title">
                                <a href="#">
                                    <h3> IPHONE XR</h3>
                                    <span>$21</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInLeft animated" data-wow-delay="0.8s">
                        <div class="product-item">
                            <img src="images/iphone2.jpg" class="img-responsive" width="255" height="322" alt="">
                            <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class="product-title">
                                <a href="#">
                                    <h3>iPHONE X</h3>
                                    <span>$56</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="featured-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titie-section wow fadeInDown animated ">
                            <h1>FEATURED PRODUCTS</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="filter-menu">
                            <ul class="button-group sort-button-group">
                                <li class="button active" data-category="all">All<span>8</span>


                                </li>
                                <li class="button" data-category="cat-1">Mobiles</span></li>
                                <li class="button" data-category="cat-2">Laptops<span>2</span></li>
                                <li class="button" data-category="cat-3">Tablets<span>4</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

              </div>
              <!-- <?<?php 
             // $ip= getRealIpAddr(); 
             // echo $ip;
             ?> -->
                    <div class="product_box">
               <?php getProduct();              
                getCatProduct();
                getBrandProduct()

               ?>
                   
                  </div>

<!--                                 <div class="sell-meta">
                                <a href="#" class="new-item">New</a>
                                <a href="#" class="sell-item">Sell</a>
                            </div>
                            <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                                </div>
                            </div>
                  </div>


                                        <a href="#" class="new-item">New</a>
                                <a href="#" class="sell-item">Sell</a>
                            </div>
                            <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                                </div>
                            </div> -->
                        <!--  <div class="product-item">
                            <img src="images/product1.png" class="img-responsive" width="255" height="322" alt=""> -->
<!--                             <div class="sell-meta">
                                <a href="#" class="new-item">New</a>
                                <a href="#" class="sell-item">Sell</a>
                            </div>
                            <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class="product-title">
                                <a href="#">
                                    <h3>Cool lingerie</h3>
                                    <span>$26</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 cat-2 featured-items isotope-item">
                        <div class="product-item">
                            <img src="images/product2.png" class="img-responsive" width="255" height="322" alt="">
                            <div class="sell-meta">
                                <a href="#" class="new-item">New</a>
                            </div>
                            <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class="product-title">
                                <a href="#">
                                    <h3>Cool lingerie</h3>
                                    <span>$21</span>
                                </a>
                            </div>
                        </div>
                    </div> -->
<!--                     <div class="col-md-3 col-sm-6 col-xs-12 cat-1 featured-items isotope-item">
                        <div class="product-item">
                            <img src="images/product3.png" class="img-responsive" width="255" height="322" alt="">
                            <div class="sell-meta">
                                <a href="#" class="new-item">New</a>
                                <a href="#" class="sell-item">Sell</a>
                            </div>
                            <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class="product-title">
                                <a href="#">
                                    <h3>Cool lingerie</h3>
                                    <span>$31</span>
                                </a>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-3 col-sm-6 col-xs-12 cat-3 featured-items isotope-item">
                        <div class="product-item">
                            <img src="images/product4.png" class="img-responsive" width="255" height="322" alt="">
                            <div class="sell-meta">
                                <a href="#" class="sell-item">Sell</a>
                            </div>
                            <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class="product-title">
                                <a href="#">
                                    <h3>Cool lingerie</h3>
                                    <span>$56</span>
                                </a>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-3 col-sm-6 col-xs-12 cat-2 featured-items isotope-item">
                        <div class="product-item">
                            <img src="images/product5.png" class="img-responsive" width="255" height="322" alt="">
                            <div class="sell-meta">
                                <a href="#" class="sell-item">Sell</a>
                            </div>
                            <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class="product-title">
                                <a href="#">
                                    <h3>Cool lingerie</h3>
                                    <span>$26</span>
                                </a>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-3 col-sm-6 col-xs-12 cat-3 featured-items isotope-item">
                        <div class="product-item">
                            <img src="images/product6.png" class="img-responsive" width="255" height="322" alt="">
                            <div class="sell-meta">
                                <a href="#" class="new-item">New</a>
                                <a href="#" class="sell-item">Sell</a>
                            </div>
                            <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class="product-title">
                                <a href="#">
                                    <h3>Cool lingerie</h3>
                                    <span>$36</span>
                                </a>
                            </div>
                        </div>
                    </div> -->
                   <!--  <div class="col-md-3 col-sm-6 col-xs-12 cat-1 featured-items isotope-item">
                        <div class="product-item">
                            <img src="images/product7.png" class="img-responsive" width="255" height="322" alt="">
                            <div class="sell-meta">
                                <a href="#" class="new-item">New</a>
                            </div>
                            <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class="product-title">
                                <a href="#">
                                    <h3>Cool lingerie</h3>
                                    <span>$56</span>
                                </a>
                            </div>
                        </div>
                    </div> -->
                   <!--  <div class="col-md-3 col-sm-6 col-xs-12 cat-3 featured-items isotope-item">
                        <div class="product-item">
                            <img src="images/product8.png" class="img-responsive" width="255" height="322" alt="">
                            <div class="sell-meta">
                                <a href="#" class="sell-item">Sell</a>
                            </div>
                            <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class="product-title">
                                <a href="#">
                                    <h3>Cool lingerie</h3>
                                    <span>$66</span>
                                </a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
 
        <section class="offer-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 wow fadeInDown animated ">
                        <h1>END OF SEASON SALE</h1>
                        <h2>Up to 35% off Women's Denim</h2>
                    </div>
                </div>
            </div>
        </section>

        <section class="best-seller-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titie-section wow fadeInDown animated ">
                            <h1>BEST SELLERS</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 wow fadeInDown animated" data-wow-delay="0.2s">
                        <div class="product-item">
                            <img src="images/1.png" class="img-responsive" width="255" height="322" alt="">
                            <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class="product-title">
                                <a href="#">
                                    <h3>Blue Tshirt</h3>
                                    <span>$26</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInDown animated" data-wow-delay="0.4s">
                        <div class="product-item">
                            <img src="images/2.png" class="img-responsive" width="255" height="322" alt="">
                            <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class="product-title">
                                <a href="#">
                                    <h3>WOMAN shirt</h3>
                                    <span>$31</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInDown animated" data-wow-delay="0.6s">
                        <div class="product-item">
                            <img src="images/3.png" class="img-responsive" width="255" height="322" alt="">
                            <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class="product-title">
                                <a href="#">
                                    <h3>YELLOW Tshirt</h3>
                                    <span>$21</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInDown animated" data-wow-delay="0.8s">
                        <div class="product-item">
                            <img src="images/4.png" class="img-responsive" width="255" height="322" alt="">
                            <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class="product-title">
                                <a href="#">
                                    <h3>Cool lingerie</h3>
                                    <span>$56</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="review-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titie-section wow fadeInDown animated ">
                            <h1>customer review</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="feedback" class="carousel slide feedback" data-ride="feedback">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="images/member1.png" width="320" height="439" alt="">
                                <div class="carousel-caption">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, </p>
                                    <h3>- Olivia -</h3>
                                    <span>Melbour, Aus</span>
                                </div>
                            </div>
                            <div class="item">
                                <img src="images/member2.png" width="320" height="439" alt="">
                                <div class="carousel-caption">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, </p>
                                    <h3>- Olivia -</h3>
                                    <span>Melbour, Aus</span>
                                </div>
                            </div>
                            <div class="item">
                                <img src="images/member3.png" width="320" height="439" alt="">
                                <div class="carousel-caption">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, </p>
                                    <h3>- Olivia -</h3>
                                    <span>Melbour, Aus</span>
                                </div>
                            </div>
                        </div>
                        <!-- Indicators -->
                        <ol class="carousel-indicators review-controlar">
                            <li data-target="#feedback" data-slide-to="0" class="active">
                                <img src="images/member1.png" width="320" height="439" alt="">
                            </li>
                            <li data-target="#feedback" data-slide-to="1">
                                <img src="images/member2.png" width="320" height="439" alt="">
                            </li>
                            <li data-target="#feedback" data-slide-to="2">
                                <img src="images/member3.png" width="320" height="439" alt="">
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>


        <section class="client-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="titie-section wow fadeInDown animated ">
                            <h1>our partner</h1>
                        </div>
                    </div>
                </div>
                <div id="client" class="row owl-carousel owl-theme client-area">
                    <div class="col-md-12 item">
                        <a href="#">
                            <img src="images/client_01.jpg" class="img-responsive" width="300" height="200" alt="">
                        </a>
                    </div>
                    <div class="col-md-12 item">
                        <a href="#">
                            <img src="images/client_02.jpg" class="img-responsive" width="300" height="200" alt="">
                        </a>
                    </div>
                    <div class="col-md-12 item">
                        <a href="#">
                            <img src="images/client_03.jpg" class="img-responsive" width="300" height="200" alt="">
                        </a>
                    </div>
                    <div class="col-md-12 item">
                        <a href="#">
                            <img src="images/client_04.jpg" class="img-responsive" width="300" height="200" alt="">
                        </a>
                    </div>
                    <div class="col-md-12 item">
                        <a href="#">
                            <img src="images/client_01.jpg" class="img-responsive" width="300" height="200" alt="">
                        </a>
                    </div>
                    <div class="col-md-12 item">
                        <a href="#">
                            <img src="images/client_02.jpg" class="img-responsive" width="300" height="200" alt="">
                        </a>
                    </div>
                    <div class="col-md-12 item">
                        <a href="#">
                            <img src="images/client_03.jpg" class="img-responsive" width="300" height="200" alt="">
                        </a>
                    </div>
                    <div class="col-md-12 item">
                        <a href="#">
                            <img src="images/client_04.jpg" class="img-responsive" width="300" height="200" alt="">
                        </a>
                    </div>
                </div>
                <div class="customNavigation works-navigation">
                    <a class="btn-work works-prev"><i class="pe-7s-angle-left"></i></a>
                    <a class="btn-work works-next"><i class="pe-7s-angle-right"></i></a>
                </div><!-- end of /.client navigation -->
            </div>
        </section>

        <section class="news-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="titie-section wow fadeInDown animated ">
                            <h1>Latest News</h1>
                        </div>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-sm-4 wow fadeInDown animated" data-wow-delay="0.2s">
                        <div class="blog-item">
                            <a href="#"><img src="images/blog1.jpg" width="350" height="262" alt=""></a>
                            <h3>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean </h3>
                            <p>Nam nec tellus a odio tincidunt auc. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeInDown animated" data-wow-delay="0.4s">
                        <div class="blog-item">
                            <a href="#"><img src="images/blog2.jpg" width="350" height="262" alt=""></a>
                            <h3>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean </h3>
                            <p>Nam nec tellus a odio tincidunt auc. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt</p>
                            <a href="#">Read More</a>

                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeInDown animated" data-wow-delay="0.6s">
                        <div class="blog-item">
                            <a href="#"><img src="images/blog3.jpg" width="350" height="262" alt=""></a>
                            <h3>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean </h3>
                            <p>Nam nec tellus a odio tincidunt auc. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="titie-section wow fadeInDown animated ">
                            <h1>GET IN TOUCH</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 wow fadeInLeft animated">
                        <div class="left-content">
                            <h1><span>M</span>art</h1>
                            <h3>We'd love To Meet You In Person Or Via The Web!</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel nulla sapien. Class aptent tacitiaptent taciti sociosqu ad lit himenaeos. Suspendisse massa urna, luctus ut vestibulum necs et, vulputate quis urna. Donec at commodo erat.</p>
                            <div class="contact-info">
                                <p><b>Main Office:</b> 123 Elm St. New York City, NY</p>
                                <p><b>Phone:</b> 1.555.555.5555</p>
                                <p><b>Email:</b> info@yourdomain.com</p>
                            </div>
                            <div class="social-media">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInRight animated">
                        <form action="" method="" class="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="name" placeholder="Your Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="name" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="name" placeholder="Website URL">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <textarea name="" id="" class="form-control" cols="30" rows="5" placeholder="Your Message..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <input type="submit" class="contact-submit" value="Send" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="center"> <i class="fa fa-love"></i><a href="https://facebook.com">Facebook</a>
</p>
                        
                    </div>
                </div>
            </div>
        </footer>

        <!-- JQUERY -->
        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/custom.js"></script>
        <a id="scrollUp" href="#top" style="display: none; position: fixed; z-index: 2147483647;">
    </body>
</html>
