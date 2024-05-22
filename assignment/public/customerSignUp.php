<?php
require '../templates/functions.php';

if (isset($_POST['add'])) {

	require '../DataBase/database.php';

	$record = [
		'username' => $_POST['username'], 
        'password' => password_hash($_POST['password'],PASSWORD_DEFAULT)
	];

	insert($pdo, 'customerLogs', $record);


	header('location: customerLogin.php');


}
else {
	echo loadTemplate('../templates/layout.html.php', [
    'output' => loadTemplate('registerhtml.php', [])
 ]);
}