<?php 
session_start();
require "./config.php";
$username = "";
if (isset($_POST['submit'])) {
    $username = $_POST['UserName'];
    $password = $_POST['Password'];
    
    $sql = "SELECT * FROM user WHERE UserName = '$username' AND Password = '$password' ";
    $result = $conn -> query($sql);
    $row = mysqli_num_rows($result) ;
    if ($row  > 0) {
        session_start();
        $_SESSION['firstName'] = $firstName  ;
        $_SESSION['lastName'] = $lastName  ;
        $_SESSION['email'] = $email  ;
        $_SESSION['userName'] = $username  ;
  
        header("location: /Social-Media-Website/page/Home.php");
    }else{
        echo "login fail" ;
    }
}
?>
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
        </div>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
            <input type="text" name="UserName" placeholder="UserName"  />
          </div>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
            <input type="text" name="Password" placeholder="Password"  />
          </div>
          <input class="button" name="submit" type="submit" value="Login Here" />
        </form>
      </div>
    </div>
  </div>
</div>
