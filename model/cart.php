<?php require_once "../config/db.php" ?>

<?php
echo  $_SESSION['id'];
    if(!isset($_SESSION['id'])){
        header("Location: ../public/login.php");
    }
?>
<?php
session_start();
$itemId = $_GET['itemId']; // access itemid
$item_id_ = $_SESSION['item_id_'.$itemId];

// Check if the user is logged in and the necessary data is available
if (isset($_SESSION['id']) && isset($item_id_)) {
    // Retrieve the data from the POST request
    
    $user_id = $_SESSION['id'];

    // Perform the database insertion using the retrieved data
    // ...
    // Insert the data into the carts table
    $query = "INSERT INTO carts (item_id_, user_id_) VALUES ('$item_id_', '$user_id')";
    // Execute the query and handle any errors
    
    $result = mysqli_query($con, $query);

    // Provide a response indicating success or failure
    if ($result) {
        echo "Data inserted successfully".$itemId;
        $_SESSION['is_empty'] = false;
        echo "";
    } else {
        echo "Failed to insert data";
    }
} else {
    echo "Invalid request";
}
?>
