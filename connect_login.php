	
	<?php 
		$con = mysqli_connect("localhost","root","","ecommerce");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
	echo "Connection established";
	
	
		$c_email = $_POST['email'];
		$c_pass = $_POST['pass'];
		//echo "hello $c_email";
		$sel_c = "select * from customers where customer_email='$c_email' and customer_pass='$c_pass'";
		
		$run_user = mysqli_query($con, $sel_c); 
	
	 $check_user = mysqli_num_rows($run_user); 
	
	if($check_user==1){
	
	$_SESSION['user_email']=$email; 
	
	echo "<script>window.open('index.php?logged_in=You have successfully Logged in!','_self')</script>";
	
	}
	else {
	
	echo "<script>alert('Password or Email is wrong, try again!')</script>";
	
	}
	
	
	
	
	?>