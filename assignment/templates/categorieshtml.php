<section class="shop container">
    <div class="shop_content">
        <?php foreach($products as $product) { ?>
        <div class="product_box">
            <img src="uploads/<?php echo $product['image']; ?>" alt="<?php echo $product['p_name']; ?>" class="product_img">
            <h2 class="product_title"><a class="indexList" href="viewreviews.php?id=<?=$product['id']?>"><?=$product['p_name']?></a></h2>
            <p class="description"><?php echo $product['description']; ?></p>
            <span class="price">£<?php echo $product['price']; ?></span>
            <i class="fa-solid fa-cart-shopping add_cart"></i>
        </div>
        <?php } ?>
    </div>
</section>