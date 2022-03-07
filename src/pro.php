<?php
session_start();
include("classes/DB.php");

if(isset($_POST['delete'])){

$id=$_POST['delete'];
$sql= DB::getInstance()->prepare("DELETE FROM products WHERE product_id = '$id' ");
    $sql->execute();
    $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
    header('location:products.php');

}


if(isset($_POST['edit'])){
    $id=$_POST['edit'];

}

?>