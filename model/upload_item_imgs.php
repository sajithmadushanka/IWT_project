<?php session_start() ?>
<?php require_once "../config/db.php" ?>

<!-- image upload form here  data as enctype--> 
<form action='upload_item_imgs.php' method='post' enctype='multipart/form-data' class='img_form'>
                    <label>add:</label>
                    <input type='file' name='image'>
                    <input type='number' name='id'>
                    <input type='submit' name='submit' value='Chnage'>
</form>

<?php 
     
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error';

    if(!empty($_FILES["image"]["name"])) {  // credit for github
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
            
            $id =$_POST['id'];
            // update image content into database 
            $update = $con->query("UPDATE  items SET img_ = '{$imgContent}'  WHERE item_id_= $id;" );
             
            if($update){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
                
                
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 
?>

