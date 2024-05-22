<?php
session_start();
require '../templates/functions.php';
require_once '../templates/databasetable.php';


    if (isset($_GET['category'])&&isset($_GET['manufacturer'])){
        $category_id=$_GET['category'];
        $manufacturer=$_GET['manufacturer'];
        $fields = ['category_id' => $_GET['category'], 'manufacturer' => $_GET['manufacturer']];
        $products=$productsTable->findRecordsByMultipleFields($fields);
        $pageTitle='NFJE - Products based on Categories and Manufacturers';
    }
    elseif (isset($_GET['category'])){
        $category_id=$_GET['category'];
        $products=$productsTable->findRecords('category_id', $category_id);
        $pageTitle='NFJE - Products based on Categories';
    }
    elseif (isset($_GET['search'])){
        
    }
    else{
        $products=$productsTable->findAllRecords();
        $pageTitle='NFJE - Products list';
    }




echo loadTemplate('../templates/layout.html.php', 
['title' => 'NFJE - Products List',
'categoriesTable'=>$categoriesTable,
'productsTable'=>$productsTable,
'output' => loadTemplate('../templates/categorieshtml.php', 
['products'=>$products,'pageTitle'=>$pageTitle])]);
?>