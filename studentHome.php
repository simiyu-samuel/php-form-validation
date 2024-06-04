<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Homepage</title>
    <link rel="stylesheet" href="design.css"/>
</head>
<body>

   <nav>
      <h3>Student Management System</h3>
      <ul>
        <a href="#"><li>Facebook</li></a>
        <a href="#"><li>Github</li></a>
        <a href="#"><li>LinkedIn</li></a>
        <a href="#"><li>Instagram</li></a>
      </ul>
   </nav>
    <div class="main">
       <div class="side-bar">
         <div class="profile">
            <img src="pro.png" alt="profile img"/>
            <p><?= $_SESSION['username'] ?></p>
         </div>
         <div class="menu">
            <button>HOME</button>
            <button>VIEW COURSES</button>
            <button>CALENDER</button>
         </div>
       </div>
       <div class="body">
         
       </div>
    </div>
</body>
</html>