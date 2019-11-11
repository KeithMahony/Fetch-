<?php 
$username = $_POST["username"];
$password = $_POST["password"];
$con=mysqli_connect("us-cdbr-iron-east-05.cleardb.net","bfee5eec5d1d2a","49334008","heroku_030aad63729d0bd");
$sql = "SELECT * FROM tablename WHERE  username = '$username' AND password = '$password'";
$result = mysqli_query($con,$sql);
if($result->num_rows > 0){
echo "logged in successfully" ;
}else{
   echo "user not found";
}
?>
