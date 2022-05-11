<?php
$link = mysqli_connect("localhost", "newuser", "password");
// Check connection
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "CREATE DATABASE samriddhi";
if(mysqli_query($link, $sql)){
echo "Database created successfully";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
//mysqli_close($link);



?>
