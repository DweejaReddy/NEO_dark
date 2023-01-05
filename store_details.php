<?php
require("phpmailer/PHPMailer.php");
require("phpmailer/SMTP.php");
require("phpmailer/Exception.php");
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
    $src = mysqli_real_escape_string($con, $_POST['src']);
    $_SESSION['name']=$name;
    $checkUser = "SELECT * FROM neo22 where contact = '$contact'";
    $result = mysqli_query($con, $checkUser);
    $count = mysqli_num_rows($result);
    if($count>0){
      header('LOCATION:success.php');
    }
    else{
      $sql = "INSERT into `neo21`.`neo22` (name, class, school, city, email, contact, whatsapp, src) VALUES ('$name', '$class', '$school', '$city', '$email', '$contact', '$whatsapp', '$src')";
        
        if($con->query($sql)==true){
            header('LOCATION:thanks.php');
            // $mail = new PHPMailer\PHPMailer\PHPMailer();
            // try {
            //     $mail->isSMTP();                                            
            //     $mail->Host       = 'smtp.gmail.com';         
            //     $mail->SMTPAuth   = true;                         
            //     $mail->Username   = 'contact@ecellvnit.org';             
            //     $mail->Password   = '21Cont@ct22';                             
            //     $mail->SMTPSecure = 'tls';        
            //     $mail->Port       = 587;                                  
            //     $mail->setFrom('contact@ecellvnit.org', 'NEO VNIT');
            //     $mail->addAddress($email);
            //     $mail->addAttachment('images/NEO_studymaterial.pdf'); 
            //     $mail->isHTML(true);            
            //     $mail->Subject = 'Registration for NEO 2022 successful !!!';
            //     $mail->Body    = 'Dear '.$name.',<br>Your <b>registration</b> for National Entrepreneurship Olympiad (NEO 2022) by E-Cell VNIT is <b>completed successfully.</b><br><br><b>NEO Round 1:</b><br>Date: 15th & 16th January 2022<br>Mode: Online (through Practically Mobile Application)<br>Duration: 45 minutes<br>Topics:<br><li>Logical Thinking<li>English Proficiency<li>Basics of Entrepreneurship & Startups<li>Basics of Finances<li>Marketing & Public Speaking<br><br>Download the <b>Practically</b> Application Now !! <br><br>To join our nationwide Telegram community of Entrepreneurship Enthusiasts Youngsters called <b>EntreLearners</b> click below<br><a href="https://t.me/EntreLearners">https://t.me/EntreLearners</a><br><br>Please find the below attached copy of the <b>Pre-Study Material</b> for your reference. <br><br>For any queries visit: <br><a href="https://neo.ecellvnit.org/">https://neo.ecellvnit.org/<br></a>All the best!!<br><br>Regards<br><span style="color:#ff8606"><b>TEAM NEO</b></span>';
            //     $mail->send();
            //     header('LOCATION:thanks.php');
            // } catch (Exception $e) {
            //     echo "Something went wrong!! Try again!!!";
            // }

        }
        else{
            echo "Error: $sql <br> $con->error"; 
        }
    }
}
?>
