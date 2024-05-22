<section class="shop container">
    <div class="shop_content">
        <?php foreach($templateVars['rows'] as $products) { ?>
        <div class="product_box">
            <img src="<?php echo $products['image']; ?>" alt="<?php echo $products['p_name']; ?>" class="product_img">
            <h2 class="product_title"><?php echo $products['p_name']; ?></h2>
            <span class="price">£<?php echo $products['price']; ?></span>
            <i class="fa-solid fa-cart-shopping add_cart"></i>
        </div>
        <?php } ?>
    </div>
</section>