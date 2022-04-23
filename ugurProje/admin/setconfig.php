<?php 
if (!isset($_SESSION)) {
    session_start(); 
}
require_once "netting/class.crud.php";
$db=new crud();

if (!isset($_SESSION['users']) && isset($_COOKIE['usersLogin'])) {

        $usersLogin=json_decode($_COOKIE['usersLogin']);

        $sonuc=$db->$usersLogin($usersLogin->users_username,$usersLogin->users_pass,TRUE);
        if ($sonuc["status"]) {

            header("Location:index.php");
            exit;
        }
}


if (!isset($_SESSION['users']) && !isset($_COOKIE['usersLogin'])) {
    header("Location:login.php");
    exit;
}

 ?>