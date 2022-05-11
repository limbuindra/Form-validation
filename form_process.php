<?php
$email = $_POST['email'];
echo "hello";
#$link = new PDO("mysql:host=localhost;port=3306","newuser","password" );


$dbhost = 'localhost';
$dbuser = 'newuser';
$dbpass = 'password';
///$link = mysql_connect($dbhost, $dbuser, $dbpass);
$link = new mysqli($dbhost,$dbuser,$dbpass) or die("Unable to connect");

$sql = "CREATE DATABASE demo2";
if(mysqli_query($link, $sql)){
echo "Database created successfully";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

echo "hello";




echo $email;
?>
