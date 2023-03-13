<?php
// save to server 
// login page



// creta session 
// step 1) session_start(); session start 
// step 2) $_SESSION[name] = value; session create  
// step 3) echo $_SESSION[name];




// delete Session 
// step 1) session_unset(); Remove all session variable
// step 2) session_destroy(); destroy the session 

session_start();

  
$_SESSION["favcolor"] = "black";

echo "Session Variable Is Set";
?>