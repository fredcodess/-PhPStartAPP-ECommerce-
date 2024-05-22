<?php
session_start();
require '../templates/functions.php';
require '../DataBase/database.php';

if (isset($_POST['submit'])){
    $stmt = $pdo->prepare('SELECT * FROM username WHERE username= :username');

    $values = [
        'username' => $_POST['username'],
    ];

    $stmt->execute($values);
    $user = $stmt->fetch();

    if (password_verify($_POST['password'], $user['password'])) {
        $_SESSION['loggedin'] = true;
        $_SESSION['admin_id'] = $user['admin_id'];
        #first make a pdo
        #make requestb to the database
        header('location: addproducts.php');
       }
       else {
        $output = 'Sorry, your account could not be found';
    }   
}
else{
    echo loadTemplate('../templates/admin.layout.html.php', [
        'output' => loadTemplate('loginhtml.php',[])    
    ]);
}
