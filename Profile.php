

<?php 
session_start();
require "./config.php";
    
    //  $_SESSION['firstName'] = $firstName  ;
    //  $_SESSION['lastName'] = $lastName  ;
    //  $_SESSION['email'] = $email  ;
    //  $_SESSION['userName'] = $userName  ;
    //  $_SESSION['password'] = $password  ;
    //  $_SESSION['confirm'] = $confirm  ;


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
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
    <?php include "./assets/css/style.css"; ?>

    </style>
</head>
<body>
    <?php require "./layout/Header.php"; ?>
    <div class="container "  >
        <div class=" ">
            <div class="row">
                <div class="bg-white col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <img class=" border-rounded rounded-circle" height="150px" width="150px" src="https://cdn-icons-png.flaticon.com/512/149/149071.png" />
                </div>
                <div class="bg-white col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <ul class=" list-style">

                    <?php  require "./config.php";
                    
                    echo "<p class='bg-gray'> firstName : ".$_SESSION['firstName']."</p>" ;
                    echo "<p> lastName : ".$_SESSION['lastName']."</p>";
                    echo  "<p> email : ".$_SESSION['email']."</p>";
                    echo  "<p> userName  : ". $_SESSION['userName']."</p>" ;

                    //     $sql = "SELECT FirstName, LastName, UserName, Email FROM user limit 1";
                    //     $result = $conn->query($sql);

                    //     if ($result -> num_rows > 0 ) {
                    //         while ($row = $result-> fetch_assoc()) {

                    //             echo "
                                

                    //             <li>First Name :
                    //                 <span >$row[FirstName]</span>
                    //             </li>
                    //             <li>Last Name :
                    //                 <span >$row[LastName]</span>
                    //             </li>
                    //             <li>Email :
                    //                 <span>$row[UserName]</span>
                    //             </li>
                    //             <li>Email :
                    //                 <span>$row[Email]</span>
                    //             </li>
                    //             <li>Gender :
                    //             <span>Male</span>
                    //             </li>
                                
                                
                    //             ";
                    //         }
                            
                    // }

                    ?>

                        
                    </ul>
                </div>
            </div>
            <div class="d-md-flex justify-content-md-between mt-3 ">
                <div class=" bg-white w-50 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <form action="" method="post">
                    
                        
                            <div class="col_half mt-2 d-flex">
                                <div class="input_field"> 
                                    <input class="border-1 border-primary  border-top-0 border-start-0 border-end-0" type="text" name="stuation" placeholder="Add status" />
                                    <button class=" border-0  rounded-2" name="submit" type="submit" ><i class="fa-solid fa-plus"></i></button>
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
                            <div class="col_half mt-2 d-flex">
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
                            <div class="col_half mt-2 d-flex">
                                    <div class="input_field"> 
                                        <input class="border-1 border-primary  border-top-0 border-start-0 border-end-0" type="text" name="study" placeholder="What you Study In University" />
                                        <button class=" border-0  rounded-2" name="submit" type="submit" ><i class="fa-solid fa-plus"></i></button>

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
                            <div class="col_half mt-2 d-flex">
                                    <div class="input_field"> 
                                        <input class="border-1 border-primary  border-top-0 border-start-0 border-end-0" type="text" name="work" placeholder="Work Currently" />
                                        <button class=" border-0  rounded-2" name="submit" type="submit" ><i class="fa-solid fa-plus"></i></button>

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
                <div class="ownFriend bg-white col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <h4 style="background-color: #001476; color: white; text-align: center; padding: 5px 0px; ">all friend </h4>
                    <div class="bg-primary listFriend">
                        <?php 
                            $sql = "SELECT name, img from friend";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row =  $result->fetch_assoc()) {
                                
                                    echo"
                                    
                                    <div class='proFriend'>
                                        <img width='100px' height='100px' src ='$row[img]' >
                                        <div  style='color: #001476; ' = >$row[name]</div>
                                    </div>
                                    
                                    
                                    
                                    ";
                                }
                            }else{
                                echo"<div>You Don't Have Friend </div>";
                            }


                        ?>
                       
                    </div>
                </div>
            </div>



       
            <div>

            </div>
            
        </div>
        <script>
            <?php include "./assets/js/scripts.js"; ?>
        </script>
    </div>
</body>
</html>