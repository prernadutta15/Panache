<!DOCTYPE>
<?php 

include("functions/functions.php");

?>
<html>
	<head>
		<title>My Online Shop</title>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="syles.css" />
<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
	#form {float:right; padding-right:8px; line-height:50px;}
.panache{
font-size:250%;
display:inline;
font-family: 'Bangers', cursive;
padding-left:20px;
}

.main_wrapper{
width:100%;
height:auto;
margin:auto;
background:white;
}

.header_wrapper{
width:1000px;
height:100px;
margin:auto;

}
#sidebar_title {
background:white;
color:black;
font-size:22px;
font-family:arial; 
padding:10px;
text-align:center;

}

#logo {float:left;}

#banner {float:right;}

.menubar {
width:100%;
color:red;
padding-top:30px;
background:#ffd633;
}

#menu {
padding:0;
margin:0;
line-height:40px;
float:left;
}

#menu li {
list-style:none;
display:inline;
}

#menu a {
text-decoration:none;
color:white;
padding:8px;
margin:5px;
font-size:18px;
font-family:COMIC SANS MS;
}

#menu a:hover {color:orange; font-weight:bolder; text-decoration:underline;}

#form {float:right; padding-right:8px; line-height:50px;}

.content_wrapper {
width:100%;
margin:auto;
background:white;

}

#form {float:right; padding-right:8px; line-height:50px;}


#content_area {
width:80%;
float:right;
background:white;
}

#side{
	width:18%;
	position: fixed;
	margin-top:52px;
	border:6px dotted #0cf;
	background:white;
}
#products_box {
 
text-align:center;
margin-left:0px;
margin-bottom:10px;
 
}

	#single_product {float:left; margin-left:20px; padding:20px;border:2px solid #ffd633;border:2px solid black;width:300px;margin-bottom:20px;}
	
	#single_product img {height:45vh;}
	
	#shopping_cart {width:150%; height:50px; background:black; margin-top:-20px;color:white;margin-left:-380px; margin-bottom:20px;}

//hello


	</style>
	</head>
	
<body>
	
	<!--Main Container starts here-->
	<div class="main_wrapper">
	<div style="position:fixed;top:35px;left:1px;font-size:370%;z-index:2;font-weight:bold;color:#0cf;border:6px dotted #f0c;">Panache</div>
	
		<div class="menubar" style="height:18=4%;position:relative;z-index:3">
			
		
			<a href="customer/my_account.php"><div class="logo"><img class="avatar" src="images/avatar.svg"></div></a>
<nav class="primary-nav">
  <ul class="primary-navigation">
    <li class="work-nav active"><a href="#">Home</a></li>
    <li class="play-nav"><a href="#">About Us</a></li>
    <li class="about-nav"><a href="#">Contact Us</a></li>
   
    <li class="shop-nav"><a href="#">Gift Items</a></li>
	<li class="shop-nav"><a href="#">Login</a></li>
	<li class="shop-nav"><a href="#">Register</a></li>
	<div id="form" style="height:40px;width:200px; float:left; margin-top:-55px;margin-left:10px">
  <form method="get" action ="results.php" enctype="multipart/form-data" >
	<input type="text" style="height:35px; width:195px; font-size:70%;" name="user_query" placeholder="Search a product"/>
	
	<p style="position:absolute;"><input type="submit" style="height:35px; width:70px; font-size:80%; color:gray; float:left; margin-top:-35px;margin-left:195px;" name="search" value="Search" /></p>
	</form>
  </div>
	<li class="shop-nav"  style="margin-top:-10px"><div class="panache" style="color:#c600eb; padding-left:2px;margin-left:70px;">P</div><div class="panache" style="color:#25ff00; ">A</div><div class="panache" style="color:#ce1127;">N</div><div class="panache" style="color:#14dbff; ">A</div><div class="panache" style="color:#ff148f; ">C</div><div class="panache" style="color:#39ff14; ">H</div><div class="panache" style="color:#ff164d; ">E</div></li>
	
	
  </ul>
</nav>
			
			
		</div>
		<div id="side" >
			
				<div id="sidebar_title" style="margin-top:0px;margin-left:20px;padding-top:0px;padding-bottom:30px;padding-left:30px;background:white; ">
				<div class="accordion" id="accordionExample" >
  <div class="card" style="color:white;border:white;background:white; width:200px;padding:0px;margin-left:-35px;">
    <div class="card-header" id="headingOne" style="background:white">
      <h5 class="mb-0">
        <button style="font-family: 'Bangers', cursive;	font-weight:bold; font-size:190%; color:#ff00cc;border:white;background:white; margin-left:0px; margin-top:10px;" type="button" data-toggle="collapse" data-target="#collapseOne"  aria-controls="collapseOne">
         Categories
        </button>
      </h5>
    </div>

    <div id="collapseOne" style="color:black;border:white;background:white; " class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <ul style="border-bottom:black;background:white;font-family:Comic Sans Ms;font-size:110%;border:2px dottd pink;margin-top:-20px;">
		<li style="color:#00ccff;">Customised Tees</li>
		<li style="color:#cc66ff;">Mobile Covers</li>
		<li style="color:#00ccff;">Pillows</li>
		<li style="color:#cc66ff;">Show Pieces</li>
		<li style="color:#00ccff;">Clocks</li>
		</ul>
      </div>
    </div>
  </div>

</div>
 </div>
		<div id="sidebar_title" style="margin-top:-50px;padding-left:30px;">
				
  
 <div class="accordion" id="accordionExample" >
  <div class="card" style="color:#FF00CC;border:white;background:white; width:200px;padding:0px;margin-left:-15px;">
    <div class="card-header" style="color:#FF00CC;background:white;" id="headingOne">
     
        <button style="font-family: 'Bangers', cursive;	font-weight:bold; font-size:160%; color:#FF00CC;border:white;background:white;" type="button" data-toggle="collapse" data-target="#collapseOne"  aria-controls="collapseOne">
        Advanced Filters
        </button>
      
    </div>

    <div id="collapseOne" style="color:#FF00CC;border:white;background:white; " class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <ul style="border-bottom:black;background:white;font-family:Comic Sans Ms;font-size:110%;border:2px dottd pink;margin-top:-20px;">
		<li ><a href="#" style="text-decoration: none; color:#00ccff;">Sort By:</a></li>
		<li ><a href="#" style="text-decoration: none; color:#cc66ff;">Popularity</a></li>
		<li ><a href="#" style="text-decoration: none; color:#00ccff;">Relevance</a></li>
		<li><li ><a href="#" style="text-decoration: none; color:#cc66ff;">Price</a></li>
		<li ><a href="#" style="text-decoration: none; color:#00ccff;">Newest Arrivals</a></li>
		<li><li ><a href="#" style="text-decoration: none; color:#cc66ff;">Max Discount</a></li>
	
		</ul>
      </div>
    </div>
  </div>

</div>
				</div>	
</div>				
					
		</div>
		<!--Navigation Bar ends-->
	
		<!--Content wrapper starts-->
		<div class="content_wrapper" style="margin-top:20px;">
		
			
		
			<div id="content_area">
			
			<div id="shopping_cart" style="position:relative;z-index:3"> 
			
			<span style="font-size:17px; padding-left:535px; line-height:40px; ">
			<?php
				if(isset($_POST['login']))
				{				
					$c_email = $_POST['email'];
					$c_pass = $_POST['pass'];
					
					$sel_c = "select * from customers where customer_pass='$c_pass' AND customer_email='$c_email'";
					
					$run_c = mysqli_query($con, $sel_c);
					
					$check_customer = mysqli_num_rows($run_c); 
					
					if($check_customer==0)
					{					
						echo "<script>alert('Password or email is incorrect, plz try again!')</script>";
						echo "<script>window.open('login_form.php','_self')</script>";
						exit();
					}
					$ip = getIp(); 
					
					$sel_cart = "select * from cart where ip_add='$ip'";
					
					$run_cart = mysqli_query($con, $sel_cart); 
					
					$check_cart = mysqli_num_rows($run_cart); 
					
					if($check_customer>0 AND $check_cart==0){
					
					$_SESSION['customer_email']=$c_email; 
					
					echo "<script>alert('You logged in successfully, Thanks!')</script>";
					echo "<script>window.open('customer/my_account.php','_self')</script>";
					
					}
					else {
						
					$_SESSION['customer_email']=$c_email; 
					echo "<script>alert('You logged in successfully, Thanks!!')</script>";		

					$total=total_items();
					
					$price=total_price();
					
					echo "<span style='font-size:18px;font-weight:bold;line-height:40px;margin-left:-120px;color:#ffd633;'>Welcome: ".$_SESSION['customer_email']."</span>";
					
					echo "<p style='left:710px;position:absolute;top:3px;color:white;float:right;line-height:40px;font-size:100%;font-weight:bold;'>Shopping Cart-> Total Items: $total  Total Price: $price</p>";
										
					echo "<a href='logout.php' style='color:white;font-size:120%;margin-left:530px;'>Logout</a>";
					
					echo "<a href='cart.php' style='color:#ffd633;left:1290px;font-weight:bold;top:2px;position:absolute;float:right;line-height:40px;font-size:100%;padding-right:29px;'>Go To Cart</a>";					
					//echo "<script>window.open('all_products.php','_self')</script>";										
					}
				}
				else if(isset($_SESSION['customer_email']))
				{
					$total=total_items();
					
					$price=total_price();
					
					echo "<span style='font-size:18px;font-weight:bold;line-height:40px;margin-left:-120px;color:#ffd633; '>Welcome: ".$_SESSION['customer_email']."</span>";
					
					echo "<p style='left:710px;position:absolute;top:3px;color:white;float:right;line-height:40px;font-size:100%;font-weight:bold;'>Shopping Cart-> Total Items: $total  Total Price: $price</p>";
										
					echo "<a href='logout.php' style='color:white;font-size:120%;margin-left:530px;'>Logout</a>";
					
					echo "<a href='cart.php' style='color:#ffd633;left:1290px;font-weight:bold;top:2px;position:absolute;float:right;line-height:40px;font-size:100%;padding-right:29px;'>Go To Cart</a>";
				}
				else
				{					
					//echo "<script>alert('You logged out successfully, Thanks!!')</script>";	

						$total=total_items();
					
					$price=total_price();
					
					
					echo "<span style='font-size:17px;color:#ffd633;font-weight:bold;line-height:40px;margin-left:-120px; '>Welcome Guest!</span>";
					
					echo "<p style='left:710px;position:absolute;top:3px;color:white;float:right;line-height:40px;font-size:100%;font-weight:bold;'>Shopping Cart-> Total Items: $total  Total Price: $price</p>";
										
					echo "<a href='login_form.php' style='color:white;font-size:120%;margin-left:570px;'>Login</a>";
					
					echo "<a href='cart.php' style='color:#ffd633;font-weight:bold;left:1290px;top:2px;position:absolute;float:right;line-height:40px;font-size:100%;padding-right:29px;'>Go To Cart</a>";					
				}
				
				?>				</div>
			
				<div id="products_box" >
		<?php 
	
	if(isset($_GET['search'])){
	
	$search_query = $_GET['user_query'];
	
	$get_pro = "select * from products where product_keywords like '%$search_query%'";

	$run_pro = mysqli_query($con, $get_pro); 
	
	while($row_pro=mysqli_fetch_array($run_pro)){
	
		$pro_id = $row_pro['product_id'];
		$pro_cat = $row_pro['product_cat'];
		$pro_brand = $row_pro['product_brand'];
		$pro_title = $row_pro['product_title'];
		$pro_price = $row_pro['product_price'];
		$pro_image = $row_pro['product_image'];
	
		echo "
				<div id='single_product'>
				
					<h3>$pro_title</h3>
					
					<img src='admin_area/product_images/$pro_image' width='180' height='180' />
					
					<p><b> $ $pro_price </b></p>
					
					<a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
					
					<a href='all_products.php?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>
				
				</div>
		
		
		";
	
	}
	}
	?>
			
				
				</div>
			
			</div>
		</div>
		<!--Content wrapper ends-->
		
		
		
		
	
	
	
	
	
	
	</div> 
<!--Main Container ends here-->


</body>
</html>