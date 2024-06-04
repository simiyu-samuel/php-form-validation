<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "students";

  $con = mysqli_connect($servername, $username, $password, $database, 3306);

  if(!$con){
    die("Connection failled" .mysqli_connect_error());
  } 
?>