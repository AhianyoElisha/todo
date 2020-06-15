<?php
require_once("../Now/database.php");
require_once("../Now/operationUpdate.php");
require_once("../Now/operationDelete.php");
require_once("../Now/mark.php");
Createdb();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newdata";


$con = mysqli_connect($servername,$username,$password);
$db = mysqli_select_db($con,$dbname);

if (isset($_POST['create'])) {
  $todo = $_POST['todo'];
  $due_date = $_POST['due_date'];
  $done = 0;

  $query = "INSERT INTO items(`todo`,`due_date`,`done`)VALUES ('$todo','$due_date',$done)";
  $query_run = mysqli_query($con,$query);

  if ($query_run) {
    echo $query_run;
    header('Location:main.php');
  }else {
    echo "error"+ $query_run;
  }
}
 ?>
