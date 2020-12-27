

<?php
 @session_start();
include("connection/db.php");


	if(isset($_POST['login'])){
		$error=array();
		if(isset($_POST['username'])&&!empty($_POST['username'])&&trim($_POST['username'])!=''){
			$username=$_POST['username'];
		}
		else{
		$error['username']="Enter username!";
	}
	if (isset($_POST['password']) && !empty($_POST['password'])) {
			if (strlen($_POST['password'])<6) {
				$error['password']="Password is too short!";
			}
			else{
				$password=$_POST['password'];
			}
		}
		else{
			$error['password']="Enter Password";
		}

      
















}

?>

<!DOCTYPE html>
<html>
<head><title>Signin Form</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>  <body class="text-center">

 <link href="" rel="stylesheet">
 <div class="body"> 
 
		    <form class="form-signin" action="" method="post">
     
     <h2 class="title text-center">Customer Login</h2><br>


      <label for="inputEmail" class="sr-only">Email</label>


      <input type="text" id="inputEmail" class="form-control" name="email" placeholder="Enter Email"><br>

			<div class="error">
				<?php if(isset($error['username'])){
					echo $error['username'];
				} 
			?>
			</div>
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
      <button class="btn btn-lg btn-primary btn-block" name="login" type="submit" style="font-size:20px; padding:10px">Login</button>
      <p class="mt-5 mb-3 
      text-muted"></p>

</body>
</html>
