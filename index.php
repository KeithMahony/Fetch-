 <?php
if($_SERVER['REQUEST_METHOD']=='POST'){

 include 'DatabaseConfig.php';
 
 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

 $email = $_POST['User_Email'];
 
 $password = $_POST['User_Password'];
 
 $fName = $_POST['User_Full_Name'];

 $CheckSQL = "SELECT * FROM users WHERE User_Email='$email'";
 
 $check = mysqli_fetch_array(mysqli_query($con,$CheckSQL));
 
 if(isset($check)){

 echo 'Email Already Exist, Please Enter Another Email.';

 }
else{ 
$Sql_Query = "INSERT INTO users (User_Email,User_Password,User_Full_Name) values ('$email','$password','$fName')";

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
