<?php //adding somthing to cart
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
    <title>Home|LETS-SHOP</title>

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
  <li><a href="index.php">Home</a></li>
    </i></a>
    
    </li> 
      <li><a href="contact.php">All Products</a></li>
  
  <li><a href="contact.php">Contact</a></li>
  
<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
<li><a href="cart.php"><i class="fa fa-shopping-cart" ></i> Cart 
<span class ="cart "style= "border-radius:4rem; text-align: center; padding:  2px 6px; margin-left: 1px" bg-grey >
  <?php 
items();

  ?>
</span>




</a></li>
  <li><a href="#"><i class="fa fa-lock"></i> Login</a></li>

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

</div>

</ul>
</ul>
</div>
</nav>


</div>    
  </header><!--/header-->

<section id="cart_items">
        <div class="container">
       
            <div class="table-responsive cart_info">
                
            <form action="cart.php"

             method="post" >
                
                <table class="table table-condensed" bgcolor="#0099CC">
                    
<thead>
<tr class="cart_menu">
            <td class="image"><strong>Remove</strong></td>              
           <td class="image"><strong>product</strong></td>
           <td class="description"><strong>quantity</strong></td>
           <td class="total"><strong>Total Price</strong></td>
           <td></td>

</tr>

 <?php 
         $ip_add = getRealIpAddr();
         $total = 0;
      
          
          $sel_price = "select * from cart where ip_add='$ip_add'";
          $run_price = mysqli_query($con, $sel_price);
          
          while($record=mysqli_fetch_array($run_price)){
              $pro_id = $record['p_id'];
              $pro_price = "select * from products where product_id=$pro_id";
              $run_pro_price = mysqli_query($con, $pro_price);
              
              while($p_price=mysqli_fetch_array($run_pro_price)){
                  $product_price=array($p_price['price']);
                  $product_title=$p_price['product_name'];
                  $product_image=$p_price['image'];
                  $only_price=$p_price['price'];
                  
                  $values = array_sum($product_price);
                  
                  $total +=$values;
                   ?>

<tr>
    <!-- mostly used when we use the loops  -->
      <td><input type="checkbox" name="remove[]" value="<?php echo $record['p_id']; ?>"></td> 
    <td><?php echo $product_title;?><br><img src="images/<?php echo $product_image;?>" height="50" width="50"></td>"
    <td><input type="text " name="qty" value='' size="3 px"></td>
<?php
 if(isset($_POST['update'])){
                $qty=$_POST['qty'];
                $insert_qty="update cart set qty='$qty' where ip_add='$ip_add'";
                $run_qty=mysqli_query($con, $insert_qty);
                $total = $total * $qty;
                
                if($qty<0){
                  echo "<script> alert('quantity must be positive')</script>";

                }
              
             

}
?>

    <td><?php echo $p_price['price']?></td>
</tr>
<?php }} ?>

        <tr >
            <td colspan="3" align="right" ><b>Sub Total:</b></td>
                <td ><b><?php echo "$".$total;?></b>
        </tr>

         <tr>


            <td colspan="2"><input type="submit" name="update" value="Update Cart"style="font-size:20px; padding:10px"/></td>
<td><input type="submit" name="continue" value="Continue Shopping"style="font-size:20px; padding:10px"  /></td>
    
    <td><button style="font-size:20px; padding:10px"><a href="checkout.php" style="color:#000">Checkout</button></a></td>          
         </tr>       
</table>

</form>      <?php 
       function updatecart(){
         global $con;
          if(isset($_POST['update'])){
          foreach($_POST['remove'] as $remove_id){ //we can remove multiple products. remove[].
            $delete_products="delete from cart where p_id='$remove_id'";//write querry
            $run_delete=mysqli_query($con,$delete_products); //run querry
            if($run_delete){
              echo "<script>window.open('cart.php','_self')</script>";//open window in same page
              
            }
          }
          
          
        }
        if(isset($_POST['continue'])){
           echo "<script>window.open('index.php','_self')</script>";//open window in same page 
          }
          if(isset($_POST['checkout'])){
            header('location:customer_login.php');
          }
       }
      echo @$up_cart=updatecart(); //hiding error-@
       
       ?>


   </div>
        </div>

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