<?php
session_start();
unset($_SESSION['customerLoggedin']);
header('location: index.php');
?>