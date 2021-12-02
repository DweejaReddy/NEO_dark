<?php
session_start();
if(isset($_POST['submit_form']))
{
 $servername = "localhost";
 $username = "ias2020";
 $password = "ecell123";
 $dbname = "neo21";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}	 
 
$name=mysqli_real_escape_string($conn, $_POST['name']);
$email=mysqli_real_escape_string($conn, $_POST['email']);
$contact=mysqli_real_escape_string($conn, $_POST['contact']);
$whatsapp=mysqli_real_escape_string($conn, $_POST['whatsapp']);
$school=mysqli_real_escape_string($conn, $_POST['school']);
$city=mysqli_real_escape_string($conn, $_POST['city']);
$class=mysqli_real_escape_string($conn, $_POST['class']);
$atal=mysqli_real_escape_string($conn, $_POST['atal']);
$_SESSION['name'] = $name;

  $sql = "INSERT INTO neo21entries (name, email, contact, whatsapp, school, city, class, atal) VALUES ('$name', '$email', '$contact','$whatsapp', '$school', '$city', '$class', '$atal' )";
 
    if ($conn->query($sql) === TRUE) {
        echo "submit ";
    header('LOCATION:thanks.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  } 
}
?>
