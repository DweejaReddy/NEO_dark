<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <title>Download NEO certificate</title>
    <link rel="stylesheet" href="certstyle.css">
    <link rel="favicon" href="favicon.ico">
  </head>

  <body>
    <header>
      <div class="text-center text-white">
        <img src="neo.png" height="300px" alt="logo">
        <h1>Download your participation certificate</h1>
      </div>
    </header>
    <main class="text-center my-3 text-white">

      <form method="post" action="filter.php">
        <label for="name">Enter Your Name</label><br>
        <input class="my-3 text-center" required type="text" name="name" autocomplete="name" placeholder="Name"
          id="name" minlength="3"><br>
        <label for="name">Enter Your Registered Phone number</label><br>
        <input class="my-3 text-center" required type="text" name="contact" placeholder="Phone number" required><br>
        <Button id="submitBtn" type="submit" class="btn btnth" name="certificate_form">Download Certificate</Button>
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