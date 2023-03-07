<?php
require('fpdf.php');
// $server = '127.0.0.1';
// $username = 'root';
// $password = '';
// $dbname = 'neo21';

// to store the connection
// $con = mysqli_connect($server, $username, $password, $dbname);
$con = mysqli_connect("localhost","ias2020","ecell123","neo21");

// to check whether the db is connected or not
if (!$con) {
  die("connection failed due to " . mysqli_connect_error());
}
// check whether the download button is clicked or not
if (isset($_POST['result'])) {
  // store the name
  $learner_name = mysqli_real_escape_string($con, $_POST['learner_name']);
  // store the contact
  $contact = mysqli_real_escape_string($con, $_POST['contact']);
  //store emails
  $Emails = mysqli_real_escape_string($con, $_POST['Emails']);
  // store standard
  $standard= mysqli_real_escape_string($con, $_POST['standard']);
  // store feedback
  $feedback= mysqli_real_escape_string($con, $_POST['feedback']);

  // query to find all the records having given contact details
  

  if(!empty($learner_name)){
    $query = "UPDATE neo21 ". "SET feedback='$feedback', standard='$standard' , contact = '$contact' "."WHERE learner_name = '$learner_name'";
    $result = $con->query($query);
    if($result){
      echo "";
    }  
  }
  $checkUser = "SELECT * FROM neo21 where learner_name = '$learner_name' or Emails= '$Emails'";
  

  // querying the database
  $result = mysqli_query($con, $checkUser);
  // count the no. of record found
  $count = mysqli_num_rows($result);

  // if count is less than '1' which means no record was found
  if ($count < 1) {
    // record was not found
    header('LOCATION:nouser.php');
  } else {
    while($row = mysqli_fetch_assoc($result)){
      if($row['Selected']=='yes'){
      


      echo'<!DOCTYPE html>
      <html lang="en">
      
        <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
          <title>Download NEO 22 Participation certificate</title>
          <link rel="stylesheet" href="certstyle.css">
          <link rel="favicon" href="favicon.ico">
        </head>
      
        <body>
          <header>
            <div class="text-center text-white">
              <img src="neo.png" height="300px" alt="logo">
              
            </div>
          </header>
          <main class="text-center my-3 text-white">
      
          <h1><span style=color:#ff8606>Congratulations '.$learner_name.' !!!<br></span><h3><brDear Student,<br>You are <span style=color:#ff8606> selected</span> for the second round.<br></a><br><br>Join for <span style=color:#ff8606> NEO 23 Round 2</span> updates.
          <br><a href="https://chat.whatsapp.com/IhiNo8jWhePAKbjAtluAcj" target="_blank"> 
              <button class="btn btnth">Whatsapp Link</button></a><br><br>
              
          </main>
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
        </body>
      
      </html>';
    }
    else{
      echo'<!DOCTYPE html>
      <html lang="en">
      
        <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
          <title>Download NEO 22 Participation certificate</title>
          <link rel="stylesheet" href="certstyle.css">
          <link rel="favicon" href="favicon.ico">
        </head>
      
        <body>
          <header>
            <div class="text-center text-white">
              <img src="neo.png" height="300px" alt="logo">
              
            </div>
          </header>
          <main class="text-center my-3 text-white">
      
          <h3><span style=color:#ff8606>  </span><brDear Student,<br>We appreciate your participation in the National Entrepreneurship Competition.<br> We are sorry to inform you that you have been <span style=color:#ff8606>not selected</span> for round 2. <br> Better luck next time!<br></a><br><br>Join the community to know more about entrepreneurship
          <br><a href="https://t.me/EntreLearners" target="_blank"> 
              <button class="btn btnth">Join Now</button></a><br><br>
          </main>
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
        </body>
      
      </html>';

    }
  }
    
  }
}






if (isset($_POST['certificate_form'])) {
  // store the name
  $learner_name = mysqli_real_escape_string($con, $_POST['learner_name']);
  // store the contact
  $contact = mysqli_real_escape_string($con, $_POST['contact']);
  //store emails
  $Emails = mysqli_real_escape_string($con, $_POST['Emails']);
  // store standard
  $standard= mysqli_real_escape_string($con, $_POST['standard']);
  // store feedback
  $feedback= mysqli_real_escape_string($con, $_POST['feedback']);

  // query to find all the records having given contact details and name
  if(!empty($learner_name)){
    $query = "UPDATE neo21 ". "SET feedback='$feedback', standard='$standard' , contact = '$contact' "."WHERE learner_name = '$learner_name'";
    $result = $con->query($query);
    if($result){
      echo "";
    }  
  }
  $checkUser = "SELECT * FROM neo21 where learner_name = '$learner_name' or Emails= '$Emails'";
  // querying the database
  $result = mysqli_query($con, $checkUser);
  // count the no. of record found
  $count = mysqli_num_rows($result);
  

  if ($count < 1) {
    // record was not found
    header('LOCATION:nouser.php');
  } else {

    while($row = mysqli_fetch_assoc($result)){
      if($row['Selected']=='yes'){

    $learner_name = ucwords($learner_name);
    header('content-type:application/pdf');
    
    $image = @imagecreatefromjpeg("cert_template.jpg");
    $output = "certificate.jpg";
    $white = imagecolorallocate($image, 250, 250, 250);

    $rotation=0;
    $font_size=50;
    $certificate_text = $row['learner_name'];
    $drFont = realpath("Helvetica.ttf");

    $txt_space = imagettfbbox($font_size, $rotation, $drFont, $certificate_text);
    $txt_width = abs($txt_space[4] - $txt_space[0]);
    $txt_height = abs($txt_space[3] - $txt_space[1]);

    $image_width = imagesx($image);
    $image_height = imagesy($image);

    $origin_x = abs($image_width - $txt_width) / 2;
    $origin_y = 490;

    $output = $learner_name . ".jpeg";
    imagettftext($image, $font_size, $rotation, $origin_x, $origin_y, $white, $drFont, $certificate_text);
    imagejpeg($image, $output, 100);
    imagedestroy($image);

    $pdf = new FPDF();
    $pdf->AddPage('L', 'A4');
    $pdf->Image($output, 0, 0, 300, 210);
    $pdf->Output('D', "NEO_certificate_$learner_name.pdf");

    if (is_file($output)) {
      unlink($output);
    }
  }
  else{
    $learner_name = ucwords($learner_name);
    header('content-type:application/pdf');
    
    $image = @imagecreatefromjpeg("cert_template.jpg");
    $output = "certificate.jpg";
    $black = imagecolorallocate($image, 0, 0, 0);

    $rotation=0;
    $font_size=50;
    $certificate_text = $row['learner_name'];
    $drFont = realpath("Helvetica.ttf");

    $txt_space = imagettfbbox($font_size, $rotation, $drFont, $certificate_text);
    $txt_width = abs($txt_space[4] - $txt_space[0]);
    $txt_height = abs($txt_space[3] - $txt_space[1]);

    $image_width = imagesx($image);
    $image_height = imagesy($image);

    $origin_x = abs($image_width - $txt_width) / 2;
    $origin_y = 490;

    $output = $learner_name . ".jpeg";
    imagettftext($image, $font_size, $rotation, $origin_x, $origin_y, $black, $drFont, $certificate_text);
    imagejpeg($image, $output, 100);
    imagedestroy($image);

    $pdf = new FPDF();
    $pdf->AddPage('L', 'A4');
    $pdf->Image($output, 0, 0, 300, 210);
    $pdf->Output('D', "NEO_certificate_$learner_name.pdf");

    if (is_file($output)) {
      unlink($output);
    }

  }
}
}
}

?>
