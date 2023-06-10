<form action="../model/img_upload.php" method="post" enctype="multipart/form-data">
    <label>Select Image File:</label>
    <input type="file" name="image">
    <input type="submit" name="submit" value="Upload">
</form>
<?php 
// $imageData = file_get_contents('assets/products-img/01.jpg');
// $stmt = $con->prepare("INSERT INTO images (image_data) VALUES (?)");
// $stmt->bind_param("b", $imageData);
// $stmt->send_long_data(0, $imageData); // For larger binary data

// $stmt->execute();
// $stmt->close();
?>


