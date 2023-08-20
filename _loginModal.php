
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="partials/css/bootstrap.min.css">
    <link rel="stylesheet" href="partials/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="partials/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="partials/css/bootstrap.rtl.min.css.map">
    <link rel="stylesheet" href="partials/css/minval.css">
    
    <title>idescuse</title>
    <style>
      *{
      }
      .loginforum{
        /* border: 3px solid rgb(107, 62, 62); */
        border-radius: 2rem;
        padding: 2rem;
        /* background-color: rgba(0, 0, 0, 0.013); */
        margin: 2rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;   
        /* min-height:622px; */
      }
      .formwhit{
        border: 1px solid rgb(107, 62, 62);
        margin: 2rem;
        padding: 2rem;
        border-radius: 2rem;
        
      }
      .signin{
        display:flex;
        justify-content: center;
        align-items: center;
      }
      
    </style>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
</head>
<body>
  <?php 
  include 'partials/_header.php';
  include 'partials/_dbconnect.php';

  // start selecting code
    if($_SERVER['REQUEST_METHOD']== 'POST'){
          $user_name = $_POST['user_name'];
          $user_pass = $_POST['user_pass'];

          // $hash = password_hash($user_pass,PASSWORD_DEFAULT);
          $sql = "SELECT * FROM `users` WHERE user_name = '$user_name' AND user_pass = '$user_pass'";
          $result = mysqli_query($conn,$sql);
          $numRows = mysqli_num_rows($result);
          if($numRows== 1){
            echo "welcome";
          }
          else "not welcom";
          // if($numRows==1){
          //         $row = mysqli_fetch_assoc($result);
          //         if(password_verify($user_pass,$row['user_pass'])){
          //             session_start();
          //             $_SESSION['loogedin']=true;
          //             $_SESSION['user_name']=$username;
          //             echo "logged in ".$username; 
          //             header("location:/index.php");
          //       }
          //       else{
          //           //  header("location:/index.php");
          //             echo "unable to login";
          //     }
          //   }
    }
 

  echo '
  <div class=" loginforum">
    <form action="'. $_SERVER['REQUEST_URI'].'" method="POST">
      <div class="formwhit" style="min-height=5000px;">

        <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-3">Username</label>
        <div >
        <input name="user_name" type="text" class="form-control" >
        </div>
        </div>
        
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-3">password</label>
          <div >
            <input name="user_pass" type="password" class="form-control" >
          </div>
        </div>
        
      </div>
    <div class="signin">

      <div>
        <button type="submit" class="btn btn-success">login</button>
      </div>
  </div>
  </div>
</form>
</div>
';
?>

<?php include 'partials/_footer.php';?>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/dist/js/bootstrap.bundle.min.js.map"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> -->
</body>
</html>

