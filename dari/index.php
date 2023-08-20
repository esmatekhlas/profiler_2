
<!doctype html>
<html lang="ar" dir="rtl" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>AFchat</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album-rtl/">

    <link href="../assets/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link href="../assets/dist/css/minval.css" rel="stylesheet">

    <style>
      .section-minval{
    background-image: url("../assets/img/bg.jpg");
}
.section-minval img{
  width:100%;
    height:200px;
}
.section-search-para{
  background-color: rgba(3, 2, 4, 0.119);
  color: black;
}
.section-search-para:hover{
  background-color:rgba(0, 0, 0, 0.592);
  color: rgb(255, 255, 255);
  cursor: pointer;
}
.section-search-form:hover{
  background-color:rgba(0, 0, 0, 0.592);
}
.size{
  border:2px solid red;
}
    </style>

    
  </head>
  <body class="size">
    <!-- include navbar -->
  <?php include 'partails/_navbar.php';?>
  <main>
    <div class="section-minval">

      <section class="py-5 text-center container">
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto">
            <p class="lead text-body-secondary">بهترین کمپیوتر و مبایل های جدید از کمپنی های جهان </p>
            <h1 class="fw-light">جنس مورد نظر را وارد کنید</h1>
            <form action="">
              <div class="input-group">
                <input type="text" class=" section-search-form form-control .text-dark" placeholder="لطفا نام کالای مورد نظر خود را وارد کنید">
                <div class=" section-search-para input-group-append">
                  <span class="input-group-text bg-transparent text-success ">
                    <i class="fa fa-search ">جستجو</i>
                  </span>
                </div>
              </div>
            </form>
            
            <p>
              <a href="#" class="btn btn-success my-2">کمپیوتر </a>
              <a href="#" class="btn btn-secondary my-2">مبایل </a>
            </p>
          </div>
        </div>
      </section>
    </div>
    <?php include 'partails/_content.php';?> 
  </main>
  
  <?php include 'partails/_footer.php';?>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
