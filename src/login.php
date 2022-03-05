<?php
session_start();
include("classes/DB.php");
include("classes/User.php");
if (isset($_POST['submit'])){
    $uemail=$_POST['email'];
    $upass=$_POST['password'];
    $uname="username";
    $unum="usernumber";
    // echo $uemail;
    // echo $upass;
    if(!isset($_SESSION['login'])){
        $_SESSION['login']=array();
    }
    $user1=new User($uname,$unum,$uemail,$upass);
    // if($user1->checkUser($uemail,$upass)=='yes'){
    //     header("Location:/dashboard.php");
    // }
    $_SESSION['count']=0;
}

    $user1->checkUser($uemail,$upass);

    //     if(!$val){
    //    header('location:login.html');
    //     }
  
    // header('location:login.html');

?>