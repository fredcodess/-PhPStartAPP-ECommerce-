<?php
session_start();
require '../templates/functions.php';
require '../DataBase/database.php';

if (isset($_SESSION['loggedin'])){
 if (isset($_POST['submit'])){
    $stmt = $pdo->prepare('UPDATE contact SET answered = :answered, admin_id = :admin_id WHERE id = :id');

    $values = [
        'answered' => $_POST['answered'],
        'id' => $_POST['id'],
        'admin_id' => $_SESSION['admin_id']
    ];

    $stmt->execute($values);
    $output = 'Question Answered';

    $to = 'customer@gmail.com';
	$subject = 'Question Answered';
	$message = 'Answer: ' . $_POST['answered'];
	mail($to, $subject, $message);

 }
 else {
    $stmt = $pdo->prepare('SELECT * FROM contact WHERE id = :id');
    $values = [
        'id' => $_GET['id']
    ];
    $stmt->execute($values);
    $contact = $stmt->fetch();
    $output = loadTemplate('answerhtml.php', ['contact' => $contact]);

 }
}else{
    echo loadTemplate('../templates/admin.layout.html.php', [
        'output' => 'you are not logged in, <a href="admin.php">LOGIN HERE</a>']);
}  
require '../templates/admin.layout.html.php';
