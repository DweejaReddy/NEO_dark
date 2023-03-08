<?php

$con = mysqli_connect("localhost","ias2020","ecell123","neo21");

if (!$con) {
    die("connection failed due to " . mysqli_connect_error());
  }

  $result = mysqli_query($con,"SELECT * FROM neo21");

echo '
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <title>NEO 23 Portal</title>
    <link rel="stylesheet" href="certstyle.css">
    <link rel="favicon" href="favicon.ico">
  </head>

  <style>
  span{
    color:black;
  }
  </style>

  <body>
    <header>
      <div class="text-center text-white">
        <img src="neo.png" height="300px" alt="logo">
        <h1>NEO 23 PORTAL</h1>
      </div>
    </header>
    <main class="text-center my-3 text-white">

      <form method="post" action="filter.php">
        <label for="name">Enter Your Registered Name*</label><br>
        
        <center style="margin:10px ;"><select name="learner_name" id = "learner_name" required><option>-- Search your name --</option>';
        while($row= mysqli_fetch_array($result)){
          echo "<option value='$row[learner_name]'>$row[learner_name]</option>";
        }
        echo '
        </select>
        </center>
        
        
        <label for="name">Enter Your Registered Phone number*</label><br>
        <input class="my-3 text-center" required type="text" name="contact" placeholder="Phone number" required><br>
        
        <label for="name">Enter Your Registered E-mail Id</label><br>
        <input class="my-3 text-center" required type="text" name="Emails" placeholder="Emails" ><br>



        <label for="name">Enter Your Class*</label><br>
        <div class="form-group">
                
                <select name="standard" id="standard" class="select" required>
                  <div class="btn btn-light">
                  <option class="option" value="">--Choose your class--</option>
                  <option class="option" value="7">7</option>
                  <option class="option" value="8">8</option>
                  <option class="option" value="9">9</option>
                  <option class="option" value="10">10</option>
                  <option class="option" value="11">11</option>
                  <option class="option" value="12">12</option>
                </select>
                </div>
        <label for="name">Feedback*</label><br>
        
                
          <div class="rate" id="feedback" name="feedback" required>
          <input type="radio" id="star5" name="feedback" value="5" />
          <label for="star5" title="text">5 stars</label>
          <input type="radio" id="star4" name="feedback" value="4" />
          <label for="star4" title="text">4 stars</label>
          <input type="radio" id="star3" name="feedback" value="3" />
          <label for="star3" title="text">3 stars</label>
          <input type="radio" id="star2" name="feedback" value="2" />
          <label for="star2" title="text">2 stars</label>
          <input type="radio" id="star1" name="feedback" value="1"required />
          <label for="star1" title="text">1 star</label>
        </div>
                

        

        
        <Button id="submitBtn" type="submit" class="btn btnth" name="result">Check Results</Button>
        <Button id="submitBtn" type="submit" class="btn btnth" name="certificate_form">Download certificate</Button>
        <form>
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

</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css"/>

<script>

    $("#learner_name").chosen();



</script>';
mysqli_close($con);

?> 

<!-- <!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <title>NEO 23 Portal</title>
    <link rel="stylesheet" href="certstyle.css">
    <link rel="favicon" href="favicon.ico">
  </head>

  <body>
    <header>
      <div class="text-center text-white">
        <img src="neo.png" height="300px" alt="logo">
        <h1>NEO 23 PORTAL</h1>
      </div>
    </header>
    <main class="text-center my-3 text-white">

      <form method="post" action="filter.php">
        <label for="name">Enter Your Registered Name*</label><br>
        <input class="my-3 text-center" required type="text" name="learner_name" autocomplete="name" placeholder="Name"
          id="learner_name" minlength="3"><br>
        <label for="name">Enter Your Registered Phone number*</label><br>
        <input class="my-3 text-center" required type="text" name="contact" placeholder="Phone number" required><br>
        
        <label for="name">Enter Your Registered E-mail Id</label><br>
        <input class="my-3 text-center" required type="text" name="Emails" placeholder="Emails" ><br>



        <label for="name">Enter Your Class*</label><br>
        <div class="form-group">
                
                <select name="standard" id="standard" class="select" required>
                  <div class="btn btn-light">
                  <option class="option" value="">--Choose your class--</option>
                  <option class="option" value="7">7</option>
                  <option class="option" value="8">8</option>
                  <option class="option" value="9">9</option>
                  <option class="option" value="10">10</option>
                  <option class="option" value="11">11</option>
                  <option class="option" value="12">12</option>
                </select>
                </div>
        <label for="name">Feedback*</label><br>
        
                
          <div class="rate" id="feedback" name="feedback" required>
          <input type="radio" id="star5" name="feedback" value="5" />
          <label for="star5" title="text">5 stars</label>
          <input type="radio" id="star4" name="feedback" value="4" />
          <label for="star4" title="text">4 stars</label>
          <input type="radio" id="star3" name="feedback" value="3" />
          <label for="star3" title="text">3 stars</label>
          <input type="radio" id="star2" name="feedback" value="2" />
          <label for="star2" title="text">2 stars</label>
          <input type="radio" id="star1" name="feedback" value="1"required />
          <label for="star1" title="text">1 star</label>
        </div>
                

        

        
        <Button id="submitBtn" type="submit" class="btn btnth" name="result">Check Results</Button>
        <Button id="submitBtn" type="submit" class="btn btnth" name="certificate_form">Download certificate</Button>
        <form>
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

</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css"/>

<script>

    $("#searchddl").chosen();



</script> -->

