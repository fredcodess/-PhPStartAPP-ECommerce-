<?php
require '../DataBase/database.php';
?>

<hr />

<h2 class="contactform">Contact form</h2>
<form action="" method="POST" class="product-form">
    <input type="hidden" name="customer_id" />
    <div class="form-group">
        <label>Full Name</label>
        <input type="text" name="fullname" placeholder="Full Name" required />
    </div>
    <div class="form-group">
        <label>Product Name</label><select name="productname">
            <?php

        $stmt = $pdo->prepare('SELECT * FROM products');
        $stmt->execute();

        foreach ($stmt as $row) {
	        echo '<option value="' . $row['id'] . '">' . $row['p_name'] . '</option>';
        }

        ?>
        </select>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" placeholder="Email" required />
    </div>
    <div class="form-group">
        <label>Message</label>
        <textarea name='messagebox' placeholder="Message (Max 255 chars)" required></textarea>
    </div>
    <input type="submit" name="submit" value="submit" class="submit-btn" />
</form>
<hr />