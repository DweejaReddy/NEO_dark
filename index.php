<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./scroll-animation.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="images/favicon_io/site.webmanifest">
    <title>NEO | E-CELL, VNIT</title>
</head>
<body>
  <!-- ==============================HEADER STARTS============================= -->
    <nav id="mainNavbar" class="navbar navbar-dark navbar-expand-lg py-0"data-aos="fade-down"
    data-aos-duration="2000">
      <a href="https://www.ecellvnit.org/" class="navbar-brand">
      <img class="d-none d-lg-block ml-3" src="images/E-Cell_white.png" alt="ecell" width="150px">
      <img class="d-sm d-lg-none ml-3" src="images/E-Cell_white.png" alt="ecell" width="100px"></a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navLinks"
        aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navLinks">
        <ul class="navbar-nav ml-3 ">
          <li class="nav-item d-none d-lg-block">
            <a href="#home" class="nav-link">Home<i class="fas fa-arrow-alt-circle-right d-none ml-3"></i></a>
          </li>
          <li class="nav-item d-lg-none">
            <a href="#home_mob" class="nav-link">Home<i style="float: right;" class="fas fa-arrow-alt-circle-right ml-3 mt-0"></i></a>
          </li>
          <li class="nav-item d-none d-lg-block">
            <a href="#about" class="nav-link">About Us<i class="fas fa-arrow-alt-circle-right d-none ml-3 mt-0"></i></a>
          </li>
          <li class="nav-item d-lg-none">
            <a href="#about_mob" class="nav-link">About Us<i class="fas fa-arrow-alt-circle-right  ml-3 mt-0" style="float: right;" ></i></a>
          </li>
          <!-- <li class="nav-item d-none d-lg-block">
           <a href="#struct" class="nav-link">Timeline<i class="fas fa-arrow-alt-circle-right ml-3 mt-0  d-none"></i></a>
          </li>
          <li class="nav-item d-lg-none">
            <a href="#struct_mob" class="nav-link">Timeline<i class="fas fa-arrow-alt-circle-right ml-3 mt-0" style="float: right;" ></i></a>
           </li> -->
          <li class="nav-item">
            <a href="#faqs" class="nav-link">FAQs<i class="fas fa-arrow-alt-circle-right ml-3 mt-0  d-lg-none" style="float: right;" ></i></a>
          </li>
          <li class="nav-item">
            <a href="sponsors.php" class="nav-link">Sponsors<i class="fas fa-arrow-alt-circle-right ml-3 mt-0  d-lg-none" style="float: right;" ></i></a>
          </li>
          <li class="nav-item mr-md-5">
            <a href="#contact" class="nav-link">Contact Us <i class="fas fa-arrow-alt-circle-right ml-3 mt-0 d-lg-none" style="float: right;" ></i></a>
          </li>
        </ul>
        <!-- <li class="nav-item ml-5 d-none d-lg-block">
          <a class="btn btn-dark bg btn1 btn" href="certificate.php" target="_blank" role="button"> DOWNLOAD CERTIFICATE<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
          </svg></a>
        </li> -->
        <li class="nav-item ml-3 d-none d-lg-block">
          <a class="btn btn-dark bg  btn1 btn" href="images/NEO brochure.pdf" target="_blank" role="button">BROCHURE<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
          </svg></a>
        </li>
        <li class="nav-item d-block d-lg-none ml-3">
          <a href="images/NEO brochure.pdf" target="_blank" class="nav-link"
            >Brochure<i
              class="fas fa-arrow-alt-circle-right ml-3 mt-0 d-lg-none"
              style="float: right"
            ></i
          ></a>
        </li>
        <!-- <li class="nav-item d-block d-lg-none ml-3">
          <a href="certificate.php" target="_blank" class="nav-link"
            >Download Certificate<i
              class="fas fa-arrow-alt-circle-right ml-3 mt-0 d-lg-none"
              style="float: right"
            ></i
          ></a>
        </li> -->
        <li class="nav-item ml-3 d-none d-lg-block">
          <a class="btn btn-dark bg  btn2 btn" href="register.php" target="_blank" role="button">REGISTER NOW<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
          </svg></a>
        </li>
      </div>
    </nav>
<!-- ==============================HEADER ENDS============================= -->

    <<!-- ==============================HOME STARTS============================= -->
    <section class="container-fluid d-none d-lg-block" id="home">
      <div class="row">
        <div class="col-lg-5 img-fluid img-responsive showcase-left"><img class=" ml-4" src="images/NEO_spons.png" alt="" height="220px">
          <div class="heading3 text-center mt-1 mb-4">Awakening the <span style="color: #ff8606;">Entrepreneur</span> within you <br></div>
          <div class="para" style="opacity: 0.7;font-size:1.3vw;">National Entrepreneurship Olympiad is a nationwide examination for the students of class 7th to 12th grade to nurture and test their entrepreneurial skills. This olympiad includes sections like Basic Entrepreneurial Concepts, Value Proposition, Finances, Public Speaking, Logical Analytics, English Proficiency.
          </div>
      
          <div class="text-center align-items-left d-none d-lg-block">
            <a class="btn btn-dark bg btn btn1 mt-3 mr-4 showcase-left" href="register.php" target="_blank" role="button">REGISTER NOW<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
          </svg></a>
            
          <!-- <a class="btn btn-dark bg btn btn1 mt-3 mr-2" href="images/NEO_studymaterial.pdf" target="_blank" role="button">STUDY MATERIAL<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
          </svg></a> -->
          <a class="btn btn-dark bg btn btn1 mt-3 mr-4 showcase-left" href="images/NEO brochure.pdf" target="_blank" role="button"> BROCHURE<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
              <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
            </svg></a>
          <a class="btn btn-dark bg showcase-right1 mt-3 btn2 btn" href="mocktest.php" target="_blank" role="button">ATTEMPT MOCK TEST<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
              <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
            </svg></a>   
          <a class="btn btn-dark bg showcase-right1 mt-3 btn2 btn" href="https://chat.whatsapp.com/GhcVeppiWOMGjfC83Drul0" target="_blank" role="button">Whatsapp Link<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
              <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
            </svg></a>
            <!-- <marquee behavior="" direction=""><h4 style="color: #ff8606;font-weight: 800;" class="mt-2">Registrations for NEO 2023 have been started!!</h4></marquee>
            <div class="row">
              <div class="col-8 text-white my-auto" style="font-size: 1.7vw;">Join the community Here >>></div>
              <div class="col-2"><a href="https://t.me/EntreLearners" target="_blank"> 
                <button class="btn btn3 my-2">Join Now</button></a></div>
            </div> -->
            
          </div>
        </div>
        <div class="col-lg-6 mr-5 showcase-right">
          <img class="img-fluid d-none d-lg-block align-items-end" src="images/home_bg.svg" height="100vh" alt="vector_entrepreneur"/>
        </div>
      </div>
    </section>
    <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
      <i class="fas fa-arrow-up"></i>
    </button>
    <!-- ==============================HOME ENDS============================= -->


    <!-- ==============================HOME MOBILE STARTS============================= -->
    <section class="container-fluid d-lg-none d-block" id="home_mob">
      <div>
        <img src="images/home_bg.svg" data-aos="fade-right" data-aos-duration="1000" alt="" style="margin-bottom: -60px;" >
      </div>
      <div class="text-center">
        <img src="images/NEO_spons.png" data-aos="fade-left" data-aos-duration="1000" alt=""  height="150px" >
      </div>
      <div class="text-white text-center pt-1" >Awakening the <span style="color: #ff8606;">Entrepreneur</span> within you</div>
      <div class="text-center text-white" style="opacity: 0.7;font-size: 3.7vw;">National Entrepreneurship Olympiad is a nationwide examination for the students of class 7th to 12th grade to nurture and test their entrepreneurial skills. This olympiad includes sections like Basic Entrepreneurial Concepts, Value Proposition, Finances, Public Speaking, Logical Analytics, English Proficiency.
            </div>
     
      <!-- <marquee behavior="" direction=""><h6 style="color: #ff8606;font-size: 4.5vw;font-weight: 800;" class="mt-2 text-center">Registrations for NEO 2023 have been started!!</h6></marquee>
      <div class="text-white text-center" style="font-size: 4.3vw;">Join the community Here <i class="fas fa-angle-down"></i></div>
      <div class="text-center"><a href="https://t.me/EntreLearners" target="_blank"> 
        <button class="btn btn3 my-2" style="font-size: 5vw;">Join Now</button></a></div> -->

        <li class="nav-item pt-3 text-center mb-3">
          <a class="btn btn-dark bg  btn2 btn" data-aos="fade-right" data-aos-duration="1000" href="register.php" target="_blank" role="button">REGISTER NOW<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
          </svg></a>
          
          <a class="btn btn-dark bg btn1 btn my-1" data-aos="fade-right" data-aos-duration="1000" href="images/NEO brochure.pdf" target="_blank" role="button"> BROCHURE<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
          </svg></a>

          <a class="btn btn-dark bg  btn2 btn" data-aos="fade-right" data-aos-duration="1000" href="mocktest.php" target="_blank" role="button">ATTEMPT MOCK TEST<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
          </svg></a>

          <a class="btn btn-dark bg btn1 btn my-1" data-aos="fade-right" data-aos-duration="1000" href="https://chat.whatsapp.com/GhcVeppiWOMGjfC83Drul0" target="_blank" role="button">Whatsapp Link<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
          </svg></a>
          
          <!-- <a class="btn btn-dark bg btn1 btn mr-1 my-1" data-aos="fade-left" data-aos-duration="1000" href="http://neo.ecellvnit.org/certificate.php" target="_blank" role="button">CERTIFICATE<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
          </svg></a> -->
        </li>
    </section>
    <!-- ==============================HOME MOBILE ENDS============================= -->


    <!-- ==============================COMMUNITY BLOCK STARTS============================= -->
    <section class="community container-fluid d-none d-md-block" style="margin-bottom:-3%;">
      <div class="heading text-center"style="padding-top:2%;margin-top:-2%;"data-aos="fade-up"data-aos-duration="2000">JOIN THE COMMUNITY</div>
      <div class="row">
        <div class="col-md-4"style="margin-left:10%;margin-top:5%"data-aos="fade-right"data-aos-duration="2000">
          <div class="heading text-center">❝ EntreLearners ❞</div>
          <div class="para text-center"style="margin:3% 0">
              Join this community filled with Entrepreneurship enthusiasts to get a deeper knowledge, one on one discussion and <span style="color:yellow;">THINK, IDEATE AND CREATE</span>  your ideas with other members of this engaging community.<br>Exclusively for 7th-12th standard students
              <a href="https://t.me/EntreLearners" target="_blank"> 
              <button class="btn btn3">Join Now</button></a>
        </div>
        </div>
        <div class="col-md-6">
          <img src="images/com.png" alt="" data-aos="fade-left"data-aos-duration="2000">
        </div>
      </div>
    </section>
<!-- ==============================COMMUNITY BLOCK ENDS============================= -->

<!-- ==============================COMMUNITY MOBILE STARTS============================= -->
    <section class="community container-fluid d-block d-md-none" style="margin-bottom:-3%;">
      <div class="heading text-center"style="padding-top:2%;margin-top:-2%;"data-aos="fade-up"data-aos-duration="2000">JOIN THE COMMUNITY</div>
      <div class="row">
      <div class="col text-center">
          <img src="images/com.png" class="text-center" alt="" width="350vw"
          data-aos="fade-left"data-aos-duration="2000">
        </div>
        <div class="col text-center"data-aos="fade-right"data-aos-duration="2000">
          <div class="heading text-center" style="font-size:10vw;">❝ EntreLearners ❞</div>
          <div class="para text-center"style="margin:3% 0">
              Join this community filled with Entrepreneurship enthusiasts to get a deeper knowledge, one on one discussion and <span style="color:yellow;">THINK, IDEATE AND CREATE</span>  your ideas with other members of this engaging community.<br>Exclusively for 7th-12th standard students
              <a href="https://t.me/EntreLearners" target="_blank"> 
              <button class="btn btn3" style="font-size:5vw;">Join Now</button></a>
        </div>
        </div>
        
      </div>
    </section>
    <!-- ==============================COMMUNITY MOBILE ENDS============================= -->

    <!-- ==============================ABOUT SECTION============================= -->
    <section class="container d-none d-lg-block " id="about">
      <div class="heading text-center my-5" data-aos="fade-up" data-aos-duration="2000">ABOUT</div>
      <div class="row align-items-center mx-5 my-5">
        <div class="col-md-1 col-lg-2"></div>
        <div class="col-sm-3 col-md-5 col-lg-4 align-items-center my-5">
          <div class="text-center mb-5">
            <div data-aos="zoom-in-up">
            <img class="d-sm-3 d-lg-6 " id="pic1" src="images/E-Cell_white.png" alt="" width="250px"></div> 
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-5 para text-center text-md-left" style="font-size:1.3vw;">E-Cell VNIT is the entrepreneurship cell of VNIT. The very purpose of E-Cell is to foster a community of entrepreneurs and stimulate a constructive ecosystem for them. Throughout the year E-cell organizes events that promote managerial values among budding students across the country.</div>
        
        <div class="col-sm-1 col-md-1"></div>
        <div class="col-sm-3 col-md-5 align-items-center my-5 order-md-2 order-sm-1">
          <div class="text-center" data-aos="zoom-in-up">
            <img class="d-sm-3 d-lg-6" id="pic2" src="images/neo_black_full.png" alt="" width="350px"></div>
        </div>
        <div class="col-md-6  text-right para order-md-1 order-sm-2" style="font-size:1.3vw;">"Young minds are less biased and have higher risk-taking capabilities"
          Let us nurture them in the right direction.
         With this motive, National Entrepreneurship Olympiad was launched in the year 2018 aiming at fostering the growth of students and building an entrepreneurial mindset. It will provide students with the requisite exposure which is otherwise unavailable to school students. NEO is hence synonymous with a ladder that will help students enlighten them in an unexplored domain of startups.   
         </div>
      </div>
    </section>
    <!-- ==============================ABOUT SECTION ENDS============================= -->

    <!-- ==============================ABOUT MOBILE============================= -->
    <section class="container-fluid d-lg-none" id="about_mob">
      <div class="heading text-center mt-5 mb-4" data-aos="fade-up" data-aos-duration="2000">ABOUT</div>
      <div class="row align-items-center" data-aos="fade-up" data-aos-duration="2000">
        <div class="mx-3" style="box-sizing: content-box;background-color:rgb(54, 49, 49);border-radius: 8%;">
        <div class="col-12 d-flex justify-content-center my-3" >
          <img class="d-sm-3 d-lg-6 " id="pic1" src="images/E-Cell_white.png" alt="" width="250px">
        </div>
        <div class="mx-2 mb-4 pb-2" >
          <div class="col-sm-12 para text-white text-center" style="color: #171717;font-size:3.7vw;">E-Cell VNIT is the entrepreneurship cell of VNIT. The very purpose of E-Cell is to foster a community of entrepreneurs and stimulate a constructive ecosystem for them. Throughout the year E-cell organizes events that promote managerial values among budding students across the country.</div>
      </div>
    </div>
  </div>
    <div class="row align-items-center" data-aos="fade-up" data-aos-duration="2000">
      <div class="mx-3 my-4" style="box-sizing: content-box; background-color:rgb(54, 49, 49);border-radius: 8%;">
      <div class="col-12 d-flex justify-content-center my-3">
        <img class="d-sm-3 d-lg-6" id="pic2" src="images/neo_dark.png" alt="" width="250px">
      </div>
      <div class="mx-2 mb-5">
        <div class="col-sm-12 para text-white text-center mb-3" style="color: #171717;font-size:3.7vw;"><span class="quote">"Young minds are less biased and have higher risk-taking capabilities"</span>
          Let us nurture them in the right direction.
         With this motive, National Entrepreneurship Olympiad was launched in the year 2018 aiming at fostering the growth of students and building an entrepreneurial mindset. NEO is hence synonymous with a ladder that will help students enlighten them in startups and entrepreneurship.</div>
    </div>
  </div>
</div>
    </section>
    <!-- ==============================ABOUT MOBILE ENDS============================= -->

    <div class="heading text-center my-5" data-aos="fade-up" data-aos-duration="2000">NEO 2022 AFTERMOVIE</div>
    <style>.video{position:relative;width:100%;height:0;padding-bottom:56.27198%;}.video iframe{position:absolute;top:0;width:100%;height:100%;}</style><div class="video mx-auto mb-5"><iframe width='560' height='329' src="https://www.youtube.com/embed/CKFwUfBk1Nk?&theme=dark&autoplay=1&autohide=2&rel=0"frameborder="0"></iframe></div>


    

    <!-- ==============================TIMELINE STARTS============================= -->
    <!-- <section id="struct" class="d-none d-md-block">
      
      <div class="sticky" style="color: #ff8606;font-weight: bolder;margin-left: -2.5vw;">NATIONAL ENTRPRENEURSHIP OLYMPIAD <br> <br> <span class="text-center" style="color: white;font-weight: bold;">COMPETITION TIMELINE</span></div>
      <div class="pb-5 my-5">
        <div class="bord"></div>
      <div class="text-center"><img class="round" data-aos="fade-right" data-aos-duration="1000" src="images/r1.png" alt="" width="500px"></div>
      <div class="text-right" style="margin-top:-247px;margin-right:20px;"><img class="round" data-aos="fade-left" src="images/date1.png" alt="" height="300px"></div>
      
      <div class="text-right"><img class="round" data-aos="fade-left" data-aos-duration="1000" src="images/r2.png" alt="" width="500px"></div>
      <div class="text-left" style="margin-top:-272px;margin-left:430px;"><img class="round" data-aos="fade-right" src="images/date2.png" alt="" width="500px" height="350px"></div>
      
      <div class="text-center"><img class="round" data-aos="fade-right" data-aos-duration="1000" src="images/r3.png" alt="" width="500px"></div>
      <div class="text-right" style="margin-top:-249px;margin-right:20px;"><img class="round" data-aos="fade-left" src="images/date3.png" alt="" height="330px"></div>
          <div class="row">
            <div class="col-md-6"></div>
          <div class="text-left col-md-6 py-4"><img data-aos="fade-up" data-aos-duration="1000" src="images/timelineimg.png" alt="" width="400px"></div></div>
        </div>
      </div>
  </div>
  
  </div>
</div>
    </section> -->
    <!-- ==============================TIMELINE ENDS============================= -->

    <!-- ==============================TIMELINE MOBILE STARTS============================= -->
    <!-- <section class="d-md-none d-block" id="struct_mob" >
      <div class="heading3 text-center sticky-md py-4 " style="color: #ff8606;font-weight: bolder;">NATIONAL ENTRPRENEURSHIP OLYMPIAD <br> <br> <span class="text-center" style="color: white;font-weight: bold;">COMPETITION TIMELINE</span></div>
      <div class="bord1"></div>
      <div class="row">
      <div class="col-1"><img class="round" data-aos="fade-right" data-aos-duration="1000" src="images/r1.png" alt="" width="500px"></div>
    <div class="col-11"></div></div>
    <div class="text-right" style="margin-top:-137px;margin-right:-25px"><img class="round" data-aos="fade-left" src="images/date1.png" alt="" height="170px"></div>
    <div class="row">
      <div class="col-5"></div>
      <div class=" col-2"><img class="round" data-aos="fade-left" data-aos-duration="1000" src="images/r2.png" alt="" width="500px"></div></div>
      <div class="text-left" style="margin-top:-143px;margin-left:-18px"><img class="round" data-aos="fade-right" src="images/date2.png" alt=""height="200px"></div>
      <div class="row">
      <div class="text-center col-1"><img class="round" data-aos="fade-right" data-aos-duration="1000" src="images/r3.png" alt="" width="500px"></div></div>
      <div class="text-right" style="margin-top:-130px;margin-right:-25px;"><img class="round" data-aos="fade-left" src="images/date3.png" alt="" height="200px"></div>
          <div class="row">
            <div class="col-md-6"></div>
          <div class="text-md-left text-center col-md-6 py-4"><img data-aos="fade-up" data-aos-duration="1000" src="images/timelineimg.png" alt="" width="300px"></div></div>
        </div>
  </div>
  </div>
</div>
    </section> -->
<!-- ==============================TIMELINE MOBILE ENDS============================= -->


    <!-- ==============================GUIDELINES STARTS============================= -->
    <!-- <section class="guide container-fluid mt-5" id="guide">
      <div class="heading text-center"style="padding-top:2%;margin-top:-2%;"data-aos="fade-up"data-aos-duration="2000">GUIDELINES</div>
      <div class="container para text-left">
        <div class=" text-center">
          <div><i class="fas fa-angle-double-right px-3 py-3" style="color: #ff8606;"></i><span style="font-weight: 800;">Round 1 examination dates: </span>15th-18th January 2022</div>
          <div><i class="fas fa-angle-double-right px-3 py-3" style="color: #ff8606;"></i>Examination will be conducted on <span style="font-weight: 800;"> Practically Mobile Application</span></div>
            <div><i class="fas fa-angle-double-right px-3 py-3" style="color: #ff8606;"></i>Round 1 exam window will be <span style="font-weight: 800;"> open for all 3 days</span> and can be given once.</div>
              <div><i class="fas fa-angle-double-right px-3 py-3" style="color: #ff8606;"></i><span style="font-weight: 800;">Make sure you register on Practically app with the same mobile number which was used for registering for NEO’22.</span></div>
                <div><i class="fas fa-angle-double-right px-3 py-3" style="color: #ff8606;"></i>NEO Round 1 exam will be an MCQ type test (no negative marking)‼️</div>
                  <div><i class="fas fa-angle-double-right px-3 py-3" style="color: #ff8606;"></i>Total
                    <span style="font-weight: 800;"> 60 </span>questions</div>
                    <div><i class="fas fa-angle-double-right px-3 py-3" style="color: #ff8606;"></i>Duration: <span style="font-weight: 800;"> 45 minutes.</span></div>
            </div>
      </div>
    </section> -->
<!-- ==============================GUIDELINES ENDS============================= -->

<!-- ==============================PRACTICALLY SECTION STARTS============================= -->
    <!-- <section class="practically container-fluid d-none d-md-block" id="practically" style="margin-bottom:70px;">
      <div class=" text-center pt-3" style="font-size:1.7vw;" data-aos="fade-up" data-aos-duration="1000">Round1 and Round2 of NEO to be held only on the <span style="font-weight:bolder;">PRACTICALLY</span> app</div>
      <div class="text-center pt-2 pb-3">
      <a href="https://www.practically.com/web/index.php" target="_blank"><img data-aos="fade-up" data-aos-duration="1000" src="images/pract.png" alt="" width="20%"></a></div>
      <div data-aos="fade-up" data-aos-duration="1000" class=" text-center pb-2" style="font-size:1.7vw;">Download the practically app now!! <br> Available both on play store(android) and app store(ios)</div>
      <div class="row align-items-center pb-3">
        <div class="col-3"></div>
        <div class="col-2" data-aos="fade-up" data-aos-duration="1000" style="background-color:black;margin-left:60px;border-radius:50px;">
          <a href="https://play.google.com/store/apps/details?id=com.thirdflix.practically" target="_blank"><img src="images/playstore.png" alt="" width="80%"></a>
        </div>
        <div class="col-2" data-aos="fade-up" data-aos-duration="1000" style="background-color:black;margin-left:60px;border-radius:50px;">
          <a href="https://apps.apple.com/us/app/practically-learning-app/id1507585284?ls=1" target="_blank"><img src="images/appstore.png" alt="" width=80%"></a>
        </div>
      </div>
    </section> -->
    <!-- ==============================PRACTICALLY SECTION STARTS============================= -->

<!-- ==============================PRACTICALLY MOBILE STARTS============================= -->
    <!-- <section class="practically container-fluid d-md-none d-block my-5" id="practically" style="margin-bottom:70px;">
      <div class=" text-center pt-3" style="font-size:2.8vw;" data-aos="fade-up" data-aos-duration="1000">Round1 and Round2 of NEO to be held only on the <span style="font-weight:bolder;">PRACTICALLY</span> app</div>
      <div class="text-center pt-2 pb-3">
      <a href="https://www.practically.com/web/index.php" target="_blank"><img data-aos="fade-up" data-aos-duration="1000" src="images/pract.png" alt="" width="35%"></a></div>
      <div class=" text-center pb-2" style="font-size:2.8vw;" data-aos="fade-up" data-aos-duration="1000">Download the practically app now!! <br> Available on both play store(android) and app store(ios)</div>
      <div class="row align-items-center pb-3">
        <div class="col-3" data-aos="fade-up" data-aos-duration="1000" style="background-color:black;margin-left:60px;border-radius:50px;">
          <a href="https://play.google.com/store/apps/details?id=com.thirdflix.practically" target="_blank"><img src="images/playstore.png" alt="" width="100%"></a>
        </div>
        <div class="col-3" data-aos="fade-up" data-aos-duration="1000" style="background-color:black;margin-left:60px;border-radius:50px;">
          <a href="https://apps.apple.com/us/app/practically-learning-app/id1507585284?ls=1" target="_blank"><img src="images/appstore.png" alt="" width="100%"></a>
        </div>
      </div>
    </section> -->
<!-- ==============================PRACTICALLY MOBILE ENDS============================= -->



  <!-- ==============================STATS STARTS============================= -->
    <section id="stats" class="stat"data-aos="fade-up"
    data-aos-duration="2000">
      <div id="counter">
        <div class="content-box mt-5">
          <br><br>
          <div class="container">
            <div class="row text-center">
              <div class="col-md-4">
                <div class="stat-items">
                  <i class="fas fa-handshake fa-4x"></i>
                  <h3><span class="counter-value" data-count="750">>0</span><span>+</span></h3>
                  <p>ORIENTATIONS</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="stat-items">
                  <i class="fas fa-user-friends fa-4x"></i>
                  <h3><span class="counter-value" data-count="450">>0</span><span>+</span></h3>
                  <p>SCHOOLS</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="stat-items">
                  <i class="fas fa-university fa-4x"></i>
                  <h3><span class="counter-value" data-count="10000">>0</span><span>+</span></h3>
                  <p>REGISTRATIONS</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- ==============================STATS ENDS============================= -->

       <!-- ==============================NEO PICTURES STARTS============================= -->
    <section id="glimpses">
      <div class="heading text-center my-5"data-aos="fade-up"
      data-aos-duration="2000">GLIMPSES OF NEO</div>
      <div class="owl-carousel owl-theme px-3 pb-5"data-aos="fade-up"
      data-aos-duration="2000">
        <div class="item px-2">
          <img src="images/pic1.jpeg" alt="">
        </div>
        <div class="item px-2">
          <img src="images/pic2.jpeg" alt="">
        </div>
        <div class="item px-2">
          <img src="images/pic3.jpeg" alt="">
        </div>
        <div class="item px-2">
          <img src="images/pic4.jpeg" alt="">
        </div>
        <div class="item px-2">
          <img src="images/pic5.jpeg" alt="">
        </div>
        <div class="item px-2">
          <img src="images/pic6.jpeg" alt="">
        </div>
        <!-- <div class="item px-2">
          <img src="images/pic7.jpeg" alt="">
        </div> -->
        <div class="item px-2">
          <img src="images/pic8.jpeg" alt="">
        </div>
        <!-- <div class="item px-2">
          <img src="images/pic9.jpeg" alt="">
        </div>
        <div class="item px-2">
          <img src="images/pic10.jpeg" alt="">
        </div>
        <div class="item px-2">
          <img src="images/pic11.jpeg" alt="">
        </div>
        <div class="item px-2">
          <img src="images/pic12.jpeg" alt="">
        </div>
        <div class="item px-2">
          <img src="images/pic13.jpeg" alt="">
        </div>
        <div class="item px-2">
          <img src="images/pic14.jpeg" alt="">
        </div>
        <div class="item px-2">
          <img src="images/pic15.jpeg" alt="">
        </div>
        <div class="item px-2">
          <img src="images/pic16.jpeg" alt="">
        </div> -->

    </div>
    <div class="text-center">
    <a class="btn btn-dark bg btn1 btn mb-5" data-aos="fade-up"
    data-aos-duration="2000" href="gallery.php" target="_blank" role="button">SEE FULL GALLERY<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
      <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
    </svg></a>
  </div>

    </section>
    <!-- ==============================NEO PICTURES ENDS============================= -->


    <!-- STUDENT TESTIMONIALS -->
    <section id="testimonials">
        <div class="heading text-center my-4"data-aos="fade-up" data-aos-duration="2000">WHAT OUR PARTICIPANTS ARE SAYING ABOUT NEO?</div>
        <div class="swiper mySwiper px-3 pb-5 text-white" id="videos" data-aos="fade-up"
      data-aos-duration="2000">
      <div class="swiper-wrapper">

        <div class="swiper-slide px-1 pt-4">
          <div class="single-testimonial  text-center">
            <video width="320" style="padding-top: 70px;max-width: 90%;" controls>
              <source src="videos/Y2Mate.is - Inspiring Royalty Free Background Music For Videos - Mix-czYimCfcyWc-160k-1646814428293_1.mov" type="video/mp4">
            </video>
            <div class="student-info text-center">
              <p style="color: #ff8606;font-size: 20px;">Thilan Keshav. M</p>
              <p>Class 7</p>
              <p style="color: #ff8606;font-size: 18px;">Velammal Vidyalaya, Alapakkam, Chennai</p>
            </div>
            <p class="px-3"><b> "My goal in life changed completely because of NEO, now I want to become an entrepreneur in field of automobiles."</b></p>
          </div>
        </div>


      <div class="swiper-slide px-1 pt-4">
        <div class="single-testimonial  text-center">
          <video width="320" style="padding-top: 70px;max-width: 90%;" controls>
            <source src="videos/Y2Mate.is - Inspiring Royalty Free Background Music For Videos - Mix-czYimCfcyWc-160k-1646814428293.mov" type="video/mp4">
          </video>
          <div class="student-info text-center">
            <p style="color: #ff8606;font-size: 20px;">Charvi Mandowara</p>
            <p>Class 8</p>
            <p style="color: #ff8606;font-size: 18px;">St.Raphael's H.S school, Indore</p>
          </div>
          <p class="px-3"><b>“Mentors were very helpful. I learned many new things about entrepreneurship, marketing strategies and finance.”</b> </p>
        </div>
      </div>

      
      <div class="swiper-slide px-1 pt-4">
        <div class="single-testimonial  text-center">
          <video width="320" style="padding-top: 70px;max-width: 90%;" controls>
            <source src="videos/Shikhar Salgarkar NEO Testimonial - Sheetal Salgarkar.mov" type="video/mp4">
          </video>

          <div class="student-info text-center">
            <p style="color: #ff8606;font-size: 20px;">Shikhar Salgarkar</p>
            <p>Class 10</p>
            <p style="color: #ff8606;font-size: 18px;">Ashoka Universal School, Nashik</p>
          </div>
          <p class="px-3"><b>“NEO was different from other Olympiads. I learned to think on my feet, analyze ideas and discuss it with a team.”</b> </p>
        </div>
      </div>

      <div class="swiper-slide px-1 pt-4">
        <div class="single-testimonial  text-center">
          <video width="320" style="padding-top: 70px;max-width: 90%;" controls>
            <source src="videos/NEO Testimonial Video_Mannan Jain.mov" type="video/mp4">
          </video>

          <div class="student-info text-center">
            <p style="color: #ff8606;font-size: 20px;">Mannan Jain</p>
            <p>Class 8</p>
            <p style="color: #ff8606;font-size: 18px;">National Center for Excellence, Bangalore</p>
          </div>
          <p class="px-3"><b>“My best memories in NEO 2022 were Baby Shark Tank and the Boardroom Discussion. It was fun to interact with new students.”</b> </p>
        </div>
      </div>

      <div class="swiper-slide px-1 pt-4">
        <div class="single-testimonial  text-center">
          <video width="320" style="padding-top: 70px;max-width: 90%;" controls>
            <source src="videos/Y2Mate_is_Inspiring_Royalty_Free_Background_Music_For_Videos_Mix.mov" type="video/mp4">
          </video>
          <div class="student-info text-center">
            <p style="color: #ff8606;font-size: 20px;">Soumil Mitra</p>
            <p>Class 9</p>
            <p style="color: #ff8606;font-size: 18px;">South Point High School, Kolkata</p>
          </div>
          <p class="px-3"><b>“NEO is much more than a olympiad. It taught me real life solution to problems that can help to change world for better.”</b> </p>
        </div>
      </div>
      
        
    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>

      </div>
    </section>

    <!-- ==============================FAQS STARTS============================= -->
    <section id="faqs" class="faq">
          <div class="heading text-center mt-2"data-aos="fade-up" data-aos-duration="2000">FREQUENTLY ASKED QUESTIONS</div>
          <div class="accordion my-3 text-center" id="accordionPanelsStayOpenExample">
            <div class="container">
            <div  class="row">
              <div class="col-md-6">  
            <div class="accordion-item" data-aos="fade-up" data-aos-duration="2000">
          
              <div class="accordion-header" id="panelsStayOpen-headingOne">
                <h2 class="clearfix mb-0">
                  <a class="btn btn-link" data-toggle="collapse" data-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">Why should I participate in Neo?<i class="fa fa-angle-down d-none d-lg-block "></i></a>
                </h2>
              </div>
              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                  NEO will help you develop : Analytical Mindset, Logical Reasoning, Entrepreneurial Mindset, Communication Skills, Knowledge of: Finances, Marketing, Startups.
                </div>
              </div>
            </div>
          </div>
           
          <div class="col-md-6">
            <div class="accordion-item" data-aos="fade-up" data-aos-duration="2000">
                <div class="accordion-header" id="panelsStayOpen-headingTwo">
                  <h2 class="clearfix mb-0">
                    <a class="btn btn-link" data-toggle="collapse" data-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">What are the eligibility criteria?<i class="fa fa-angle-down d-none d-lg-block"></i></a>
                  </h2>
                </div>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                  <div class="accordion-body">
                    Students of Class 7th, 8th, 9th, 10th, 11th and 12th are eligible
                  </div>
                </div>
              </div>
            </div>
            </div>
            </div>
          
          <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="accordion-item" data-aos="fade-up" data-aos-duration="2000">
                  <div class="accordion-header" id="panelsStayOpen-headingThree">
                    <h2 class="clearfix mb-0">
                      <a class="btn btn-link" data-toggle="collapse" data-target="#panelsStayOpen-collapseThree" aria-expanded="true" aria-controls="panelsStayOpen-collapseThree">How Will NEO Be Conducted Amidst The <br>
                        Pandemic?<i class="fa fa-angle-down d-none d-lg-block"></i></a>
                    </h2>
                  </div>
                  <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                      Round 1 and Round 2 of NEO will be conducted online. The platform for the same will be conveyed to the participants on your registered email ids and Whatsapp Contact numbers.
                    </div>
                  </div>
                </div>
              </div>
             
          <div class="col-md-6">
          <div class="accordion-item" data-aos="fade-up" data-aos-duration="2000">
              <div class="accordion-header" id="panelsStayOpen-headingFour">
                <h2 class="clearfix mb-0">
                  <a class="btn btn-link" data-toggle="collapse" data-target="#panelsStayOpen-collapseFour" aria-expanded="true" aria-controls="panelsStayOpen-collapseFour">On what basis will the papers be checked <br> for students of Class 7th, 8th, 9th, 10th, 11th and 12th?<i class="fa fa-angle-down d-none d-lg-block"></i></a>
                </h2>
              </div>
              <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                <div class="accordion-body">
                  The evaluation criteria will take into consideration the class of the student. The papers would be fairly evaluated based on that. Students of all these classes will be considered in the selection for further rounds
          
                </div>
              </div>
            </div>
          </div>
        </div>
          </div>
        <div class="container">
          <div  class="row">
            <div class="col-md-6">
               <div class="accordion-item" data-aos="fade-up" data-aos-duration="2000">
              <div class="accordion-header" id="panelsStayOpen-headingFive">
                <h2 class="clearfix mb-0">
                  <a class="btn btn-link" data-toggle="collapse" data-target="#panelsStayOpen-collapseFive" aria-expanded="true" aria-controls="panelsStayOpen-collapseFive">What are registration fees?<i class="fa fa-angle-down d-none d-lg-block"></i></a>
                </h2>
              </div>
              <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
                <div class="accordion-body">FREE</div>
              </div>
            </div>
          </div>
        
          <div class="col-md-6">
            <div class="accordion-item" data-aos="fade-up" data-aos-duration="2000">
              <div class="accordion-header" id="panelsStayOpen-headingSix">
                <h2 class="clearfix mb-0">
                  <a class="btn btn-link" data-toggle="collapse" data-target="#panelsStayOpen-collapseSix" aria-expanded="true" aria-controls="panelsStayOpen-collapseSix">How can one study for the examination?<i class="fa fa-angle-down d-none d-lg-block"></i></a>
                </h2>
              </div>
              <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSix">
                <div class="accordion-body">Study material will be provided after the registration of the participant</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    </section> 

<!-- ==============================FAQS END============================= -->

    <!-- ==============================CONTACT STARTS============================= -->
    <section class="container-fluid backg" id="contact">
      <div class="heading text-center mt-1 pt-5" data-aos="fade-up"data-aos-duration="2000">EVENT MANAGERS</div>
      <div class="row align-items-center pb-3 ">
        <div class="col-md-4 text-center data" data-aos="fade-up" data-aos-duration="2000">
          <div class="profile">
            <img src="images/pranay.jfif" alt="" class="user">
            <blockquote >Pranay Gaidhane</blockquote>
            <p>8308728488</p>
          </div>
        </div>
        <div class="col-md-4 text-center data"data-aos="fade-up" data-aos-duration="2000">
          <div class="profile">
            <img src="images/shravani.jfif" alt="" class="user" width="220px">
            <blockquote>Shravani Bongade</blockquote>
            <p>8275782707</p>
          </div>
        </div>
        <div class="col-md-4 text-center data" data-aos="fade-up" data-aos-duration="2000">
          <div class="profile">
            <img src="images/aman.jfif" alt="" class="user">
            <blockquote>Aman Nahar</blockquote>
            <p>9589817857</p>
          </div>
        </div>
        
          <div class="col-md-4 text-center data" data-aos="fade-up" data-aos-duration="2000">
            <div class="profile">
              <img src="images/sahitya.jfif" alt="" class="user">
              <blockquote>Sahitya Saripaka</blockquote>
              <p>9573324438</p>
            </div>
          </div>
          <div class="col-md-4 text-center data"data-aos="fade-up" data-aos-duration="2000">
            <div class="profile">
              <img src="images/ashlesha.jfif" alt="" class="user" width="220px">
              <blockquote>Ashlesha Deshpande</blockquote>
              <p>9322533859</p>
            </div>
          </div>
          <div class="col-md-4 text-center data" data-aos="fade-up" data-aos-duration="2000">
            <div class="profile">
              <img src="images/khushi.jfif" alt="" class="user">
              <blockquote>Khushi Tank</blockquote>
              <p>8275844551</p>
            </div>
      </div>
    </section>
    <!-- ==============================CONTACT ENDS============================= -->

    <div class="end text-center py-3">
      <p style="color: white;"data-aos="fade-up" data-aos-duration="2000">Want to know more? <br><span style="color: #fa9806;"> Reach us through our Social media Handles!!</span></p>
    </div>
    
    <!-- ==============================QUERIES STARTS============================= -->
    <section class="container-fluid contact">
      <form class="py-4" method="post" name="NEO-QUERIES">
      <div class="heading text-center mx-5 pb-4" data-aos="fade-up" data-aos-duration="2000">ASK YOUR QUERIES</div>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="form-group col-12 col-md-5">
                <input type="text" data-aos="fade-up" data-aos-duration="2000" name="Name" class="form-control rounded-pill" class="form-control" id="name" placeholder="Name*" required>
                <input style="margin:4.5% 0;" data-aos="fade-up" data-aos-duration="2000" type="email" name="Email" class="form-control rounded-pill" class="form-control" id="Email" placeholder="Email*" required>
                <input type="text" data-aos="fade-up" data-aos-duration="2000" name="Phone" class="form-control rounded-pill" class="form-control" id="Phone" placeholder="Phone*" required>
        </div>
        <div class="form-group col-12 col-md-5" data-aos="fade-up" data-aos-duration="2000">
        <textarea type="text" name="Message" rows="6" class="form-control rounded-pill" class="form-control" id="Message" placeholder="Message*" required></textarea>
        </div>

            <div class="col text-center">
                <button type="submit"  name="submit"  class="btn btn-dark btn-lg my-5" style="background-color: #ff8606;" value="SUBMIT">Submit</button>
            
            
    </div>
      </div>
      </form>
    </section>
<!-- ==============================QUERIES END============================= -->

    <!-- ==============================FOOTER STARTS============================= -->
  <footer>
    <div class="row align-items-center">
      <div class="col-md-1"></div>
        <div class="col-md-3 text-center py-md-5 py-2">
          <img src="images/E-Cell_white.png" alt="" width="150px">
        
        <br> 
                    <span><a href="https://m.facebook.com/vnitecell/" target="_blank"><i class="fab fa-facebook fa-2x row1 fb "></i></a></span>
                    <span><a href="https://twitter.com/ecell_vnit" target="_blank"><i class="fab fa-twitter-square fa-2x row1 twitter"></i></a></span>
                    <span><a href= "https://www.instagram.com/ecellvnit/" target="_blank"><i class="fab fa-instagram fa-2x row1 insta"></i></a></span>
                    <span><a href=" https://www.linkedin.com/company/6615520/" target="_blank"><i class="fab fa-linkedin fa-2x row1 linkedin"></i></a></span>
                    <span><a href=" https://www.youtube.com/channel/UC0KNOmODhqLcEpcfN9qEsIQ" target="_blank"><i class="fab fa-youtube fa-2x row1 youtube"></i></a></span>
 
      </div>
      <div class="col-md-4 text-white text-center foot1 mt-md-3">
        <p>For Association Opportunities and Queries Contact: 
          <!-- <br><a class="foot" href="mailto:neo@ecellvnit.org">neo@ecellvnit.org</a> -->
          <br><a class="foot" href="mailto:neo.pr.ecellvnit@gmail.com">neo.pr.ecellvnit@gmail.com</a></p>
      </div>
      <div class="col-md-3 text-white text-center pb-2 foot1">All rights reserved <br> &copy;<a class="foot" href="https://www.ecellvnit.org/" target="_blank">E-Cell Vnit</a></div>
    </div>
  </footer>
  <!-- ==============================FOOTER ENDS============================= -->

    <script
    src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"
  ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
  $(document).ready(function() {
  
  $(window).scroll(function () { 
      console.log($(window).scrollTop())
    if ($(window).scrollTop() > 550) {
      $('#mainNavbar').addClass('sticky-top');
    }
    if ($(window).scrollTop() < 551) {
      $('#mainNavbar').removeClass('sticky-top');
    }
  });
});
  </script>
   <script>
     window.sr = ScrollReveal();
     sr.reveal(' .showcase-left', {
       duration:2000,
       origin:'left',
       distance:'300px'
     });
     sr.reveal(' .showcase-left1', {
       duration:2000,
       origin:'left',
       distance:'300px'
     });
     sr.reveal(' .showcase-right',{
       duration:2000,
       origin:'right',
       distance:'300px'
     });
     
     sr.reveal(' .showcase-top',{
       duration:2000,
       origin:'top',
       distance:'300px'
     });
     sr.reveal(' .showcase-right1',{
       duration:2000,
       origin:'right',
       distance:'600px'
     });
   </script>
   <script>
    AOS.init();
  </script>
   <script>
     let mybutton = document.getElementById("btn-back-to-top");
  window.onscroll = function () {
    scrollFunction();
  };
  function scrollFunction() {
    if (
      document.body.scrollTop > 20 ||
      document.documentElement.scrollTop > 20
    ) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }
  mybutton.addEventListener("click", backToTop);
  function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
  function animateValue(obj, start, end, duration) {
  let startTimestamp = null;
  const step = (timestamp) => {
    if (!startTimestamp) startTimestamp = timestamp;
    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
    obj.innerHTML = Math.floor(progress * (end - start) + start);
    if (progress < 1) {
      window.requestAnimationFrame(step);
    }
  };
  window.requestAnimationFrame(step);
}
const obj = document.getElementById("count");
animateValue(obj, 0, 10000, 5000);
   </script>
   <script>
     $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:false,
    autoplay:true,
    autoplayTimeout:2000,
    responsive:{
        0:{
            items:1
        },
        992:{
            items:3
        },
    }
})
   </script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 0,
    slidesPerGroup: 1,
    loop: true,
    // loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
          0: {
            slidesPerView: 1,
            spaceBetween: 0,
          },
          992: {
            slidesPerView: 3,
            spaceBetween: 0,
          },
        },
  });
</script>

   <script>
     $(window).scroll(function() {
  var a = 0;
  var oTop = $('#counter').offset().top - window.innerHeight;
  console.log($('#counter').offset().top);
  if (a == 0 && $(window).scrollTop() > oTop) {
    $('.counter-value').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },
        {
          duration: 3000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
          }
        });
    });
    a = 1;
  }
});
   </script>

<script>
            const scriptURL = 'https://script.google.com/macros/s/AKfycbzXlW-T95TlI-WD0gqG3LrjmRVbeGPwGxkrpJ7iV84deWG_tIymu-5iFW-Mivrs1_QS/exec'
            const form = document.forms['NEO-QUERIES']
          
            form.addEventListener('submit', e => {
              e.preventDefault()
              fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response => alert("Thanks for Contacting us..! We Will Contact You Soon..."))
                .catch(error => console.error('Error!', error.message))
            })
          </script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
