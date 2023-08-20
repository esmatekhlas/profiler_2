<?php
echo '
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AFshop</title>
  
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album-rtl/">

  <link href="../assets/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
  <link href="../assets/dist/css/minval.css" rel="stylesheet">
  <style>
    .navbar-items a{
      text-decoration: none;
      color: rgb(255, 255, 255);
    }
    #navbar-items-1:hover{
      border-bottom: 2px solid white;
    }
    #navbar-items-2 :hover{
      border-bottom: 2px solid white;
    }
    #navbar-items-3 :hover{
      border-bottom: 2px solid white;
    }
  </style>

</head>
<body>
<!-- Navbar -->
 
<header data-bs-theme="dark">
  <div class="collapse text-bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4>معرفی</h4>
          <p class="text-body-secondary">سلام و عرض ادب به همه عزیزان بهترین و بروز ترین کمپیوتر و مبایل ها را از ما بدست آرید </p>
          <p class="text-body-secondary">اعتماد از شما کیفیت از ما  </p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4> با ما وصل شوید</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-blue"> در یوتیوب دنبال کنید</a></li>
            <li><a href="#" class="text-blue">در فیسبوک مارا دنبال کنید</a></li>
            <li><a href="#" class="text-blue">esmatullahekhlas2020@gmail.com</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div style="position:absolute; right:2% ;" class="btn btn-secondary my-2 navbar-items" >
      <a class="text-decoration: none;" href="rejestar_form.php">
        ورود
      </a>
    </div>
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>افغان تیک</strong>
      </a>
      <div class="navbar-items">
        <ul  style="flex-direction: row; display: flex; gap: 2rem;position: absolute;right: 22%;top: 1rem; text-decoration: dashed; ">
            <li id="navbar-items-1"><a href="../dari/index.php">صفحه اصلی</a></li>
            <li id="navbar-items-2"><a href="../dari/index.php">کمپیوتر ها</a></li>
            <li id="navbar-items-3"><a href="../dari/index.php">مبایل</a></li>
          </ul>
        </div>
         
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="تبدیل سایت">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

</body>
</html>'
?>