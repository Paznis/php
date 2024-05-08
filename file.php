<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyFitnessPal</title>
    <!-- Link your CSS file -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Link your JavaScript file -->
    <script src="script.js" defer></script>
    <style>
        body {
            /* Your existing CSS styles */
            background-image: url('images/BG1.jpg');
            height: 50vh;
            background-size: cover;
            background-position: center;
            margin: 0; /* Reset default margin */
            font-family: Arial, sans-serif; /* Choose a font */
            color: #333; /* Default text color */
        }
        /* Add CSS for the second container */
        .container2 {
            text-align: right; /* Align the content to the right */
        }
    </style>
</head>
<body>
 <!-- Your HTML content -->
<div class="container">
    <header>
        <img src="/images/logo.png" height="300" alt="Logo picture">
        <h1 style="color:rgb(255, 0, 0);">MyFitnessPal</h1>
    </header>
    <hr>
    <section>
        <h2 style="color:yellow;text-align: center;">The #1 fitness guide </h2>
        <p style="color:yellow;text-align: center;">Let our professionals create a healthy and balanced eating plan and workout routine to help you reach the physique you always dreamed about.</p>
    </section>
    <!-- Button to change background color -->
    <button id="imageButton">Change Background Image</button>
    <!-- Hyperlink for the login page -->
    <div class="button-container">
        <a href="login.php" class="join-now-button">Join now</a>
    </div>
</div>

<!-- Second container for the images -->
<div class="container2">
    <section>
        <div class="image-wrapper">
            <img src="images/train.jpg" height="250" alt="training picture">
            <p>Personalized working out programs and tips specifically made for you!</p>
        </div>
        
        <div class="image-wrapper">
            <img src="images/food.jpg" height="250" alt="food picture">
            <p>More than 200 delicious low-calorie, high-protein recipes to try. Personalized food plans for you!</p>
        </div>
        
        <div class="image-wrapper">
            <img src="images/train1.png" height="300" alt="training picture">
            <p>Mark L: At first, I really didn't care about how I looked and just wanted to try out this fitness app that my friend talked about. So I created an account and stuck to the program, and after a few months, I found myself looking and feeling better than ever. I will continue this journey to be the best version of myself, and I suggest you try it out for yourself.</p>
        </div>
        
        <div class="image-wrapper">
            <img src="images/train2.jpg" height="300" alt="food picture">
            <p>Laura M: I was severely obese and was very unhappy with my life and physique. But after a week, I started to feel stronger and fell in love with the whole routine and now I can't live without it.</p>
        </div>
    </section>
</div>

</body>
</html>
