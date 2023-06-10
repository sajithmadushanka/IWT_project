

<!-- // require header -->
<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About US</title>
    <link rel="stylesheet" href="../css/index.css">


    <style>
        .logout {
            font-size: 15px;
            text-decoration: none;
            margin-left: 10px;
            color: #777373;
        }
        h1,h3{
            text-align: center;
            margin: 10px;
        }
        .para{
            width: 50vw;
            display: flex;
           margin: 0 auto;
           background-color: lightblue;
           
           
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">
            <a href="index.php"><img src="../assets/logo.png" alt="logo" width="400px"></a>
        </div>
        <div class="menulinks">
            <a href="../index.php">Home</a>
            <a href="../shop.php">Store</a>
            <a href="../page/about_us.php">About Us</a>
            <a href="../page/help.php">Help</a>
        </div>
        <div class="headerRight">
            <a href="../cart.php"><img src="../assets/icons/shopping-cart.png" alt="shopping cart" width="67px"
                    height="67"></a>
            <?php
            echo isset($_SESSION['name']) ? "<p style = 'font-size:15px' >Welcome! {$_SESSION['name']}
               </p> <a href='../logout.php' 
                    class='logout'>Logout</a>" :
                "<a class='login' href='../login.php'>Login</a>";
            ?>
        </div>
    </header>

    <img src="../assets/home_page_img/pink-dress.jpg" alt="" height="600px" width = '100%'>
        <h1>About US</h1>
        <h3>There is our history</h3>
      
        <div class ="para">
        <p >
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br>
    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, <br> 
    when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>
    It has survived not only five centuries, but also the leap into electronic typesetting,<br>
    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset <br>
    sheets containing Lorem Ipsum passages,and more recently with desktop publishing software like <br>
    Aldus PageMaker including versions of Lorem Ipsum.
            </p>

        </div>
       
    <footer>
        <div class="footerMain">
            <div>
                <h4>Connect with us</h4>
                <div>
                    <a href="#"> <img src="../assets/icons/tiktok.png" alt="tiktok"></a>
                    <a href="#"><img src="../assets/icons/facebook.png" alt="facebook"></a>
                    <a href="#"> <img src="../assets/icons/youtube.png" alt="youtube"></a>
                </div>
            </div>
            <div>
                <h4>Quick Links</h4>
                <div class="quick_links">
                    <a href="../index.php">Home</a>
                    <a href="../help.php">FAQ</a>
                    <a href="../account.php">Account</a>
                </div>
            </div>
            <div>
                <div class="search2">
                    <form action="" method="get">
                        <input type="text" name="subcription" id="" placeholder="Enter your email">
                        <button class="subBtn" type="submit">Sub</button>
                    </form>

                </div>
                <div class="appdownloadlink">
                    <a href="#"><img src="../assets/icons/google-play.png" alt="play store"></a>
                    <a href="#"> <img src="../assets/icons/app-store.png" alt="app store"></a>
                </div>
            </div>


        </div>
        <div>
            <p>Copyright © 2023 Fashionhut Inc. All Rights Reserved.</p>
        </div>
    </footer> 

</body>
    