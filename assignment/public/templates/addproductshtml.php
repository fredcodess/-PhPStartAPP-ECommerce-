<?php
require '../DataBase/database.php';
?>
<hr />
<h2 class="contactform">Add Products</h2>
<form action="" method="post" enctype="multipart/form-data" class="product-form">
    <div class="form-group">
        <label for="product_name">Product Name</label>
        <input type="text" name="product_name" id="product_name" placeholder="Product Name" required />
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="text" name="price" id="price" placeholder="Price" required />
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" required />
    </div>
    <div class="form-group">
        <label for="tablename">Category</label>
        <select name="tablename" id="tablename" required>
            <?php
            $stmt = $pdo->prepare('SELECT * FROM categories');
            $stmt->execute();

            foreach ($stmt as $row) {
                echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
            }
            ?>
        </select>
    </div>
    <input type="submit" name="add" value="Add" class="submit-btn" />
</form>
<hr />
