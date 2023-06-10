<?php require_once "../config/db.php" ?>


<?php 

if (!isset($_SESSION['id'])) {
    // Redirect to the login page if the user is not logged in
    header("Location: login.php");
    exit();
}else{
    $userId = $_SESSION['id'];
    $query ="SELECT *
    FROM items i
    WHERE i.item_id_ IN (
        SELECT item_id_
        FROM carts
        WHERE user_id_ = $userId);";

    $result = mysqli_query($con,$query);
    if(!$result){
        echo "query error";
    }
    else{
        $index = 0; // Initialize an index variable
        $cart_len = mysqli_num_rows($result);
        $_SESSION['cart_len'] = $cart_len;
        
    // store all details on session varibles
   while ($details = mysqli_fetch_assoc($result)) {
           $_SESSION['cart_item_id_' . $index] = $details['item_id_'];
           $_SESSION['cart_title_' . $index] = $details['title_'];
           $_SESSION['cart_price_' . $index] = $details['price_'];
           $_SESSION['cart_des_' . $index] = $details['description_'];
          

        $imageData = $details['img_'];
        // Generate the base64-encoded image string
        $encodedImage = base64_encode($imageData);
           $_SESSION['cart_Item_imageUrl_' . $index] = 
           "data:image/jpg;charset=utf-8;base64,{$encodedImage}";

       
       $index++; // Increment the index for each iteration
   }
   
    }
}

?>
<?php mysqli_close($con);?>