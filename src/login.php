<?php
session_start();
include("classes/DB.php");
include("classes/User.php");
if (isset($_POST['submit'])){
    $uemail=$_POST['email'];
    $upass=$_POST['password'];
    $uname="username";
    $unum="usernumber";
    $role="user";
    $auth=0;
    // echo $uemail;
    // echo $upass;
    if(!isset($_SESSION['login'])){
        $_SESSION['login']=array();
    }
    $user1=new User($uname,$unum,$uemail,$upass,$role,$auth);
   
    $_SESSION['count']=0;
}

    $user1->checkUser($uemail,$upass);

   

?>