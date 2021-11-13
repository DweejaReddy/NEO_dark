<?php

session_start();
// include('mailing.php');


// $name = $_POST["name"];
$name = $_SESSION['name'];
// $name = $_SESSION['name1'];
// $sub = "Welcome To C-Suites";
// $teamname = "";
// $event = "";

//htmlMail($to_email, $sub, $name, $teamname, $event );
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Thank You</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- external css  -->
    <link rel="stylesheet" href="style.css">
    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- favicon -->
    <!-- <link rel = "icon" href = "images/icon.png" type = "image/x-icon"> -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="images/favicon_io/site.webmanifest">
    </head>

    <style>
    .btnth {
      border-radius: 20px;
      background-color: #ff8606;
      color: white;
      font-size: 1.3rem;
      font-weight: bolder;
}
.btnth {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.btnth:after {
  content: "»";
  position: absolute;
  opacity: 0;
  top: 5px;
  right: -20px;
  transition: 0.5s;
}

.btnth:hover {
  padding-right: 24px;
  padding-left: 8px;
}

.btnth:hover:after {
  opacity: 1;
  right: 10px;
}
    </style>
  <body>
        <div class="">
        <div class="container d-flex align-items-center justify-content-center min-vh-100">
            <div class="row text-center">
                <div class="" style="color:white;">
                  <?php echo "<h4>We will contact you soon. <br>Welcome to the community,<b style=color:red> $name!</b></h4><h4>If you still have not joined the community group, Join now!!</h4>";?><br>
                  <a href="https://t.me/joinchat/aVc6q5N8mCRhNTJl" target="_blank"> 
              <button class="btn btnth">Join Now</button></a>
                </div>
            </div>
            <!-- <br> -->
        </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
