
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

// session_start();
 include("connection/db.php");



?>
<?php

$ip= getRealIpAddr();
echo $get_customer ="select * from customers where customer_ip='$ip'";

$run_customer =mysqli_query($con,$get_customer);
$customer =mysqli_fetch_array($run_customer);
echo $customer_id =$customer['customer_id'];

?>





<div align="center" style="padding: 20px">
	
<h2>Payment Options</h2>
<b style="padding-top: 20px">Pay online</b><a href="http://www.paypal.com"> <img src="images/payment.png" width="400px" height="200"></a> <b>or <a href="order.php?c_id=<?php echo $customer_id?>;">Pay Offline</a></b><br>

<b>If you select the "Pay Offline option please check your email or account to the invoice number for your order</b>




</div>
</body>
</html>