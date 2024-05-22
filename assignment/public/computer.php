<?php
require '../templates/functions.php';
require '../DataBase/database.php';

$sql = 'SELECT * FROM `products`';
$row = $pdo->query($sql);


echo loadTemplate('../templates/layout.html.php', [
    'output' => loadTemplate('computer.html.php',[
        'rows' => $row
    ])    
]);
?>