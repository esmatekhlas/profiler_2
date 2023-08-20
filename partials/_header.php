<?php
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="alternate" href="../assets/dist/css/bootstrap.min.css" type="application/atom+xml" title="Atom">
    <link rel="alternate" href="../assets/dist/css/bootstrap.min.css.map" type="application/atom+xml" title="Atom">
    <link rel="alternate" href="../assets/dist/css/bootstrap.rtl.min.css" type="application/atom+xml" title="Atom">
    <link rel="alternate" href="../assets/dist/css/bootstrap.rtl.min.css.map" type="application/atom+xml" title="Atom">
    <link rel="alternate" href="../assets/dist/css/minval.css" type="application/atom+xml" title="Atom">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Document</title>
    <style>
      #navbarSupportedContent{
        font-size: large;
      }
      a{
        text-decoration: none;
        list-style: none;
        color: rgba(11, 227, 65, 0.443);
      }
      

    </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary"  class="navbar bg-dark" data-bs-theme="dark">
    <div class="container-fluid navbaritemsleft">
      <a class="navbar-brand" href="../forum/index.php" >idescuse</a>
      <a class="navbar-brand" href="../forum/dashbord/examples/dashboard.php" >dashboard</a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-1 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../forum/about.php" > About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../forum/countect.php" > Cuntuct Us </a>
          </li>
        </ul>
        <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
  Dropdown button
  </button>
  
  </div>
      </div>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button style="text-right" class="btn btn-outline-success mx-2" type="submit">Search</button>
          <button  class="btn btn-outline-success mx-2" type="submit" ><a href="../forum/_loginModal.php"   > login </a> </button>
          <button  class="btn btn-outline-success mx-2" type="submit" ><a href="../forum/_signupModal.php"   > Signup </a> </button>


        </form>
    </div>
  </nav>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js.map"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>
';
?>