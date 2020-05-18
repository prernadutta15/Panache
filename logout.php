<!--
<html>
<body>

<div>
<form method="get" action="all_products.php">
<input type="submit" name="logout" value="Logout" />	-->
<?php 

	session_start(); 	
	//echo "<form method='get' action='all_products.php'>";	
	session_destroy();
	//$_GET['logout']="set";
	echo "<script>window.open('all_products.php','_self')</script>";

?>
<!--
</div>
</body>
</html>		-->