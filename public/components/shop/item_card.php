<?php require_once "../model/items.php"; ?>

<?php $PriceList = array(); ?>

<?php require_once "../model/sort_items.php"; ?>



<!-- item card that have 3 lines and 4 column -->
<div class="Item_card">
    <div class='product_card_line'>

        <?php
        for ($i = 0; $i < 4; $i++) { // display 4 item for first row
            // access array of datas that stored in session varibles > PriceList0[index]
            echo "<div class='product_card'>
                                
                                    <div class='image-container'>
                                        <img src={$_SESSION['List' . $i][4]} alt='product img'>
                                        <button class='addToCart-btn' id={$i} onclick=sendItem_id($i)>
                                            +</button>
                                    </div>

                                    <div class='card-bottom'>
                                        <p> <a href='#'> {$_SESSION['List' . $i][1]} </a> </p>
                                        <p>\${$_SESSION['List' . $i][2]} </p>
                                        <button class='view-btn' >view</button>
                                    </div>
                                    
                                    </div>";
            $PriceList[$i] = $_SESSION['price_' . $i]; // add prices for each array indexes
        }

        ?>


    </div>

    <div class="product_card_line">
        <?php
        for ($i = 4; $i < 8; $i++) {
            echo "<div class='product_card'>
                                    
                                    <div class='image-container'>
                                        <img src={$_SESSION['List' . $i][4]} alt='product img'>
                                        <button class='addToCart-btn' id={$i} onclick=sendItem_id($i)>
                                            +</button>
                                    </div>

                                    <div class='card-bottom'>
                                        <p> <a href='#'> {$_SESSION['List' . $i][1]} </a> </p>
                                        <p>\${$_SESSION['List' . $i][2]} </p>
                                        <button class='view-btn' >view</button>
                                    </div>
                                    
                                    </div>";
            $PriceList[$i] = $_SESSION['price_' . $i]; // add prices for each array indexes
        }
        ?>


    </div>

    <div class="product_card_line">
        <?php
        for ($i = 8; $i < 12; $i++) {
            echo "<div class='product_card'>
                                                
                                                <div class='image-container'>
                                                    <img src={$_SESSION['List' . $i][4]} alt='product img'>
                                                    <button class='addToCart-btn' id={$i} onclick=sendItem_id($i)>
                                                        +</button>
                                                </div>

                                                <div class='card-bottom'>
                                                    <p> <a href='#'> {$_SESSION['List' . $i][1]} </a> </p>
                                                    <p>\${$_SESSION['List' . $i][2]} </p>
                                                    <button class='view-btn' >view</button>
                                                </div>
                                                
                                                </div>";
            $PriceList[$i] = $_SESSION['price_' . $i]; // add prices for each array indexes
        
        }
        $_SESSION["price_List"] = $PriceList; // store price list array as session varible because > sort by price
        ?>


    </div>
</div>
<!-- css file and js file for display toasts -->
<link rel="stylesheet" href="showToast/toast.css">
<script src='showToast/toast.js'> </script>;
<?php
if (isset($_SESSION['id'])) { // if user has logged then only show message
    require_once "showToast/toast.php";
} ?>


<?php // check user id set or not
echo '<script> var userID = "' . (isset($_SESSION['id']) ? "yes" : "no") . '";</script>';
?>
<script>

    //create new http form for send data js function to php GET global
    function sendItem_id(index) {
        if (userID === "no") {
            window.location.replace("login.php");
        } else {
            showToast() // open toast msg
            var xhr = new XMLHttpRequest();
            xhr.open("GET", `../model/cart.php?itemId=${index}`, true); // method name and page name with GET data(?itemid=)

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Request completed successfully
                    var response = xhr.responseText;
                    // Handle the response from the PHP function
                    // console.log(response);
                }
            };
            xhr.send();
        }
    }

</script>