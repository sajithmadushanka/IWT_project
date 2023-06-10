<?php session_start() ?>
  
    <?php 
    require_once "../model/items.php";
    ?>
 
    <!-- // require header -->
    <?php 
        require_once "components/reusable/header.php";
    ?>

   <!-- //require search bar  -->
    <?php require_once "components/home/search_bar.php"; ?>


   <!-- // require main section here  -->
    <?php require_once "components/home/main_section.php" ?>


    <!-- //third Section here  -->
    <?php require_once "components/home/second_section.php" ?>

    <!-- // third section here  -->
    <?php require_once  "components/home/third_section.php" ?>

    <!-- // footer require here  -->
    <?php 
        require_once "components/reusable/footer.php";
    ?>
</body>

</html>