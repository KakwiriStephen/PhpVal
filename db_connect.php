<?php


///connect to Database

// $conn= new mysqli('localhost', 'root','','voting');

// //check if database connection is successful
// if(!$conn){
//     echo"Database failed to connect".mysqli_connect_error();
// }
// else{
//    $stmt =$conn->prepare("insert into userdata(firstname, phonenumber, email, password) values(?,?,?,?)");
//    $stmt->bind_param("siss",$firstname,$phonenumber,$email,$password);
//    $stmt->execute();
//    echo("Registartion Successful");
//    $stmt->close();
//    $conn->close();
// }

// Create connection
$conn = new mysqli('localhost', 'root', '', 'voting');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO UserData (firstname, phonenumber, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $email, $password);

// set parameters and execute
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
$stmt->execute();

$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$stmt->execute();

$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>

?>