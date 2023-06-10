<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/index_animation.css">
</head>

<body>
    <header>
        <div class="logo">
            <a href="index.php"><img src="assets/logo.png" alt="logo" width="400px"></a>
        </div>
        <div class="menulinks">
            <a href="index.php">Home</a>
            <a href="shop.php">Store</a>
            <a href="page/about_us.php">About Us</a>
            <a href="page/help.php">Help</a>
        </div>
        <div class="headerRight">
            <a href="cart.php"><img src="assets/icons/shopping-cart.png" alt="shopping cart" width="67px"
                    height="67"></a>
            <?php
            echo isset($_SESSION['name']) ? "<p style = 'font-size:15px' >Welcome! {$_SESSION['name']}
               </p> <a href='logout.php' 
                    class='logout'>Logout</a>" :
                "<a class='login' href='login.php'>Login</a>";
            ?>
        </div>
    </header>
    <style>
        .logout {
            font-size: 15px;
            text-decoration: none;
            margin-left: 10px;
            color: #777373;
        }
    </style>