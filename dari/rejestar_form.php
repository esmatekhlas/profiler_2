
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
      .pc-form{
        background-color:rgba(0, 0, 0, 0.064);
        border: 2px solid black;
        visibility: 0.2;
        margin-top: 1rem;
        border-radius: 2rem;
        padding: 0.2rem;
        margin:1rem;
        
      }
      .pc-form input{
        /* background-color:rgba(251, 251, 251, 0.357); */
        color: black;

      }
      .pc-form textarea{
        /* background-color:rgba(251, 251, 251, 0.357); */
        color: black;

      }

      .btn{
        display: flex;
        align-items: center;
        
        
      }
      .text-center1{
        text-align: right;
      }
      .sh-1{
        
      }
    </style>

    
  </head>
  <body>
    <!-- include navbar -->
  <?php include 'partails/_navbar.php';?>
  <div class="container pc-form">
    <h1>
      <div class="container text-center">لطفا معلومات جنس را بصورت مکمل درج کنید </div>

    </h1>
   
  <form class="row g-3 sh-1">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">اسم جنس</label>
    <input type="text" class="form-control" id="inputEmail4">
 
    <label for="inputPassword4" class="form-label">نوعیت</label>
    <input type="text" class="form-control" id="inputPassword4">

    <label for="inputPassword4" class="form-label">قیمت جنس</label>
    <input type="number" class="form-control text-center1" id="inputPassword4"  placeholder="لطفا قیمت جنس را به افغانی درج کنید!">
   
   <br>
   <div class="col-12">
    <p>
      <label for="inputAddress" class="form-label">معلومات در باره جنس</label>
    </p>
    <textarea name="pc_info" id="pc_info" cols="80" rows="10" > </textarea>
  </div>
  
  
   
  </div>

  <div class="col-md-6">
    <br>
<div class="input-group mb-3">
  <select class="form-select" id="inputGroupSelect02">
    <option value="1">2GB</option>
    <option selected>4GB</option>
    <option value="3">8GB</option>
    <option value="3">16GB</option>
    <option value="3">32GB</option>
  </select>
  <label class="input-group-text" for="inputGroupSelect02"> RAM</label>
</div>
<div class="input-group mb-3">
  <select class="form-select" id="inputGroupSelect02">
    <option value="1">1-CPU</option>
    <option selected>2-CPU</option>
    <option value="3">4-CPU</option>
    <option value="3">8-CPU</option>
    <option value="3">16-CPU</option>
  </select>
  <label class="input-group-text" for="inputGroupSelect02">CPU</label>
</div>
<div class="input-group mb-3">
  <select class="form-select" id="inputGroupSelect02">
    <option value="1">250GB HDD</option>
    <option selected>250GB SSD</option>
    <option value="3">500GB HDD</option>
    <option value="3">500GB SSD</option>
    <option value="3">1TB HDD</option>
    <option value="3">1TB SSD</option>
  </select>
  <label class="input-group-text" for="inputGroupSelect02"> حافظه</label>
</div>
<div class="input-group mb-3">
  <select class="form-select" id="inputGroupSelect02">
    <option value="1">2GB</option>
    <option selected>4GB</option>
    <option value="3">8GB</option>
    <option value="3">16GB</option>
    <option value="3">32GB</option>
  </select>
  <label class="input-group-text" for="inputGroupSelect02"> RAM</label>
</div>

<div class="continer">
      <label for="ali"  for="inputPassword4" class="form-label">لطفا عکس مورد نظر را انتخاب کنید</label>
      <input type="file" name="file" class="form-control">
  </div>
    <div class="continer">
      <label for="ali"  for="inputPassword4" class="form-label">عکس دوم</label>
      <input type="file" name="file" class="form-control">
  </div>
    <div class="continer">
      <label for="ali"  for="inputPassword4" class="form-label">عکس سوم</label>
      <input type="file" name="file" class="form-control">
  </div>
    <div class="continer">
      <label for="ali"  for="inputPassword4" class="form-label">در صورت موجودیت لطفا ویدیو مورد نظر را آپلود کنید</label>
      <input type="file" name="file" class="form-control">
  </div>
  </div>


  <div class="col-12 btn">
    <button type="submit" class="btn btn-secondary">ثبت</button>
    <br>
  </div>
</form>
  </div>
  
  <?php include 'partails/_footer.php';?>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
