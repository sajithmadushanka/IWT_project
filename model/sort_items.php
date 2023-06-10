<?php
function sort_()
{

    // define price list array as priceList 
    $priceList = $_SESSION['price_List'];
    sort($priceList); // sort array ASC > price low to high

    $len = count($priceList); // get length of array

    // run loop > len of array
    for ($j = 0; $j < $len; $j++) {

        // generate  list of arrays > list1 > list2
        $itemData = "List" . $j;
        $$itemData = array(); // variable varible list > $List1

        for ($i = 0; $i < $len; $i++) { /// add items_data to each array that have stored in session variable

            // get first index(lowset price) and check which session items_data match > lowest price items data add first
            if ($priceList[$j] == $_SESSION['price_' . $i]) {
                $$itemData[] = $_SESSION['item_id_' . $i];
                $$itemData[] = $_SESSION['title_' . $i];
                $$itemData[] = $_SESSION['price_' . $i];
                $$itemData[] = $_SESSION['des_' . $i];
                $$itemData[] = $_SESSION['Item_imageUrl_' . $i];

                // echo $_SESSION['price_'.$i];
                //  print_r($$itemData) . " ";
                $_SESSION['List' . $j] = $$itemData; // define session varible for each array > List0 = items datas lowest price

            }

        }
    }
    //  echo($_SESSION['List0'][0]); // can access list data like this
}

// if price button clicked on filtter page then run sort()
if (isset($_POST['btn'])) {
    $btnValue = $_POST['btn'];
    if ($btnValue == 'price') {
        sort_();
    }
}

?>
