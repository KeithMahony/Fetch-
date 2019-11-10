<?php
    
    include_once 'config.php';
    
    class DbConnect{
        
        private $connect;
        
        public function __construct(){
            
            $this->connect = mysqli_connect("us-cdbr-iron-east-05.cleardb.net","bfee5eec5d1d2a","49334008","heroku_030aad63729d0bd");
            
            if (mysqli_connect_errno($this->connect)){
                echo "Unable to connect to MySQL Database: " . mysqli_connect_error();
            }
        }
        
        public function getDb(){
            return $this->connect;
        }
    }
?>
