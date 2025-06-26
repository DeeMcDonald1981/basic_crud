<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Add A Product</title>
    	<style>
		body {
            display: flex;
			font-family: Arial, sans-serif;
			background-color: #f4f4f9;
			margin: 0;
			padding: 20px;
            flex-direction: column;
            justify-content:center;
            align-items:center;
            
		}
		h1 {
			color: #333;
		}
		form {
			width: 500px;
			margin: auto;
			background: #fff;
			padding: 20px;
			border-radius: 8px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}
		p {
			margin: 10px 0;
		}
		label {
			display: block;
			margin-bottom: 5px;
			color: #333;
		}
		input[type="text"], [type='number'], textarea {
			width: calc(100% - 22px);
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 4px;
			margin-bottom: 10px;
		}
		input[type="submit"] {
			background-color: #007BFF;
			color: white;
			border: none;
			padding: 10px 20px;
			border-radius: 4px;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #0056b3;
		}
        .btn{
            width: 145px;
            border-radius: 4px;
            display: inline-block;
            margin-top: 1rem;
            margin-left: 0.5rem;
            padding: 0.5rem;
            background: dodgerblue;
            border: none;
            a{
                color: #fff;
                text-decoration: none;
                font-size: 1rem;

            }
    
        }
</style>
</head>
<body>
<h1>Add Product To Catalog</h1>
<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Handle the form.

	// Validate the form data:
	$problem = FALSE;
	if (!empty($_POST['productcategoryid'])
     && !empty($_POST['supplierid']) 
     && !empty($_POST['productname']) 
     && !empty($_POST['netretailprice']) 
     && !empty($_POST['availablequantity']) 
     && !empty($_POST['wholesaleprice']) 
     && !empty($_POST['unitkgweight']) 
     && !empty($_POST['notes']) ) {
		$productcategoryid = trim(strip_tags($_POST['productcategoryid']));
		$supplierid = trim(strip_tags($_POST['supplierid']));
		$productname = trim(strip_tags($_POST['productname']));
		$netretailprice = trim(strip_tags($_POST['netretailprice']));
		$availablequantity = trim(strip_tags($_POST['availablequantity']));
		$wholesaleprice = trim(strip_tags($_POST['wholesaleprice']));
		$unitkgweight = trim(strip_tags($_POST['unitkgweight']));
		$notes = trim(strip_tags($_POST['notes']));
	} else {
		print '<p style="color: red;">Please submit all fields and try again.</p>';
		$problem = TRUE;
	}

	if (!$problem) {

		// Connect and select:
		$dbc = mysqli_connect('localhost', 'root', '', 'packt_online_shop');

		// Define the query:
		$unitkgweight = trim(strip_tags($_POST['unitkgweight']));
		$query = "INSERT INTO products (productcategoryid, supplierid, productname, netretailprice, availablequantity, wholesaleprice,unitkgweight, notes ) VALUES ($productcategoryid , $supplierid, '$productname', '$netretailprice', $availablequantity, '$wholesaleprice', $unitkgweight, '$notes') ";

		// Execute the query:
		if (@mysqli_query($dbc, $query)) {
			print '<p>The Product Catalog has been added!</p>';
		} else {
			print '<p style="color: red;">Could not add the procuct because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
		}

		mysqli_close($dbc); // Close the connection.

	} // No problem!

} // End of form submission IF.

// Display the form:
?>
<form action="add.php" method="post">
	<p>Product Category Id <input type="number" name="productcategoryid" max="6" min="1"></p>
	<p>Supplier ID <input type="number" name="supplierid" max="6" min="1"></p>
	<p>Product Name: <input type="text" name="productname"></p>
	<p>Net Retail Price <input type="number" name="netretailprice" min="0"></p>
	<p>Available Quantity <input type="number" name="availablequantity" min="0"></p>
	<p>Wholesale Price <input type="number" name="wholesaleprice" min="0"></p>
	<p>Unit Weight (kg) <input type="number" name="unitkgweight" min="0"></p>
	<p>Product Notes <textarea  name="notes" rows="10" size="40" maxsize="100"></textarea></p>
	
	<input type="submit" name="submit" value="Add This Product!"><button class="btn"><a href="view.php">Home</a>
</form>
</body>
</html>