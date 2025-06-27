<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>View Products</title>
    <style>
        /* Basic reset for margins and paddings */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body styling */
        body {
            font-family: Arial, sans-serif; /* Simple and clean font */
            background-color: #f4f4f9; /* Light background color */
            color: #333; /* Dark text color for readability */
            line-height: 1.6;
            padding: 20px;
        }

        /* Container styling */
        .container {
            max-width: 800px; /* Limit the width of the container */
            margin: 0 auto; /* Center the container */
            background-color: #fff; /* White background for content */
            padding: 20px;
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
        }

        /* Header styling */
        h1 {
            text-align: center; /* Center the header text */
            margin-bottom: 20px;
        }

        /* Entry styling */
        .entry {
            margin-bottom: 20px; /* Space between entries */
            padding: 15px;
            border-radius: 8px; /* Rounded corners for entries */
            background-color: #f9f9f9; /* Light background color for entries */
        }

        /* Entry title styling */
        .entry h3 {
            margin-bottom: 10px;
        }

        /* Links styling */
        .entry a {
            margin-right: 10px; /* Space between links */
            text-decoration: none; /* Remove underline from links */
            color: #007bff; /* Blue color for links */
        }

        .entry a:hover {
            text-decoration: underline; /* Underline links on hover */
        }

        .nav{
            text-align: center;
            background: #ccc;

            .btn{
                background: #ccc;
                border: none;
                font-size: 1.5rem;
                
                a{
                    color: #fff;

                    text-decoration: none;
                }
            }
        }
    </style>
</head>
<body>
<div class="nav"><button class="btn"><a href="add.php">Add Products</a></div>
<div class="container">
    <h1>Packt Online Shop</h1>
    <?php 
    // Connect and select:
    $dbc = mysqli_connect('localhost', 'root', '', 'online_shop');

    // Define the query:
    $query = 'SELECT * FROM products ORDER BY productid DESC limit 50';

    if ($r = mysqli_query($dbc, $query)) { // Run the query.

        // Retrieve and print every record:
        while ($row = mysqli_fetch_array($r)) {
            print "<div class=\"entry\"><h3>{$row['productname']}</h3>
            Price: {$row['netretailprice']}<br> <p>Wholesale Price: {$row['wholesaleprice']}</p>
            <p>Description: {$row['notes']}</p>
            <a href=\"edit.php?productid={$row['productid']}\">Edit</a>
            <a href=\"delete.php?productid={$row['productid']}\">Delete</a>
            </div>\n";
        }

    } else { // Query didn't run.
        print '<p style="color: red;">Could not retrieve the data because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
    } // End of query IF.

    mysqli_close($dbc); // Close the connection.
    ?>
</div>

</body>
</html>
