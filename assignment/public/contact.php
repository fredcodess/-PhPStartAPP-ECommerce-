<?php
session_start();
require '../templates/functions.php';
require '../DataBase/database.php';

if (isset($_SESSION['customerLoggedin'])){
 if (isset($_POST['submit'])) {

	$date = new \DateTime();
	$record = [	
        'customer_id' => $_SESSION['userId'],
	    'productname' => $_POST['productname'],
        'fullname' => $_POST['fullname'], 
        'email' => $_POST['email'], 
        'messagebox' => $_POST['messagebox'], 
        'messagedate' => $date->format('Y-m-d H:i:s')
	];

	insert($pdo, 'contact', $record);
	header('location: index.php');

	#code help from php.net
	$to = 'admin@fredtronics.co.uk';
	$subject = 'New Question Waiting For Answer';
	$message = 'New Question: ' . $_POST['messagebox'];
	mail($to, $subject, $message);
	
 }else {
	echo loadTemplate('../templates/layout.html.php', [
    'output' => loadTemplate('contacthtml.php', [])
 ]);
 }
}
else{
	if (isset($_POST['submit'])) {

		$date = new \DateTime();
		$record = [	
			'productname' => $_POST['productname'],
			'fullname' => $_POST['fullname'], 
			'email' => $_POST['email'], 
			'messagebox' => $_POST['messagebox'], 
			'messagedate' => $date->format('Y-m-d H:i:s')
		];
	
		insert($pdo, 'contact', $record);
		header('location: index.php');

		#code help from php.net
		$to = 'admin@fredtronics.co.uk';
		$subject = 'New Question Waiting For Answer';
		$message = 'New Question: ' . $_POST['messagebox'];
		mail($to, $subject, $message);
	
	}else {
		echo loadTemplate('../templates/layout.html.php', [
		'output' => loadTemplate('contacthtml.php', [])
	 ]);
	 }
}
?>