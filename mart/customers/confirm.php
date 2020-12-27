
<?php

session_start();
include('connection/db.php');
include("../functions/functions.php");
if(isset($_GET['order_id'])){
	$order_id=$_GET['order_id'];

  $get_edit ="select * from customer_orders where order_id='$order_id'";
  $run_edit=mysqli_query($con,$get_edit);
  $row_edit =mysqli_fetch_array($run_edit);
$order_id=$row_edit['order_id'];

$invoice=$row_edit['invoice_no'];
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
<img src="images/logo.png"  style="width:100px"alt=""></a>
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
				

		  </div>
		</nav>
        </div>
</a>
</div>
</div>
</nav>
    <div class="col-md-9 content" style="margin-left:170px">
  	<div class="panel panel-default">
	<div class="panel-heading" style="background-color:#6699FF">
	<h1 style="text-align: center;"><span class="glyphicon glyphicon-tag"></span> confirm Your Payment  </h1></div><br>
	<div class="panel-body" style="background-color:white;">
		<div class="col-lg-12" style="height: 500px; margin-left: 330px ">

			<form class="form-horizontal"
 action="confirm.php?update_id=<?php echo $order_id;?>" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Invoice No:</label>
    <div class="col-sm-2">
      <input type="number" class="form-control" id="email"name="invoice_no" placeholder="invoice no" value="<?php echo $invoice;?>" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Amount sent:</label>
    <div class="col-sm-2">
      <input type="number" class="form-control" id="pwd" name="amount" placeholder="Enter amount" required>
    </div>
  </div>

   <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">select Payment Mode :</label>
    <div class="col-sm-2">
      <select name="payment_method">
      	<option>Select Payment</option>
      	<option>Bank Transfer</option>
      	<option>Western Union</option>
      	<option>Paypal</option>
      	<option>Esewa</option>
      </select>
    </div>
  </div>

     <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Transaction Reference Id:</label>
    <div class="col-sm-2">
      <input type="number" class="form-control" id="pwd" name="tr" placeholder="Enter amount" required>
    </div>
  </div>




    


  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary mb-2" value="Confirm Payment" name="confirm">Confirm </button>
    </div>
  </div>
</form>

</body>
</html>

<?php
if(isset($_POST['confirm'])){
$update_id=$_GET['update_id'];
$invoice=$_POST['invoice_no'];
$amount=$_POST['amount'];
$payment=$_POST['payment_method'];
$ref_no =$_POST['tr'];
$complete='complete';
if($amount<0){
  echo "<script>alert('amount must be positive')</script>";
}

  $insert_payment= "insert into payments (invoice_no,amount,payment_mode,ref_no)  values ('$invoice','$amount','$payment','$ref_no')";
  $run_payment =mysqli_query($con,$insert_payment);
$update_order="update customer_orders set order_status='$complete' where order_id='$update_id'";
$run_order=mysqli_query($con,$update_order);


$update_p_order="update p_orders set order_status='$complete' where order_id='$update_id'";
$run_order=mysqli_query($con,$update_p_order);

if($run_payment){
	echo "<script>alert('Thank you for purchasing your order will be completed with in 24 hours')</script>";
echo "<script>window.open('my_account.php','_self')</script>";//open window in same page

}



}








?>
