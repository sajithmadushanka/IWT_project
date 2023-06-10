<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Order</title>
    <link rel="stylesheet" href="css/form.css">

    <style>
        button {
            font-size: 22px;
            font-weight: bold;
            background-color: #B06EE6;
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
        <h1>Place Your Order Now</h1>
        <div style="margin-top: 50px;">

        </div>
        <div>
            <?php
            if (isset($_SESSION['address'])) {
                echo "<p><span>name: </span>{$_SESSION['ship_name']}</p>
                         <p><span>address: </span>{$_SESSION['address']}</p>
                        <p><span>provence: </span> {$_SESSION['provence']} </p>
                        <p><span>city: </span> {$_SESSION['city']} </p>
                        <p><span>contact number: </span>{$_SESSION['mobile']}</p>";

                ///redirect to same page
                $_SESSION['toLocation'] = "show_address";
            } else {
                echo "<a href='shipping.php'>add shipping</a>";
            }
            ?>
            <h3>Total: <span id='ammout'> </span></h3>
            Cash on delivery : <input type="radio" onchange="amount()" id="radioBtn">

            <button onclick="confrim();">Confirm</button>



        </div>

    </div>
</body>

</html>
<script>
    function amount() {
        document.getElementById('ammout').innerHTML = sessionStorage.getItem('total');

        httpForm()
    }
</script>

<script>

    function confrim() {
        
        if (document.getElementById("radioBtn").checked) {
            location.replace("../model/insert_order.php");
        } else {
            alert("please select payment method to continue!")
        }
    }
</script>

<script>
    // store ammount ant item_ids to php sessions
    function httpForm() {
        var amount = sessionStorage.getItem('total');
        var item_ids = sessionStorage.getItem('item_ids');
        
        // resest total after set ammount because after placed an order total should be 0 again.
        sessionStorage.setItem('total',0);
        console.log(item_ids);

        const data = {
            amount: amount,
            item_ids: item_ids
        };
            /// create php from inside the javascript -> this part get from google
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'place_order.php', true);
        xhr.setRequestHeader('Content-Type', 'application/json');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                console.log('Session data stored successfully');
            }
        };
        xhr.send(JSON.stringify(data));
    }
//---------------------------------------

</script>
<?php   $_SESSION['total_price'] = 0;
// resest total after set ammount because after placed an order total should be 0 again.?>
<?php
  
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true); // Retrieve the JSON data

    $amount = $data['amount']; // Retrieve the amount from the JSON data
    $item_ids = $data['item_ids']; // Retrieve the item_ids from the JSON data

    $_SESSION['amount'] = $amount; // Store the amount in the session
    $_SESSION['item_ids'] = $item_ids; // Store the item_ids in the session
    
    echo 'Session data stored successfully'; // Send a response back to the client
}
?>