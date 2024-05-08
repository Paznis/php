<?php
    $con=new mysqli('localhost', 'root', '12345','lms2');

    if($con){
        echo"veikia";

        
    }else{
        die(mysqli_error($con));
    }


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $id = $_POST['id'];
    $username = $_POST['Username'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $repeatPassword = $_POST['Repeat_Password'];

  
    if ($password !== $repeatPassword) {
        echo "Passwords do not match";
        exit; 
    }


    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


    $stmt = $con->prepare("INSERT INTO app_user (id, username, email, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param($id, $username, $email, $hashedPassword);
    


    if ($stmt->execute()) {
        echo "Signup successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

 
}


