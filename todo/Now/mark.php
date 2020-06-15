<?php
require_once("../Now/database.php");
Createdb();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newdata";


$con = mysqli_connect($servername,$username,$password);
$db = mysqli_select_db($con,$dbname);

if (isset($_POST['circle'])) {
  $id = $_POST['do_id'];
  $done = 1;

  $query = "UPDATE items SET done = $done WHERE id = '$id'";
  $query_run = mysqli_query($con,$query);

  if ($query_run) {
    echo $query_run;
    header('Location:main.php');
  }else {
    echo "error"+ $query_run;
  }
}


 ?>
