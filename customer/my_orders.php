<table width="795" align="center" bgcolor="pink" style="margin-left:150px"> 

	
	<tr align="center">
		<td colspan="6"><h2>Your Orders details:</h2></td>
	</tr>
	
	<tr align="center" bgcolor="#ffd613" >
		<th>S.N</th>
		<th>Product (S)</th>
		<th>Quantity</th>
		<th>Invoice No&nbsp&nbsp&nbsp</th>
		<th>Order Date</th>
		<th>Status</th>
	</tr>
	<?php 
	include("includes/db.php");
	
	$user = $_SESSION['customer_email'];
				
	$get_c = "select * from customers where customer_email='$user'";
				
	$run_c = mysqli_query($con, $get_c); 
				
	$row_c = mysqli_fetch_array($run_c); 
				
	$c_id = $row_c['customer_id'];
	$c_email = $row_c['customer_email'];
	$c_name = $row_c['customer_name']; 
	
	
	$get_order = "select * from orders where c_id='$c_id'";
	
	$run_order = mysqli_query($con, $get_order); 
	
	$i = 0;
	
	while ($row_order=mysqli_fetch_array($run_order)){
		
		$order_id = $row_order['order_id'];
		$qty = $row_order['qty'];
		$pro_id = $row_order['p_id'];
		$invoice_no = $row_order['invoice_no'];
		$order_date = $row_order['order_date'];
		$status = $row_order['status'];
		$i++;
		
		$get_pro = "select * from products where product_id='$pro_id'";
		$run_pro = mysqli_query($con, $get_pro); 
		
		$row_pro=mysqli_fetch_array($run_pro); 
		
		$pro_image = $row_pro['product_image']; 
		$pro_title = $row_pro['product_title'];
	
	?>
	<tr align="center">
		<td><?php echo $i;?></td>
		<td>
		<?php echo $pro_title;?><br> 
		<img src="../admin_area/product_images/<?php echo $pro_image;?>" width="50" height="185" />
		</td>
		<td><?php echo $qty;?></td>
		<td><?php echo $invoice_no;?>&nbsp &nbsp</td>
		<td><?php echo $order_date;?></td>
		<td><?php echo $status;?></td>
	
	</tr>
	<?php } ?>
</table>