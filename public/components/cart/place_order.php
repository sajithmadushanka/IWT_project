

<script>
 function totalCal(){
  // Code to execute after other function runs
  var Set_total = sessionStorage.getItem('total'); // access total price from js session
  document.getElementById('price').innerHTML = Set_total;
};
</script>