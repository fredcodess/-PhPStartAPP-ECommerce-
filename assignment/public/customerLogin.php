<?php
session_start();
require '../templates/functions.php';
require '../DataBase/database.php';

if (isset($_POST['submit'])){
    $stmt = $pdo->prepare('SELECT * FROM customerLogs WHERE username= :username');

    $values = [
        'username' => $_POST['username'],
    ];

    $stmt->execute($values);
    $user = $stmt->fetch();

    if (password_verify($_POST['password'], $user['password'])) {
        $_SESSION['customerLoggedin'] = true;
        $_SESSION['userId'] = $user['customer_id'];

        header('location: index.php');
       }
       else {
        $output = 'Sorry, your account could not be found';
    }   
}
else{
    echo loadTemplate('../templates/layout.html.php', [
        'output' => loadTemplate('loginhtml.php',[])    
    ]);
}