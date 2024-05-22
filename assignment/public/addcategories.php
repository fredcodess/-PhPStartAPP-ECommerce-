<?php
session_start();
require '../templates/functions.php';

if (isset($_SESSION['loggedin'])){

 if (isset($_POST['submit'])) {
    require '../DataBase/database.php';

	$record = [
		'name' => $_POST['name']
	];

	insert($pdo, 'categories', $record);
	header('location: addproducts.php');

	
 }else{
	echo loadTemplate('../templates/admin.layout.html.php', [
        'output' => loadTemplate('addcategorieshtml.php', [])
    ]);
 }
}
else{
	echo loadTemplate('../templates/admin.layout.html.php', [
		'output' => '<section class="shop container">
        <div class="shop_content">you are not logged in, <a href="admin.php">LOGIN HERE</a></div>
        </section>']);
}
?>
