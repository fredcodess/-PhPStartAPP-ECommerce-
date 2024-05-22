<h1>NFJE's Electronics</h1>
<p>We offer a wide assortment of electronic products such as mobile phones, televisions, computers, and gaming consoles. Each item comes with a minimum one-year warranty, and we provide complimentary next-day delivery.</p>
<hr/>
<section class="shop container">
    <div class="shop_content">
        <?php foreach($templateVars['rows'] as $products) { ?>
        <div class="product_box">
            <img src="uploads/<?php echo $products['image']; ?>" alt="<?php echo $products['p_name']; ?>" class="product_img">
            <h2 class="product_title"><a class="indexList" href="viewreviews.php?id=<?=$products['id']?>"><?=$products['p_name']?></a></h2>
            <span class="price">£<?php echo $products['price']; ?></span>
            <i class="fa-solid fa-cart-shopping add_cart"></i>
        </div>
        <?php } ?>
    </div>
</section>