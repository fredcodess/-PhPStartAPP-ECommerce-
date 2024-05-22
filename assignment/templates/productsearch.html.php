<h3>Product Search</h3>
<form action="" method="post">
    <input type="text" name="searchValue" placeholder="Search for a product here..." />
    <input type="submit" name="submit" value="Search!" />
</form>

<?php
if (isset($_POST['submit']) && $_POST['searchValue'] !== '') {
    $products = $productsTable->findAllProductsSearch($_POST['searchValue']);
?>
<section class="shop container">
    <div class="shop_content">
    <?php foreach ($products as $product) { ?>
        <div class="product_box">
            <img src="uploads/<?php echo $product['image']; ?>" alt="<?php echo $product['p_name']; ?>"
                class="product_img">
            <h2 class="product_title"><?php echo $product['p_name']; ?></h2>
            <span class="price">£<?php echo $product['price']; ?></span>
            <i class="fa-solid fa-cart-shopping add_cart"></i>
        </div>
    <?php } // Closing the foreach loop ?>
    </div>
</section>
<?php
}
?>

