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
       
    .mincarusels {
        background-image: url(assets/img/6.jpg);
        width: 99vw;
        height: 400px;
        /* border: 2px solid red; */
    }

    .mincarusels h1 {
        /* border: 2px solid red; */
        text-align: center;
        padding-top: 8rem;
        color: rgb(0, 0, 0);
        text-decoration: solid;
        text-indent: 1rem;

    }
    .category-box{
      display: flex;
      justify-content:space-around;
      align-items: center;
      flex-direction: row;
      flex-wrap: wrap; 
      /* border: 2px solid red; */
    }
    .category-box a{
            color: black;
            text-decoration: none;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <?php include 'partials/_header.php';?>
    <?php include 'partials/_dbconnect.php';?>

    <!-- starting carusels -->
    <div class="mincarusels">
        <h1>Welcom to idescuss!</h1>
    </div>
    <!-- ending of carusels -->

    <!-- starting cards  -->
    <!-- cach all catagory items from database -->
    <!-- Fetch all the categories and use a loop to iterate through categories -->
    <a name="" id="" class=" container btn btn-success my-2" href="#" role="button" style="display: flex; justify-content: center;">add
        catagory</a>
        <div class=" container category-box my-2">

          <?php 
          $sql = "SELECT * FROM `categories`"; 
          $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_assoc($result)){
          // echo $row['category_no'];
          // echo $row['category_name'];
          $id =$row['category_no'];
          $cat =$row['category_name'];
          $des =$row['category_descrition'];

          
        echo ' 
        <div class="row mx-3 my-3 ">
            <div class="cal-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="assets/img/'.$id.'.jpg " class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> <a href="threadlist.php?catid=' . $id . '">'.$cat.'</a></h5>
                        <p class="card-text"> '.substr($des,0,90).'... </p>
                            <a href="threadlist.php?catid='.$id.'" class="btn btn-success">  Mor..</a>
                          </div>
                </div>
              </div>
        </div>';
         }
     ?>
    </div>

 
    <?php include 'partials/_footer.php';?>

    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/dist/js/bootstrap.bundle.min.js.map"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
  
  </html>