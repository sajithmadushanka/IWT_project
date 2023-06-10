<?php require_once "../config/db.php" ?>
<?php 
session_start();
class DeleteAccount{
    public function deleteAccount($user_id){
        global $con;
        $query_cart = "DELETE FROM carts WHERE user_id_= {$user_id};";
        $result_cart = mysqli_query($con, $query_cart);

        if($result_cart){
            $query_address = "DELETE FROM shipping_address WHERE user_id_= {$user_id};";
            $result_address = mysqli_query($con, $query_address);
        }
        if($result_address){
                 $query = "DELETE FROM users WHERE id_ = {$user_id};";

                    $result = mysqli_query($con, $query);
        }
         
        
        if(!$result){
            echo "no user found";
        }else{
            echo "the user recorde has been deleted!";
            require_once "../public/logout.php";
            
            setcookie("email", "", time() - 3600); // delete cookies when account deleted

            header("Location: ../public/index.php");
        }
    }
}
$id=  $_SESSION['id'];
$delete = new DeleteAccount();
$delete->deleteAccount($id);

?>
<?php mysqli_close($con);?>