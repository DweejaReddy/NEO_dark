<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
    />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="images/favicon_io/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="images/favicon_io/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="images/favicon_io/favicon-16x16.png"
    />
    <link rel="manifest" href="images/favicon_io/site.webmanifest" />
    <title>NEO SPONSORS</title>
  </head>
  <style>
    body {
      background: url(images/faq_bg1.png) repeat center right fixed;
      background-size: cover;
      background-color: #171717;
      font-family: "Lato";
      overflow-x: hidden;
    }
    .card img {
      padding: 10px 10px;
      height: 250px;
      width: 250px;
    }

    .row {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    .card {
      border-radius: 8px;
      height: 250px;
      width: 250px;
      margin: 20px;
    }

    @media (max-width: 767px) {
      body {
        background: url(images/faq_bg1.png) repeat center right fixed;
        background-size: 100vw 40vh;
        background-color: #171717;
        font-family: "Lato";
        overflow-x: hidden;
      }
    }
  </style>

  <body>
    <nav id="mainNavbar" class="navbar navbar-dark navbar-expand-lg py-0">
      <a href="https://www.ecellvnit.org/" class="navbar-brand">
        <img
          class="d-none d-lg-block ml-3"
          src="images/E-Cell_white.png"
          alt="ecell"
          width="150px" />
        <img
          class="d-sm d-lg-none ml-3"
          src="images/E-Cell_white.png"
          alt="ecell"
          width="100px"
      /></a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navLinks"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navLinks">
        <ul class="navbar-nav ml-3">
          <li class="nav-item d-none d-lg-block">
            <a href="index.php#home" class="nav-link"
              >Home<i class="fas fa-arrow-alt-circle-right d-none ml-3"></i
            ></a>
          </li>
          <li class="nav-item d-lg-none">
            <a href="index.php#home_mob" class="nav-link"
              >Home<i
                style="float: right"
                class="fas fa-arrow-alt-circle-right ml-3 mt-0"
              ></i
            ></a>
          </li>
          <li class="nav-item d-none d-lg-block">
            <a href="index.php#about" class="nav-link"
              >About Us<i
                class="fas fa-arrow-alt-circle-right d-none ml-3 mt-0"
              ></i
            ></a>
          </li>
          <li class="nav-item d-lg-none">
            <a href="index.php#about_mob" class="nav-link"
              >About Us<i
                class="fas fa-arrow-alt-circle-right ml-3 mt-0"
                style="float: right"
              ></i
            ></a>
          </li>
          <li class="nav-item d-none d-lg-block">
            <a href="index.php#struct" class="nav-link"
              >Timeline<i
                class="fas fa-arrow-alt-circle-right ml-3 mt-0 d-none"
              ></i
            ></a>
          </li>
          <li class="nav-item d-lg-none">
            <a href="index.php#struct_mob" class="nav-link"
              >Timeline<i
                class="fas fa-arrow-alt-circle-right ml-3 mt-0"
                style="float: right"
              ></i
            ></a>
          </li>
          <li class="nav-item">
            <a href="index.php#faqs" class="nav-link"
              >FAQs<i
                class="fas fa-arrow-alt-circle-right ml-3 mt-0 d-lg-none"
                style="float: right"
              ></i
            ></a>
          </li>
          <li class="nav-item d-lg-block d-none">
            <a href="sponsors.php" class="nav-link"
              >Sponsors<i
                class="fas fa-arrow-alt-circle-right ml-3 mt-0 d-lg-none"
                style="float: right"
              ></i
            ></a>
          </li>
          <li class="nav-item mr-md-5">
            <a href="index.php#contact" class="nav-link"
              >Contact Us
              <i
                class="fas fa-arrow-alt-circle-right ml-3 mt-0 d-lg-none"
                style="float: right"
              ></i
            ></a>
          </li>
        </ul>
        <li class="nav-item ml-5 d-none d-lg-block">
          <a
            class="btn btn-dark bg btn1 btn"
            href="http://neo.ecellvnit.org/certificate/"
            target="_blank"
            role="button"
          >
            DOWNLOAD CERTIFICATE<svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-caret-right-fill"
              viewBox="0 0 16 16"
            >
              <path
                d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"
              /></svg
          ></a>
        </li>
        <li class="nav-item ml-3 d-none d-lg-block">
          <a
            class="btn btn-dark bg btn2 btn"
            href="images/NEO brochure.pdf"
            target="_blank"
            role="button"
            >BROCHURE<svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-caret-right-fill"
              viewBox="0 0 16 16"
            >
              <path
                d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"
              /></svg
          ></a>
        </li>

        <li class="nav-item d-block d-lg-none ml-3">
          <a href="images/NEO brochure.pdf" target="_blank" class="nav-link"
            >Brochure<i
              class="fas fa-arrow-alt-circle-right ml-3 mt-0 d-lg-none"
              style="float: right"
            ></i
          ></a>
        </li>
        <li class="nav-item d-block d-lg-none ml-3">
          <a href="http://neo.ecellvnit.org/certificate/" target="_blank" class="nav-link"
            >Download Certificate<i
              class="fas fa-arrow-alt-circle-right ml-3 mt-0 d-lg-none"
              style="float: right"
            ></i
          ></a>
        </li>
      </div>
    </nav>

    <div class="heading text-center py-5">OUR SPONSORS</div>
    <div class="heading1 text-center pb-4">Title Sponsor</div>
    <div class="row align-items-center">
      <div class="mx-auto">
        <div class="card">
          <a href="https://www.practically.com/web/index.php" target="_blank">
            <img src="images/practically.png" alt="image" />
          </a>
        </div>
      </div>
    </div>

    <div class="heading1 text-center pb-4">Co-Presenting Sponsor</div>
    <div class="row align-items-center">
      <div class="mx-auto">
        <div class="card">
          <a href="https://www.akudo.in/" target="_blank">
            <img src="images/akudo.jpg" alt="image" />
          </a>
        </div>
      </div>
    </div>

    <div class="heading1 text-center pt-5 pb-4">Power Sponsors</div>
    <div class="row align-items-center">
      <div class="d-flex justify-content-around">
        <div class="card">
          <a href="https://trinitycycles.in/keysto/" target="_blank">
            <img src="images/keysto.png" alt="image" />
          </a>
        </div>
      </div>
      <div class="d-flex justify-content-around">
        <div class="card">
          <a href="https://trinitycycles.in/" target="_blank">
            <img src="images/trinity.png" alt="img" />
          </a>
        </div>
      </div>
    </div>

    <div class="heading1 text-center pt-5 pb-4">Outreach Partners & Student Connect Partner</div>
    <div class="row align-items-center">
      <div class="d-flex justify-content-around">
        <div class="card">
          <a href="https://www.indiantalent.org/" target="_blank">
            <img src="images/ito.jpg" alt="image" />
          </a>
        </div>
      </div>
      <div class="d-flex justify-content-around">
        <div class="card">
          <a href="https://www.unifiedcouncil.com/" target="_blank">
            <img src="images/uc.jpg" alt="img" />
          </a>
        </div>
      </div>
      <div class="d-flex justify-content-around">
        <div class="card">
          <a href="https://www.scholarshipsinindia.com/" target="_blank">
            <img src="images/scholar.jpeg" alt="img" />
          </a>
        </div>
      </div>
    </div>

    <div class="heading1 text-center pt-5 pb-4">Kids Outreach Partner</div>
    <div class="row">
      <div class="mx-auto">
        <div class="card text-center">
          <a href="http://www.hitavadaonline.com/twinkle.htm" target="_blank">
            <img src="images/twinkle.jpg" alt="image" />
          </a>
        </div>
      </div>
    </div>

    <div class="heading1 text-center pt-5 pb-4">Interactive Learning Partner</div>
    <div class="row">
      <div class="mx-auto">
        <div class="card text-center">
          <a href="https://www.ekatra.one/" target="_blank">
            <img src="images/ekatra.jpeg" alt="image" />
          </a>
        </div>
      </div>
    </div>

    <div class="heading1 text-center pt-5 pb-4">Media & Outreach Partners</div>
    <div class="row">
      <div class="d-flex justify-content-around">
        <div class="card">
          <a href="https://timesofindia.indiatimes.com/defaultinterstitial.cms">
            <img src="images/toi.jpg" alt="image" />
          </a>
        </div>
      </div>
      <div class="d-flex justify-content-around">
        <div class="card">
          <a href="https://www.thestatesman.com/">
            <img src="images/statesman.png" alt="img" />
          </a>
        </div>
      </div>
      <div class="d-flex justify-content-around">
        <div class="card">
          <a href="https://www.loksatta.com/">
            <img src="images/loksatta.png" alt="image" />
          </a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="d-flex justify-content-around">
        <div class="card">
          <a href="https://www.sakalmediagroup.com/">
            <img src="images/sakal.png" alt="image" />
          </a>
        </div>
      </div>
      <div class="d-flex justify-content-around">
        <div class="card">
          <a href="https://www.ehitavada.com/">
            <img src="images/hitvada.png" alt="img" />
          </a>
        </div>
      </div>
    </div>

    <div class="heading1 text-center pt-5 pb-4">Radio Partner</div>
    <div class="row align-items-center">
      <div class="mx-auto">
        <div class="card">
          <a href="https://myfmindia.com/" target="_blank">
            <img src="images/myfm.png" alt="image" />
          </a>
        </div>
      </div>
    </div>

<footer>
    <div class="row align-items-center" style="background-color: #171717;">
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
        <p>For Association Opportunities and Queries Contact: <br><a class="foot" href="mailto:neo@ecellvnit.org">neo@ecellvnit.org</a>
          <br><a class="foot" href="mailto:neo.pr.ecellvnit@gmail.com">neo.pr.ecellvnit@gmail.com</a></p>
      </div>
      <div class="col-md-3 text-white text-center pb-2 foot1">All rights reserved <br> &copy;<a class="foot" href="https://www.ecellvnit.org/" target="_blank">E-Cell Vnit</a></div>
    </div>
  </footer>

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
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
      integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
      integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
      $(document).ready(function () {
        $(window).scroll(function () {
          console.log($(window).scrollTop());
          if ($(window).scrollTop() > 200) {
            $("#mainNavbar").addClass("sticky-top");
          }
          if ($(window).scrollTop() < 201) {
            $("#mainNavbar").removeClass("sticky-top");
          }
        });
      });
    </script>
  </body>
</html>
