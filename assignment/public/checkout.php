<?php

require "../vendor/autoload.php";

// Retrieve form data
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];

// Set Stripe secret key
$stripe_secret_key = "sk_test_51PDqWRKfDLHMjerKKuYH66rEENKHo9Sj4Wei5VubOG2q5OQFZ4kmhElrO4faaljloEQEMacL4pQQY47TWsLrURw300KHkORIcY";
\Stripe\Stripe::setApiKey($stripe_secret_key);

try {
    // Create a new Checkout Session
    $checkout_session = \Stripe\Checkout\Session::create([
        "mode" => "payment",
        "success_url" => "https://assignment.v.je/success.php",
        "cancel_url" => "https://assignment.v.je/text.php",
        "locale" => "auto",
        "line_items" => [
            [
                "quantity" => 1,
                "price_data" => [
                    "currency" => "gbp",
                    "unit_amount" => $product_price*100,
                    "product_data" => [
                        "name" => $product_name
                    ]
                ]
            ]       
        ]
    ]);

    // Redirect to the Checkout page
    http_response_code(303);
    header("Location: ". $checkout_session->url);
} catch (\Exception $e) {
    // Handle error
    http_response_code(500);
    echo "An error occurred: ". $e->getMessage();
}
