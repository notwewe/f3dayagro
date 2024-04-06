<?php
    session_start();
    $username = isset($_SESSION['username']) ? $_SESSION['username'] : "Guest";
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css?v=<?php echo time(); ?>">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <h2>Welcome, <?php echo ($username !== "Guest") ? $username : "Guest"; ?>!</h2>
        <p>This is your dashboard. You can customize it to display various information and actions relevant to the user.</p>
        <p>For example, you can show recent activities, notifications, user profile settings, or any other relevant content here.</p>
        <!-- Dashboard content goes here -->
       
        <!-- Button to view products -->
        <form action="products.php" method="GET">
            <button type="submit" class="view-products-btn">View Products</button>
        </form>
    </div>
 
    <footer class="footer">
        <p>Zak Floreta<br> BSCS - 2</p>
    </footer>
</body>
</html>