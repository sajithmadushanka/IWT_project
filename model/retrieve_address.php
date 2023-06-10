
<?php require_once "../config/db.php"; ?>
<?php if (isset($_GET['session'])) {
    session_start();
}

?>
<?php
class GetAddress
{
    public function _getAddress($userId)
    {
        global $con;

        $query = "SELECT * FROM shipping_address s 
                            WHERE s.user_id_ = '{$userId}';";

        $result = mysqli_query($con, $query);
        if (!$result) {
            echo "executing error";
        } elseif (mysqli_affected_rows($con) < 1) {
            //  echo "no data founded";
        } else {
            // echo "shipping address has been retrieved";
            $details = mysqli_fetch_assoc($result);
            $_SESSION['ship_name'] = $details['name_'];
            $_SESSION['address'] = $details['address_'];
            $_SESSION['provence'] = $details['provence_'];
            $_SESSION['city'] = $details['city_'];
            $_SESSION['mobile'] = $details['mobile_'];
            $_SESSION['ship_id'] = $details['ship_id_'];



            if (isset($_SESSION['toLocation'])) {

                if ($_SESSION['toLocation'] == "show_address") {

                    header("Location: ../public/Shipping/show_address.php");



                } elseif ($_SESSION['toLocation'] == "account.php") {

                    header("Location: ../public/account.php");

                } else {
                    // echo "no page suggetion";
                }
            }


        }
    }
}

$getAddress = new GetAddress();
$getAddress->_getAddress($_SESSION['id']);

?>