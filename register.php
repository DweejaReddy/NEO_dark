<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration | Startup Weekend</title>
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
    <form method="post" action="store_details.php">
        <div class="card-heading text-center">
            <h1 class="title pb-2">Registration</h1>
            <hr>
        </div>
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label">Name *</label>
            <div class="col-md-8">
                <input type="text" class="form-control rounded-pill" name="name" placeholder="Name" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label">Email ID *</label>
            <div class="col-md-8">
                <input type="text" class="form-control rounded-pill" name="email" placeholder="Name" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="contact" class="col-md-4 col-form-label">Contact No. *</label>
            <div class="col-md-8">
                <input type="text" class="form-control rounded-pill" name="contact" placeholder="Name" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="whatsapp" class="col-md-4 col-form-label">Whatsapp No. *</label>
            <div class="col-md-8">
                <input type="text" class="form-control rounded-pill" name="whatsapp" placeholder="Name" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="school" class="col-md-4 col-form-label">School *</label>
            <div class="col-md-8">
                <input type="text" class="form-control rounded-pill" name="school" placeholder="Name" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="city" class="col-md-4 col-form-label">City *</label>
            <div class="col-md-8">
                <input type="text" class="form-control rounded-pill" name="city" placeholder="Name" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="class" class="col-md-4 col-form-label">Class *</label>
            <div class="col-md-8">
                <input type="text" class="form-control rounded-pill" name="class" placeholder="Name" required>
            </div>
        </div>
        <button class="btn btn-danger rounded-pill align-items-center" type="submit" name="submit_form" value="SUBMIT">SUBMIT</button>
    </form>
</body>
</html>