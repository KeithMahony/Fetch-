 <?php
if($_SERVER['REQUEST_METHOD']=='POST'){
 
 include 'DatabaseConfig.php';
 
 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

 $User_Email = $_POST['email'];
 
 $User_Password = $_POST['password'];
 
 $User_Full_Name = $_POST['fName'];

 $CheckSQL = "SELECT * FROM users WHERE $User_Email ='email'";
 
 $check = mysqli_fetch_array(mysqli_query($con,$CheckSQL));
 
 if(isset($check)){

 echo 'Email Already Exist, Please Enter Another Email.';

 }
else{ 
$Sql_Query = "INSERT INTO users (email,password,fName) values ('$User_Email','$User_Password','$User_Full_Name')";

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
