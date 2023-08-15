





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
                    <img class=" border-rounded rounded-circle" height="150px" width="150px" src="https://static.independent.co.uk/s3fs-public/thumbnails/image/2010/07/23/20/419247.jpg?width=1200" />
                </div>
                <div class="bg-white col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <ul class=" list-style">

                    <?php  require "./config.php";


                        $sql = "SELECT FirstName, LastName, UserName, Email FROM user";
                        $result = $conn->query($sql);

                        if ($result -> num_rows > 0 ) {
                            while ($row = $result-> fetch_assoc()) {
                                echo "
                                
                                <li>First Name :
                                    <span >$row[FirstName]</span>
                                </li>
                                <li>Last Name :
                                    <span >$row[LastName]</span>
                                </li>
                                <li>Email :
                                    <span>$row[UserName]</span>
                                </li>
                                <li>Email :
                                    <span>$row[Email]</span>
                                </li>
                                <li>Gender :
                                <span>Male</span>
                                </li>
                                
                                
                                ";
                            }
                            
                    }

                    ?>

                        
                    </ul>
                </div>
            </div>
            <div class="row mt-3 bg-white">
                <div class=" col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                <ul class=" list-style">
                    <select class="form-select" aria-label="Default select example">
                        <option value="1">marrired</option>
                        <option value="2">Single</option>
                        <option value="3">Devorces</option>
                        <option value="3">RelationShip</option>
                    </select>
                    <div class="col_half">
                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                            <input type="text" name="FirstName" placeholder="Add University" />
                            <button type="submit" >click</button>
                        </div>
                    </div>
                    <div class="col_half">
                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                            <input type="text" name="FirstName" placeholder="What you Study In University" />
                            <button type="submit" >click</button>

                        </div>
                    </div>
                    <div class="col_half">
                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                            <input type="text" name="FirstName" placeholder="Work Currently" />
                            <button type="submit" >click</button>

                        </div>
                    </div>
                    <div class="col_half">
                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                            <input type="text" name="FirstName" placeholder="First Name" />
                            <button type="submit" >click</button>

                        </div>
                    </div>
                </ul> 
                                 
                    

                </ul>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class=" bg-secondary d-flex justify-content-center align-items-center">
                        <input class="  border-1" name="post" type="text">
                        <button class=" border-0" type="submit" name="submit">Post</button>
                    </div>
                </div>
            </div>
            <div>

            </div>
            
        </div>
    </div>
</body>
</html>