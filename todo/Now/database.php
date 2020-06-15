<?php
function CreateDb()
{
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "newdata";

// Create connection
$con = mysqli_connect($servername,$username,$password);


// Check if connection is true
 if (!$con) {
   die("Connection Failed:".mysqli_connect_error());
 }

 // Now we create the database
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";

// check if database is created
if (mysqli_query($con,$sql)) {
  $con = mysqli_connect($servername,$username,$password,$dbname);

  $sql = "CREATE TABLE IF NOT EXISTS items(
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    todo VARCHAR(100)NOT NULL,
    due_date DATETIME,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    done TINYINT(1)

  );
  ";


  if (mysqli_query($con,$sql)) {
    return $con;
  }else {
    echo "Cannot create table";
  }
}else {
  echo "Cannot create database".mysqli_error($con);
}

}
 ?>
