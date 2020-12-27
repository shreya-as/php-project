<?php 
//if yo inactive xa or aru session active xa vni error nadiyos
 @session_start();
include("connection/db.php");

 
?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Signin Form</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">

 <link href="" rel="stylesheet">
 <div class="body"> 
 
    <form class="form-signin" action="" method="post">
     

     <h2 class="title text-center">Customer Login</h2><br>
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="text" id="inputEmail" class="form-control" name="email" placeholder="Enter Email" required autofocus><br>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control"name="password" placeholder="Password" >
<div class="error">
          <?php
            if (isset($error['password'])) {
              echo $error['password'];
            }
          ?>
        </div>



      
      <div class="checkbox mb-3">
        <label>
         
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" name="c_login" type="submit" style="font-size:20px; padding:10px">Login</button>
      <p class="mt-5 mb-3 text-muted"></p>
    </form>
</div>





   <h2 style="float:right; padding:10px;"><a href="c_register.php">New Register Here</a></h2>
   


   
</div>
<?php
if(isset($_POST['c_login'])){

    $error=array();

    if (isset($_POST['email']) && !empty($_POST['email'])&& trim($_POST['email'])!='') {
        $customer_email=$_POST['email'];

        
    } 
    else{
      $error['email']="Enter Email";
    }
    if (isset($_POST['password']) && !empty($_POST['password'])) {
      $customer_password=$_POST['password'];
    }
    else{
      $error['password']="Enter password";
    }
      
      //check credentia
      //require_once 'db.php';
      $sql = "select * from customers where customer_email='$customer_email' and customer_pass='$customer_password'";

      //execute
      $run_customer = mysqli_query($con,$sql);
      $check_customer = mysqli_num_rows($run_customer);



      //fetch
      // $data = mysqli_fetch_array($result);
      $get_ip =getRealIpAddr();
     $sel_cart ="select * from cart where ip_add='$get_ip'";
           $run_cart = mysqli_query($con,$sel_cart);
           $check_cart = mysqli_num_rows($run_cart);

      if($check_customer==0){
        echo "<script>alert('Password or email address is not correct')</script>";
       exit();
     }
 if($check_customer==1 AND $check_cart==0)
{
  echo "<script>window.open('customer/my_account.php','_self')</script>";
   $_SESSION['customer_email']=$customer_email;

}
else{
     $_SESSION['customer_email']=$customer_email;
  echo+ include('payment_options.php');

}


 }

 // if(mysqli_num_rows($run_customer)>0){
    //   //session active greko
     
    //   $_SESSION['time']=time()+20;

    //   echo "<script>window.open('index.php','_self')</script>";
    // }else{
    //    $_SESSION['customer_email']=$customer_email;

    //   echo "<script>alert(Email or password is wrong, try again!)</script>";
    // }
        


?>