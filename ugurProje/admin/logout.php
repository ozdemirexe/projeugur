<?php 

if (!isset($_SESSION)) {
    session_start(); 
}
unset($_SESSION["users"]);
setcookie("usersLogin",json_encode($users),strtotime("-1 day"),"/");
header("Location:index.php");
exit;

 ?>