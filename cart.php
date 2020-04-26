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
	#form {float:right; padding-right:8px; line-height:50px;}
.panache{
font-size:150%;
display:inline;
font-family: 'Bangers', cursive;
padding-left:20px;

}
#block
{
	position:relative;
	margin-bottom:30px;
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
	border-right:2px solid black;
	background:#ffd633;
}
#products_box {
 
text-align:center;
margin-left:-40px;
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
	<!--<div class="header_wrapper">
		
			<a href="index.php"><img id="logo" src="images/logo.gif" /> </a>
			<img id="banner" src="images/ad_banner.gif" />
		</div>-->
		<!--Header ends here-->
		
		<!--Navigation Bar starts-->
		<div class="menubar" style="height:18%;">
			
		
			<a href="#"><div class="logo"><img class="avatar" src="images/avatar.svg"></div></a>
<nav class="primary-nav">
  <ul class="primary-navigation">
    <li class="work-nav active"><a href="#">Home</a></li>
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
		<div id="side">
			
				<div id="sidebar_title" style="margin-top:0px;padding-top:0px;padding-bottom:30px;padding-left:30px; ">
				<div class="accordion" id="accordionExample" >
  <div class="card" style="color:#FF00CC;border:white;background:white; width:200px;padding:0px;margin-left:-35px;">
    <div class="card-header" style="color:#FF00CC;border:white;background:white;" id="headingOne">
      <h5 class="mb-0">
        <button style="font-family: 'Bangers', cursive;	font-weight:bold; font-size:200%; color:#FF00CC;border:white;background:white; margin-left:10px; margin-top:40px;" type="button" data-toggle="collapse" data-target="#collapseOne"  aria-controls="collapseOne">
         Categories
        </button>
      </h5>
    </div>

    <div id="collapseOne" style="color:#FF00CC;border:white;background:white; " class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
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
  <div class="card" style="color:#FF00CC;border:white;background:white; width:200px;padding:0px;margin-left:-35px;">
    <div class="card-header" style="color:#FF00CC;border:white;background:white;" id="headingOne">
     
        <button style="font-family: 'Bangers', cursive;	font-weight:bold; font-size:200%; color:#FF00CC;border:white;background:white;" type="button" data-toggle="collapse" data-target="#collapseOne"  aria-controls="collapseOne">
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
			<?php cart()?>
			<div id="shopping_cart">
			<span style="color:#ffd633;float:right; margin-right:460px;font-size:200%;line-height:40px;">Welcome Guest!</span>
			<p style="margin-left:20px;left:750px;position:absolute;color:white;float:right;line-height:40px;font-size:100%;">Shopping Cart-> Total Items: <?php total_items(); ?>  Total Price: <?php total_price(); ?> </p>
			
			<a href="#" style="color:#ffd633;left:1180px;position:absolute;float:right;line-height:40px;font-size:100%;padding-right:29px;">Go To Cart</a>
			</div>
			<?php getIp()?>
			
				<div id="products_box" >
						<form action="" method="post" enctype="multipart/form-data">
			
				<table align="center" width="100%"  style="margin-top:10px;margin-left:130px;">
					
					<tr align="center" style="font-size:200%; color: #ffd633; ">
						<th style="position:absolute;left:370px">Remove</th>
						<th style="position:absolute;left:570px">Product(s)</th>
						<th style="position:absolute;left:820px;">Quantity</th>
						<th style="position:absolute;left:970px">Total Price</th>
					</tr>
					
		<?php 
		$total = 0;
		
		global $con; 
		
		$ip = getIp(); 
		
		$sel_price = "select * from cart where ip_add='$ip'";
		
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
					
					<tr align="center" style="margin-bottom:150px;position:relative;">
						<td style="margin-left:70px; position:absolute; margin-top:150px;"><input type="checkbox" style="width:20px;height:20px;" name="remove[]" value="<?php echo $pro_id;?>"/></td>
						<td style="">
						
						<?php echo $product_title; ?><br>
						<img src="admin_area/product_images/<?php echo $product_image;?>" style="width:300px;height:300px;margin-left:70px;"/>
						</td>
						
						<td style="position:absolute; left:63%; margin-top:90px;"><input type="text" size="4" name="qty" value="1" style="margin-top:60px;text-align:center;"/>
						
						<?php 
						if(isset($_POST['update_cart'])){
						
							$qty = $_POST['qty'];
							
							$update_qty = "update cart set qty='$qty'";
							
							$run_qty = mysqli_query($con, $update_qty); 
							
							$_SESSION['qty']=$qty;
							
							$total = $total*$qty;
						}
						
						
						?></td>
					
						
						<td style="position:absolute; left:76%; margin-top:151px;font-size:120%;color:#ff164d;"><?php echo "$" . $single_price; ?></td>
					</tr>
					
					
				<?php } } ?>
				
				<tr>
						<td colspan="4" align="right" style="font-size:200%;"><b>Sub Total:</b></td>
						<td style="font-size:200%;"><?php echo "$" . $total;?></td>
					</tr>
				</table> 
					<div id="block" style="margin-left:440px">
					<input type="submit" name="update_cart" style="margin-left:-310px;width:200px; color:#ffd633; font-size:120%; border:3px solid #ffd633; background:black;" value="Update Cart"/>
						<input  type="submit" style=" width:200px; color:#ffd633; font-size:120%; border:3px solid #ffd633; background:black; " name="continue" value="Continue Shopping" />
						
					</div>
					<a href="checkout.php" style="text-decoration:none; color:#ffd633; margin-left:60px;padding:2px; border: 3px solid #ffd633; background:black; font-size:160%; ">Checkout</a>
			</form>
			
	<?php 
		
	function updatecart(){
		
		global $con; 
		
		$ip = getIp();
		
		if(isset($_POST['update_cart'])){
		
			foreach($_POST['remove'] as $remove_id){
			
			$delete_product = "delete from cart where p_id='$remove_id' AND ip_add='$ip'";
			
			$run_delete = mysqli_query($con, $delete_product); 
			
			if($run_delete){
			
			echo "<script>window.open('cart.php','_self')</script>";
			
			}
			
			}
		
		}
		if(isset($_POST['continue'])){
		
		echo "<script>window.open('index.php','_self')</script>";
		
		}
	
	
	echo @$up_cart = updatecart();
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