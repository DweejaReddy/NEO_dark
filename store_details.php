<?php
session_start();
//   $server = "localhost";
//   $username = "root";
//   $password = "";
  // $dbname = "neo21entries";

  $con = mysqli_connect("localhost","ias2020","ecell123","neo21");
  if(!$con){
      die("connection failed due to ". mysqli_connect_error());
  }
  if(isset($_POST['submit_form'])){
    $name=mysqli_real_escape_string($con, $_POST['name']);
    $email=mysqli_real_escape_string($con, $_POST['email']);
    $contact=mysqli_real_escape_string($con, $_POST['contact']);
    $whatsapp=mysqli_real_escape_string($con, $_POST['whatsapp']);
    $school= mysqli_real_escape_string($con, $_POST['school']);
    $city= mysqli_real_escape_string($con, $_POST['city']);
    $class= mysqli_real_escape_string($con, $_POST['class']);
    $atal = mysqli_real_escape_string($con, $_POST['atal']);
    $_SESSION['name']=$name;
    $checkUser = "SELECT * FROM neo21entries where contact = '$contact'";
    $result = mysqli_query($con, $checkUser);
    $count = mysqli_num_rows($result);
    if($count>0){
      header('LOCATION:success.php');
    }
    else{
      $sql = "INSERT into `neo21`.`neo21entries` (name, class, school, city, email, contact, whatsapp, atal) VALUES ('$name', '$class', '$school', '$city', '$email', '$contact', '$whatsapp', '$atal')";
        
        if($con->query($sql)==true){
            header('LOCATION:thanks.php');
        }
        else{
            echo "Error: $sql <br> $con->error"; 
        }
    }
}
?>
