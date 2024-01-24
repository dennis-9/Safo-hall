<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title><?php echo $title ?></title>
</head>
<body class="min-vh-100 position-relative">
<nav class="navbar navbar-expand-lg bg-body-tertiary py-0">
  <div class="container-fluid">
    <a class="navbar-brand d-flex" href="index.html">
        <img class="d-inline-block logo img-fluid" style="height:auto;" src="./assets/images/safo web logo.png" alt=""><span class="logo-text d-flex align-items-center">SAFO HALL</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarText">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link desktop-nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link desktop-nav-link" href="viewRegisteredStudents.php">View Student Info</a>
        </li>
        <li class="nav-item">
          <a class="nav-link desktop-nav-link" href="register.php">Register</a>
        </li>
      </ul>
      <!-- <span class="navbar-text">
        Navbar text with an inline element
      </span> -->
    </div>
  </div>
</nav>