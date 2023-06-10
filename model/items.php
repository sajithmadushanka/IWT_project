<?php require_once "../config/db.php" ?>
<?php 
 class GetItem{
    public function getItem(){
        global $con;

        $query = "SELECT * FROM items";
        $result = mysqli_query($con, $query);

        if(!$result){
            echo "no data";
        }else{
            //  echo "items has been retrieved";
             $index = 0; // Initialize an index variable
            
        while ($details = mysqli_fetch_assoc($result)) {
            // create 12 varible using loop $$ use for vaible varible -> array
            $arrayName = "List" . $index;
            $$arrayName = array();

                $_SESSION['item_id_' . $index] = $details['item_id_'];
                $_SESSION['title_' . $index] = $details['title_'];
                $_SESSION['price_' . $index] = $details['price_'];
                $_SESSION['des_' . $index] = $details['description_'];
               

            $imageData = $details['img_'];

            // Generate the base64-encoded image string
            $encodedImage = base64_encode($imageData);
                $_SESSION['Item_imageUrl_' . $index] = 
                "data:image/jpg;charset=utf-8;base64,{$encodedImage}";

                /// insert data to array
                $$arrayName[] = $_SESSION['item_id_' . $index];
                $$arrayName[] = $_SESSION['title_' . $index];
                $$arrayName[] = $_SESSION['price_' . $index];
                $$arrayName[] = $_SESSION['des_' . $index];
                $$arrayName[] = $_SESSION['Item_imageUrl_' . $index];

                $_SESSION['List'.$index] = $$arrayName;

            $index++; // Increment the index for each iteration
        }

            
        //    echo $_SESSION['Item_imageUrl_1'];
        }
    }
 }

 $get_items = new GetItem();
 $get_items->getItem();

?>
<?php mysqli_close($con);?>