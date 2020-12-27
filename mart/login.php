<?php
	@session_start();
	// include("includes/db.php");
	if(isset($_POST['submit'])){

		$error=array();

		if (isset($_POST['email']) && !empty($_POST['email'])&& trim($_POST['email'])!='') {
				$email=$_POST['email'];
		}	
		else{
			$error['email']="Enter Email";
		}
		

		if (isset($_POST['password']) && !empty($_POST['password'])) {
			$password=md5($_POST['password']);
		}
		else{
			$error['password']="Enter password";
		}

		if (isset($email) && isset($password)) {
			

			//check credential

			//require_once 'db.php';
			$sql = "select * from customers where email='$email' and password='$password'";

			//execute
			$result = mysqli_query($con,$sql);

			//fetch
			$data = mysqli_fetch_array($result);
			
			if($data){
				$_SESSION['username']=$username;

				// assign time for session
				$_SESSION['time']=time()+20;

				if ($_POST['Remember']) {
					setcookie('username',$username,time()+24*60*60);
				}
				header('location:index.php');
			}
			else{
				$error['login']="Login Failed";
		}
	}
	}		

?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="CSS/login.css">
</head>
<body>
	<div class="login">
		<h1>Login</h1>
		<form method="post" action="" name="loginForm">
			<div class="input">
				<input type="text" name="email" placeholder="Enter Email"> 

				<div class="error">
					<?php
						if (isset($error['email'])) {
							echo $error['email'];
						}
					?>
				</div>

				<input type="password" name="password" placeholder="Enter Password">

				<div class="error">
					<?php
						if (isset($error['password'])) {
							echo $error['password'];
						}
					?>
				</div>
				

				<input type="submit" name="submit" value="Login" onclick="validate()">
			<div class="fail">
				<?php 
						if(isset($error['login'])){
							echo $error['login'].'<br>';
						}
					?>
			</div>
				<a href="register.php">
					<span>Sign Up</span>
				</a>
		</div>
		</form>
		<script type="text/javascript">
			function validate()
			{
				var email=document.loginForm.email.value;
				if(email=="")
				{
					// alert("Enter Email");
				}
				else{
					var pattern=/^([a-zA-Z0-9_\-\.])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
					if (!pattern.test(email)){
						// alert("Invalid Email Format");
					}
				}
				var password=document.loginForm.password.value;
				if(password==""){
					// alert("Enter Password");
				}
				else{
					(password.length<6)
						// alert("Password is short");
				}
			}
		</script>
	</div>
</body>
</html>