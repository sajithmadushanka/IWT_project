<?php require_once "../config/db.php" ?>
<?php 
    class DelfromCart{
        public function delfromCart($cart_id){
            global $con;

            $query = "DELETE from carts where item_id_ = {$cart_id};";
            $result = mysqli_query($con, $query);

            if(!$result){
                    echo "has error";
            }else{
                echo "The item has removed from your cart!";
              
                header('Location: ../public/cart.php');
            }
        }
    }

$cart_id=  $_GET['del_id'];

$delfromCart = new DelfromCart();
$delfromCart->delfromCart($cart_id);

?>
