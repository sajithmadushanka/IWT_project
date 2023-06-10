
<?php session_start() ?>

<?php 
 ///redirect to same page
 $_SESSION['toLocation'] = "show_address";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shipping</title>
    <link rel="stylesheet" href="../css/form.css">

    <style>
        button{
            font-size: 22px;
            font-weight: bold;
            background-color:#B06EE6;
            color: white;
            width: 250px;
            padding: 12px;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            }
    </style>
</head>
<body>
    <div class="main" style="margin-top: 50px;">
        <h1>Confirm Delivey Details </h1>
    <div style="margin-top: 50px;">
       
    </div>
    <div>
    <?php 
                if(isset($_SESSION['address'])){
                        echo "<p><span>name: </span>{$_SESSION['ship_name']}</p>
                         <p><span>address: </span>{$_SESSION['address']}</p>
                        <p><span>provence: </span> {$_SESSION['provence']} </p>
                        <p><span>city: </span> {$_SESSION['city']} </p>
                        <p><span>contact number: </span>{$_SESSION['mobile']}</p>";

                       
                }else{
                    echo "<a href='shipping.php'>add shipping</a>";
                    
                }
            ?>
            <a href="update_address.php?"><button >update</button></a>
            <button onclick="confrim()">Confirm</button>
            
           
            
    </div>
   
    </div>
</body>
</html>

<script>
    function confrim(){
        location.replace("../place_order.php")
    }
</script>