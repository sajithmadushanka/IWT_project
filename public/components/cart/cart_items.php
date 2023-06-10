<?php 
    require_once "../model/get_cart.php";
?>

<script>  
// js for calculate total price and / store items ids > ids array-bec wanna remove items
var total = 0; 
var item_ids = [];
function getValue(id, value, item_id) {
  var bool = document.getElementById(id).checked;
  
  if (bool) {
    total += value;
    item_ids.push(item_id);
   
  } else {
                total -= value;
                const itemToRemove = item_id; // Item to remove from the array
                const index = item_ids.indexOf(itemToRemove); // Find the index of the item

                if (index !== -1) {
                    item_ids.splice(index, 1); // Remove one element at the found index (1 delete count)
                }
  }
  
  var total_ = total.toFixed(2);
  
  sessionStorage.setItem("total",total_);
  var store_list_ids = `${item_ids}`;
  
  sessionStorage.setItem("item_ids",store_list_ids);

  totalCal();
}

   
</script>
        <div>
            <!-- //--------------- -->

           <?php 
                $total_price = 0;
                $all_ids =array();

                 if($_SESSION['cart_len'] >= 1){ // if cart length more than 0 then only display cart details

                    for($i = 0; $i< $_SESSION['cart_len']; $i++){ // display carts as long as cart length

                        echo "<div class='line'>
                        <input type='checkbox' name='select' value='1' class=checkbox' id='{$i}' 
                        onchange='getValue($i,{$_SESSION['cart_price_'.$i]},{$_SESSION['item_id_'.$i]});'>
                        <div class='item_card'>
                            <img src={$_SESSION['cart_Item_imageUrl_'.$i]}  alt='cart image'>
                            <div>
                                <p> {$_SESSION['cart_title_'.$i]} </p>
                                <p>$  {$_SESSION['cart_price_'.$i]} </p>
                            </div>
                            <div class='delete'>
                                <form action='../model/remove_from_cart.php' method = 'GET'>
                                <button name = 'del_id'value ={$_SESSION['cart_item_id_'.$i]} type = 'submit'>
                                <h1>-</h1>
                                </button>
                                </form>
                            </div>
                        </div>
                    </div>";    

                    $total_price += $_SESSION['cart_price_'.$i];
                    $all_ids[$i] = $_SESSION['item_id_'.$i];
                 }
                 $_SESSION['total_price'] = $total_price;
                 $_SESSION['all_ids'] = $all_ids;
                
                 }else{ // if cart is empty then display about that
                    echo "<p class='item_card'>your cart is empty! </P> ";
                    $_SESSION['is_empty'] = true; /// set session varible as cart empty
                 }
           
           ?>
            
           
            <!-- ///---------------- -->
        </div>

<div class="place-order-container">
            <h2>Total</h2>
            <p >USD: <span id='price'>00.00</span></p>
            <button id = "place_order" onclick="placeOrder()">place order</button>
</div>

<script>
 function totalCal(){
  // Code to execute after other function runs
  var Set_total = sessionStorage.getItem('total');
  
  if(Set_total <= 0){
    document.getElementById('price').innerHTML = '0.00'
  }else{
    document.getElementById('price').innerHTML = Set_total;
  }
  
};

</script>
<script>
    function deteteFromCart(cart_id){
        console.log("delete wanna", cart_id);
    }
</script>