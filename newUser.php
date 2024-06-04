<?php
require 'dbconnection.php';

$adm = $_POST['admno'];
$u = $_POST['username'];
$pass = $_POST['password'];

$admno = mysqli_real_escape_string($con, $adm);
$username = mysqli_real_escape_string($con, $u);
$password = mysqli_real_escape_string($con, $pass);

$sql = "INSERT INTO student (admno, username, password) VALUES ('$admno', '$username', '$password')";
$res = mysqli_query($con, $sql);

if($res){
    echo "
        <script>
          alert('Account Created Successfuly!!');
          window.location.href = 'index.php';
        </script>
    ";
}
?>