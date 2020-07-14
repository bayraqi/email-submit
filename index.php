<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="signup">
            <div class="header">
                <h1>Sign Up</h1>
            </div>
            <div class="form">
                <form action="" method="POST">
                    <div class="form-input">
                        <input type="text" name="email" id="" placeholder="Enter email access">
                        <input type="submit" name="email-reg" value="Get early access">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>



<?php

$conn = mysqli_connect("localhost", "root", "", "mast");

if(isset($_POST['email-reg'])){
    // Email extraction
    $email = trim($_POST['email']);

    // Insert into database
    $sql = "INSERT INTO `users` (`uid`, `email`, `createdAt`) VALUES (NULL, '$email', current_timestamp())";
    $query = mysqli_query($conn, $sql);

    if($query){
        echo "<h1>Registered successful.</h1>";
    } else {
        echo "<h1>Registration failed.</h1>";
    };
}