<?php
session_start();
    class User extends DB
    {
        // public int $user_id;
        public string $username;
        public string $password;
        public string $email;
        public string $number;
        public string $role;
        public int $auth;
        public function __construct($username,$number, $email,$password,$role,$auth)
        {
            // $this->user_id = $user_id;
            $this->username = $username;
            $this->password = $password;
            $this->email = $email;
            $this->number=$number;
            $this->role=$role;
            $this->auth=$auth;
        }
              function addUser($user){
           DB::getinstance()->exec("INSERT INTO users(username,unum,email,pasword,Role,auth) VALUES('$this->username','$this->number','$this->email','$this->password','$this->role','$this->auth')");
           $_SESSION['flag']=1;
                header('location:signin.php');
        }
        function checkUser($email,$password)
        {      
          $sql= DB::getInstance()->prepare("SELECT * FROM users where email='$email' and pasword='$password' and auth=1");
            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            foreach(new RecursiveArrayIterator($sql->fetchAll()) as $k=>$v) {
            }
                
              if($v){

                        array_push($_SESSION['login'],$v['username']);
                        array_push($_SESSION['login'],$v['user_id']);
                        array_push($_SESSION['login'],$v['pasword']);
                        array_push($_SESSION['login'],$v['email']);
                        array_push($_SESSION['login'],$v['unum']);
                        array_push($_SESSION['login'],$v['Role']);
                        array_push($_SESSION['login'],$v['auth']);
                        if($_SESSION['login'][5]=="admin"){
                        header('location:dashboard.php');
                        }else{
                          header('location:dash.php');
                        }
                      
                    
              } else{
                    // echo "wrong authentication";
                    header('location:login.html');
                  }
                
        }
      }
        

   

      
        
    
