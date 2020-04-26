<?php 
session_start();
include("functions/functions.php");
include("includes/db.php"); 
$con = mysqli_connect("localhost","root","","ecommerce");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
	echo "Connection established";

$ip = getIp();
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];
$repass = $_POST['repassword'];
$image = $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];
$country=$_POST['country'];
$city=$_POST['city'];
$contact=$_POST['contact'];
$address=$_POST['address'];

move_uploaded_file($image_tmp,"customer/customer_images/$image");
echo "<br/><br/><span>check1</span>";
if($name !=''||$email !=''){
//Insert Query of SQL
echo "<br/><br/><span>check2</span>";
$query = mysqli_query($con,"insert into customers (customer_ip,customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image) values('$ip','$name', '$email', '$pass', '$country','$city','$contact','$address','$image')");
if (!$query) {
    die('Invalid query: ' . mysqli_error());
}
else{ echo "Success"; }
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}

mysqli_close($con); // Closing Connection with Server

?>