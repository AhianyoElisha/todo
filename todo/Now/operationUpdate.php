<?php
require_once("../Now/database.php");
Createdb();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newdata";

$con = mysqli_connect($servername,$username,$password);
$db = mysqli_select_db($con,$dbname);

if (isset($_POST['update'])) {
  $id = $_POST['update_id'];
  $todo = $_POST['todo'];
  $due_date = $_POST['due_date'];
  $done = 0;

  $query = "UPDATE items SET todo = '$todo',due_date = '$due_date',done = $done WHERE id = '$id'";
  $query_run = mysqli_query($con,$query);

  if ($query_run) {
    echo $query_run;
    header('Location:main.php');
  }else {
    echo "error"+ $query_run;
  }
}
 ?>
