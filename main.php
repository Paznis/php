<!DOCTYPE html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title> Main</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <!-- Link your JavaScript file -->
    <script src="script.js" defer></script> 

</head>
<body>
    

   <div class="wrapper">
    <form action="">
        <h1>Personalization</h1>
        <div class="input-box">
            <input type="text" placeholder="Name"
        required>
        <div class="input-box">
            <input type="date" placeholder="Date"
        required>
        <div class="input-box">
            <input type="text" placeholder="Gender"
        required>
            <div class="input-box">
                <input type="number" placeholder ="Height (cm)"
                required>
                <div class="input-box">
                    <input type="number" placeholder ="Weight (kg)"
                    required>
        </div>
        </div>
        <!--  <button type="submit" class="btn">Login</button> -->
            <a href="main2.php"><h1>Next</h1></a>


        <div class="back">
            <a href="file.php">Back</a>
        </div>
    </form>
   </div>
</body>