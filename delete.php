<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Delete a Blog Entry</title>
    <style>
        /* styles.css */

/* Basic reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    color: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    flex-direction: column;
    
}

/* Container for the form */
.container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 600px;
}

/* Heading styling */
h1 {
    text-align: center;
    margin-bottom: 20px;
}

/* Form styling */
form {
    display: flex;
    flex-direction: column;
}

p {
    margin-bottom: 15px;
}

h3 {
    font-size: 1.2em;
    margin-bottom: 10px;
}

input[type="submit"] {
    background-color: #ff4d4d;
    color: white;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1em;
}

input[type="submit"]:hover {
    background-color: #ff2424;
}

.btn{
    display: inline-block;
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
    <h1>Delete an Entry</h1>

    <?php

    // Connect and select:
    $dbc = mysqli_connect('localhost', 'root', '', 'packt_online_shop');

    if (isset($_GET['productid']) && is_numeric($_GET['productid'])) { // Display the entry in a form:

        // Define the query:
        $query = "SELECT productname, netretailprice, wholesaleprice FROM products WHERE productid={$_GET['productid']}";
        if ($r = mysqli_query($dbc, $query)) { // Run the query.

            $row = mysqli_fetch_array($r); // Retrieve the information.
              ?>
                <div class="container">
                    <form action="delete.php" method="post">
                        <p>Are you sure you want to delete this entry?</p>
                        <p><h3> <?php echo $row['productname'] ?></h3></p>
                        <p>Price: <?php echo $row['netretailprice'] ?></p>
                        <p>Wholesale Price : <?php echo $row['wholesaleprice'] ?></p>
                        <input type="hidden" name="productid" value="<?php echo $_GET['productid'] ?>">
                        <input type="submit" names="submit" value="Delete this Entry">
                        <a href="view.php"><button class="btn">Home</btn></a>

                    </form>
                </div>
              <?php

        } else { // Couldn't get the information.
            print '<p style="color: red;">Could not retrieve the blog entry because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
        }

    } elseif (isset($_POST['productid']) && is_numeric($_POST['productid'])) { // Handle the form.

        // Define the query:
        $query = "DELETE FROM products WHERE productid={$_POST['productid']} LIMIT 1";
        $r = mysqli_query($dbc, $query); // Execute the query.

        // Report on the result:
        if (mysqli_affected_rows($dbc) == 1) {
            print '<p>The blog entry has been deleted.</p>
            <button class="btn"><a href="view.php">Home</a>';
        } else {
            print '<p style="color: red;">Could not delete the blog entry because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>
            <button class="btn"><a href="view.php">Home</a>';
        }

    } else { // No ID received.
        print '<p style="color: red;">This page has been accessed in error.</p>
        <button class="btn"><a href="view.php">Home</a>';
    } // End of main IF.

    mysqli_close($dbc); // Close the connection.
    ?>

</body>
</html>
