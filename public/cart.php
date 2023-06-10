<?php
session_start();
if (!isset($_SESSION['id'])) {
    // Redirect to the login page if the user is not logged in
    header("Location: login.php");
    exit();
}
?>
<?php
$_SESSION['toLocation']  ='none';  
require_once "../model/retrieve_address.php"; ?>

<head>
    <title>Cart</title>
    <link rel="stylesheet" href="css/cart.css">
</head>

<!-- // require header here  -->
<?php require_once "components/reusable/header.php"; ?>


   <div>
    <div class="MY-CART">
            <h1>My Cart</h1>
        </div>
        <div class="select-all">
            <p>Select All</p>
            <input type="checkbox" name="select-all" value="select-all" id="select-all" onchange="selectAll()">
        </div>
   </div>

    <div class="main">
            <!-- // require cart items here  -->
            <?php require_once "components/cart/cart_items.php"; ?>

            <!-- // require place order and order total//    -->
            <!-- <?php require_once "components/cart/place_order.php"; ?> -->
   
    </div>
  
</body>

</html>
<?php 

// if cart is not empty then store all ids for [js all_ids array] and totalPrice from php session
if(!isset($_SESSION['is_empty'])){
    echo "<script> var all_ids = [] </script>";

    foreach($_SESSION['all_ids'] as $value){
        echo " <script>all_ids.push({$value}) </script>";
    }
    echo "<script> 
        const lenOfcart ={$_SESSION['cart_len']};
        var totalPrice = {$_SESSION['total_price']};
        </script>";
}
   
?>

<script>
    // when user clicked select all checkbox then dispay total of all cart items
    function selectAll(){
       var ischecked_all = document.getElementById("select-all").checked;
        
        if(ischecked_all){

            for(var i =0; i < lenOfcart; i++){ // all other checkbox mark as true
            document.getElementById(i).checked = true;
                                            }
            
            document.getElementById("price").innerHTML = totalPrice; // set total price
            
            // set items_ids list and total price as js sessionStoreage
            sessionStorage.setItem("item_ids",all_ids); 
            sessionStorage.setItem("total",totalPrice);

            
         }else{ // when user un clicked checkbox then all cart checkboxes should be unmarks
            for(var i =0; i < lenOfcart; i++){
                document.getElementById(i).checked = false;

               
            
                }
            // set list of item null on js session again
            sessionStorage.setItem("item_ids","");

            //display total price as 0
            document.getElementById("price").innerHTML = '0.00';
        
        }
         
    }
</script>

<script>
    // place order button function
    function placeOrder(){
        if(document.getElementById("price").innerHTML != 0) // if not equal price to 0 then only redirect next page
        {
           
            location.replace("shipping/show_address.php")
        }else{
            alert("please add items!"); // if selected item is empty then show about that
        }
    }
</script>
