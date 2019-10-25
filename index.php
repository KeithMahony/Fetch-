<?php
	
 echo 'FetchApp Test';

// Createa a connection
$con=mysqli_connect("us-cdbr-iron-east-05.cleardb.net","bfee5eec5d1d2a","49334008","heroku_030aad63729d0bd");
 
// Checks connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else{
  echo "Connected to MySQL";
}
// Close connection
mysqli_close($con);
?>
