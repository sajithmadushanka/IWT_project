<?php require_once "../config/db.php" ?>
<?php session_start() ?>
<?php 
    class UpdateName{
        public function updateName($id, $name){
            global $con;

                $query = "UPDATE users SET name_ = '{$name}' where id_ = '{$id}'";
                $result = mysqli_query($con, $query);
                if(!$result){
                    echo "error";
                }else{
                   echo "Name has been updated";
                    
                    // retrive new data from db
                    $query = "SELECT * FROM users 
                    where id_ = '{$id}'";
                    $result = mysqli_query($con, $query);
            
           //check if the user valid
               if (mysqli_num_rows($result) == 1) {
                                $user = mysqli_fetch_assoc($result);
                                $_SESSION['name'] = $user['name_'];

                                header("location: ../public/account.php");
                            }
                            else{
                                echo "error";
                            }
        }
    }
    
    }
    $name_ = mysqli_real_escape_string($con, trim($_POST['name']));
    echo $name_;
    $id = $_SESSION['id'];

    if($name_ != ""){
        $updateName_ = new UpdateName();
        $updateName_ ->updateName($id, $name_);
    }else{
        header("location: ../public/account.php");
    }
?>
