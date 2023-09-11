
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
     
    </head>
    <style>
        <?php include "../assets/css/style.css"; ?>
    </style>
    <body>
    <header>
    <nav class="navbar">
        <a href=" /Social-Media-Website/ " class="logo text-decoration-none text-white fs-2">Valley</a>
        <ul class="nav-menu">
        <li class="nav-item">
            <a href="/Social-Media-Website/page/Home.php" class="nav-link text-decoration-none text-white">Home</a>
        </li>
        <li class="nav-item">
            <a href=" /Social-Media-Website/AddFriend.php" class="nav-link text-decoration-none text-white">add Friend</a>
        </li>
        <li class="nav-item">
            <a href=" " class="nav-link text-decoration-none text-white">Message</a>
        </li>
        <li class="nav-item">
            <a href=" " class="nav-link text-decoration-none text-white">Notification</a>
        </li><li class="nav-item">

            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "Valley";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $database);

            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            $sql ="SELECT * FROM user where UserName = '$_SESSION[userName]' ";

            $res = $conn->query($sql);
            while ($row = mysqli_fetch_assoc($res)) {
                ?>
        
        <a href="/Social-Media-Website/Profile.php?id_user= <?php echo $row['id_user']; ?> " class="nav-link text-decoration-none text-white">Profil</a>

        <?php
    }
            
            ?>

        </li>
        <li class="nav-item">
            <a href="/Social-Media-Website/login.php" class="nav-link text-decoration-none text-white">Logout</a>
        </li>
        </ul>
        <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
        </div>
    </nav>
    </header>
    </body> 

</html>