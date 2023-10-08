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
      <div class = "container">


          <div class="mt-4 mb-4  p-3 bg-primary text-center">
            <h2>Dashbord Admin user</h2>
            <?php
            $sql = "SELECT * FROM user";
            $res = $conn->query($sql);
            $num = mysqli_num_rows($res);
            echo "<p>We Have $num</p>";
            
            ?>

            
          </div>
          <table class="gridtable text-center">
            <tr >
              <th class=" bg-warning">User Id</th>
              <th class=" bg-warning">First Name</th>
              <th class=" bg-warning">Last Name</th>
              <th class=" bg-warning">UserName</th>
              <th class=" bg-warning">Email</th>
              <th class=" bg-warning">Password</th>
            </tr>
           

            


            <?php 
            
            $sql = "SELECT * FROM user";
            $result = $conn->query($sql);
            // 



            while ( $data = $result->fetch_assoc()) {
              
              echo "
              
              <tr class= 'mt-3'>
              <td class=' bg-danger'>$data[id_user]</td>
              <td class=' bg-danger'>$data[FirstName]</td>
              <td class=' bg-danger'>$data[LastName]</td>
              <td class=' bg-danger'>$data[UserName]</td>
              <td class=' bg-danger'>$data[Email]</td>
              <td class=' bg-danger'>$data[Password]</td>
              
              </tr>
              ";
            }


            ?>
             
            
          </table>


          <table class="mt-3 gridtable text-center">
            <tr class=" p-3" >
              <th class=" bg-warning">User Id</th>
              <th class=" bg-warning">N Image</th>
              <th class=" bg-warning">N Friend</th>
              <th class=" bg-warning">N Post</th>
            
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

          <a href = "login.php">login</a>
      </div>
  </body>
</html>