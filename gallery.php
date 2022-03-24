<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <!-- favicon -->
    <!-- <link rel = "icon" href = "images/icon.png" type = "image/x-icon"> -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="images/favicon_io/site.webmanifest">
    <link rel="stylesheet" href="style.css">
    <title>NEO 2022 Gallery</title>
</head>
<style>
        .row {
    display: flex;
    flex-wrap: wrap;
    padding: 0 4px;
    }
    .column {
    flex: 25%;
    max-width: 33.3%;
    padding: 0 4px;
    }

    .column img {
    margin-top: 8px;
    vertical-align: middle;
    width: 100%;
    /* filter: grayscale(1) brightness(0.5); */
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s linear;
    }
    .column img:hover {
    filter: grayscale(1);
    }
    @media screen and (max-width: 800px) {
    .column {
        flex: 50%;
        max-width: 50%;
    }
    }

    @media screen and (max-width: 600px) {
    .column {
        flex: 100%;
        max-width: 100%;
    }
    .column img {
        filter: grayscale(0) brightness(1);
    }
    }
</style>


<body>
    <div class="container-fluid">
        <div class="heading text-center my-3"data-aos="fade-up" data-aos-duration="2000">NEO PHOTO GALLERY</div>
    <div class="row">
      <div class="column">
        <img src="images/pic7.jpeg" />
        <img src="images/pic18.jpg" />
        <img src="images/pic10.jpeg" />
        <img src="images/pic1.jpeg" />
        <img src="images/pic19.jpg" />
        <img src="images/pic14.jpeg" />
        <img src="images/pic3.jpeg" />
        <img src="images/pic1.jpeg" />
      </div>
      <div class="column">
        <img src="images/pic21.png">
        <img src="images/pic11.jpeg">
        <img src="images/pic12.jpeg" />
        <img src="images/pic15.jpeg">
        <img src="images/pic23.jpg" />
        <img src="images/pic4.jpeg" />
      </div>
      <div class="column">
        <img src="images/pic20.png">
        <img src="images/pic17.jpg" />
        <img src="images/pic23.png" />
        <img src="images/pic9.jpeg">
        <img src="images/pic13.jpeg">
        <img src="images/pic4.jpeg" />
        <img src="images/pic5.jpeg" />
        <img src="images/pic2.jpeg" />

      </div>
    </div>
  </div>
</body>
</html>