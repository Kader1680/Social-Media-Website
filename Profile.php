

<?php 
session_start();
require "./config.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | <?php echo  $_SESSION['userName'] ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
    <?php include "./assets/css/style.css"; ?>

    </style>
</head>
<body>
    <?php require "./layout/Header.php"; ?>
    <div class="container "  >
       
        <div >
            <div class="subHead">
                <div class=" cover">
                    
                    <form class="PicsProfil d-none" action="/Social-Media-Website/Profile.php" method="post">
                        <input class="   opacity-0  " type="file">
                        <button class="uploadPics" name="UploadPics" >
                            <svg class="pics" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                            </svg>
                        </button>
                    </form>
                    <img class=" border-rounded rounded-circle" src="https://cdn-icons-png.flaticon.com/512/149/149071.png" />
                </div>
                <div class="bg-white bio">
                    <div >
                        <?php  require "./config.php";
                    
                        echo  "
                        <ul>
                            <li>Bio About A new Member <span style='color: #001476;' class=' text-decoration-underline'>".$_SESSION['userName']."</span></li>
                        </ul>
                        
                        
                        " ;
                        ?>
                    </div>
                    <div>
                    <?php  
                            require "./getId.php";
                            if ($row = mysqli_fetch_assoc($result)) {
                                 $id_user = $row['id_user'] ;
                                 $sql = "SELECT * from user WHERE id_user = '$id_user' ";
                                 $res = $conn->query($sql);
                            }
                            
                            while ($row = mysqli_fetch_array($res)) {
                         ?>
                            <ul class="d-flex ">
                                <li style="color:#001476 ">First Name  <span class='ms-3 text-black'><?php echo $row['FirstName'] ?></span></li>
                                <li style="color:#001476" >Last Name   <span class='ms-3 text-black'><?php echo $row['LastName'] ?></span></li>
                                <li style="color:#001476">Email       <span class='ms-3 text-black'><?php echo $row['Email'] ?><span></li>
                                <li style="color:#001476">Username    <span class='ms-3 text-black'><?php echo $row['UserName'] ?><span></li>
                            </ul>
                         <?php
                    }
                    
                    ?>
                    </div>
                            

                </div>
            </div>
            <div class="mt-3 ">
                <div class=" ">
                <div class="ownFriend ">
                    <div  class="square bg-white">
                        <div style="background-color: #001476;" class="head text-white p-1 text-center">All Friend</div>
                        <div style="height:auto; " class="p-2 bd listFriend    ">
                        <?php 
                             
                                $sql = "SELECT id_friend from friend";
                                $result = $conn->query($sql);
                                if ($row = mysqli_fetch_array($result)) {
                                    $iD_Friend = $row['id_friend']; 
                                    // echo $iD_Friend;
                                }

                                if (isset($_POST['deleteFriend'])) {
                                    // $deleteItm = $_POST['deleteFriend'];
                                    $sql = "DELETE FROM friend where id_friend = '$iD_Friend' ";
                                    $result = $conn->query($sql);
                                }
                                // $id_user = $_GET['id_user'];
                                require "./getId.php";
                                if ($row = mysqli_fetch_array($result)) {
                                    $id_user = $row['id_user']; 
                                    // echo $id_user;
                                    $sql = "SELECT id_friend name, img from friend where friend_user = '$id_user' ";
                                    $result = $conn->query($sql);

                                }


                                
                                
                                if ($result->num_rows > 0) {
                                    while ($row =  $result->fetch_assoc()) {
                                        echo"
                                        <div class='proFriend'>

                                            <form method='post'>
                                                <span class='deleteFriend'><button type ='submit' name='deleteFriend' class='bg-transparent  border-0'>x</button></span>
                                                <input type='hidden'  name='deleteFriend'  >
                                            </form>

                                            
                                            
                                            <img class='position-relative' width='100px' height='100px' src ='$row[img]' >
                                            
                                        </div>
                                        ";
                                    }
                                }else{
                                    echo"<div style = 'margin-top: 35px;' class='text-center'>You Don't Have Friend </div>";
                                }
                            
                        ?>
                        </div>
                        
                    </div>
                    <div   class="square">
                        <div style="background-color: #001476;" class="text-white head p-1 text-center">Upload Image & Vedio </div>
                        <div style="height:auto;" class="p-2 bd bg-light">
                        
                        
                        <form action="/Social-Media-Website/Profile.php" method="post" enctype="multipart/form-data">
                            
                            <input  width="6rem" name="img" type="file" >
                            <button style="background-color: #001476;" class= " hipt-0 pb-0 rounded-2 ps-2 pe-2 border-0 text-white" name="zer" type="submit" >Add</button>

                        </form>
                        

                        <?php
                        
                    
                        ?>
                        <?php
                            if (isset($_POST['zer'])) {
                                $imgName = $_FILES["img"]["name"];
                                $imgTemp = $_FILES["img"]["tmp_name"];
                                // $folder = "./image/" . $filename;
                                
                               
                            require "./getId.php";
                            if ($row = mysqli_fetch_assoc($result)) {
                                 $id_user = $row['id_user'] ;
                                //  $sql = "SELECT * from user WHERE id_user = '$id_user' ";
                                //  $res = $conn->query($sql);
                                 $sql = "INSERT INTO media (name, image, user_img)"." VALUES ('$imgName', '$imgTemp', '$id_user')";
                                 $result = $conn->query($sql);
                                 move_uploaded_file($imgTemp , 'C:\xampp\htdocs\Social-Media-Website\\' .$imgName);
                                }
                        
                            }

                            
                            ?>

                            <?php
                            require "./getId.php";
                            if ($row = mysqli_fetch_assoc($result)) {
                                $id_user = $row['id_user'] ;
                            
                                if (isset($_POST['delete'])) {
                                    $sql = "DELETE FROM media where user_img = '$id_user'";
                                    $result = $conn->query($sql);
    
                              }
                            }
                            
                            
                            
                            ?>
                            <?php 
                             require "./getId.php";
                             if ($row = mysqli_fetch_assoc($result)) {
                                  $id_user = $row['id_user'] ;
                                  $sql ="SELECT name FROM media where user_img = '$id_user' ";
                                  $result = $conn->query($sql);
                                  
                                  // $data = mysqli_num_rows($result);
                                  if (mysqli_num_rows($result)> 0) {
                                      while ($data = mysqli_fetch_assoc($result)) {
                                          ?>
                                            <form action="" method="post">
                                                <button style="background-color: #001476;" class= " hipt-0 pb-0 rounded-2 ps-2 pe-2 border-0 text-white" name="delete" type="submit" > <i class="fa-solid fa-xmark"></i></button>
                                                <input type="hidden"  name="delete"  >
                                            </form>
                                          <img width='100px' height='100px'  src="<?php echo $data['name']; ?> " >
                                          <?php
                                      }
                                  }else {
                                      echo "
                                            <div class='text-center p-5' >No Image or Vedio Uploded</div>
                                      
                                      ";
                                  }
                                }

                                

                            

                            
                            
                            ?>
                        </div>
                        
                    </div>
                    
                </div>
               
            </div>
            
        </div>


        <div class="postField">
            
                <div style="    border: 1px solid #e0e0e0;
    box-shadow: 0 0 10px #bababa;" class="square  mb-2 pe-3 ps-3 d-flex justify-content-between">
                        <div class="head d-flex align-items-center justify-content-between">
                            <div>
                                <img class=" rounded-circle" height="30px" width="30px" src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="">
                            </div>
                        </div>
                        <div style="height:auto; width: 88%;" class="bd ">
                        <?php
                        // if ($_GET['id_user']) {
                        // $id_user = $_GET['id_user']; } ?>
                            <form class="f-dlex align-items-center" action="/Social-Media-Website/Profile.php" method="post">

                                <input class="PostInput border-0"  style="width: 87%;" name="post" type="text">
                                <button class="bg-transparent border-0"  name="postSubmit"  type="submit">
                                    <svg style="width: 30px;"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>

                                </button>
                                

                                
                              
                            </form>
                        </div>
                </div>

                <?php 
                require "./getId.php";
                while ($row = $result->fetch_assoc()) {
                    // echo $row['id_user'];
                
                
                $sql ="SELECT cotent FROM post where user_post = '$row[id_user]' ";
                $result = $conn->query($sql);
                if (mysqli_num_rows($result)> 0) {
                    while ($data = $result->fetch_assoc()) {
                        ?>
            
                        <div class="Post square mb-2 pt-3 pb-3 pe-3 ps-3">
                            <div class="head d-flex align-items-center justify-content-between">
                                <div>
                                    <img class=" rounded-circle" height="30px" width="30px" src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="">
                                    <?php echo $_SESSION['userName'] ?>                           
                                </div>

                               
                                <button class=" border-0 bg-transparent DeletePost" style="width: 20px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </button>
                            </div>
                            <div style="height:auto;" class="bd"><?php echo $data['cotent']; ?></div>
                            <div class="reaction d-flex align-items-center justify-content-start gap-2">
                               
                                <i class="like fa-solid fa-thumbs-up"></i>
                                <svg style="width: 20px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                                </svg>
            
                                <svg class="shareIcon" style="width: 20px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z" />
                                </svg>
            
                            </div>

                            <div class="share">
                                <div >
                                    <img width="50" src="https://img.icons8.com/?size=96&id=13912&format=png" alt=""> 
                                    <span>Share your Post with facebook</span>
                                </div>
                                   
                                <div> 
                                    <img  width="50" src="https://img.icons8.com/?size=96&id=Xy10Jcu1L2Su&format=png" alt="">
                                    <span>Share your Post with Insragram</span>

                                </div>
                                <div> 
                                    <img width="50" src="https://img.icons8.com/?size=96&id=13930&format=png" > 
                                    <span>Share your Post with LinkdIn</span>
                                
                                </div>
                                <div> 
                                    <img width="50" src="https://img.icons8.com/?size=96&id=16713&format=png" />
                                    <span>Share your Post with wattsap</span>

                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
            }
                ?>
               
               <?php 
                
                if (isset($_POST['postSubmit'])) {
                    $post = $_POST['post'];
                        require "./getId.php";
                        if ($row = mysqli_fetch_assoc($result)) {
                             $id_user = $row['id_user'] ;
                             $sql = "INSERT INTO post (cotent, user_post)"." VALUES ('$post', '$id_user')";
                             $result = $conn->query($sql);
                        }
                } 

                ?>
               
        </div>

               
            
        
        
   <script>
    
            <?php include "./assets/js/scripts.js"; ?>
    </script>
    </div>
</body>
</html>





</div>














