
<?php session_start();

$_SESSION['upload_img'] ='NO'; // set session 

if (!isset($_SESSION['id'])) {
    // Redirect to the login page if the user is not logged in
    header("Location: login.php");
    exit();
}
$_SESSION['toLocation'] = "account"; // retrieve address and image and re-direct to account
?>

<?php 
require_once "../config/db.php"; //db connection 

require_once "../model/retrieve_address.php";

require_once "../model/retrieve_img.php";

?>



<head>
    <title>My Account</title>
    <link rel="stylesheet" href="css/account.css">
</head>
<!-- // require header here  -->
<?php require_once "components/reusable/header.php" ?>

    <h1>My Account</h1>

    <?php 
        if(!isset($_GET['no_img'])){ // check whethere image set or not
            $url = $_SESSION['user_img_url'];
            echo "<div class='img_'>
                    {$url}
                    
               </div>
               <form action='../model/img_upload.php' method='post' enctype='multipart/form-data' class='img_form'>
                    <label>add:</label>
                    <input type='file' name='image'>
                    <input type='submit' name='submit' value='Chnage'>
                </form>
               ";
        }else{
                echo "<div class='img_'>
                <form action='../model/img_upload.php' method='post' enctype='multipart/form-data'>
                    <label >Upload Your Image:</label> <br>
                    <input type='file' name='image' style='margin-top:50px;'>
                    <input type='submit' name='submit' value='Upload'>
                </form>
        
            </div>";
        }
    ?>
    
    <div class="p-details">
        <h3>Personal Details</h3>
        <p><?php echo $_SESSION['name']  ?></p>
        <p><?php echo $_SESSION['email']  ?></p>
    </div>
    <div class="p-details" style="padding-top:10px">
        <h3>Delivery Address</h3>
        <div>
            <?php 
                if(isset($_SESSION['address'])){
                        echo "<p><span>name: </span>{$_SESSION['ship_name']}</p>
                         <p><span>address: </span>{$_SESSION['address']}</p>
                        <p><span>provence: </span> {$_SESSION['provence']} </p>
                        <p><span>city: </span> {$_SESSION['city']} </p>
                        <p><span>contact number: </span>{$_SESSION['mobile']}</p>
                        <a href='shipping/update_address.php'><button >update shipping</button></a>";

                        // set location 
                        $_SESSION['toLocation'] = "account.php";
                }else{
                    echo "<a href='shipping/shipping.php'>add shipping</a>";
                }
            ?>
            
        </div>
       
    </div>
    <div class="delete_update">
        <p><button onclick="deleteAccount()">delete account</button></p>
        <p><button onclick="openForm()">update name</button></p>
    </div>

     <!-- // footer require here  -->
     <?php 
        require_once "components/reusable/footer.php";
    ?>

<!-- this is popup box for update user name -->
<div class="form-popup" id="myForm">
  <form action="../model/updateName.php" class="form-container" method="post">
    <h1>Update</h1>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter New Name" name="name" required>


    <button type="submit" class="btn">Done</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>


<script>
    // controlle update popub box
        function openForm() {
        document.getElementById("myForm").style.display = "block"; // change css
        }

        function closeForm() {
        document.getElementById("myForm").style.display = "none"; // hide box by controoling css by js
        }
</script>


<script>
    function deleteAccount(){
        location.replace('../model/delete_account.php'); // go to delete account page
    }
</script>
</body>
</html>

