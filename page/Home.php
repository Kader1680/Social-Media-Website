<?php 

session_start();



?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Valley | Home </title>
</head>
<body>
    <?php require "../layout/Header.php"; ?>

    <div class="container">
        <div class="story d-md-flex gap-2">
            <div class="userstory">
                <img  width="100" height="150" src="data:image/jpeg;base64,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" alt="">
            </div>
            <div class="userstory">
                <img  width="100" height="150" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFl5VYWZBdc3aiQbUcYVf_t83NWyRrIFVURw&usqp=CAU" alt="">
            </div>
            <div class="userstory">
                <img width="100" height="150" src="https://media.istockphoto.com/id/1296515258/photo/man-takes-selfie-at-alpine-lake.jpg?s=612x612&w=0&k=20&c=sDGa6pmheDPqnwcInJhQCbfm7naJmXJScYzUKmrVRto=" alt="">
            </div>
            <div class="userstory">
                <img width="100" height="150" src="https://i.pinimg.com/originals/5e/64/f9/5e64f93a1ef733882df171acdf6a8b87.jpg" alt="">
            </div>
            <div class="userstory">
                <img width="100" height="150" src="https://images.unsplash.com/photo-1604085572504-a392ddf0d86a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8b3JhbmdlJTIwZmxvd2VyfGVufDB8fDB8fHww&w=1000&q=80" alt="">
            </div>
            <div class="userstory">
                <img width="100" height="150" src="https://imgresizer.eurosport.com/unsafe/420x420/filters:format(jpeg):focal(144x70:146x68)/origin-imgresizer.eurosport.com/2023/09/08/3780846-76906864-310-310.jpg" alt="">
            </div>
        </div>
        <div class="service">
            <div style="width: 200px;" class="square">
                <div style="background: #001476; "class="head text-white text-center">Title</div>
                <div style="height:auto;" class="bd bg-light">
                    <div style="border-bottom: 1.5px solid  #001476;  padding: 10px 10px;" class="d-flex align-items-center">
                        <img width="18" src="https://cdn-icons-png.flaticon.com/128/4181/4181169.png" alt="">
                        <div>Vedio Watch</div>
                    </div>
                    <div style="border-bottom: 1.5px solid  #001476;  padding: 10px 10px;"  class="d-flex align-items-center">
                        <img width="18" src="https://cdn-icons-png.flaticon.com/128/1357/1357616.png" alt="">
                        <div>Groups</div>
                    </div>
                    <div style="border-bottom: 1.5px solid  #001476;  padding: 10px 10px;"  class="d-flex align-items-center">
                        <img width="18" src="https://cdn-icons-png.flaticon.com/128/869/869636.png" alt="">
                        <div>Market Space</div>
                    </div>
                    <div style="border-bottom: 1.5px solid  #001476;  padding: 10px 10px;"  class="d-flex align-items-center">
                        <img width="18" src="https://cdn-icons-png.flaticon.com/128/3588/3588658.png" alt="">
                        <div>Activity</div>
                    </div>
                    <div style="border-bottom: 1.5px solid  #001476;  padding: 10px 10px;"  class="d-flex align-items-center">
                        <img width="18" src="https://cdn-icons-png.flaticon.com/128/3771/3771671.png" alt="">
                        <div>Collection</div>
                    </div>
                    <div style="border-bottom: 1.5px solid  #001476;  padding: 10px 10px;"  class="d-flex align-items-center">
                        <img width="18" src="https://cdn-icons-png.flaticon.com/128/189/189665.png" alt="">
                        <div>Help Full</div>
                    </div>
                    <div style="border-bottom: 1.5px solid  #001476;  padding: 10px 10px;"  class="d-flex align-items-center">
                        <img width="18" src="https://cdn-icons-png.flaticon.com/128/3953/3953226.png" alt="">
                        <div>Setting</div>
                    </div>
                    <div style="border-bottom: 1.5px solid  #001476;  padding: 10px 10px;"  class="d-flex align-items-center">
                        <img width="18" src="https://cdn-icons-png.flaticon.com/128/3652/3652191.png" alt="">
                        <div>Event</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>