<hr />
<h2>Product Reviews</h2>
<section class="shop container">
<div class="shop_content">
<ul class="products">
<li class="reviewsList">
<?php foreach ($templateVars['rows'] as $contact) { ?>
    <h3><?=$contact['messagebox']?></h3>
    <p>QUESTION BY:<?=$contact['fullname']?></p>
    <p>REPLY: <?=$contact['answered']?></p>
    </br>

<?php } ?>
</div>
</section>