<?php
$link = mysqli_connect("localhost", "newuser", "password","samriddhi");
// Check connection
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "CREATE TABLE contact_form(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
username VARCHAR(30) NOT NULL,
email VARCHAR(70) NOT NULL UNIQUE,
mobileno VARCHAR(10) NOT NULL,
gender VARCHAR(10) NOT NULL
)";

if(mysqli_query($link, $sql)){
echo "Table created successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

?>
