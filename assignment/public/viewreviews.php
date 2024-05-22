<?php
session_start();
require '../templates/functions.php';
require '../DataBase/database.php';
/*$reviewsTable = new DatabaseTable($pdo, 'contact', 'productname');*/
if (isset($_SESSION['customerLoggedin'])){
    $stmt = $pdo->prepare('SELECT * FROM contact WHERE customer_id = :customer_id AND productname = :productname');

    $values = [
        'customer_id' => $_SESSION['userId'],
        'productname' => $_GET['id']
    ];
   
    $stmt->execute($values);
   
   
    echo loadTemplate('../templates/layout.html.php', [
       'output' => loadTemplate('viewreviewshtml.php',[
           'rows' => $stmt
       ])    
    ]);
}
else{
    $stmt = $pdo->prepare('SELECT * FROM contact WHERE productname = :productname');

 $values = ['productname' => $_GET['id']];

 $stmt->execute($values);


 echo loadTemplate('../templates/layout.html.php', [
    'output' => loadTemplate('viewreviewshtml.php',[
        'rows' => $stmt
    ])    
 ]);
}

?>



