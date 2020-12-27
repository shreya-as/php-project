
		
	<div class="header-middle"><!--header-middle-->
	<div class="container">
	<div class="row">
	<div class="col-sm-2">
	<div class="logo pull-left">
<a href="index.html">
<img src="images/logo.png"  style="width:100px"alt=""></a>
	</div>
	</div>
		<div class="col-sm-10" style="margin-top: 16px">
		<div class="shop-menu pull-right">
	<ul class="nav navbar-nav">
			<ul class="nav navbar-nav collapse navbar-collapse">
	<li><a href="index.php">Home</a></li>
    </i></a>
    
    </li> 
    	<li><a href="all_products.php">All Products</a></li>
	
	
	
<li><a href="cart.php"><i class="fa fa-shopping-cart" ></i> Cart 
<span class ="cart "style= "border-radius:4rem; text-align: center; padding:  2px 6px; margin-left: 1px" bg-grey >
	<?php 
items();

	?>
</span>




</a></li>
	<li><a href="checkout.php"><i class="fa fa-lock"></i> Login</a></li>

	<div class="search_box pull-right">
	
    <form action="results.php" method="get">
	<input type="text" style="width:130px; color:#000" name="user_query" placeholder="Search">
	<button type="submit" name="search" value="submit"><i class="fa fa-search"></i></button>
</form>
        
</div>
	</ul>

			</div></div>
			</div></div>
		    </div><!--/header-middle-->
		    		<div class="header_top">
	  <nav id="nav" class="navbar navbar-expand-lg navbar-grey bg-grey ">
  <div class="dropdown">

             <ul class="navbar-nav ml-auto">
             <li class="nav-item active">

             
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; font-size: 15px"> Categories</a>
           <ul class="dropdown-menu" style="color: #006699; font-size: 15px">
            <?php
            getCategoires();
          ?>

          </ul>
        </li>



      <ul class="navbar-nav ml-4">
      <li class="nav-item active">  


<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; font-size: 15px">Brands</a>
        <ul class="dropdown-menu" style="font-size: 15px">
         <?php
            getBrands();
          ?>
          </ul>
                </li>
  <?php
 if(!isset( $_SESSION['customer_email'])){
echo "<a href='checkout.php' style='color: white; font-size: 15px; margin-top: 15px; padding-left: 1200px'>Login</a>";}
else{
	echo "<a href='logout.php' style='color: white; font-size: 15px; margin-top: 15px; padding-left: 1200px'>Logout</a>";}
?>
</div>

</ul>
</ul>
</div>
</nav>


</div>		
	</header><!--/header-->