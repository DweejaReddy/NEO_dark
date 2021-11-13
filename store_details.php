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
 
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$whatsapp=$_POST['whatsapp'];
$school=$_POST['school'];
$city=$_POST['city'];
$class=$_POST['class'];
$_SESSION['name'] = $name;

  $sql = "INSERT INTO neo21entries (name, email, contact, whatsapp, school, city, class) VALUES ('$name', '$email', '$contact','$whatsapp', '$school', '$city', '$class' )";
 
    if ($conn->query($sql) === TRUE) {
        echo "submit ";
    header('LOCATION:thanks.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  } 
}
?>
