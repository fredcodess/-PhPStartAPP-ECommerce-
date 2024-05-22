<?php
//Only display products if a category has been selected e.g. categories.php?tablename=2
require '../DataBase/database.php';
require '../templates/functions.php';
if (isset($_GET['category_id']))  {
    $stmtCate = $pdo->prepare('SELECT * FROM categories WHERE category_id = :category_id');
    $stmtProd = $pdo->prepare('SELECT * FROM products WHERE category_id = :category_id'); // Corrected parameter name

    $values = [
        'category_id' => $_GET['category_id'] // Corrected parameter name
    ];

    $stmtCate->execute($values);
    $stmtProd->execute($values);
    $product_categories = $stmtCate->fetch();

    echo loadTemplate('../templates/layout.html.php', [
        'output' => loadTemplate('categorieshtml.php', [
            'rows' => $stmtProd
        ])
    ]);
}
