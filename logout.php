<?php 

session_start(); 

session_destroy(); 


echo "<script>window.open('all_products.php','_self')</script>";


?>