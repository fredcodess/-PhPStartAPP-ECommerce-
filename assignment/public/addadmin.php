<?php
session_start();
require '../templates/functions.php';
require '../DataBase/database.php';

if (isset($_SESSION['loggedin'])){
 if (isset($_POST['add'])) {

	$record = [
		'username' => $_POST['username'], 
        'password' => password_hash($_POST['password'],PASSWORD_DEFAULT)
	];

	insert($pdo, 'username', $record);
	header('location: addproducts.php');
 }
 else {
	echo loadTemplate('../templates/admin.layout.html.php', [
    'output' => loadTemplate('registerhtml.php', [])
 ]);
 }
}
else {
	echo loadTemplate('../templates/admin.layout.html.php', [
		'output' => '<section class="shop container">
        <div class="shop_content">you are not logged in, <a href="admin.php">LOGIN HERE</a></div>
        </section>']);
}
?> 