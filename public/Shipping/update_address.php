<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shipping</title>
    <link rel="stylesheet" href="../css/form.css">
</head>



<?php 
                if(isset($_SESSION['address'])){
                        $name= $_SESSION['ship_name'];
                        $address= $_SESSION['address'];
                        $provence= $_SESSION['provence'];
                        $city= $_SESSION['city'];
                        $mobile= $_SESSION['mobile'];
                        
                }else{
                    echo "error";;
                }
            ?>


<body>
    <div class="main" style="margin-top: 50px;">
        <h1> Update Delivey Details </h1>
    <div style="margin-top: 50px;">
        <form action="../../model/update_shipping.php" method="post">
          
                <input type="text" <?php echo "value= {$name}"?> name="name" required > <br>
                <input type="text"<?php  echo "value= {$address}"?> name="address" required> <br>
                <input type="text" <?php echo "value= {$provence}"?> name="provence" required> <br>
                <input type="text" <?php echo "value= {$city}"?> name="city" required> <br>
                <input type="text" <?php echo "value= {$mobile}"?> name="number" required> <br>
          
                <button type="submit" style="margin-top:20px; width:200px" value="update">Update</button>
               
        </form>
       
    </div>
               
    </div>
</body>
</html>

