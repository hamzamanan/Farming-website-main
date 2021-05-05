<?php
//start the session
session_start();

// check if user loged in
if(isset($_SESSION["userid"]) && $_SESSION["userid"] === true){
    header("location:login.php");
    exit;
}
?>