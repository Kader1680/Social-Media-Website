

<?php 
session_start();
require "./config.php";

    if (isset($_POST['submit'])) {
        $status = $_POST['stuation'];
        $univer = $_POST['univer'];
        $work = $_POST['work'];
        $study = $_POST['study'];
        
    $sql =  "INSERT INTO info (stuation, univer, work, study)"."VALUES ('$status', '$univer', '$work', '$study') ";
    $result = $conn->query($sql);
    }

    
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
        <div style="height: 35rem;">
            <div class="row">
                <div class=" cover">
                    
                    <form class="PicsProfil" action="" method="post">
                        <input class="   opacity-0  " type="file">
                        <button class="uploadPics" name="UploadPics" >
                            <svg class="pics" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                            </svg>
                        </button>
                    </form>
                    <img class=" border-rounded rounded-circle" height="150px" width="150px" src="https://cdn-icons-png.flaticon.com/512/149/149071.png" />
                </div>
                <div class="bg-white ">
                    
                    <div >
                    <?php  require "./config.php";
                   
                        echo  "<p> <span class='text-danger text-decoratio-underline fs-2'>".$_SESSION['userName']."</span>Is New Member on Valley </p>" ;
                        ?>
                    </div>
                    <?php  require "./config.php";
                    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                       
                    $id_user = $_GET['id_user'];
                    $sql = "SELECT * from user WHERE id_user = '$id_user' ";
                    $res = $conn->query($sql);
                    while ($row = mysqli_fetch_array($res)) {
                         ?>
                            <ul>
                                <li>First Name <?php echo $row['FirstName'] ?></li>
                                <li>Last Name <?php echo $row['LastName'] ?></li>
                                <li>Email <?php echo $row['Email'] ?></li>
                                <li>Username <?php echo $row['UserName'] ?></li>
                            </ul>
                         <?php
                    }
                    }
                    ?>

                </div>
            </div>
            <div class="d-md-flex justify-content-md-between mt-3 ">
                <div class=" w-50 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">


                <div style="width: 100%" class="square">
               
                    <div style="background-color: #001476;" class="head text-white  p-1 text-center">Information About <?php echo $_SESSION['userName'] ?></div>
                    <div style="height:auto;" class="bd bg-light">
                    <form action="" method="post">
                    
                        
                    <div class= " bg-white col_half mt-2 d-flex">
                        <div class="input_field"> 
                            <input class="border-1 border-primary  border-top-0 border-start-0 border-end-0" type="text" name="stuation" placeholder="Add status" />
                            <button style="background-color: #001476; color: white; padding: 0px 6px;" class=" border-0  rounded-2" name="submit" type="submit" ><i class="fa-solid fa-plus"></i></button>
                        </div>
                        <span>
                        <?php 
                        $sql = "SELECT * from info limit 1";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row =  $result->fetch_assoc()) {
                            
                                echo"<span>$row[stuation]</span>";
                            }
                        }
                    ?>
                        </span>
                </div>
                    <div class=" bg-white col_half mt-2 d-flex">
                            <div class="input_field"> 
                                <input class="border-1 border-primary  border-top-0 border-start-0 border-end-0" type="text" name="univer" placeholder="Add University" />
                                <button style="background-color: #001476; color: white; padding: 0px 6px;" class=" border-0  rounded-2" name="submit" type="submit" ><i style="font-size:12px" class="fa-solid fa-plus"></i></button>
                            </div>
                            <span>
                            <?php 
                            $sql = "SELECT * from info limit 1";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row =  $result->fetch_assoc()) {
                                
                                    echo"<span>$row[univer]</span>";
                                }
                            }
                        ?>
                            </span>
                    </div>
                    <div class=" bg-white col_half mt-2 d-flex">
                            <div class="input_field"> 
                                <input class="border-1 border-primary  border-top-0 border-start-0 border-end-0" type="text" name="study" placeholder="What you Study In University" />
                                <button style="background-color: #001476; color: white; padding: 0px 6px;" class=" border-0  rounded-2" name="submit" type="submit" ><i class="fa-solid fa-plus"></i></button>

                            </div>
                            <span>
                            <?php 
                            $sql = "SELECT * from info limit 1";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row =  $result->fetch_assoc()) {
                                
                                    echo"<span>$row[study]</span>";
                                }
                            }
                        ?>
                            </span>
                    </div>
                    <div class="bg-white col_half mt-2 d-flex">
                            <div class="input_field"> 
                                <input class="border-1 border-primary  border-top-0 border-start-0 border-end-0" type="text" name="work" placeholder="Work Currently" />
                                <button style="background-color: #001476; color: white; padding: 0px 6px;" class=" border-0  rounded-2" name="submit" type="submit" ><i class="fa-solid fa-plus"></i></button>

                            </div>
                            <span>
                            <?php 
                            $sql = "SELECT * from info limit 1";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row =  $result->fetch_assoc()) {
                                
                                    echo"<span>$row[work]</span>";
                                }
                            }
                        ?>
                            </span>
                    </div>
         
                    </form>
                    </div>
                </div>    






                    
                
                </div>
                <div class="ownFriend  col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div  class="square bg-white">
                        <div style="background-color: #001476;" class="head text-white p-1 text-center">All Friend</div>
                        <div style="height:auto; " class="p-2 bd listFriend    ">
                        <?php 
                             if ($_GET['id_user']) {
                                $id_user = $_GET['id_user'];
                                $sql = "SELECT name, img from friend where friend_user = '$id_user' ";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row =  $result->fetch_assoc()) {
                                        echo"
                                        <div class='proFriend'>
                                            <img class='position-relative' width='100px' height='100px' src ='$row[img]' >
                                            
                                            <div  style='color: #001476; ' = >$row[name]</div>

                                        </div>
                                        ";
                                    }
                                }else{
                                    echo"<div class='text-center'>You Don't Have Friend </div>";
                                }
                            }
                        ?>
                        </div>
                        
                    </div>
                    <div class="square mt-3">
                        <div style="background-color: #001476;" class="text-white head p-1 text-center">Upload Image & Vedio </div>
                        <div style="height:auto;" class="p-2 bd bg-light">

                        <form action="" method="post" enctype="multipart/form-data">
                            
                            <input     width="6rem" name="img" type="file" >
                            <button style="background-color: #001476;" class= " hipt-0 pb-0 rounded-2 ps-2 pe-2 border-0 text-white" name="zer" type="submit" >Add</button>
                            <button style="background-color: #001476;" class="pt-0 pb-0 rounded-2 ps-2 pe-2 border-0 text-white" name="zer" type="submit" >Delete</button>
                            
                        
                            
                        </form>
                        <?php
                            if (isset($_POST['zer'])) {
                                $imgName = $_FILES["img"]["name"];
                                $imgTemp = $_FILES["img"]["tmp_name"];
                                // $folder = "./image/" . $filename;
                                $sql = "INSERT INTO media (name, image)"." VALUES ('$imgName', '$imgTemp')";
                                $result = $conn->query($sql);
                                move_uploaded_file($imgTemp , 'C:\xampp\htdocs\Social-Media-Website\\' .$imgName);

                                $sql ="SELECT name FROM media";
                                $result = $conn->query($sql);
                                // $data = mysqli_num_rows($result);
                                if (mysqli_num_rows($result)> 0) {
                                    while ($data = mysqli_fetch_assoc($result)) {
                                        ?>
    
                                        <img width='100px' height='100px'  src="<?php echo $data['name']; ?> " >
                                        <?php
                                    }
                                }else {
                                    echo "no data";
                                }
                               
                            }

                            
                            ?>
                        </div>
                        
                    </div>
                </div>
            </div>



       
            <div>

            </div>
            
        </div>


        <div style="width: 450px;  background-color:#f1f1f1;" class="square  mb-2 pe-3 ps-3">
                <div class="head d-flex align-items-center justify-content-between">
                    <div>
                        <img class=" rounded-circle" height="30px" width="30px" src="data:image/jpeg;base64,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" alt="">
                        <?php echo $_SESSION['userName'] ?>
                    </div>
                   
                    <button class="border-0 bg-transparent" style="width: 20px;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </svg>
                    </button>
                </div>
                <div style="height:auto;" class="bd p-3 bg-light ">
                <?php
                if ($_GET['id_user']) {
                $id_user = $_GET['id_user']; } ?>
                    <form class="f-dlex align-items-center" action="./Profile.php?id_user=<?php echo $id_user ?> " method="post">

                        <input style="width: 21ezm;" name="post" type="text">
                        <button class="bg-transparent border-0"  name="postSubmit" type="submit" >
                            <svg style="width: 30px;"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>

                        </button>

                    </form>
                </div>
        </div>



        <?php 
        
        if (isset($_POST['postSubmit'])) {
            $post = $_POST['post'];
            // $folder = "./image/" . $filename;
            if ($_GET['id_user']) {
                $id_user = $_GET['id_user'];
                $sql = "INSERT INTO post (cotent, user_post)"." VALUES ('$post', '$id_user')";
                $result = $conn->query($sql);
            }
            












      
   
    
 





        } 
        ?>
        <?php 
                if ($_GET['id_user']) {
                $id_user = $_GET['id_user'];
                $sql ="SELECT cotent FROM post where user_post = '$id_user' ";
                $result = $conn->query($sql);
                if (mysqli_num_rows($result)> 0) {
                    while ($data = mysqli_fetch_assoc($result)) {
                        ?>
            
                        <div style="width: 450px;  background-color:#f1f1f1;" class="square  mb-2 pe-3 ps-3">
                            <div class="head d-flex align-items-center justify-content-between">
                                <div>
                                    <img class=" rounded-circle" height="30px" width="30px" src="data:image/jpeg;base64,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" alt="">
                                    <?php echo $_SESSION['userName'] ?>
                                </div>
                               
                                <button class="border-0 bg-transparent" style="width: 20px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </button>
                            </div>
                            <div style="height:auto;" class="bd p-3 bg-light "><?php echo $data['cotent']; ?></div>
                            <div class=" d-flex align-items-center justify-content-between">
                                <svg style="width: 20px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                                </svg>
            
                                <svg style="width: 20px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                                </svg>
            
                                <svg style="width: 20px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z" />
                                </svg>
            
                            </div>
                        </div>
                        <?php
                    }
                }
                }?>
   <script>
            <?php include "./assets/js/scripts.js"; ?>
        </script>
    </div>
</body>
</html>





</div>














