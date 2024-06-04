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
      <form action="login.php" method="POST">
        <h2>USER LOGIN</h2>
        <input type="text" name="username" id="username" placeholder="Enter username"/>
        <input type="password" name="password" id="password" placeholder="Enter password"/>
        <button type="submit">LOGIN</button>

        <p>Don't have an account yet? <a href="newAccount.php">Create account.</a>
      </form>
   </div>

</body>
</html>