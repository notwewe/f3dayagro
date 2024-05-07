<?php
session_start();
include 'connect.php';

// Retrieve session variables
$username = isset($_SESSION['username']) ? $_SESSION['username'] : "Guest";
$uniqueid = isset($_SESSION['uniqueid']) ? $_SESSION['uniqueid'] : ""; 

// Redirect to login if user is not authenticated
if ($username === "Guest") {
    header("Location: login.php");
    exit();
}
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
        <h2>Welcome, <?php echo $username; ?>!</h2>
        <p>This is your dashboard. You can customize it to display various information and actions relevant to the user.</p>
        <p>For example, you can show recent activities, notifications, user profile settings, or any other relevant content here.</p>
        <!-- Dashboard content goes here -->
       
        <!-- Button to view products -->
        <form action="products.php" method="GET">
            <button type="submit" class="view-products-btn">View Products</button>
        </form> <br>

        <!-- Button to view wishlist -->
        <form action="wishlist.php" method="GET">
            <button type="submit" class="view-products-btn">View Wishlist</button>
        </form> <br>

        <form action="cart.php" method="GET">
            <button type="submit" class="view-products-btn">View Cart</button>
        </form>

        <!-- Buttons for Edit Profile and Delete Account -->
        <div class="profile-actions">
            <!-- Link the Edit Profile button to userprofile.php -->
            <a href="userprofile.php?uniqueid=<?php echo $uniqueid; ?>" class="edit-profile-btn">Edit Profile</a>
        </div>
    </div>
 
    <footer class="footer">
        <p>Francis Wedemeyer Dayagro<br> BSCS - 2</p>
    </footer>
</body>
</html>
