<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Registration | NEO</title> -->
    <title>Mock Test| NEO 23,E-CELL,VNIT</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- external css  -->
    <link rel="stylesheet" href="formStyle.css">
    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- icons -->
    <link rel = "icon" href = "images/icon.png" type = "image/x-icon">
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
     <form  class="py-4" method="post" action="store_details.php">
            <div class="heading text-center mx-5">MOCK TEST</div>
            <div class="container mt-3"style="background-color: black; background-clip:content-box; border-radius:3%;">
                <div class="row">
                    <div class=" d-none d-md-block col-md-6">
                        <img src="images/home_bg_form.png" style="border-radius: 20px 0px 0px 20px;margin-left:-30px;" alt="" width="120%" height="95%">
                    </div>
                    <div class="d-md-none mx-3">
                        <img src="images/home_bg.png" alt="" width="100%" > 
                    </div>
                    
                <div class="col-md-6 text-center">
                <div class="row align-items-center text-center" style="margin: 1.5em;">

                <a class="btn btn-dark bg btn btn1 mx-auto text-center " style="width:70%; margin:2em;" href="https://docs.google.com/forms/d/e/1FAIpQLSfmz1c4pb62skTdRBS4ixxPZ-xttls46Gw6YSaNeQdN8HjrHQ/viewform">7-8th Class</a>
                <a class="btn btn-dark bg btn btn1 mx-auto text-center" style="width:70%; margin:2em;" href="https://docs.google.com/forms/d/e/1FAIpQLSfmz1c4pb62skTdRBS4ixxPZ-xttls46Gw6YSaNeQdN8HjrHQ/viewform">9-10th Class</a>
                <a class="btn btn-dark bg btn btn1 mx-auto text-center" style="width:70%; margin:2em;" href="https://docs.google.com/forms/d/e/1FAIpQLSczFvLRvdN2eG5Nr-cbPQ3OiprZyx_t6UWL_aEmYGeh-9UyeQ/viewform">11-12th Class</a>
            
               

          
            
            
            
   
   
        
        

        
       
        </div>
    </div>
          </form> 
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
          <script>
            $(function() {
              var chk = $('#flexCheckDefault');
              var btn = $('#btncheck');

              chk.on('change', function() {
                btn.prop("disabled", !this.checked);//true: disabled, false: enabled
              }).trigger('change'); //page load trigger event
            });
            
          </script>
</body>

<!-- <body style="background-color: #171717;">
        <div class="container d-flex align-items-center justify-content-center min-vh-100">
            <div class="row text-center">
                <div class="" style="color:white;">
                  <?php echo "<h1><span style=color:#ff8606;>Registrations for NEO 2022 have been closed!!</span></h1><h3>Thank you for showing interest in NEO 22 by E-CELL, VNIT.<br><br>You can still join our engaging community to learn various aspects of Entrepreneurship";?><br>
                    <a href="https://t.me/EntreLearners" target="_blank"> 
                      <button class="btn btnth">Join Now</button></a>
                  <br><br>
              Do visit the NEO website for latest updates
              <br>
              <a href="https://neo.ecellvnit.org/" target="_blank"> 
                <button class="btn btnth">Visit NEO website</button></a>
                </div>
            </div>
        </div>
        </div>
</body> -->
</html>
