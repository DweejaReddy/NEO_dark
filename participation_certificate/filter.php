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
if (isset($_POST['certificate_form'])) {
  // store the name
  $name = mysqli_real_escape_string($con, $_POST['name']);
  // store the contact
  $contact = mysqli_real_escape_string($con, $_POST['contact']);
  // query to find all the records having given contact details
  $checkUser = "SELECT * FROM finalNEO21entries where contact = '$contact'";
  // querying the database
  $result = mysqli_query($con, $checkUser);
  // count the no. of record found
  $count = mysqli_num_rows($result);
  // if count is less than '1' which means no record was found
  if ($count < 1) {
    // record was not found
    header('LOCATION:nouser.php');
  } else {
    // $table = $result->fetch_all(MYSQLI_ASSOC);
    // $name = $table[0]['name'];
    $name = ucwords($name);
    header('content-type:application/pdf');
    $image = @imagecreatefromjpeg("cert_template.jpg");
    $output = "certificate.jpg";
    $black = imagecolorallocate($image, 0, 0, 0);

    $rotation = 0;
    $font_size = 80;
    $certificate_text = $name;
    $drFont = realpath("Belleza.ttf");

    $txt_space = imagettfbbox($font_size, $rotation, $drFont, $certificate_text);
    $txt_width = abs($txt_space[4] - $txt_space[0]);
    $txt_height = abs($txt_space[3] - $txt_space[1]);

    $image_width = imagesx($image);
    $image_height = imagesy($image);

    $origin_x = abs($image_width - $txt_width) / 2;
    $origin_y = 790;

    $output = $name . ".jpeg";
    imagettftext($image, $font_size, $rotation, $origin_x, $origin_y, $black, $drFont, $certificate_text);
    imagejpeg($image, $output, 100);
    imagedestroy($image);

    $pdf = new FPDF();
    $pdf->AddPage('L', 'A4');
    $pdf->Image($output, 0, 0, 300, 210);
    $pdf->Output('D', "NEO_certificate_$name.pdf");

    if (is_file($output)) {
      unlink($output);
    }
  }
}
