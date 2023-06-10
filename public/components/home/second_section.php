<?php 
    $url1 = $_SESSION['Item_imageUrl_0'];
    $url2 = $_SESSION['Item_imageUrl_1'];
    $url3 = $_SESSION['Item_imageUrl_2'];
?>
<div class="secondSection">
        <h3>Trending Products</h3>
        <div class="product_card_line">
            <div class="product_card">
                <img src=<?php echo $url1 ?> alt="product img">
                <p><?php echo $_SESSION['price_0']?></p>
                <p><a href="../public/shop.php"><?php echo $_SESSION['title_0']?></a></p>
            </div>
            <div class="product_card">
                <img src=<?php echo $url2 ?> alt="product img">
                <p><?php echo $_SESSION['price_1']?></p>
                <p><a href="../public/shop.php"><?php echo $_SESSION['title_1']?></a></p>
            </div>
            <div class="product_card">
                <img src=<?php echo $url3 ?> alt="product img">
                <p><?php echo $_SESSION['price_2']?></p>
                <p><a href="../public/shop.php"><?php echo $_SESSION['title_2'] ?> </a></p>
            </div>
        </div>
    </div>
