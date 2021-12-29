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
                        <img src="images/home_bg_form.png" style="border-radius: 20px 0px 0px 20px;margin-left:-30px;" alt="" width="120%" height="95%">
                    </div>
                    <div class="d-md-none mx-3">
                        <img src="images/home_bg.png" alt="" width="100%" "> 
                    </div>
                    <!--======================NAME======================  -->
                <div class="col-md-6">
                <div class="row align-items-center">
            <div class="form-group col-md-6 ml-3 col-8 mt-5 labels">
                <label for="name">Full Name*</label>
                <input type="text" name="name" class="form-control rounded-pill" class="form-control" id="name" placeholder="Enter Your Name" required>
              </div>
            </div>
<!-- -=================================CLASS=========================- -->
              <div class="row align-items-center">
            <div class="col-md-4 labels ml-3 col-10">
              <div class="form-group">
                <label for="class">Class*</label>
                <select name="class" id="class" class="select" required>
                  <div class="btn btn-light">
                  <option class="option" value="">--Choose your class--</option>
                  <option class="option" value="7">7</option>
                  <option class="option" value="8">8</option>
                  <option class="option" value="9">9</option>
                  <option class="option" value="10">10</option>
                </select>
                </div>
</div>
                <!-- =========================SCHOOL===================== -->
<div class="col-md-1"></div>
              <div class="form-group col-md-6 labels ml-3 col-8">
                <label for="school">School Name*</label>
                <input type="text" class="form-control rounded-pill" name="school" class="form-control" id="school" placeholder="Enter Your School Name" required>
              </div>
            </div>
            <!-- ====================CITY======================== -->
            <div class="row align-iems-center">
              <div class="form-group col-md-6 ml-3 col-8 labels">
                <label for="city">City*</label>
                <input type="text" class="form-control rounded-pill" name="city" class="form-control" id="city" placeholder="Enter Your City" required>
              </div>
            </div>
            <!-- =================EMAIL========================= -->
            <div class="row align-items-center">
                <div class="col-md-9 labels ml-3 col-10">
            <div class="form-group">
              <label for="email">Email address*</label>
              <input type="email" class="form-control rounded-pill" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email address" required>
            </div>
        </div>
    </div>
    <!-- ============================CONTACT NUMBER====================== -->
    <div class="row align-items-center">
        <div class="col-md-9 labels ml-3 col-10">
            <div class="form-group">
                <label for="contact">Phone Number(This is unique credential used to login to the exam)*</label>
                <input type="text" class="form-control rounded-pill" name="contact" class="form-control" id="contact" placeholder="Enter Your Mobile Number" required>
              </div>
            </div>
        </div>
        <!-- =========================WHATSAPP========================= -->
        <div class="row align-items-center">
            <div class="col-md-9 labels ml-3 col-10">
              <div class="form-group">
                <label for="whatsapp">Whatsapp Number(Enter the same number again if both are same)*</label>
                <input type="text" class="form-control rounded-pill" name="whatsapp" class="form-control" id="whatsapp" placeholder="Enter Your Whatsapp Number" required>
              </div>
            </div>
        </div>
        <!-- =======================HOW DID YOU KNOW===================== -->
        <div class="row align-items-center">
            <div class="col-md-9 labels ml-3 col-10">
              <div class="form-group drop">
                <label for="atal">How did you get to know about NEO?*</label>
                <select name="atal" id="atal" class="select" required>
                  <div class="btn btn-light">
                  <option class="option" value="">--Choose one option below--</option>
                  <option class="option" value="atal">Atal tinkering lab/Atal Innovation Mission/NITI Aayog</option>
                  <option class="option" value="ito">Indian Talent Olympiad</option>
                  <option class="option" value="uc">Unified Council</option>
                  <option class="option" value="scholar">Scholarships in India</option>
                  <option class="option" value="others">Others</option>
                </select>
                </div>
            </div>
        </div>
<!-- ==================SUBMIT================== -->
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
