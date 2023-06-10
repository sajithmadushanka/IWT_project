<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shipping</title>
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>
    <div class="main" style="margin-top: 50px;">
        <h1> Add Your Delivey Details </h1>
    <div style="margin-top: 50px;">
        <form action="../../model/shipping_address.php" method="post">
          
                <input type="text" placeholder="Full Name" name="name" required> <br>
                <input type="text" placeholder="Address" name="address" required> <br>
                <input type="text" placeholder="Provence" name="provence" required> <br>
                <input type="text" placeholder="City" name="city" required> <br>
                <input type="text" placeholder="Contact Number" name="number" required> <br>
          
                <button type="submit" style="margin-top:20px">Confirm</button>
           
        </form>
    </div>
   
    </div>
</body>
</html>