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


if($_SERVER["REQUEST_METHOD"] == "POST"){

        //Request Data comes in JSON format from the android app
        $json_request = json_decode(file_get_contents("php://input"));
        $json_result = array();

        //Get name from $json_request variable
        $name = $json_request->{"name"};

        //Your method
        sayHi($name);

    }

    function sayHi($name){

        echo "Hello " . $name;

    }

?>
