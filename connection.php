<?php

//putting database name, username and password here in variables,found from MyPhpAdmin
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "lims";


 // create connection
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("User/password is wrong");  //returns a bool value

//mysqli_connect() function establishes a connection with MySQL server and returns the connection as an object
//When mysqli_connection is not okay "die" will kll my page with a message


// check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());  
//mysqli_connect_error() function returns the error description from the last connection error, if any
}
?>

