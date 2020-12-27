<?php 

session_start();
include("connection/db.php");
include("../functions/functions.php");


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
<link rel="stylesheet" type="text/css" href="style.css">
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
		
	<div class="header-middle"><!--header-middle-->
	<div class="container">
	<div class="row">
	<div class="col-sm-4">
	<div class="logo pull-left">
<a href="index.html">
<img src="../images/logo.png"  style="width:100px"alt=""></a>
	</div>
	</div>
		<div class="col-sm-8">
		<div class="shop-menu pull-right">
	<ul class="nav navbar-nav">
			<ul class="nav navbar-nav collapse navbar-collapse">
	<li><a href="../index.php">Home</a></li>
    </i></a>
    
    </li> 
    	<li><a href="../all_products.php">All Products</a></li>
	
	<li><a href="../contact.php">Contact</a></li>
	
<li><a href="customers/my_account.php"><i class="fa fa-user"></i>My Account</a></li>
<li><a href="../cart.php"><i class="fa fa-shopping-cart" ></i> Cart 
<span class ="cart "style= "border-radius:4rem; text-align: center; padding:  2px 6px; margin-left: 1px" bg-grey >
	<?php 
items();

	?>
	
</span>




</a></li>
	<li><a href="#"><i class="fa fa-lock"></i> Login</a></li>

	<div class="search_box pull-right">
	
    <form action="../results.php" method="get">
	<input type="text" style="width:130px; color:#000" name="user_query" placeholder="Search">
	<button type="submit" name="search" value="submit"><i class="fa fa-search"></i></button>
</form>
        
</div>
	</ul>

			</div></div>
			</div></div>
		    </div><!--/header-middle-->

</div>
</nav>


</div>		
	</header><!--/header-->
<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
	<div class="navbar-header">
			<button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
			MENU
			</button>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#" ; >
				
<?php
if(isset($_SESSION['customer_email'])){

	echo "<b style='padding:10 px' >Welcome:".$_SESSION['customer_email']."</b>";
}
	

?>
					</a>		</div>

<div class="collapse navbar-collapse">
<ul class="nav navbar-nav navbar-right">
<li class="dropdown ">
<a href="#">Settings</a></li>
        <li><a href="logout.php">Logout</a></li>
	</ul>
	  </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
	</nav>
	<div class="col-md-2 sidebar" style="margin-left:20px">
  			<div class="row">
	<div class="absolute-wrapper"> </div>
	<!-- Menu -->
	<div class="side-menu">
		<nav class="navbar navbar-default" role="navigation">
			<!-- Main Menu -->
			<div class="side-menu-container">
			  <ul class="nav navbar-nav">
			  	<?php
             
             	$customer_session =$_SESSION['customer_email'];
             	$get_customer_pic ="select * from customers where customer_email='$customer_session'";
             	$run_customer=mysqli_query($con,$get_customer_pic);
             	$row_customer=mysqli_fetch_array($run_customer);
             	$customer_pic=$row_customer['customer_image'];
             echo "<img src='customer_photos/$customer_pic' width='180px' height='180' align:center;";
             

             ?>
             <br>
<li><button style="width:240px; height:50px; margin-top: 10px" type="" class="btn btn-default btn-light"><span class="glyphicon  glyphicon-home pull-left"></span> Manage Account </button></li> 

<li><button style="width:240px; height:50px" type="button" class="btn btn-default btn-primary"> <a style="color: white"   href="my_account.php?my_orders"><span class="glyphicon glyphicon-edit pull-left"></span> My Orders</a></button></li>
<li><button style="width:240px; height:50px" type="button" class="btn btn-default btn-primary"> <a style="color: white"   href="my_account.php?edit_account"><span class="glyphicon glyphicon-edit pull-left"></span> Edit Account</a></button></li>
<li><button style="width:240px; height:50px" type="button" class="btn btn-default btn-primary"> <a style="color: white"   href="my_account.php?change_pass"><span class="glyphicon glyphicon-edit pull-left"></span> change Password</a></button></li>


  
  
<li><button style="width:240px; height:50px" type="button" class="btn btn-default btn-primary"> <a style="color: white"   href="my_account.php?delete_account"><span class="glyphicon glyphicon-edit pull-left"></span> Delete Account</a></button></li>


<li><button style="width:240px; height:50px" type="button" class="btn btn-default btn-danger" onClick="location.href='logout.php'"><span class="glyphicon glyphicon-off pull-left">
</span> Logout </button></li>
			  </ul>
		  </div>
		</nav>
        </div>
</div></div>
</ul>
</div>
</div>
</div>
</div>
</div>


    <div class="col-md-9 content" style="margin-left:10px">
  	<div class="panel panel-default">
	<div class="panel-heading" style="background-color:#6699FF">
	<h1 style="text-align: center;"><span class=""></span> Manage your account  </h1></div><br>
	<div class="panel-body" style="background-color:white;">
		<div class="col-lg-12" style="height: 680px">

<?php 
 getDefault();?>
 <?php 
 if(isset($_GET['my_orders']))
 {
 	include('my_orders.php');
 }
if(isset($_GET['edit_account']))
 {
 	include('edit_account.php' );
 }
if(isset($_GET['change_pass']))
 {
 	include('change_pass.php' );
 }

if(isset($_GET['delete_account']))
 {
 	include('delete_account.php' );
 }



?>
    </div>
   
</body>
</html>

