<?php

require "./config.php";
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Form</title>
    <style>
        /* CSS for styling the form */
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Contact Us</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <?php
                require "./getId.php";
                if ($row = $result->fetch_assoc()) {
                     $id_user = $row['id_user'] ;
                     echo $id_user;
                }

                     $sql = "SELECT UserName from user where id_user = '$id_user'";
                    $relt = $conn->query($sql);
                    // $row = mysqli_fetch_assoc($result);
                    while ($row = $relt->fetch_assoc() ) 

                        {
                            echo "
                                <input value='$row[UserName]' name='newName' required>
                        
                        
                            ";
                        }
                        if (isset($_POST['newuser'])) {
                            $newName = $_POST['newName'];
                            $sql = "UPDATE user SET UserName = '$newName' where id_user = '$id_user' ";
                            $result = $conn->query($sql);
                            
                        }
                
                    
                    
                    
                ?>
            </div>
            <div class="form-group">
                <button name="newuser" type="submit">Submit</button>
            </div>
            <a href="Profile.php">home page</a>
        </form>
    </div>
</body>
</html>