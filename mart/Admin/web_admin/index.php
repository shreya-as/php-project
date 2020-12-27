<?php
include("check_session.php");
include("connection.php");  
$user_id=$_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Admin Panel</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/k.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
</head>
<body>
 
   	 <?php include("include/header.php");?>
   	<div class="container-fluid main-container">
	<?php include("include/side_bar.php");?>
    
	
    <div class="col-md-9 content" style="margin-left:10px">
  	<div class="panel panel-default">
	<div class="panel-heading" style="background-color:#6699FF">
	<a href="index.php"><h1 style="text-align: center; color: white"><span class=""></span> Manage your Content  </h1></a></div><br>
	<div class="panel-body" style="background-color:white;">
		<div class="col-lg-12" style="height: 400px">
			<h1 style="text-align: center;">

<?php  //success message
if(isset($_POST['success'])) {
$success = $_POST["success"];
echo "<h1 style='color:#0C0'>Your Product was added successfully &nbsp;&nbsp;  <span class='glyphicon glyphicon-ok'></h1></span>";
}
?>


			</h1>
		</div>
	</div>
</div>
</div>
</div>
</body>
</html>
</h3>
	</div>
</div></div></div>
<?php include("include/js.php"); ?>
</body>
</html>