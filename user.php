<?php
include 'connect.php';
?>

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Create account</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Link your JavaScript file -->
    <script src="script.js" defer></script> 
</head>
<body>
   <div class="wrapper">
    <form action="" method="post">
        <h1>Sing Up It's quick and easy</h1>
        <div class="input-box">
            <input type="text" placeholder="id" name="id" class="form-control"
        required>
        <div class="input-box">
            <input type="text" placeholder="Username" name="Username" class="form-control"
        required>
        <div class="input-box">
            <input type="email" placeholder="Email" name="Email" class="form-control"
        required>
        <div class="input-box">
            <input type="password" placeholder ="Password" name="Password" class="form-control"
            required>
            <div class="input-box">
                <input type="password" placeholder ="Repeat_Password" name="Repeat_Password" class="form-control"
                required>
        </div>
        </div>
            <button type="submit" class="btn">Sign Up</button>
          <!--  <a href="login.html"><h1>Sign Up</h1></a>-->
        <div class="back">
            <a href="login.php">Back</a>
        </div>
    </form>
   </div>
</body>
</html>

