<?php
$link = mysqli_connect("localhost", "newuser", "password","samriddhi");
// Check connection
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}


// Attempt insert query execution

$sql = "INSERT INTO persons (first_name, last_name, email) VALUES
('John', 'Rambo', 'johnrambo@mail.com'),
('Clark', 'Kent', 'clarkkent@mail.com'),
('John', 'Carter', 'johncarter@mail.com'),
('Harry', 'Potter', 'harrypotter@mail.com')";

if(mysqli_query($link, $sql)){
echo "$sql.<br>Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);

?>
