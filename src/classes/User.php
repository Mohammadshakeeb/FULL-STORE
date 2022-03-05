<?php
session_start();
    class User extends DB
    {
        // public int $user_id;
        public string $username;
        public string $password;
        public string $email;
        public string $number;
        public function __construct( $username,$number, $email,$password)
        {
            // $this->user_id = $user_id;
            $this->username = $username;
            $this->password = $password;
            $this->email = $email;
            $this->number=$number;
        }
              function addUser($user){
           DB::getinstance()->exec("INSERT INTO users(username,unum,email,pasword) VALUES('$this->username','$this->number','$this->email','$this->password')");
           $_SESSION['flag']=1;
                header('location:signin.php');
        }
        function checkUser($email,$password)
        {      
          $sql= DB::getInstance()->prepare("SELECT * FROM users where email='$email' and pasword='$password'");
            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            foreach(new RecursiveArrayIterator($sql->fetchAll()) as $k=>$v) {
                    // if($v){
                     
                        // $_SESSION['count']=1;
                        // array_push($_SESSION['login'],$v['usename']);
                        // array_push($_SESSION['login'],$v['userid']);
                        // array_push($_SESSION['login'],$v['pasword']);
                        // array_push($_SESSION['login'],$v['email']);
                        // array_push($_SESSION['login'],$v['uunum']);
                    
                        // header('location:dashboard.php');
                    
                    // }
                    // if($v == null){
                    //     echo "wrong authentication";
                    //     // header('location:login.html');
                    //   }
              }
              if($v){

                        array_push($_SESSION['login'],$v['username']);
                        array_push($_SESSION['login'],$v['user_id']);
                        array_push($_SESSION['login'],$v['pasword']);
                        array_push($_SESSION['login'],$v['email']);
                        array_push($_SESSION['login'],$v['unum']);
                header('location:dashboard.php');
                    
              } else{
                    // echo "wrong authentication";
                    header('location:login.html');
                  }
        }
        }
        
    
