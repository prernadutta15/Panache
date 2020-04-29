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

