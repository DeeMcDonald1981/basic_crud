<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Edit Product Data</title>
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
		input[type="text"], textarea {
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
            display: block;
            margin-top: 1rem;
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
<h1>Edit Product Data</h1>
<?php

// Connect and select:
$dbc = mysqli_connect('localhost', 'root', '', 'packt_online_shop');

// Set the character set:
mysqli_set_charset($dbc, 'utf8');

if (isset($_GET['productid']) && is_numeric($_GET['productid'])) { // Display the entry in a form:

	// Define the query.
	$query = "SELECT productname, netretailprice, wholesaleprice FROM products WHERE productid={$_GET['productid']}";
	if ($r = mysqli_query($dbc, $query)) { // Run the query.

		$row = mysqli_fetch_array($r); // Retrieve the information.

		// Make the form:
		print '<form action="edit.php" method="post">
		<p>
			<label for="title">Product Name:</label>
			<input type="text" name="productname" size="40" maxsize="100" value="' . htmlentities($row['productname']) . '">
		</p>
		<p>
			<label for="entry">Product Price:</label>
			<textarea name="netretailprice" cols="40" rows="5">' . htmlentities($row['netretailprice']) . '</textarea>
		</p>
		<p>
			<label for="entry">Wholesale Price:</label>
			<textarea name="wholesaleprice" cols="40" rows="5">' . htmlentities($row['wholesaleprice']) . '</textarea>
		</p>
		<input type="hidden" name="productid" value="' . $_GET['productid'] . '">
		<input type="submit" name="submit" value="Update this Entry!">
        <button class="btn"><a href="view.php">Home</a>
		</form>
        ';
            
	} else { // Couldn't get the information.
		print '<p style="color: red;">Could not retrieve the blog entry because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
	}

} elseif (isset($_POST['productid']) && is_numeric($_POST['productid'])) { // Handle the form.

	// Validate and secure the form data:
	$problem = FALSE;
	if (!empty($_POST['productname']) && !empty($_POST['netretailprice']) && (!empty($_POST['wholesaleprice']))) {
		$title = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['productname'])));
		$entry = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['netretailprice'])));
		$wholesale = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['wholesaleprice'])));
	} else {
		print '<p style="color: red;">Please submit both a title and an entry.</p>';
		$problem = TRUE;
	}

	if (!$problem) {

		// Define the query.
		$query = "UPDATE products SET productname='$title', netretailprice='$entry', wholesaleprice='$wholesale' WHERE productid={$_POST['productid']}";
		$r = mysqli_query($dbc, $query); // Execute the query.

		// Report on the result:
		if (mysqli_affected_rows($dbc) == 1) {
			print '<p>The product data has been updated.</p> <button class="btn"><a href="view.php">Home</a></button>';
		} else {
			print '<p style="color: red;">Could not update the data because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p><button class="btn"><a href="view.php">Home</a>';
		}

	} // No problem!

} else { // No ID set.
	print '<p style="color: red;">This page has been accessed in error.</p>';
} // End of main IF.

mysqli_close($dbc); // Close the connection.
?>
</body>
</html>
