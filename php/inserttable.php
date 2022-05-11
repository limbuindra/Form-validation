<?php
$link = mysqli_connect("localhost", "newuser", "password","samriddhi");
// Check connection
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}


// Attempt insert query execution

$var = substr(md5(microtime()), 0, 2);
$email = "Bikram".$var."@gmail.com";

$sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('Peter', 'Parker',
'$email')";

if(mysqli_query($link, $sql)){
echo "$sql.<br>Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);

?>
