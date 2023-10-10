<?php 

    
    require "./config.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashbord</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
  <style>
    <?php include "./assets/css/style.css" ?>
  .gridtable { width: 100%; }
  @media screen and (max-width:768px) {
    .gridtable tr {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      grid-gap: 3px;
      margin-bottom: 3px;
    }
  }
  </style>
  

  <body>
      <div  class="container pb-4">


          <div style="background-color: #000b43;" class="mt-4 mb-4 text-white p-3 text-center">
            <h2>Dashbord Admin user</h2>
            <?php
            $sql = "SELECT * FROM user";
            $res = $conn->query($sql);
            $num = mysqli_num_rows($res);
            echo "<p>Congraulation We Have $num of user</p>";
            
            ?>

            
          </div>
          <table class="gridtable text-center">
            <tr class="text-white" style="background-color: #49548e;"  >
              <th  >User Id</th>
              <th  >First Name</th>
              <th  >Last Name</th>
              <th  >UserName</th>
              <th  >Email</th>
              <th  >Password</th>
              <th  >Action</th>
            </tr>
           

            


            <?php 
            
            $sql = "SELECT * FROM user";
            $result = $conn->query($sql);
            // 



            while ( $data = $result->fetch_assoc()) {
              
              echo "
              
              <tr class= 'mt-3 all'>
              <td class='itemUser' >$data[id_user]</td>
              <td class='itemUser'  >$data[FirstName]</td>
              <td class='itemUser' >$data[LastName]</td>
              <td class='itemUser' >$data[UserName]</td>
              <td class='itemUser' >$data[Email]</td>
              <td class='itemUser' >$data[Password]</td>
              <td class='itemUser' ><a class='rounded-2 text-white bg-danger text-decoration-none p-1 ' href= 'delete.php' >Delete</a></td>
              
              </tr>
              ";
            }


            ?>
             
            
          </table>


          <table class="mt-3 gridtable text-center">
            <tr  style="background-color: #49548e;" class="text-white p-3" >
              <th  >User Id</th>
              <th  >N Image</th>
              <th  >N Friend</th>
              <th  >N Post</th>
            
            </tr>
            <?php 
             
            echo "<td>All Static Number</td>";


            $sql = "SELECT * FROM media";
            $res = $conn->query($sql);
            $num = mysqli_num_rows($res);
            echo "<td>$num</td>";

            $sql = "SELECT * FROM friend";
            $res = $conn->query($sql);
            $num = mysqli_num_rows($res);
            echo "<td>$num</td>";


            $sql = "SELECT * FROM post";
            $res = $conn->query($sql);
            $num = mysqli_num_rows($res);
            echo "<td>$num</td>";


            ?>

          </table>

          <div class=" text-center  m-3 ">
              <a class="login" href = "login.php">login</a>
              <a class="login" href = "/Social-Media-Website/">Sign In</a>
          </div>
      </div>
  </body>
</html>