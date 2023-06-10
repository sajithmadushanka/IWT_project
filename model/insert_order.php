<?php require_once "../config/db.php" ?>
<?php
session_start();
class AddOrder{
    public function addOrder($cus_id, $ship_id, $item_ids, $amount){
        global $con;

        $query =  "INSERT INTO orders (cus_id_,ship_id_ ,item_id_,amount_)
        VALUES({$cus_id}, {$ship_id}, '{$item_ids}', {$amount});";
        
        $result = mysqli_query($con, $query);

        if(!$result){
            echo "error";
        }else{
            // echo "the order has placed successfull!";
            header("Location:../public/thankyou_page.php");
        }

    }
}
$cus_id = mysqli_real_escape_string($con,$_SESSION['id']);
$ship_id = mysqli_real_escape_string($con,$_SESSION['ship_id']);
$item_ids = mysqli_real_escape_string($con,$_SESSION['item_ids']);
$amount = mysqli_real_escape_string($con,$_SESSION['amount']);


// echo $_SESSION['id']."  ".$_SESSION['ship_id'] ."  ".$_SESSION['item_ids']."  ".$_SESSION['amount'];
$addOrder = new AddOrder();
$addOrder->addOrder($cus_id,$ship_id,$item_ids,$amount);
?>
