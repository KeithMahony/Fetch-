<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

include 'DatabaseConfig.php';

 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

 $Email = $_POST['User_Email'];
 
 $Password = $_POST['User_Password'];
 
 $Full_Name = $_POST['User_Full_Name'];

 $CheckSQL = "SELECT * FROM User_Details_Table WHERE User_Email='$Email'";
 
 $check = mysqli_fetch_array(mysqli_query($con,$CheckSQL));
 
 if(isset($check)){

 echo 'Email Already Exist, Please Enter Another Email.';

 }
else{ 
$Sql_Query = "INSERT INTO User_Details_Table (User_Email,User_Password,User_Full_Name) values ('$Email','$Password','$Full_Name')";

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
