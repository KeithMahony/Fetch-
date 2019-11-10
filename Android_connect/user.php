<?php
   $con=mysqli_connect("us-cdbr-iron-east-05.cleardb.net","bfee5eec5d1d2a","49334008","heroku_030aad63729d0bd");

   if (mysqli_connect_errno($con)) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
	
   $email = $_POST['email'];
   $password = $_POST['password'];
   $result = mysqli_query($con,"SELECT Role FROM users where 
   email='$email' and Password='$password'");
   $row = mysqli_fetch_array($result);
   $data = $row[0];

   if($data){
      echo $data;
   }
	
   mysqli_close($con);
?>
