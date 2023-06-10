<?php require_once "../config/db.php" ?>
<?php session_start() ?>
<?php 
    class GetUser{
        public function getUser_($email, $password){
            global $con;

            if (
                isset($_POST['email']) || strlen(trim($_POST['email']) > 1) && isset($_POST['password']) ||
                strlen(trim($_POST['email']) > 1)
            ) {
               $hashed_password = sha1($password);

                //perpare db query
                $query = "SELECT * FROM users 
                         where email_ = '{$email}' AND 
                         password_ = '{$hashed_password}'";
        
                $result = mysqli_query($con, $query);
        
                //check if the user valid
        
                if (mysqli_num_rows($result) == 1) {
                    $user = mysqli_fetch_assoc($result);
                    $_SESSION['name'] = $user['name_'];
                    $_SESSION['email'] = $user['email_'];
                    $_SESSION['id'] = $user['id_'];
                    echo $_SESSION['name'];
                    
                    // set cookies
                    if(!isset($_COOKIE['email'])){
                        setcookie('email', $user['email_'], time() + (86400 * 30 * 30), "/"); // cookies save for one month
                    }
                    

                    // redirect to index
                    header("Location: ../public/index.php");

                                }
                else{
                    header("Location: ../public/login.php?user=no");
                    

                }
    }else{
        echo "error";
    }
    }
    
}
$email = mysqli_real_escape_string($con, trim($_POST['email']));
$password = mysqli_real_escape_string($con, trim($_POST['password']));

$get_user = new GetUser();
$get_user-> getUser_($email, $password);
?>
