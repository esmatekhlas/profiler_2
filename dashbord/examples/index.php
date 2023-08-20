<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.rtl.min.css.map">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="prism.css">
    <script src="prism.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap');
        .add_info{
            padding-left:1rem ;
        }
        .search{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 2rem;
            /* max-width: 300px; */

        }
      </style>

    <title>Nazary_chit_shit</title>
</head>
<body>
    <?php include "dbconnect.php";
    $chit_shit_catid = $_GET['chit_shit_catid'];
     ?>
<?php
// ادامه ان از سطر شروع میشود که این نیز نوگیشن بار است
echo '
 <nav>
 <span class="logo"><img src="assets/img/logo1.jfif" alt=""></span>
 <div class="content center">
     <p>Find the fertilizer you want</p>
 </div>
 <div class="add_info">
     <a href="import_to_chit_shit.php?chit_shit_catid='.$chit_shit_catid.'">add info</a>
 </div>
 </nav>
 <div class="search">
            <input type="text" name="" id="find" placeholder="search here...." onkeyup="search()">
        </div>
';
// گرفتن دیتا از دیتابیس ازین قسمت استفاده میگردد
  $sql = "SELECT * FROM `chit_shits` WHERE chit_shit_thread_cat_id= $chit_shit_catid ";
  $result = mysqli_query($conn, $sql);
  $noResolt=false;
  while($row = mysqli_fetch_assoc($result)){
    $noResolt=true;
    $chit_shit_header = $row['chit_shit_header'];
    $chit_shit_comment = $row['chit_shit_comment'];
    $chit_shit_code = $row['chit_shit_code'];
    $editor = $row['editor'];
    $chit_shit_dt = $row['chit_shit_dt'];
  
?>
  <?php
  echo '  
   
    <div class="container">
      <ul id="list">
          <li class="code">
              <h1>'.$chit_shit_header.'</h1>
              <p>'.$chit_shit_comment.'</p>
              <pre class="language-html"><code>    '.$chit_shit_code.'   </code></pre>
          </li>
      </ul>
    </div>
    ';
}
    ?>
    <!-- javascript -->
    <script type="text/javascript">
        function search() {
            let filter = document.getElementById('find').value.toUpperCase();
            let item = document.querySelectorAll('.code');
            let l = document.getElementsByTagName('h1');
            for (var i = 0; i <= l.length; i++) {
                let a = item[i].getElementsByTagName('h1')[0];
                let value = a.innerHTML || a.innerText || a.textContent;
                if (value.toUpperCase().indexOf(filter) > -1) {
                    item[i].style.display = "";
                }
                else {
                    item[i].style.display = "none";
                }
            }
        }
    </script>
</body>
</html>