<!DOCTYPE html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title> Forgot password</title>
    <link rel="stylesheet" type="text/css" href="forgot.css">
    <!-- Link your JavaScript file -->
    <script src="script.js" defer></script> 

</head>
<body>
    

   <div class="wrapper">
    <form action="">
        <h1>Enter a 6 digit code:</h1>
        <div class="input-box">
            <input type="text" maxlength="6" placeholder="Code" 
        required>

        </div>
        <!--  <button type="submit" class="btn">Login</button> -->
            <a href="forgot3.php"><h1>Next</h1></a>


        <div class="register-link">
            <p> We will redirect you to change the password</p>
        </div>
        <div class="back">
            <a href="forgot.php">Back</a>
        </div>
    </form>
   </div>
</body>