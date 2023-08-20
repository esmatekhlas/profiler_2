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
    /* .threads{
        background-color: antiquewhite;
        z-index: 1;
      } */
    .threads-box {
        border: 2px solid red;

    }

    .threads-bg {
        border: 1px solid rgb(0, 0, 0);
        border-radius: 1rem;
        background-color: rgba(250, 235, 215, 0.332);
        padding: 2rem;
        font-family: 'Ubuntu', sans-serif;
        padding: 2rem;
    }

    .border {
        border: 2px solid black;
        border-radius: 1rem;
        padding: 1rem;
        /* background-color: rgba(0, 0, 0, 0.098); */
        margin: 2rem;
    }

    .threads {
        border-bottom: 2px solid black;

    }
    </style>
</head>

<body>

    <?php include 'partials/_header.php';?>
    <?php include 'partials/_dbconnect.php';?>
    <?php
    // comment form handaling
    $showAlert = false;
    $id = $_GET['threadid'];
    $method = $_SERVER['REQUEST_METHOD'];
    if($method=='POST'){
      $comment_content = $_POST['comment_content'];
      $sql = "INSERT INTO `comment` (`comment_id`, `comment_content`, `thread_id`, `comment_time`) VALUES (NULL, '$comment_content', '$id', current_timestamp());";
      $result = mysqli_query($conn, $sql);
      $showAlert = true;
      }
    
    ?>
    <?php
      if($showAlert){
        echo '
        <div class="alert alert-worning <div class="alert alert-primary alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
          </button>
          <strong>comment added in DB</strong> 
        </div>

        </div>
        ';
      }
    
    ?>
    <?php
    // fach and show comments
  $id = $_GET['threadid'];
  $sql = "SELECT * FROM `threads` WHERE thread_id = $id ";
  $result = mysqli_query($conn, $sql);
  $noResolt=true;
  while($row = mysqli_fetch_assoc($result)){
    $noResolt=false;
    $thread_title = $row['thread_title'];
    $thread_desc = $row['thread_desc'];

}
?>

    <!-- starting home -->
    <div class="threads">
        <div class="jumbotron container my-5 threads-bg >
        <div class=" container">
            <p class="lead"><?php echo $thread_title ?></p>
            <hr class="my-4">
            <p><?php echo $thread_desc?></p>
            <p class="lead">
                <a>posted by: Ali Ekhlas</a>
            </p>
        </div>
    </div>

    <!-- end of showing comment -->

    <div class="container">
        <h1>Add a Comment!</h1>
    </div>

    <div class='container'>
        <form action="<?php $_SERVER['REQUEST_URI']?>" method="POST">
            <div class="form-group">
                <input name="comment_content" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter Question Subject">
            </div>
            <br>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
    <!-- comment showing list -->
    <?php
        // $id = $_GET['threadid'];
        $sql = "SELECT * FROM `comment` WHERE thread_id = $id;";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
        $id = $row['comment_id'];
        $content = $row['comment_content'];
        $comment_time = $row['comment_time'];

        echo'   <div class="  media container d-flex threads my-3 ">
        <img class="align-self-center mr-3" src="assets/img/user_defolte_img.jpg" width="50px" height="50px"
        alt="Generic placeholder image">
        <div class="media-body">
        <p class="font-weight-bold my-0 "><b> Ananimos User at --> '.$comment_time.'</b> </p>
        <p>'.$content.'</p>
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