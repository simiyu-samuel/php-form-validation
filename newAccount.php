<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="assets/style.css"/>
</head>
<body>
    
   <div class="form">
      <form action="newUser.php" method="POST">
        <h2>CREATE NEW ACCOUNT</h2>
        <input type="text" name="admno" id="admno" placeholder="Enter admission no"/>
        <input type="text" name="username" id="username" placeholder="Enter username"/>
        <input type="password" name="password" id="password" placeholder="Enter password"/>
        <button type="submit">CREATE ACCOUNT</button>

        <p>Already have an account? <a href="index.php">Sign in.</a>
      </form>
   </div>

</body>
</html>