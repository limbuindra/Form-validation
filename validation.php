


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">


</head>
<body>
<?php
/*
// define variables to empty values
$nameErr = $emailErr = $mobilenoErr = $genderErr =$passErr =$pass2Err="";
$username = $email = $mobileno = $gender = $password = $password2 = "";

//Input fields validation
if ($_SERVER["REQUEST_METHOD"] == "POST") {

//String Validation
    if (emptyempty($_POST["username"])) {
         $nameErr = "Name is required";
    } else {
        $name = input_data($_POST["username"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z0-9\_]+$/",$name)) {
                $nameErr = "Only Alphanumeric and Underscope are allowed";
            }
    }

    //Email Validation
    if (emptyempty($_POST["email"])) {
            $emailErr = "Email is required";
    } else {
            $email = input_data($_POST["email"]);
            // check that the e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
     }

    //Number Validation
    if (emptyempty($_POST["mobileno"])) {
            $mobilenoErr = "Mobile no is required";
    } else {
            $mobileno = input_data($_POST["mobileno"]);
            // check if mobile no is well-formed
            if (!preg_match ("/^[1-9]\d{9}$/", $mobileno) ) {
            $mobilenoErr = "Only 10 digit numeric value is allowed.";
            }
        //check mobile no length should not be less and greator than 10
        if (strlen ($mobileno) != 10) {
            $mobilenoErr = "Mobile no must contain 10 digits.";
            }
    }


    //Empty Field Validation
    if (emptyempty ($_POST["gender"])) {
            $genderErr = "Gender is required";
    } else {
            $gender = input_data($_POST["gender"]);
    }

}
function input_data($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}*/

$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["username"]);
  $email = test_input($_POST["email"]);
  $mobileno = test_input($_POST["mobileno"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<div class="container">
	<div class="header">
		<h2>Registration Form</h2>
	</div>
	<form id="form" name="Form" class="form"method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<div class="form-control">
			<label for="username">Username</label>
			<input type="text" placeholder="testname" id="username" name="username"/>
            <div class="error" id="nameErr"><?php if(isset($nameErr)) echo $nameErr; ?></div>
		</div>

    <div class="form-control">
			<label for="gender">Gender</label>
			<div class="form-inline" id="gender">
                <label><input type="radio" name="gender" value="Male" />Male</label>
                <label><input type="radio" name="gender" value="Female" />Female</label>
            </div>
            <div class="error" id="genderErr"></div>
		</div>

		<div class="form-control">
			<label for="email">Email</label>
			<input type="email" placeholder="abc@test.com" id="email" name="email"/>
			<div class="error" id="emailErr"></div>
		</div>

        <div class="form-control">
			<label for="mobileno">Mobile No.</label>
			<input type="text" placeholder="9856868255" id="mobileno" name="mobileno" maxlength="10" />
            <div class="error" id="mobileErr"></div>
		</div>
		<div class="form-control">
			<label for="password">Password</label>
			<input type="password" placeholder="Password" id="password" name="password"/>
			<div class="error" id="passErr"></div>
		</div>
		<div class="form-control">
			<label for="password2">Password check</label>
			<input type="password" placeholder="Password two" id="password2" name="password2"/>
			<div class="error" id="pass2Err"></div>
		</div>
		<button name="submit" value="Submit">Submit</button>

    <div>
      <?php
      //require_once("php/connect-db.php")
      if(isset($_POST['submit'])) {
          if($nameErr == "" && $emailErr == "" && $mobilenoErr == "" && $genderErr == "") {
              echo "<h3 color = #FF0001> <b>You have sucessfully registered.</b> </h3>";
              echo "Name: " .$name;
              echo "<br>";
              echo "Email: " .$email;
              echo "<br>";
              echo "Mobile No: " .$mobileno;
              echo "<br>";
              echo "Gender: " .$gender;

          $link = mysqli_connect("localhost", "newuser", "password","samriddhi");
          $sql="INSERT INTO contact_form (username, email, mobileno, gender) VALUES ('$name','$email', '$mobileno', '$gender');";
          if(mysqli_query($link, $sql)){
          echo "$sql.<br>Records inserted successfully.";
          } else{
          echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
          } else {
              echo "<h3> <b>You didn't filled up the form correctly.</b> </h3>";
          }
        }

        ?>
    </div>

	</form>
</div>


</body>


    <!---<script src="form.js"></script> -->
</html>
