<?php
require 'dbconnection.php';
session_start();

$u_name = $_POST['username'];
$p_word = $_POST['password'];

//protection from sql injection m,
$username = stripcslashes($u_name);
$password = stripcslashes($p_word);
$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);
$_SESSION['username'] = $_POST['username'];


$sql = "SELECT * FROM student WHERE username = '$username' and password = '$password'";
$result = mysqli_query($con, $sql);
 
//print_r(mysqli_num_rows($result));
if(mysqli_num_rows($result) > 0){
    echo "<script>
        alert('Successfully logged in!!.');
        window.location.href = 'studentHome.php';
        </script>
        ";
}
else{
    echo "<script>
        alert('login failled!!!!. Wrong username or password.');
        window.location.href = 'index.php';
        </script>
        ";
}
?>
