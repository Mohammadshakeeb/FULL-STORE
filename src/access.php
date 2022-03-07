<?php
session_start();
include("classes/DB.php");
include("classes/User.php");
if(isset($_POST['approved'])){


    $id=$_POST['id'];
    $au=$_POST['auth'];

    if($au==0){
        $sql= DB::getInstance()->prepare("UPDATE users
        SET auth = 1
        WHERE user_id='$id'");
            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            
    }
    elseif($au=1){
        $sql= DB::getInstance()->prepare("UPDATE users
        SET auth = 0
        WHERE user_id='$id'");
            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);

    }
    header('location:dashboard.php');
}
?>
