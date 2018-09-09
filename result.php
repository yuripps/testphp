<?php
include ("connec/mysql.php");

// define variables and set to empty values
$name = $email = $gender = $comment = $address = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = test_input($_POST["firstname"]);
  $lastname = test_input($_POST["lastname"]);
  $gender = test_input($_POST["gender"]);
  $age = test_input($_POST["age"]);
  //$name = trim($_POST["name"]);
  $address = test_input($_POST["address"]);
  $tel = test_input($_POST["tel"]);
  $email = test_input($_POST["email"]);
  $runcategories = test_input($_POST["runcategories"]);
  $size = test_input($_POST["size"]);
  $underlyingdisease = test_input($_POST["underlyingdisease"]);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h2>Your Input:</h2>";
echo $firstname."<br>".$lastname."<br>".$gender."<br>".$age."<br>".$address."<br>".$tel."<br>".$email."<br>".$runcategories."<br>".$size."<br>".$underlyingdisease."<br>";

//insert data
$sql = "INSERT INTO myuserprofile (firstname , lastname ,gender ,age, address , tel ,email,runcategories ,size , underlyingdisease) 
VALUES ('$firstname','$lastname', '$gender', '$age' ,'$address','$tel','$email', '$runcategories','$size' , '$underlyingdisease')";

//echo $sql."<br>";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
<a href = "report.php" target = "_blank">ดูรายชื่อผู้สมัคร</a>