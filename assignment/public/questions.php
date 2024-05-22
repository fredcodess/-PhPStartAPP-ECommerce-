<?php
session_start();
require '../templates/functions.php';
require '../DataBase/database.php';

if (isset($_SESSION['loggedin'])){
 if (isset($_POST['answered'])) {
    $answered = $_POST['answered'];
    $sql = "SELECT * FROM contact WHERE answered IS NOT NULL";
 } elseif (isset($_POST['unanswered'])) {
    $sql = "SELECT * FROM contact WHERE answered IS NULL";
 } elseif (isset($_POST['allquestions'])) {
   $sql = "SELECT * FROM contact";
 } else{
   // Default to retrieving all questions (answered and unanswered)
    $sql = "SELECT * FROM contact";
 }
 $row = $pdo->query($sql);



 echo loadTemplate('../templates/admin.layout.html.php', [
    'output' => loadTemplate('questionshtml.php',[
        'rows' => $row
    ])    
 ]);
}else{
   echo loadTemplate('../templates/admin.layout.html.php', [
      'output' => '<section class="shop container">
      <div class="shop_content">you are not logged in, <a href="admin.php">LOGIN HERE</a></div>
      </section>']);
} 

?>