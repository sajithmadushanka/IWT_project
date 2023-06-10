<?php 
session_start();

$_SESSION =  array(); // make session varible as empty array

if(isset($_COOKIE[session_name()])){ // when we use session the cooike save in browser -> that check here
        setcookie(session_name(), '', time()-86400, '/');  // remove session cookie '/'-> root file
}

session_destroy(); // distroy all session variable 

header('Location: login.php?logout=yes') // redirect user to login-page
?>