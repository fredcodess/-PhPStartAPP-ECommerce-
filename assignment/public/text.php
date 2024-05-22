<?php
require '../DataBase/database.php';
require '../templates/functions.php';
echo loadTemplate('../templates/layout.html.php', [
    'output' => loadTemplate('checkouthtml.php',[])    
]);
?>