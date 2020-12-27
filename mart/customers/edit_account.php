<?php

include("connection/db.php");

if(isset($_GET['edit_account'])){
	$customer_email=$_SESSION['customer_email'];
	$get_customer="select * from customers where customer_email='$customer_email'";
	$run_customer=mysqli_query($con,$get_customer);
	$row=mysqli_fetch_array($run_customer);
 $id= $row['customer_id'];
 $name= $row['customer_name'];
 $email= $row['customer_email'];
 $pass= $row['customer_pass'];
$country= $row['customer_country'];
$city= $row['customer_city'];
$contact= $row['customer_contact'];
$address= $row['customer_address'];
$image= $row['customer_image'];
}




?>


	<h3 style="text-align: center; margin-top: -20px"><span class=""></span> Edit  Your Account  </h3><br>
	<div class="panel-body" style="background-color:white;">
		<div class="col-lg-12" style="height: 500px; margin-left: 330px ">

			<div class="form-one">
    

    <form action="" style="margin-top: 0px" method="post" name="form1" enctype="multipart/form-data">

<b>Customer Name</b><input type="text" name="c_name" placeholder="Full Name *" required value="<?php echo $name;?>">

<b>Email</b><input type="text" name="c_email" placeholder="Email*" required value="<?php echo $email;?>">


<b>Customer Password</b><input type="text" name="c_pass" placeholder="password *" required value="<?php echo $pass;?>">

 <b> Select Country</b>
<select name="c_country" disabled>
	<option value="<?php echo $country;?>"><?php echo $country;?></option>
        <option value="pakistan">Pakistan</option>
    <option >UK</option>
    <option >UAE</option>
    <option >Sudia Arab</option>
    <option >India </option>
    <option >Nepal</option>
    <option >Bhutan </option>
  </select>
  <br>

   
<b>City</b><input type="text" name="c_city" placeholder="City # *" required value="<?php echo $city;?>">            
<b>Contact No</b><input type="text" name="c_contactno" placeholder="Contact # *" required value="<?php echo $contact;?>">  

<b>Address</b><input type="text" name="c_address" placeholder="Address *" required value="<?php echo $address;?>">

  <b>Customer Image </b><input type="file" name="c_image" placeholder="Customer image *"><img src="customer_photos/<?php echo $image;?>" width="60" height="60">
<div class="col-sm-offset-2 col-sm-12" style="margin-right: 30px">
                          <!-- 
<a class="btn btn-primary" href="cart.php?cmd=emptycart">Cancel</a><div class="form-group"> -->
    
      <button   type="submit" class="btn btn-primary mb-2" name="update_account" value="Update Now" name="confirm">Update Now </button>
    </div>
 
              </div>
         
            </div>
          </div>

  </div>
</form>
</div>
<?php
if (isset($_POST['update_account'])) {
$update_id=$id;
$c_name=$_POST['c_name'];
$c_email=$_POST['c_email'];

$c_pass=$_POST['c_pass'];



$c_city=$_POST['c_city'];
$c_contactno=$_POST['c_contactno'];
   
$c_address=$_POST['c_address'];
$c_image=$_FILES['c_image']['name'];
$c_image_tmp =$_FILES['c_image']['tmp_name'];

$update_c="update customers set customer_name='$c_name',customer_email='$c_email',customer_pass='$c_pass',customer_city='$c_city',customer_contact='$c_contactno',customer_address='$c_address',customer_image='$c_image' where customer_id='$update_id'";
$run_customer=mysqli_query($con,$update_c);
if($run_customer){
echo "<script>alert('Your account has been updated')</script>";
echo "<script>window.open('my_account.php','_self')</script>";

}

}

?>