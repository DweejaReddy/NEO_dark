<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration | NEO</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- external css  -->
    <link rel="stylesheet" href="formStyle.css">
    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- icons -->
    <link rel = "icon" href = "images/icon.png" type = "image/x-icon">
</head>

<body>
    <form  class="py-4" method="post" action="store_details.php">
            <div class="heading text-center mx-5">NEO REGISTRATION FORM</div>
            <div class="container mt-3"style="background-color: black; background-clip:content-box; border-radius:3%;">
                <div class="row">
                    <div class=" d-none d-md-block col-md-6">
                        <img src="images/home_bg_form.png" style="border-radius: 20px 0px 0px 20px;margin-left:-30px;" alt="" width="120%" height="90%">
                    </div>
                    <div class="d-md-none mx-3">
                        <img src="images/home_bg.png" alt="" width="100%" "> 
                    </div>
                    
                <div class="col-md-6">
                <div class="row align-items-center">
            <div class="form-group col-md-6 ml-3 col-8 mt-5 labels">
                <label for="name">Full Name*</label>
                <input type="text" name="name" class="form-control rounded-pill" class="form-control" id="name" placeholder="Enter Your Name" required>
              </div>
            </div>
            <div class="row align-items-center">
              <div class="form-group col-md-5 ml-3 col-8 labels">
                <label for="class">Class*</label>
                <input type="text" name="class" class="form-control rounded-pill" class="form-control" id="class" placeholder="Enter Your Class" required>
              </div>
              <div class="form-group col-md-6 labels ml-3 col-8">
                <label for="school">School Name*</label>
                <input type="text" class="form-control rounded-pill" name="school" class="form-control" id="school" placeholder="Enter Your School Name" required>
              </div>
            </div>
            <div class="row align-iems-center">
              <div class="form-group col-md-6 ml-3 col-8 labels">
                <label for="city">City*</label>
                <input type="text" class="form-control rounded-pill" name="city" class="form-control" id="city" placeholder="Enter Your City" required>
              </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-9 labels ml-3 col-10">
            <div class="form-group">
              <label for="email">Email address*</label>
              <input type="email" class="form-control rounded-pill" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email address" required>
            </div>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-md-9 labels ml-3 col-10">
            <div class="form-group">
                <label for="contact">Phone Number*</label>
                <input type="text" class="form-control rounded-pill" name="contact" class="form-control" id="contact" placeholder="Enter Your Mobile Number" required>
              </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-9 labels ml-3 col-10">
              <div class="form-group">
                <label for="whatsapp">Whatsapp Number(Enter the same number again if both are same)*</label>
                <input type="text" class="form-control rounded-pill" name="whatsapp" class="form-control" id="whatsapp" placeholder="Enter Your Whatsapp Number" required>
              </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-9 labels ml-3 col-10">
              <div class="form-group">
                <label for="atal">Are you a student of  Atal Tinkering Lab , Atal Innovation Mission NITI Aayog(Yes/No)*</label>
                <input type="text" class="form-control rounded-pill" name="atal" class="form-control" id="atal" placeholder="Yes/No" required>
              </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-4"></div>
            <div class="col-6">
                <button type="submit"  name="submit_form"  class="btn btn-dark btn-lg my-5" style="background-color: #ff8606;" value="SUBMIT">Submit</button>
            
            
    </div>
        </div>
        </div>
        </div>
    </div>
          </form>

</body>
</html>
