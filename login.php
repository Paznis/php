<!DOCTYPE html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title> Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <!-- Link your JavaScript file -->
    <script src="script.js" defer></script> 

</head>
<body>
    

   <div class="wrapper">
    <form action="">
        <h1>Login</h1>
        <div class="input-box">
            <input type="text" placeholder="Username"
        required>
        <div class="input-box">
            <input type="password" placeholder ="Password"
            required>
        </div>
        <div class="remember-forgot">
            <label><input type="checkbox"> Remember me</label>
            <a href="forgot.php">Forgot password?</a>
        </div>
        <!--  <button type="submit" class="btn">Login</button> -->
            <a href="main.php"><h1>Login</h1></a>


        <div class="register-link">
            <p> Don't have an account? <a href="connect.php">Register</a></p>
        </div>
        <div class="back">
            <a href="file.php">Back</a>
        </div>
    </form>
   </div>
</body>