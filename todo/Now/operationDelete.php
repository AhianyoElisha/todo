<?php
require_once("../Now/database.php");
Createdb();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newdata";

$con = mysqli_connect($servername,$username,$password);
$db = mysqli_select_db($con,$dbname);

if (isset($_POST['delete'])) {
  $id = $_POST['delete_id'];

  $query = "DELETE FROM items WHERE id = '$id'";
  $query_run = mysqli_query($con,$query);

  if ($query_run) {
    echo $query_run;
    header('Location:main.php');
  }else {
    echo "error"+ $query_run;
  }
}
 ?>
