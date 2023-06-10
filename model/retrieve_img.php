<?php
if(isset($_GET['x']))
        {
            session_start();
        } 
        ?>

<?php

require_once "../config/db.php";

// Get image data from database
$result = $con->query("SELECT image_ FROM users WHERE id_ = {$_SESSION['id']}");

$row = $result->fetch_assoc(); // Fetch the image data
// Check if a row was found
if (!is_null($row['image_'])) {
    $imageData = $row['image_'];
   
    // Generate the base64-encoded image string
    $encodedImage = base64_encode($imageData);

    // Store the image URL in session
    $_SESSION['user_img_url'] = "<img src='data:image/jpg;charset=utf-8;base64,{$encodedImage}'
    alt='User Image' style='width: 200px; height: 200px;'>";
    
    if(isset($_GET['x'])){
         header("Location: ../public/account.php");
    }
    

} else {
    $_GET['no_img'] = true;
    //  echo "Image not found for the user.";
}
?>

