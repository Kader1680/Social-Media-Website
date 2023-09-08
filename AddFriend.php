<?php 
session_start();
include "./config.php";

if (isset($_POST['submit'])) {
      
    $frind = $_POST['friend'];
    $imgFriend = $_POST['imgFriend'];
    $sql = " INSERT INTO friend (name, img)"."VALUES ('$frind', '$imgFriend')";
    $result = $conn ->query($sql);
          
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Frirend</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
    <?php include "./assets/css/style.css"; ?>

    </style>
</head>
<body>
    <?php require "./layout/Header.php"; ?>
    <div class="allFreind row"  >
    <div  id="fb" >
        
        
        <form action="" method="POST">
        <img src="https://static01.nyt.com/images/2016/09/10/us/10fd-facebook_web1/10fd-facebook_web1-superJumbo.jpg"  height="100" width="100" alt="Image of woman">
        <input name="imgFriend" class=" invisible " value="https://static01.nyt.com/images/2016/09/10/us/10fd-facebook_web1/10fd-facebook_web1-superJumbo.jpg" type="text">
        <br>
        <p id="info">Dusting moskovicth<input name="friend" class=" invisible border-0 w-25 bg-transparent border-O" value="Dusting moskovicth" type="text">
        <div id="button-block">
                <button  name="submit" type="submit" class="btn border-0" id="confirm">Add Friend</button>
                <div id="delete">Delete</div>
        </div>
        </form>
        
    </div>
    
  



    <div class="frnd" id="fb">
          
        <form action="" method="POST">

        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrB28hoeno_T3UUqDiIO_FFPsQcvil8rvo-ru0n79B4zTPdLNgLAl0w0Ag2E-0cReIEtA&usqp=CAU" height="100" width="100" alt="Image of woman">
        <input name="imgFriend" class=" invisible " value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrB28hoeno_T3UUqDiIO_FFPsQcvil8rvo-ru0n79B4zTPdLNgLAl0w0Ag2E-0cReIEtA&usqp=CAU" type="text">

        <p id="info">Ilisabell Anne<input name="friend" class=" invisible border-0 w-25 bg-transparent border-O" value="Ilisabell Anne" type="text">
        <div id="button-block">
            <button name="submit" type="submit" class="btn border-0" id="confirm">Add Friend</button>
            <div class="delete" id="delete">Delete</div>
        </div>
        </form>
    </div>

    <div class="frnd" id="fb">
          
          <form action="" method="POST">
  
          <img src="https://cdn.theconversation.com/avatars/381223/width170/Molina2013.jpg" height="100" width="100" alt="Image of woman">
          <input name="imgFriend" class=" invisible " value="https://cdn.theconversation.com/avatars/381223/width170/Molina2013.jpg" type="text">
  
          <p id="info">Ilisabell Anne<input name="friend" class=" invisible border-0 w-25 bg-transparent border-O" value="Ilisabell Anne" type="text">
          <div id="button-block">
              <button name="submit" type="submit" class="btn border-0" id="confirm">Add Friend</button>
              <div class="delete" id="delete">Delete</div>
          </div>
          </form>
      </div>
  
      <div class="frnd" id="fb">
          
          <form action="" method="POST">
  
          <img src="https://i.pinimg.com/474x/91/1f/49/911f498886deaf9f007396052f1ba470.jpg" height="100" width="100" alt="Image of woman">
          <input name="imgFriend" class=" invisible " value="https://i.pinimg.com/474x/91/1f/49/911f498886deaf9f007396052f1ba470.jpg" type="text">
  
          <p id="info">Ilisabell Anne<input name="friend" class=" invisible border-0 w-25 bg-transparent border-O" value="Ilisabell Anne" type="text">
          <div id="button-block">
              <button name="submit" type="submit" class="btn border-0" id="confirm">Add Friend</button>
              <div class="delete" id="delete">Delete</div>
          </div>
          </form>
      </div>

      <div class="frnd" id="fb">
          
          <form action="" method="POST">
  
          <img src="https://media.istockphoto.com/id/1132099908/photo/woman-making-selfies-downtown.jpg?s=612x612&w=0&k=20&c=YcQUb2GxFZ6rHQMSIOgQoc2fcEL8DeSlSshytGOp08g=" height="100" width="100" alt="Image of woman">
          <input name="imgFriend" class=" invisible " value="https://media.istockphoto.com/id/1132099908/photo/woman-making-selfies-downtown.jpg?s=612x612&w=0&k=20&c=YcQUb2GxFZ6rHQMSIOgQoc2fcEL8DeSlSshytGOp08g=" type="text">
  
          <p id="info">Ilisabell Anne<input name="friend" class=" invisible border-0 w-25 bg-transparent border-O" value="Ilisabell Anne" type="text">
          <div id="button-block">
              <button name="submit" type="submit" class="btn border-0" id="confirm">Add Friend</button>
              <div class="delete" id="delete">Delete</div>
          </div>
          </form>
      </div>

      <div class="frnd" id="fb">
          
          <form action="" method="POST">
  
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGMlexcxWsPsLrVY1TIyiSg4faPkDqYVX_fEj9zH0FUy7EQ4fBBYS-FmuqVmjEDItK8Zc&usqp=CAU" height="100" width="100" alt="Image of woman">
          <input name="imgFriend" class=" invisible " value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGMlexcxWsPsLrVY1TIyiSg4faPkDqYVX_fEj9zH0FUy7EQ4fBBYS-FmuqVmjEDItK8Zc&usqp=CAU" type="text">
  
          <p id="info">Ilisabell Anne<input name="friend" class=" invisible border-0 w-25 bg-transparent border-O" value="Ilisabell Anne" type="text">
          <div id="button-block">
              <button name="submit" type="submit" class="btn border-0" id="confirm">Add Friend</button>
              <div class="delete" id="delete">Delete</div>
          </div>
          </form>
      </div>

    </div>
<script >
    
<?php include "./assets/js/scripts.js"; ?>


</script>
    
</body>