<?php 
session_start();
require "./config.php";
$username = "";
if (isset($_POST['submit'])) {
    $username = $_POST['UserName'];
    $password = $_POST['Password'];
    if ($username === "abdel" && $password === "abdel" ) {
      header("location: /Social-Media-Website/adminpage.php");

    }
    // $sql = "SELECT * FROM user WHERE UserName = 'abdel' AND Password = 'abdel' ";
    // $result = $conn -> query($sql);
    // if ($result == true) {
    //   header("location: /Social-Media-Website/adminpage.php");
      
    // }
    else{
        echo "
            <div style='background-color: white;
            width: 400px;
            margin: auto;
            margin-top: 2rem;' class='squaree'>
              <div style='background-color: #ff7676;     text-align: center;
              padding: 10px 0px; ' class='head p-1 text-center'>Login Failed</div>
              <div style='height:auto; 
              text-align: center; padding: 5px;' class='bd bg-light'>Incorect Username or Password </div>
            </div>
                
              " ;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<style>
    <?php include "./assets/css/style.css" ?>
</style>
<body>
<div class="form_wrapper">
  <div class="form_container">
    <div  class="title_container">
      <h2>Login As Admin</h2>
    </div>
    <div class="row clearfix">
      <div class="">
        <form action="" method="POST">
        <div class="row clearfix">
        </div>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
            <input type="text" name="UserName" placeholder="Admin Name"  />
          </div>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
            <input type="text" name="Password" placeholder="Password"  />
          </div>
          <input class="button" name="submit" type="submit" value="Start Now" />

        </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>



