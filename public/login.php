
<head>
    <title>Login</title>
</head>
<!-- // require head here  -->
<?php require_once "components/register_login/head.php" ?>

<?php 
   if( isset($_COOKIE['email'])){
            $email = $_COOKIE['email'];
            
    }else{
        $email = "";
    }
    
?>
<!-- // form fields  -->
<div>
        <form action="../model/login.php" method="post" style="margin-top: 40px;">
                <p id="error_msg" style="font-size:12px; color:red;"> </p>
                <?php
                    echo $email != "" ?  "<input type='text'  value = '{$email}' name='email' required > <br>" :
                    "<input type='text' placeholder='Email' name='email' required > <br>";
                ?>
              
                
                <input type="password" placeholder="Password" name="password" required> <br>
            
                <p>I don't have an account ? <span><a href="register.php">Register</a></span></p>
                <button type="submit" name ="submit">Login</button>
           
        </form>
    </div>

<!-- // require foot here/ -->
<?php require_once "components/register_login/foot.php" ?>


<!-- check if valid user or not -->
<?php 
    if(isset($_GET['user'])){
        echo "<script>
        document.getElementById('error_msg').innerHTML = 
        'Credentials do not match or user does not exist. Please check and try again!';
        </script>";
    }
?>
