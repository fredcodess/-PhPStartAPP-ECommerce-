<?php
session_start();
require '../templates/functions.php';
require '../DataBase/database.php';

if (isset($_SESSION['loggedin'])){
 if (isset($_POST["add"])) {
    // Get the current date and time
    $date = new \DateTime();

    // Get form data
    $p_name = $_POST['p_name']; 
    $description = $_POST['description']; 
    $manufacturer = $_POST['manufacturer'];
    $price = $_POST['price']; 
    $date_added = $date->format('Y-m-d H:i:s');
    $category_id = $_POST['category_id'];
    
    

    #CODE HELP FROM A VIDEO FROM YOUTUDE
    // Check if an image is uploaded
    if ($_FILES["image"]["error"] == 4) {
        echo "<script> alert('Image Does Not Exist'); </script>";
    } else {
        // Get information about the uploaded image
        $fileName = $_FILES["image"]["name"];
        $fileSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];

        // Define valid image extensions
        $validImageExtension = ['jpg', 'jpeg', 'png'];

        // Get the image extension and convert it to lowercase
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));

        // Check if the image extension is valid
        if (!in_array($imageExtension, $validImageExtension)) {
            echo "<script> alert('Invalid Image Extension'); </script>";
        } else if ($fileSize > 1000000) { // Check if the image size is too large
            echo "<script> alert('Image Size Is Too Large'); </script>";
        } else {
            // Generate a unique name for the image


            // Move the uploaded image to the 'img/' directory
            move_uploaded_file($tmpName, 'uploads/' . $fileName);

            // Insert data into the database
            $stmt = $pdo->prepare("INSERT INTO products (p_name, description, manufacturer, price, date_added, category_id, image) 
                      VALUES ('$p_name', 'description' ,'$manufacturer', '$price', '$date_added', '$category_id', '$fileName')");
            $stmt->execute();

            // Display success message and redirect to 'data.php'
            echo loadTemplate('../templates/admin.layout.html.php', [
                'output' => 'SUCCESSFULLY ADDED']);
        }
    }
 }else {
	echo loadTemplate('../templates/admin.layout.html.php', [
    'output' => loadTemplate('addproductshtml.php', [])
 ]);
 }
}else{
    echo loadTemplate('../templates/admin.layout.html.php', [
        'output' => '<section class="shop container">
        <div class="shop_content">you are not logged in, <a href="admin.php">LOGIN HERE</a></div>
        </section>']);
} 
?>
