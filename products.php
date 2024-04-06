<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arduino Products</title>
    <link rel="stylesheet" type="text/css" href="products.css">
</head>
<body>
    <div class="container">
        <h2>Arduino Products</h2>
 
        <!-- Search form -->
        <form action="" method="GET">
            <input type="text" name="search" placeholder="Search products">
            <button type="submit">Search</button>
        </form>
 
        <table>
            <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'connect.php';
 
                    // Check if search query is set
                    if (isset($_GET['search'])) {
                        // Get search term and sanitize it
                        $search = mysqli_real_escape_string($connection, $_GET['search']);
                        // Construct SQL query with search condition
                        $sql = "SELECT * FROM tblproducts WHERE ProductName LIKE '%$search%' OR ProductDesc LIKE '%$search%'";
                    } else {
                        // Default SQL query to fetch all products
                        $sql = "SELECT * FROM tblproducts";
                    }
 
                    // Execute the query
                    $result = mysqli_query($connection, $sql);
 
                    // Display results
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$row['ProductID']."</td>";
                        echo "<td>".$row['ProductName']."</td>";
                        echo "<td>$".$row['ProductPrice']."</td>";
                        echo "<td>".$row['ProductDesc']."</td>";
                        echo "</tr>";
                    }
 
                    mysqli_close($connection);
                ?>
            </tbody>
        </table>
    
    </div>
</body>
</html>