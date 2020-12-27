    	<h3 style="text-align: center; margin-top: -20px"><span class=""></span>Do you really want to delete your account </h3><br>
  <div class="panel-body" style="background-color:white;">
    <div class="col-lg-12" style="height: 500px; margin-left: 260px ">





      		<form class="form-horizontal"
 action="" method="post">
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary mb-2" value="Confirm Payment" name="yes">Yes I Want to delete </button>
      <button type="submit" class="btn btn-primary mb-2" value="Confirm Payment" name="no"> I don't Want to Delete </button>
    </div>
  </div>
</form>
</div>
<?php

include("connection/db.php");
$c=$_SESSION['customer_email'];
if(isset($_POST['yes'])){
  $delete_c= "delete from customers where customer_email='$c'";
  $run_delete = mysqli_query($con,$delete_c);

  if($run_delete){
    session_destroy();
    echo "<script>alert('Your Account has been deleted, Good Bye!')</script>";

echo "<script>window.open('../index.php','_self')</script>";

  }
}
if (isset($_POST['no'])) {
echo "<script>window.open('my_account.php','_self')</script>";

}
?>