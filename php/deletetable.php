<?php
/* Attempt MySQL server connection */
$link = mysqli_connect("localhost", "newuser", "password", "samriddhi");
// Check connection
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt update query execution
$sql ="DROP TABLE persons;";
if(mysqli_query($link, $sql)){
echo "$sql.<br>Table Deleted successfully.";
} else {
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>
