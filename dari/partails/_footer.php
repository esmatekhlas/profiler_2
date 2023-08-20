<?php
echo '  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="../../assets/dist/css/minval.css" rel="stylesheet">
  <style>
    .footer-color{
          background-color: rgba(0, 0, 0, 0.141);
    }
    . left-div{
      display: flex;
      flex-direction: column;
    }
    .med-div{
      display: flex;
      flex-direction: column;
      position: relative;
      right: 40%;
      bottom: 2rem;
     font-size: large;
    }
    .contuct-no{
      display: flex;
      flex-direction: row;
    }
  </style>
</head>
<body>
  

  <footer class="text-body-secondary py-3 text-bg-width footer-color flex">
      <div class="container left-div">
      <h class=" mb-1">
      ارتباط با ما 
      </h>
      <p class="mb-1"> آدرس:افغانستان/فاریاب /اندخوی شریف</p>
          <div class="contuct-no">
            <p class="mb-0 text-left">شماره تماس: </p>
            <p><a href="/">  ۰۷۳۱۷۷۰۵۰۰  </a></p>

          </div>
    </div>
  <div>
    <p class="med-div" >Copyright  2023 All right AFshop.com</p>
  </div>

  </footer>

</body>
</html>
';
?>