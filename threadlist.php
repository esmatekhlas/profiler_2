<!DOCTYPE html>
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
    <!-- ubanto font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
    <title>idescuse</title>
    <style>
    .threads-box {
        border: 2px solid red;
    }
    .threads-bg {
        border: 1px solid rgb(0, 0, 0);
        border-radius: 1rem;
        background-color: rgba(250, 235, 215, 0.332);
        padding: 2rem;
        font-family: 'Ubuntu', sans-serif;
      }
      .border{
        border: 2px solid black;
        border-radius: 1rem;
        padding: 1rem;
        /* background-color: rgba(0, 0, 0, 0.098); */
        margin: 2rem;
      }
      .threads{
        border-bottom: 2px solid black;

      }
      .jumbotron{
        background-color: rgba(0, 0, 0, 0.054);
        margin-bottom: 2rem;
      }
      .media a{
        text-decoration: none;
        list-style: none;
        color: rgb(0, 0, 0);
      
      }
      .Question_style{
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        justify-content: space-between;
        /* border:2px solid red; */
      }
    </style>
</head>

<body>
    <?php include 'partials/_header.php';?>
    <?php include 'partials/_dbconnect.php';?>
    <?php
  $id = $_GET['catid'];
  $sql = "SELECT * FROM `categories` WHERE category_no= $id ";
  $result = mysqli_query($conn, $sql);
  $noResolt=false;
  while($row = mysqli_fetch_assoc($result)){
    $noResolt=true;
    $catname = $row['category_name'];
    $catdes = $row['category_descrition'];
  }
?>

<?php
// Question form handaling
$showAlert = false;
$method = $_SERVER['REQUEST_METHOD'];
if($method=='POST'){
  $th_title = $_POST['title'];
  $th_desc = $_POST['desc'];
  $sql = "INSERT INTO `threads` (`thread_id`, `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES (NULL, '$th_title', '$th_desc', '$id', '0', current_timestamp())";
  $result = mysqli_query($conn, $sql);
  $showAlert = true;
  if($showAlert){
    echo '
    <div class="alert alert-worning <div class="alert alert-primary alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
      </button>
      <strong>'.$th_title .'</strong> And this desc is added in to DB.
    </div>

    </div>
    ';
  }
}
?>


    <!-- starting home -->
            <!-- <div class="threads"> -->
              <?php $chit_shit_catid = $_GET['catid']; ?>
              <?php 
              echo '
            <div class="jumbotron container my-5 threads-bg >
              <div class="container">
            <h1 class=" display-4">Welcom to '.$catname.'!</h1>
            <p class="lead"><?php echo  '.$catdes.' ?></p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
            <a class="btn btn-success btn-lg" href="dashbord/examples/index.php?chit_shit_catid='.$chit_shit_catid.'"> Go to chit_shit</a>
            </p>
            </div>
            </div>
            ';
            ?>

        <div class="container">
            <h1>Ask a Questions</h1>
        </div>
        <!-- Asking Question form-->
        <div class='container my-2 '>
          <form action="<?php $_SERVER['REQUEST_URI']?>" method="POST">
            <div class="form-group">
              <input  name ="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Question Subject">
            </div>
            <br>
            <div class="form-group">
              <input name="desc" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Question Content">
            </div>
            <br>
            <button type="submit" class="btn btn-success">Submit</button>
          </form>
        </div>

        <!-- اگر کدام گفتگو صورت نگرفته باشد این را نشان بده  -->
        <?php
              //  if($noResolt){
              //    echo'
              //    <div class="jumbotron jumbotron-fluid container >
              //      <div class="container">
              //      <h1 class="display-3">No Question found!</h1>
              //        <p class="lead">Plase Ask a question to start descastion.</p>
              //        <hr class="my-2">
              //        <p>This is a tech descastion Websit  </p>
              //        <br>
              //        </div>
              //        </div>
              //    ';
              //   }
                
                ?>

<!-- Question list -->
              <?php
        $id = $_GET['catid'];
        $sql = "SELECT * FROM `threads` WHERE thread_cat_id = $id;";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
        $id  = $row['thread_id'];
        $title = $row['thread_title'];
        $desc = $row['thread_desc'];
        $thread_Qurestion_asked_time = $row['timestamp'];

        echo'   <div class="  media container d-flex threads my-3 ">
        <img class="align-self-center mr-3" src="assets/img/user_defolte_img.jpg" width="50px" height="50px"
        alt="Generic placeholder image">
        <div class="media-body">
        <div class="Question_style">
            <h5 class="mt-0"> <a href="threads.php?threadid='.$id.'" class="text-dark"> '.$title.'</a></h5>
            <p class="font-weight-bold my-1 "><b><a href=""> Ananimos User at --> '.$thread_Qurestion_asked_time.'</a></b> </p>

          </div>
        <p>'.$desc.'</p>
        </div>
        </div>';
      }
        ?>
        <!-- end of hoem -->
        
      </div>
      <?php include 'partials/_footer.php';?>
      <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
      <script src="assets/dist/js/bootstrap.bundle.min.js.map"></script>
      </body>
      
</html>