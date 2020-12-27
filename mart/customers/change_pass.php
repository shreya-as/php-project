<h3 style="text-align: center; margin-top: -20px"><span class=""></span> Change  Your Password  </h3><br>
	<div class="panel-body" style="background-color:white;">
		<div class="col-lg-12" style="height: 500px; margin-left: 260px ">

			<div class="form-one">
    			<form class="form-horizontal"
 action="" method="post">
  <div class="form-group">
    <label class="control-label col-sm-6" for="email">Enter Current Password :</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" name="old_pass" placeholder="" required>
    </div>
  </div>
   <div class="form-group">
    <label class="control-label col-sm-6" for="email">Enter New Password :</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" name="new_pass" placeholder="" required>
    </div>
  </div>

     <div class="form-group">
    <label class="control-label col-sm-6" for="email">Enter New Password Again:</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" name="new_pass_again" placeholder=" " required>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary mb-2" value="Confirm Payment" name="change_pass">Change Password </button>
    </div>
  </div>
</form>
<?php
include("connection/db.php");

$c= $_SESSION['customer_email'];
if(isset($_POST['change_pass'])){
	$old_pass=$_POST['old_pass'];
	$new_pass =$_POST['new_pass'];
	$new_pass_again =$_POST['new_pass_again'];
	$get_real_pass ="select * from customers where customer_pass='$old_pass'";
	$run_pass= mysqli_query($con,$get_real_pass);

	$check_pass=mysqli_num_rows($run_pass);
	
	if($check_pass==0){
		echo "<script>alert('Your current password is not valid , try again')</script>";
		exit();

	}
	if($new_pass!=$new_pass_again){
		echo "<script>alert('Your new  password did not match , try again')</script>";
		exit();


	}
	else{
		$update_pass ="update customers set customer_pass ='$new_pass' where customer_email='$c'";
		$run_pass=mysqli_query($con,$update_pass);
		echo "<script>alert('Your password has  changed successfully!')";
		echo "<script>window.open('my_account.php','_self')</script>";

	}
}









?>