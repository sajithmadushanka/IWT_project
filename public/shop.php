<head>
    <title>Shop</title>
</head>
<?php session_start(); ?>
    <!-- // require header here  -->
    <?php require_once "components/reusable/header.php" ?>

    
    <link rel="stylesheet" href="css/store_animation.css">

    <!-- //require search bar here  -->
    <?php require_once "components/shop/search_bar.php" ?>


  <!-- // require filters  -->
    <?php require_once "components/shop/filter.php" ?>
          


    <!-- // require item  card here  -->
    <?php require_once "components/shop/item_card.php" ?>

    <!-- // require footer here  -->
    <?php require_once "components/reusable/footer.php" ?>
</body>

</html>
