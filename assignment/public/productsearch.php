<?php
session_start();
require '../templates/functions.php';
require_once '../templates/databasetable.php';

echo loadTemplate('../templates/layout.html.php', 
['title' => 'NFJE - Product Search',
'categoriesTable'=>$categoriesTable,
'productsTable'=>$productsTable,
'output' => loadTemplate('../templates/productsearch.html.php', 
['productsTable'=>$productsTable])]);
?>