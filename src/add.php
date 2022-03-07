<?php
session_start();
// include("classes/DB.php");
// include("classes/User.php");
include("classes/product.php");

if(isset($_POST['add'])){

    $id=$_POST['id'];
    $name=$_POST['name'];
    $price=$_POST['price'];
    $category=$_POST['category'];
    $description=$_POST['description'];
   
    $product1=new product($id,$name,$price,$category,$description);
    $product1->addProduct($product1);



}


?>