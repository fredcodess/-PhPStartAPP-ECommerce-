<?php
require '../templates/functions.php';
require '../DataBase/database.php';

$sql = 'SELECT * FROM `products` ORDER BY date_added DESC
LIMIT 10';
$row = $pdo->query($sql);


echo loadTemplate('../templates/layout.html.php', [
    'output' => loadTemplate('indexhtml.php',[
        'rows' => $row
    ])    
]);
?>