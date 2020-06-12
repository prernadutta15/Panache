<!DOCTYPE>
<?php 
session_start();
include("functions/functions.php");
include("includes/db.php");
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
<script type="text/javascript">
		function subtractQty(){
			if(document.getElementById("qty").value - 1 < 0)
				return;
			else
				 document.getElementById("qty").value--;
		}
		function addQty(){
			
				 document.getElementById("qty").value++;
		}
		</script>
	<style>
	input[type=checkbox]
{
  -webkit-appearance:checkbox;
}
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
	
<body >
	
	<!--Main Container starts here-->
	<div class="main_wrapper">
	
		<div style="position:fixed;top:35px;left:1px;font-size:370%;z-index:2;font-weight:bold;color:#0cf;border:6px dotted #f0c;">Panache</div>
	
		<div class="menubar" style="height:18=4%;position:relative;z-index:3">
			
		
			<a href="#"><div class="logo"><img class="avatar" src="images/avatar.svg"></div></a>
<nav class="primary-nav">
  <ul class="primary-navigation">
    <li class="work-nav active"><a href="all_products.php">Home</a></li>
    <li class="play-nav"><a href="#">About Us</a></li>
    <li class="about-nav"><a href="#">Contact Us</a></li>
   
    <li class="shop-nav"><a href="#">Gift Items</a></li>
	<li class="shop-nav"><a href="customer_login.php">Login</a></li>
	<li class="shop-nav"><a href="#">Register</a></li>
	<div id="form" style="height:40px;width:200px; float:left; margin-top:-55px;margin-left:10px">
  <form method="get" action ="results.php" enctype="multipart/form-data" >
	<input type="text" style="height:35px; width:195px; font-size:70%;" name="user_query" placeholder="Search a product"/>
	<p style="position:absolute;"><input type="submit" style="height:35px; width:70px; font-size:80%; color:gray; float:left; margin-top:-35px;margin-left:195px;" name="search" value="Search" /></p>
	</form>
  </div>
	<li class="shop-nav" ><div class="panache" style="color:#c600eb; padding-left:2px;margin-left:70px;">P</div><div class="panache" style="color:#25ff00; ">A</div><div class="panache" style="color:#ce1127;">N</div><div class="panache" style="color:#14dbff; ">A</div><div class="panache" style="color:#ff148f; ">C</div><div class="panache" style="color:#39ff14; ">H</div><div class="panache" style="color:#ff164d; ">E</div></li>
	
	
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
					
					echo "<span style='font-size:18px;font-weight:bold;line-height:40px;margin-left:-200px;color:#ffd633;'>Welcome: ".$_SESSION['customer_email']."</span>";
					
					echo "<p style='left:640px;position:absolute;top:3px;color:white;float:right;line-height:40px;font-size:100%;font-weight:bold;'>Shopping Cart-> Total Items: $total  Total Price: $price</p>";
										
					echo "<a href='logout.php' style='color:#ffd633;font-weight:bold;font-size:120%;margin-left:530px;'>Logout</a>";
					
					echo "<a href='all_products.php' style='color:#ffd633;left:1290px;font-weight:bold;top:2px;position:absolute;float:right;line-height:40px;font-size:100%;padding-right:29px;'>Go Back</a>";					
					//echo "<script>window.open('all_products.php','_self')</script>";										
					}
				}
				else if(isset($_SESSION['customer_email']))
				{
					$total=total_items();
					
					$price=total_price();
					
					echo "<span style='font-size:18px;font-weight:bold;line-height:40px;margin-left:-200px;color:#ffd633; '>Welcome: ".$_SESSION['customer_email']."</span>";
					
					echo "<p style='left:640px;position:absolute;top:3px;color:white;float:right;line-height:40px;font-size:100%;font-weight:bold;'>Shopping Cart-> Total Items: $total  Total Price: $price</p>";
										
					echo "<a href='logout.php' style='color:#ffd633;font-weight:bold;font-size:120%;margin-left:530px;'>Logout</a>";
					
					echo "<a href='all_products.php' style='color:#ffd633;left:1290px;font-weight:bold;top:2px;position:absolute;float:right;line-height:40px;font-size:100%;padding-right:29px;'>Go Back</a>";
				}
				else
				{					
					//echo "<script>alert('You logged out successfully, Thanks!!')</script>";	

						$total=total_items();
					
					$price=total_price();
					
					
					echo "<span style='font-size:17px;color:#ffd633;font-weight:bold;line-height:40px;margin-left:-200px; '>Welcome Guest!</span>";
					
					echo "<p style='left:640px;font-weight:bold;position:absolute;top:3px;color:white;float:right;line-height:40px;font-size:100%;font-weight:bold;'>Shopping Cart-> Total Items: $total  Total Price: $price</p>";
										
					echo "<a href='login_form.php' style='font-weight:bold;color:#ffd633;font-size:120%;margin-left:630px;'>Login</a>";
					
					echo "<a href='all_products.php' style='color:#ffd633;font-weight:bold;left:1290px;top:2px;position:absolute;float:right;line-height:40px;font-size:100%;padding-right:29px;'>Go Back</a>";					
				}
				
				?>				
				</div>
			
			<?php getIp()?>
			
				<div id="products_box" >
						<form action="" method="post" enctype="multipart/form-data">
			
				<table align="center" width="900" bgcolor="skyblue">
					
					<tr align="center" style="font-size:150%;font-weight:bold;color:#ff148f; padding:5px;">
						<th>Remove</th>
						<th>Product(S)</th>
						<th>Quantity</th>
						<th>&nbsp &nbsp Total Price</th>
					</tr>
					
		<?php 
		$total = 0;
		
		global $con; 
		
		$ip = getIp();
		if (isset($_SESSION['customer_email'])) {
		$c_mail = $_SESSION['customer_email'];
		}
		else
			$c_mail = "guest@gmail.com";
	
		$sel_price = "select * from cart where ip_add='$ip' and customer_email='$c_mail'";
		
		$run_price = mysqli_query($con, $sel_price); 
		
		while($p_price=mysqli_fetch_array($run_price)){
			
			$pro_id = $p_price['p_id']; 
			
			$pro_price = "select * from products where product_id='$pro_id'";
			
			$run_pro_price = mysqli_query($con,$pro_price); 
			
			while ($pp_price = mysqli_fetch_array($run_pro_price)){
			
			$product_price = array($pp_price['product_price']);
			
			$product_title = $pp_price['product_title'];
			
			$product_image = $pp_price['product_image']; 
			
			$single_price = $pp_price['product_price'];
			
			$values = array_sum($product_price); 
			
			$total += $values; 
					
					?>
					
					<tr align="center">
						<td style="margin-left:200px"><input type="checkbox" name="remove[]" value="<?php echo $pro_id;?>"/></td>
						<td style="color:#0cf;font-size:120%;font-weight:bold;padding-top:25px;"><?php echo $product_title; ?><br>
						<img src="admin_area/product_images/<?php echo $product_image;?>" width="160" height="290"/>
						</td>
						<td><input type="text" size="4" name="qty" value="1"/></td>
						<?php 
						if(isset($_POST['update_cart'])){
						
							$qty = $_POST['qty'];
							
							$update_qty = "update cart set qty='$qty'";
							
							$run_qty = mysqli_query($con, $update_qty); 
							
							$_SESSION['qty']=$qty;
							
							$total = $total*$qty;
						}
						
						
						?>
						
						
						<td style="color:#c600eb;font-size:120%;font-weight:bold;"><?php echo "$" . $single_price; ?></td>
					</tr>
					
					
				<?php } } ?>
				
				<tr style="font-size:150%;font-weight:bold;color:#ff148f;">
						<td colspan="4" align="right" ><b>Sub Total:</b></td>
						<td style="color:#0cf"><?php echo "$" . $total;?></td>
					</tr>
					
				
				</table> 
			
						<input type="submit" style="width:200px; margin-left:20px;background:#f0c;font-weight:bold; font-size:120%;border:5px solid #0cf;color:white;" name="update_cart" value="Update Cart"/>
						<input type="submit" style="width:200px; margin-left:20px;background:#f0c;font-weight:bold; font-size:120%;border:5px solid #0cf;color:white;" name="continue" value="Continue Shopping" />
						<a href="checkout.php" style="width:200px;background:#f0c;font-weight:bold;padding:5px;padding-left:22px;padding-right:22px;font-size:120%; margin-left:20px;text-decoration:none;border:5px solid #0cf;color:white">Checkout</a>
			
			</form>
			
	<?php 
		
	function updatecart(){
		
		global $con; 
		
		$ip = getIp();
		
		if(isset($_SESSION['customer_email']))
		$c_email = $_SESSION['customer_email'];
		else
		$c_email = "guest@gmail.com";
		
			
		if(isset($_POST['update_cart'])){
		
			foreach($_POST['remove'] as $remove_id){
			
			$delete_product = "delete from cart where p_id='$remove_id' AND ip_add='$ip' AND customer_email='$c_email'";
			
			$run_delete = mysqli_query($con, $delete_product); 
			
			if($run_delete){
			
			echo "<script>window.open('cart.php','_self')</script>";
			}
			
			}
		
		}
		if(isset($_POST['continue'])){
		
		echo "<script>window.open('all_products.php','_self')</script>";
		
		}
	
	}
	echo @$up_cart = updatecart();
	
	?>

				</div>
			
			</div>
		</div>
		<!--Content wrapper ends-->
		
		
		
		
	
	
	
	
	
	
	</div> 
<!--Main Container ends here-->


</body>
</html>