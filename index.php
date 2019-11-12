 <?php
if($_SERVER['REQUEST_METHOD']=='POST'){

include 'DatabaseConfig.php';

 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

 $Email = $_POST['email'];
 
 $Password = $_POST['password'];
 
 $FullName = $_POST['fName'];

 $CheckSQL = "SELECT * FROM users WHERE email='$Email'";
 
 $check = mysqli_fetch_array(mysqli_query($con,$CheckSQL));
 
 if(isset($check)){

 echo 'Email Already Exist, Please Enter Another Email.';

 }
else{ 
$Sql_Query = "INSERT INTO users (email,password,fName) values ('$email','$password','$fName')";

 if(mysqli_query($con,$Sql_Query))
{
 echo 'User Registration Successfully';
}
else
{
 echo 'Something went wrong';
 }
 }
}
 mysqli_close($con);
?>
