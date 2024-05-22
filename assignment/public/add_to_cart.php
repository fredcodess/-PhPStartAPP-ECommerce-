<?php
session_start();

if (isset($_POST['add_to_cart'])) {
    // Retrieve product ID from form
    $product_id = $_POST['product_id'];

    // Initialize cart if not already set
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Add product ID to cart
    $_SESSION['cart'][] = $product_id;

    // Redirect back to the product display page
    header("Location: mobile.php");
    exit();
}
?>
