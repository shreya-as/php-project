<?php
$con=mysqli_connect("localhost","root","","ecommerce");     
//function is created to be used in the large projects

//function for getting the ip address/copied from google.
//localhost ip ko detect garxau
  function getRealIpAddr()
  {
    if (  !empty( $_SERVER['HTTP_CLIENT_IP'] ) )
    //check ip from share internet
    {
      $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    elseif( !empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) )
    //to check ip passed from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
  }
  // getting the defaults for customers

  function getDefault(){
     global $con;

    
    $c= $_SESSION['customer_email'];
    $get_c="select * from customers where customer_email='$c'";
    $run_c=mysqli_query($con,$get_c);
    $row_c=mysqli_fetch_array($run_c);
   $customer_id =$row_c['customer_id'];

      if(!isset($_GET['my_orders'])){
     if(!isset($_GET['edit_account'])){
     if(!isset($_GET['change_pass'])){
     if(!isset($_GET['delete_account'])){
   
      
      $get_orders ="select * from customer_orders where customer_id='$customer_id' AND order_status='pending'";
    $run_orders =mysqli_query($con,$get_orders) ;
    $count_orders =mysqli_num_rows($run_orders);
    if($count_orders>0){
      echo"
<div style='padding:10px;'>
<h1 style='color:red;'>Important!</h1>;
<h2>You have a ($count_orders) Pending orders</h2>
<h3>Please see your order details by clicking this <a href='my_account.php?my_orders'>LINK</a><br>Or you can <a href='pay_offline.php' >Pay Offline Now </a></h3>";
     }
     else{
      echo"
<div style='padding:10px;'>
<h1 style='color:red;'>Important!</h1>;
<h2>You have no Pending orders</h2>
<h3>You can see your orders history by clicking this  <a href='my_account.php?my_orders'>LINK</a></h3>";

     }
    }
 }
}
}



    }

  

// creating the script fr cart
  function cart(){
    if(isset($_GET['add_cart'])){
      global $con;
// value leko
$p_id=$_GET['add_cart'];

$ip_add = getRealIpAddr();
//checking both 
$check_pro = "select * from cart where ip_add='$ip_add' AND p_id='$p_id'";
$run_check =mysqli_query($con,$check_pro);
 if(mysqli_num_rows($run_check)>0)
        //page jst refresh hunxa 
echo "<script> alert('product is already added in the cart....!')</script>";
       
  else{
          $q="insert into cart (p_id,ip_add) values ('$p_id','$ip_add')";
          $run_q= mysqli_query($con,$q);
          echo "<script>window.open('index.php','_self')</script>";



         }

    }
  }
  // creating the no of items from the cart
  function items(){
    $ip_add= getRealIpAddr();
      global $con;
    if(isset($_GET['add_cart'])){

      $get_items= "select * from cart  where ip_add='$ip_add'";
      $run_items=mysqli_query($con , $get_items);
      $count_items=mysqli_num_rows($run_items);}
      else{

        $get_items= "select * from cart  where ip_add='ip_add'";
      $run_items=mysqli_query($con , $get_items);
      $count_items=mysqli_num_rows($run_items);



      }
      echo $count_items;
     
    }
    // getting the total price of items from the cart
    function total_price(){
          $ip_add= getRealIpAddr();
      global $con; 

    $total=0;
      
      $sel_price = "select * from cart where ip_add='$ip_add'";
      $run_price = mysqli_query($con, $sel_price);
      
      while($record=mysqli_fetch_array($run_price)){
        $pro_id = $record['p_id'];
        $pro_price = "select * from products  where product_id='$pro_id'";
        $run_pro_price = mysqli_query($con, $pro_price);
        
        while($p_price=mysqli_fetch_array($run_pro_price)){
          $product_price=array($p_price['price']);
          
          $values = array_sum($product_price);
          
          $total +=$values;
          
          
        }
        
      }
               echo " $.". $total;
    
    
    
    }
  
function getProduct(){
//db connction lai global banako bcoz fn bairako db chaldaena
                    global $con;

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


                         echo " <div class='single_product width='180' height='100''>

                         <h4>$product_name</h4>
                         
              <a href='product_details.php?pro_id=$product_id' class='thumbnail'><img src='Admin/web_admin/images/products/$pro_image' class='img-responsive' width='180' height='180'/></br></a>
                         <h5 >Rs: $pro_price <span><strike><p>Rs: $pro_cprice</p></strike></span></h5>
                        
                                <div id='product-hover'>
                                

                                  <a href='index.php?add_cart=$product_id'><i class='pe-7s-cart'></i>Add to Cart</a>
                                
                                    
                                    </div></div> ";
                    }
                }
       }
}




function getCatProduct(){
//db connction lai global banako bcoz fn bairako db chaldaena
                                        global $con;

                  if(isset($_GET['cat'])) {
                     $cat_id =$_GET['cat'];
                    $get_cat_products = "select * from products where cat_id=$cat_id";
                    $run_cat_products = mysqli_query($con,$get_cat_products);
                   $count =mysqli_num_rows($run_cat_products);

                    if($count ==0){
echo "<h2>No products found in this category!<h2>";

                    }
                    while ($row_products=mysqli_fetch_array($run_cat_products)){
                        $product_id= $row_products['product_id'];
                        $product_name=$row_products['product_name'];
                      $details=$row_products['details'];
                  
                         $pro_cat= $row_products['cat_id'];
                         $pro_brand= $row_products['brand_id'];
                        $pro_price=$row_products['price'];
                      $pro_cprice=$row_products['c_price'];
                         $pro_image= $row_products['image']; 


                         echo "
<div class='col-sm-3'>
    <div class='product-image-wrapper'>
    <div class='single-products'>
    <div class='productinfo text-center'>

             <a href='product_details.php?pro_id=$product_id' class='thumbnail'><img src='Admin/web_admin/images/products/$pro_image' class='img-responsive'  alt='' style='width:250px; height:250px'></a>
<h2>Rs: $pro_price <span><strike><p>Rs: $pro_cprice</p></strike></span></h2>                             <h4>$product_name</h4>
<a href='index.php?add_cart=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
    </div>
    <img src='images/new.jpg' class='new' alt=''></div>
    </div></div> ";
                    }
                }
       
}
function getBrandProduct(){
//db connction lai global banako bcoz fn bairako db chaldaena
                                        global $con;

                  if(isset($_GET['brand'])) {
                      $brand_id =$_GET['brand'];
                      $get_brand_products = "select * from products where brand_id=$brand_id";
                      $run_brand_products = mysqli_query($con,$get_brand_products);
                      $count =mysqli_num_rows($run_brand_products);

                    if($count ==0){
echo "<h2>No products found under this brand!<h2>";

                    }
                    while ($row_products=mysqli_fetch_array($run_brand_products)){
                         $product_id= $row_products['product_id'];
                         $product_name=$row_products['product_name'];
                         $details=$row_products['details'];
                         $pro_cprice=$row_products['c_price'];
                         $pro_cat= $row_products['cat_id'];
                         $pro_brand= $row_products['brand_id'];
                         $pro_price=$row_products['price'];
                         $pro_image= $row_products['image']; 


                                                 echo "
<div class='col-sm-3'>
    <div class='product-image-wrapper'>
    <div class='single-products'>
    <div class='productinfo text-center'>

             <a href='product_details.php?pro_id=$product_id' class='thumbnail'><img src='Admin/web_admin/images/products/$pro_image' class='img-responsive'  alt='' style='width:250px; height:250px'></a>
<h2>Rs: $pro_price <span><strike><p>Rs: $pro_cprice</p></strike></span></h2>                             <h4>$product_name</h4>
<a href='index.php?add_cart=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
    </div>
    <img src='images/new.jpg' class='new' alt=''></div>
    </div></div> ";
                    }
                }
       
}


function getCategoires(){
	global $con;
	$get_cats ="select * from categories";
            $run_cats = mysqli_query($con,$get_cats);
            while ($row_cats=mysqli_fetch_array($run_cats)) {
              $cat_id= $row_cats['cat_id'];
              $cat_title= $row_cats['cat_title'];
            echo  "<li><a href='category.php?cat=$cat_id' >$cat_title</a></li>";
            }
}

function getBrands(){
	global $con;
	$get_brands ="select * from brands";
            $run_brands = mysqli_query($con,$get_brands);
            while ($row_brands=mysqli_fetch_array($run_brands)) {
              $brand_id= $row_brands['brand_id'];
              $brand_title= $row_brands['brand_title'];
            echo  "<li ><a href='category.php?brand=$brand_id'>$brand_title</a></li>";
            }
}
?>
