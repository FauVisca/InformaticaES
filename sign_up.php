<?php
session_start();

$servername = "localhost";
$username = "fauvisca";
$password = "";
$dbname = "my_fauvisca";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if($_SERVER["REQUEST_METHOD"] == "POST"){

 $user=$_POST['user'];
 $email=$_POST['email'];
 $pass=$_POST['pass'];

$sql = "INSERT INTO InformaticaES (User,Email,Passwords,)
VALUES ('$user','$email','$pass')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else{
  http_response_code(405);
  header('Content-Type: application/json; charset=utf-8');
}
$conn->close();
?>
