

<?php
    session_start();
    require "./config.php";
    $firstName = " ";
    $lastName = " ";
    $email = " ";
    $userName = " ";
    $password = " ";
    $confirm = " ";
    if (isset($_POST['submit'])) {
      
      $firstName = $_POST['FirstName'];
      $lastName  = $_POST['LastName'];
      $email  = $_POST['Email'];
      $userName  = $_POST['UserName'];
      $password  = $_POST['Password'];
      $confirm  = $_POST['Confirming'];
      // $_SESSION['id_user']  = "";
      
      if (empty($firstName) || empty($lastName) || empty($email) || empty($userName) || empty($password) || empty($confirm) ) {
        echo "Please Enter Your Information";
      }else{
         // check if user data is same in db
   
        $sql = "SELECT * FROM user WHERE  FirstName = '$firstName' OR LastName = '$lastName' OR  UserName = '$userName'  ";
        $result = $conn ->query($sql);
        if ($result) {
          $array = mysqli_num_rows($result);
          if ($array > 0) {
            echo "Please The Data Exit Try Again";
          }
          else{
            if ($password != $confirm) {
               echo "passwor same pleaser try agin";
            }else{
              $_SESSION['firstName'] = $firstName  ;
              $_SESSION['lastName'] = $lastName  ;
              $_SESSION['email'] = $email  ;
              $_SESSION['userName'] = $userName  ;
              $_SESSION['password'] = $password  ;
              $_SESSION['confirm'] = $confirm  ;
              $sql = " INSERT INTO user (FirstName, LastName, UserName, Email, Password, ConfirmPass)".
              // "VALUES ('$firstName', '$lastName', '$userName', '$email', '$password', '$confirm')";
              "VALUES ('$_SESSION[firstName]', 
              '$_SESSION[lastName]', 
              '$_SESSION[userName] ', 
              '$_SESSION[email]', 
              '$_SESSION[password]', 
              '$_SESSION[confirm]')";
              $result = $conn ->query($sql);
              echo "<script>window.location.href='Profile.php' </script>";
              // header("Location: /Social-Media-Website/page/Home.php");
            }
  
          }
        }
        
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
      <h2>Welcome To Valley</h2>
      <p>Make Worls Open Contect</p>
    </div>
    <div class="row clearfix">
      <div class="">
        <form action="" method="POST">
        <div class="row clearfix">
            <div class="col_half">
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                <input type="text" name="FirstName" placeholder="First Name" />
              </div>
            </div>
            <div class="col_half">
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                <input type="text" name="LastName" placeholder="Last Name"  />
              </div>
            </div>
          </div>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
            <input type="text" name="Email" placeholder="Email"  />
          </div>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
            <input type="text" name="UserName" placeholder="UserName"  />
          </div>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
            <input type="text" name="Password" placeholder="Password"  />
          </div>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
            <input type="text" name="Confirming" placeholder="Confirm Password"  />
          </div>
            	
          <input class="button" name="submit" type="submit" value="Register" />
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>
