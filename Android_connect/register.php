<?php 
$con=mysqli_connect("us-cdbr-iron-east-05.cleardb.net","bfee5eec5d1d2a","49334008","heroku_030aad63729d0bd");
$username = $_POST["username"];
$email = $_POST["email"];
$password =$_POST["password"];
$sql = "INSERT INTO tablename(username,email,password)
VALUES ('$username','$email','$password')"
;
$result = mysqli_query( $con,$sql );
if($result) {
echo "registered successfully";
}else {
echo "some error occured";
}
?>
