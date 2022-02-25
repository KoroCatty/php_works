<?php
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "root";
 $db = "";

// Create connection
$mysqli = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
// Check connection
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}

//echo "Connected successfully";
//mysqli_close($mysqli);


?>