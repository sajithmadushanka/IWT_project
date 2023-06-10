
<?php 
require_once "../model/user_.php";

// class for user save on database
    class UserController{
        public function create(){
            global $con;

            $name = mysqli_real_escape_string($con, trim($_POST['name']));
            $email =  mysqli_real_escape_string($con, trim($_POST['email']));
            $password =mysqli_real_escape_string($con, trim($_POST['password']));

            $userCreate = new UserCreate();
            $userCreate->createUser($name, $email, $password);
        }
        
    }
    $userController = new UserController();
    $userController-> create();
?>
