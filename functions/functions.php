<?php 
// After uploading to online server, change this connection accordingly
$con = mysqli_connect("localhost","root","","ecommerce");

if (mysqli_connect_errno())
  {
  echo "The Connection was not established: " . mysqli_connect_error();
  }
 // getting the user IP address
  function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}
  
  
  
//creating the shopping cart
function cart(){
		
	global $con; 
	$ip = getIp();		
	$pro_id = $_GET['p_code'];	
	if(isset($_SERVER['customer_email']))
		$c_email = $_SESSION['customer_email'];
	else
		$c_email = "guest@gmail.com";
	$qty = $_GET['quantity'];
		
	$sql_cart = "select * from cart where p_id='$pro_id' and customer_email='$c_email'";
	$run_cart = mysqli_query($con, $sql_cart);
	//$p_price=mysqli_fetch_array($run_price)
	if($get_cart=mysqli_fetch_array($run_cart))
	{	
		$new_qty = $get_cart['qty'];
		$new_qty += $qty;
		$sql = "UPDATE cart SET qty='$new_qty' WHERE p_id='$pro_id' and customer_email='$c_email'";
		if (mysqli_query($con, $sql)) {
		  //echo "Record updated successfully";
		} else {
		  echo "Error updating record: " . mysqli_error($conn);
		}
	}
	else{
		$sql = "INSERT INTO cart (p_id, customer_email, ip_add, qty) VALUES ('$pro_id', '$c_email', '$ip', '$qty')";	
		if (mysqli_query($con, $sql)) {
			echo "<script>alert('Product Added!!')</script>";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}
	}

}
 // getting the total added items
 
 function total_items(){
 }
  
// Getting the total price of the items in the cart 
	
	function total_price(){
	
		
	
	}

//getting the categories

function getCats(){
	
	global $con; 
	
	$get_cats = "select * from categories";
	
	$run_cats = mysqli_query($con, $get_cats);
	
	while ($row_cats=mysqli_fetch_array($run_cats)){
	
		$cat_id = $row_cats['cat_id']; 
		$cat_title = $row_cats['cat_title'];
	
	echo "<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";
	
	
	}


}

//getting the brands

function getBrands(){
	
	global $con; 
	
	$get_brands = "select * from brands";
	
	$run_brands = mysqli_query($con, $get_brands);
	
	while ($row_brands=mysqli_fetch_array($run_brands)){
	
		$brand_id = $row_brands['brand_id']; 
		$brand_title = $row_brands['brand_title'];
	
	echo "<li><a href='index.php?brand=$brand_id'>$brand_title</a></li>";
	
	
	}
}

function getPro(){

	if(!isset($_GET['cat'])){
		if(!isset($_GET['brand'])){

		global $con; 
		
		$get_pro = "select * from products order by RAND() LIMIT 0,6";

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
				
				<p><b> Price: $pro_price </b></p>
				<form method='get' >
				<a href='details.php' style ='margin-right:10px'>Details</a>
				<input type='text' style ='height:0px; width:0px;' name='p_code' value='$pro_id'>
				<input type='text' class='product-quantity' style ='height:40px; width:35px; font-size:90%;' name='quantity' value='1' size='2' /><a href='all_products.php?add_cart=$pro_id'><input type='submit' <input type='submit' style='height:40px; width:125px; font-size:90%; float:right' name='add123' value='Add to Cart' class='btnAddAction' />
				</form>
			</div>				
			";
			//action='functions/functions.php?code=$pro_id'
		//<input type='submit' style='height:40px; width:125px; font-size:90%; float:right' name='add123' value='Add to Cart' /></a>
		//<a href='all_products.php?add_cart=$pro_id'><button style='float:right'>Add to Cart</button></a>
			//Adding my code to call function cart	
			if(isset($_GET['add123']))
			{	
				//$_SERVER['REQUEST_METHOD']=="GET" && 		
				$_GET['add123'] = NULL;
				cart();			
			}
		}
		}
	}
}

function getCatPro(){

	if(isset($_GET['cat'])){
		
		$cat_id = $_GET['cat'];

	global $con; 
	
	$get_cat_pro = "select * from products where product_cat='$cat_id'";

	$run_cat_pro = mysqli_query($con, $get_cat_pro); 
	
	$count_cats = mysqli_num_rows($run_cat_pro);
	
	if($count_cats==0){
	
	echo "<h2 style='padding:20px;'>No products where found in this category!</h2>";
	
	}
	
	while($row_cat_pro=mysqli_fetch_array($run_cat_pro)){
	
		$pro_id = $row_cat_pro['product_id'];
		$pro_cat = $row_cat_pro['product_cat'];
		$pro_brand = $row_cat_pro['product_brand'];
		$pro_title = $row_cat_pro['product_title'];
		$pro_price = $row_cat_pro['product_price'];
		$pro_image = $row_cat_pro['product_image'];
	
		echo "
				<div id='single_product'>
				
					<h3>$pro_title</h3>
					
					<img src='admin_area/product_images/$pro_image' width='180' height='180' />
					
					<p><b> $ $pro_price </b></p>
					
					<a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
					
					<a href='index.php?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>
				
				</div>
		
		";
		
	
	}
	
}

}


function getBrandPro(){

	if(isset($_GET['brand'])){
		
		$brand_id = $_GET['brand'];

	global $con; 
	
	$get_brand_pro = "select * from products where product_brand='$brand_id'";

	$run_brand_pro = mysqli_query($con, $get_brand_pro); 
	
	$count_brands = mysqli_num_rows($run_brand_pro);
	
	if($count_brands==0){
	
	echo "<h2 style='padding:20px;'>No products where found associated with this brand!!</h2>";
	
	}
	
	while($row_brand_pro=mysqli_fetch_array($run_brand_pro)){
	
		$pro_id = $row_brand_pro['product_id'];
		$pro_cat = $row_brand_pro['product_cat'];
		$pro_brand = $row_brand_pro['product_brand'];
		$pro_title = $row_brand_pro['product_title'];
		$pro_price = $row_brand_pro['product_price'];
		$pro_image = $row_brand_pro['product_image'];
	
		echo "
				<div id='single_product'>
				
					<h3>$pro_title</h3>
					
					<img src='admin_area/product_images/$pro_image' width='180' height='180' />
					
					<p><b> $ $pro_price </b></p>
					
					<a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
					
					<a href='index.php?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>
				
				</div>
		
		";
		
	
	}
	
}
}


?>