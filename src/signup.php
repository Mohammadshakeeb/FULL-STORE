<?php
include("classes/DB.php");
include("classes/User.php");
if (isset($_POST['submit'])){
    $uname=$_POST['name'];
    $unum=$_POST['num'];
    $uemail=$_POST['email'];
    $upass=$_POST['password'];
    $role="user";
    $auth=0;
$user1=new User($uname,$unum,$uemail,$upass,$role,$auth);
$user1->addUser($user1);
}

