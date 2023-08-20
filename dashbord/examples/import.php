<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Massig</title>
  <style>
    .alert{
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 1rem;
      padding: 1rem;
      flex-direction: column;
      border: 1px solid rgb(255, 255, 255);
      background-color: antiquewhite;
      gap: 0.3rem;

    }
    .center{
      margin-top: 4rem;
      display: flex;
      justify-content: center;
      min-width: 600px;
      /* min-height: 300px; */
    }
  </style>
</head>
<body>
  
  <?php
  include "dbconnect.php";
// echo "Hello";
// add to database
$chit_shit_catid = $_GET['chit_shit_catid'];
if($_SERVER['REQUEST_METHOD']=="POST"){
  $chit_shit_header = $_POST['header'];
  $chit_shit_comment = $_POST['comment'];
    $chit_shit_code = $_POST['code'];
    
    $sql = "INSERT INTO `chit_shits` (`chit_shit_id`,`chit_shit_thread_cat_id`, `chit_shit_header`, `chit_shit_comment`, `chit_shit_code`,`chit_shit_dt`) VALUES (NULL,'$chit_shit_catid','$chit_shit_header', '$chit_shit_comment', '$chit_shit_code', current_timestamp())";
  $result = mysqli_query($conn, $sql);
  $showAlert = true;
  
  if($showAlert){
    echo '
    <div class="center">

      <div class="alert alert-worning"
      <div class="alert alert-primary alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
      </button>
      <strong>'.$chit_shit_header .'</strong> And this desc is added in to DB.
      <div>
        <button><a href="import_to_chit_shit.php?chit_shit_catid='.$chit_shit_catid.'">Add agin</a></button>
      </div>
      <div>
        <button><a href="../../index.php">idescuss</a></button>
      </div>
      <div>
        <button><a href="import_to_chit_shit.php">Go theread</a></button>
      </div>
      
    </div>
    
  </div>
</div>
  ';
}
}
// برای اینکه بعد از ثبت شده دوباره به همان صفحه برگردد اما فعلا کت ای دی مشکل دارد باید بعدا حل گردد
// if($showAlert = true)
// {               
//   header("location:import_to_chit_shit.php?chit_shit_catid='$chit_shit_catid'");
// }

?>

</body>
</html>