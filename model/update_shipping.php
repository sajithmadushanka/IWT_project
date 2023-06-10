<?php require_once "../config/db.php" ?>
<?php session_start() ?>
<?php 
    class UpdateAddress{
        public function update_address($name, $address, $provence, $city, $contactNum, $userId , $ship_id){
                global $con;

                $query = "UPDATE shipping_address SET 
                name_= '{$name}', 
                address_='{$address}' , 
                provence_ = '{$provence}', 
                city_ ='{$city}' , 
                mobile_ = '{$contactNum}'  WHERE ship_id_ = '{$ship_id}';";

                $result = mysqli_query($con,$query);
                if(!$result){
                    echo "executing error";
                }else{
                    // echo "shipping address has been Updated";
                    // require_once "retrieve_address.php";
                     header("Location: retrieve_address.php?session=no");
                   
                   
                    
                }
        }
    }
$name = mysqli_escape_string($con, trim($_POST['name']));
$address = mysqli_escape_string($con, trim($_POST['address']));
$provence = mysqli_escape_string($con, trim($_POST['provence']));
$city = mysqli_escape_string($con, trim($_POST['city']));
$contactNum = mysqli_escape_string($con, trim($_POST['number']));
$userId =$_SESSION['id'];
$ship_id =$_SESSION['ship_id'];



$update_address_ = new UpdateAddress();
$update_address_->update_address($name, $address, $provence, $city, $contactNum, $userId, $ship_id);

?>
