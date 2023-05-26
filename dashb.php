<?php
session_start();
if($_SESSION['email']){
    header("location:dashboard.php");
}

else{
    header("location:login.php");
}
?>