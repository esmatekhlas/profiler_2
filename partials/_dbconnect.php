<?php
// connect to database
$servername = "localhost";
$username ="root";
$pass = "";
$database = "idescuss";

$conn = mysqli_connect($servername,$username,$pass,$database);

if(!$conn){
    echo "you are notconnercted";
}
?>