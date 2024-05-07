<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" type="text/css" href="cart.css">
</head>
<body>
    <div class="container">
        <h2>Shopping Cart</h2>

        <table>
            <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Price per Unit (PHP)</th>
                    <th>Product Description</th>
                    <th>Quantity</th>
                    <th>Total Price (PHP)</th>
                    <th>Action</th> <!-- New column for remove button -->
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'connect.php';

                    // Check if remove button is clicked
                    if(isset($_POST['remove'])) {
                        $product_id = $_POST['product_id'];

                        // Perform remove operation (delete from database)
                        $delete_query = "DELETE FROM tblcart WHERE ProductID = $product_id";
                        $delete_result = mysqli_query($connection, $delete_query);

                        // Check if the deletion was successful
                        if($delete_result) {
                            echo "<script>alert('Item removed successfully');</script>";
                            // Redirect to refresh the page and reflect the changes
                            header("Location: ".$_SERVER['PHP_SELF']);
                            exit();
                        } else {
                            echo "<script>alert('Failed to remove item');</script>";
                        }
                    }

                    // Fetch cart items from the database along with product details
                    $sql = "SELECT ci.*, p.ProductName, p.ProductPrice, p.ProductDesc
                            FROM tblcart ci
                            INNER JOIN tblproducts p ON ci.ProductID = p.ProductID";
                    $result = mysqli_query($connection, $sql);

                    $totalPrice = 0; // Initialize total price

                    // Display cart items
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$row['ProductID']."</td>";
                        echo "<td>".$row['ProductName']."</td>";
                        echo "<td>₱".$row['ProductPrice']."</td>"; // Display price with ₱ symbol
                        echo "<td>".$row['ProductDesc']."</td>";
                        echo "<td>".$row['Quantity']."</td>";

                        // Calculate total price for the current item
                        $itemTotal = $row['ProductPrice'] * $row['Quantity']; // Corrected column name
                        echo "<td>₱".$itemTotal."</td>"; // Display item total price with ₱ symbol
                        
                        // Remove button with form to submit the ProductID to remove
                        echo "<td><form method='post'><input type='hidden' name='product_id' value='".$row['ProductID']."'><button type='submit' name='remove'>Remove</button></form></td>";
                        
                        echo "</tr>";

                        // Add the item total to the overall total price
                        $totalPrice += $itemTotal;
                    }

                    mysqli_close($connection);
                ?>
            </tbody>
        </table>
        
        <!-- Display total price -->
        <p>Total Price: ₱<?php echo $totalPrice; ?></p>
    </div>
</body>
</html>
