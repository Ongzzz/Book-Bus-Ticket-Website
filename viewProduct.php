<!DOCTYPE html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;

}

tr
{
    background-color: white;
}

</style>
</head>

<body>
<?php
	include 'header2.php';
	
	if ($groceryDB=mysqli_connect('localhost','root',''))
	{
		
		//try to select the database
		if (mysqli_select_db($groceryDB,'mygrocery'))
		{
			$query=mysqli_query($groceryDB,"select * from Product");
			
			if(mysqli_num_rows($query)>0)
			{?>
				
				<table>
				<tr>
				<th>Product id</th>
				<th>Product image</th>
				<th>Product name</th>
				<th>Product description</th>
				<th>Product quantity</th>
				<th>Product price</th>
				<th>Product shipping fees</th>
				<th>Date entered</th>
				<th>Remove</th>
				</tr>
				<?php
				
				while ($row = mysqli_fetch_array($query)) 
				{?>
					<tr>
					<td><?php echo $row['product_id']; ?></td>
					<td><img height="250";width="250"; src="<?php echo $row['product_image']; ?>"></td>
					<td><?php echo $row['product_name']; ?></td>
					<td><?php echo $row['product_description']; ?></td>
					<td><?php echo $row['product_quantity'];?></td>
					<td><?php echo $row['product_price'];?></td>
					<td><?php echo $row['product_shipping_fee'];?></td>
					<td><?php echo $row['date_entered'];?></td>
					
					
					<td>
					
					<?php $deletedProduct=$row['product_id'];?>
					
					<form action ="deleteProduct.php" method ="post">
					<input type ="hidden" name ="deletedProduct" value ="<?php echo $deletedProduct;?>">
					<input type ="hidden" name ="action" value ="delete">
					<input type ="submit" name ="delete" value ="Remove">
					</form>
					
					</td>
					
					
					
					</tr>
					<?php 
				}
				echo"</table>";
			}
			else
			{
				echo"<center>No product found in database</center>";
			}
		}
		else
		{
			echo"No result found";
		}
		mysqli_close($groceryDB); //close the connection
		
	}
	else
	{
		mysqli_close($groceryDB); //close the connection
	}?>
	
	<?php include 'footer.php';?>
</body>
</html>