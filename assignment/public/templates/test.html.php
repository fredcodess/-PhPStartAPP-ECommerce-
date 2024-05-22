<ul>
    <?php 
            require 'databasetable.php';
            $categories=$categoriesTable->findAllRecords();
            foreach ($categories as $category){
                echo '<li><a href="products.php?category='.$category['category_id']. '">'.$category['name'].'</a>';
                $products=$productsTable->findRecordsOrdered('manufacturer','ASC','category_id',$category['category_id']);
                $previous='';
                echo '<ul>';
                foreach ($products as $product){
                    if ($previous != $product['manufacturer']){
                        echo '<li><a href="products.php?category='.$product['category_id'].'?manufacturer='.$product['manufacturer'].'">'.$product['manufacturer'].'</a></li>';
                    }
                    $previous = $product['manufacturer'];
                }
                echo '</ul></li>';
    }?>
</ul>