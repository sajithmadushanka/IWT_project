

<!-- // require header -->
<?php session_start();
        require_once "components/reusable/header.php";
    ?>

<head>
    <title>Thank you</title>
    <style>
        body{
           margin-bottom: 0px;
           padding-bottom: 0px;
        }
        .main{
           text-align: center;
           padding: 1px;
        }
        h1{
            margin: 10px;
        }
        .btn{
            margin: 10px;
            width: 200px;
            height: 48px;
            border-radius: 50px;
            background-color: #B06EE6;
            right: 0;
            border: none;
            cursor: pointer;
            font-size: 20px;
            color: white;
        }
    </style>
</head>
<body>
        <div class="main">
        <h1>Thanks for your Order!</h1>
        <p>The order has begun processing. You will receive an email notification regarding the status of your order.</p>

        <button class="btn" onclick="nextPgae()">Shop more</button>
        </div>

 <!-- // footer require here  -->
 <?php 
        require_once "components/reusable/footer.php";
    ?>
</body>
</html>
<script>
    function nextPgae(){
        location.replace('shop.php')
    }
</script>