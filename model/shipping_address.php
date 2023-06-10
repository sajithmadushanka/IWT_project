<?php require_once "../config/db.php" ?>
<?php session_start() ?>
<?php 
    class AddAddress{
        public function addAddress($name, $address, $provence, $city, $contactNum, $userId ){
                global $con;

                // insert query 
                $query = "INSERT INTO shipping_address(name_, address_, provence_, city_, mobile_, user_id_)
                                        VALUES('{$name}' , '{$address}', '{$provence}', '{$city}', '{$contactNum}',
                                         '{$userId}');";

                $result = mysqli_query($con,$query);

                if(!$result){
                    echo "executing error";
                }else{
                    echo "shipping address has been added";
                    require_once "retrieve_address.php";  // after insert that address get from db again
                  
                   
                }
        }
    }
    $name = mysqli_escape_string($con, trim($_POST['name']));
    $address = mysqli_escape_string($con, trim($_POST['address']));
    $provence = mysqli_escape_string($con, trim($_POST['provence']));
    $city = mysqli_escape_string($con, trim($_POST['city']));
    $contactNum = mysqli_escape_string($con, trim($_POST['number']));
    $userId =$_SESSION['id'];
  
    

    $add_address_ = new AddAddress();
    $add_address_->addAddress($name, $address, $provence, $city, $contactNum, $userId);

?>
