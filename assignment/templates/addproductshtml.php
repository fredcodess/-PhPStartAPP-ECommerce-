<?php
require '../DataBase/database.php';
?>
<hr />
<h2 class="contactform">Add Products</h2>
<form action="" method="post" enctype="multipart/form-data" class="product-form">
    <div class="form-group">
        <label for="p_name">Product Name</label>
        <input type="text" name="p_name" id="p_name" placeholder="Product Name" required />
    </div>
    <div class="form-group">
        <label for="p_name">Description</label>
        <input type="text" name="description" id="description" placeholder="Description" required />
    </div>
    <div class="form-group">
        <label for="manufacturer">Manufacturer</label>
        <input type="text" name="manufacturer" id="manufacturer" placeholder="Manufacturer" required />
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
        <label for="category_id">Category</label>
        <select name="category_id">
            <?php
            $stmt = $pdo->prepare('SELECT * FROM categories');
            $stmt->execute();

            foreach ($stmt as $row) {
                echo '<option value="' . $row['category_id'] . '">' . $row['name'] . '</option>';
            }
            ?>
        </select>
    </div>
    <input type="submit" name="add" value="Add" class="submit-btn" />
</form>
<hr />
