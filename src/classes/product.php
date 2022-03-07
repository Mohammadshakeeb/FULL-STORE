<?php
session_start();
include("DB.php");
include("User.php");

    class product extends DB
    {
        // public int $user_id;
        public string $product_id;
        public string $product_name;
        public string $product_price;
        public string $product_category;
        public string $product_description;
        public function __construct($product_id,$product_name, $product_price,$product_category,$product_description)
        {
            // $this->user_id = $user_id;
            $this->product_id = $product_id;
            $this->product_name = $product_name;
            $this->product_price = $product_price;
            $this->product_category=$product_category;
            $this->product_description=$product_description;
           
        }

        function addProduct($product){
            DB::getinstance()->exec("INSERT INTO products(product_id,product_name,product_price,product_category,description) VALUES('$this->product_id','$this->product_name','$this->product_price','$this->product_category','$this->product_description')");
            header('location:products.php');
        }

        function updateProduct($product1){

            DB::getinstance()->exec("UPDATE products SET product_id='$this->product_id',product_name='$this->product_name',product_price='$this->product_price',product_category='$this->product_category',description='$this->product_description' WHERE product_id='$this->product_id'");
            header('location:products.php');

        }




    }