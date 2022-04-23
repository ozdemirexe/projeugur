<?php 

if (!isset($_SESSION)) {
    session_start(); 
}
unset($_SESSION["admins"]);
setcookie("adminsLogin",json_encode($admins),strtotime("-1 day"),"/");
header("Location:login.php");
exit;

 ?>