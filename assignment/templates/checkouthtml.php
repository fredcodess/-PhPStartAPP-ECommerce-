<h2 class="contactform">Delivery Details</h2>
<form action="checkout.php" method="post" class="product-form">
    <div class="form-group">
        <label for="name">Product(s) Name(s):</label>
        <input type="text" id="product_name" name="product_name" required><br><br>
    </div>

    <div class="form-group">
        <label for="name">Full Name:</label>
        <input type="text" id="full_name" name="full_name" required><br><br>
    </div>

    <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br><br>
    </div>

    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required><br><br>
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
    </div>
    
    <input type="hidden" id="product_image" name="product_image">

    <?php
    // Retrieve total amount from URL query parameter
    $totalAmount = isset($_GET['total']) ? $_GET['total'] : '0.00';?>
    <input type="hidden" id="custId" name="product_price" value="<?php echo $totalAmount; ?>">


    <button type="submit" class="sub_btn">DONE</button>
    <h2>Total Amount</h2>
    <?php
   
    echo '<p>Total Amount: £' . htmlspecialchars($totalAmount) . '</p>';
 ?>
</form>