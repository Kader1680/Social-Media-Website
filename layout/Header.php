
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <style>
        <?php include "../assets/css/style.css"; ?>
    </style>
    <body>
    <header>
    <nav class="navbar">
        <a href=" /Social-Media-Website/ " class="logo text-decoration-none text-white fs-2">Valley</a>
        <ul class="nav-menu">
        <li class="nav-item">
            <a href="/Social-Media-Website/page/Home.php" class="nav-link text-decoration-none text-white"><span class=" d-md-none me-3">Home</span><i class="fa-solid fa-house "></i></a>
        </li>
        <li class="nav-item">
            <a href=" /Social-Media-Website/AddFriend.php" class="nav-link text-decoration-none text-white"><span class=" d-md-none me-3">Add friend</span><i class="fa-solid fa-user-group"></i></a>
        </li>
        <li class="nav-item">
        <a href=" /Social-Media-Website/message.php" class="nav-link text-decoration-none text-white"><span class=" d-md-none me-3">message</span><i class="fa-solid fa-message"></i></a>
        </li>
        <li class="nav-item">
            <div onclick="Notification()" id="not" class="nav-link text-decoration-none text-white"><span class=" d-md-none me-3">Notification</span><i class="fa-solid fa-bell"></i></div>
        </li>
        <li class="nav-item">

            <a href="/Social-Media-Website/Profile.php" class="nav-link text-decoration-none text-white"><span class=" d-md-none me-3">Profil</span><i class="fa-solid fa-user"></i></a>


        </li>
        <li class="nav-item">
            <a href="/Social-Media-Website/login.php" class="nav-link text-decoration-none text-white"><span class=" d-md-none me-3">Logout</span><i class="fa-solid fa-right-from-bracket"></i></a>
        </li>
        </ul>
        <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
        </div>
    </nav>
    </header>
    <div  style="z-index: 22; width: 320px; right: 15rem; height: auto; position: absolute; background-color: white;
    border: 1px solid rgba(0,0,0,.15);
    box-shadow: 0 6px 12px rgb(0 0 0 / 18%); " class="notificaiton" >
        
        
        <div style="border: 1px solid #e5e5e5;
    background-color: #e7e7e7;
    box-shadow: 0px 0px 0px 1px #d9d9d9;" class=" m-2 p-2 " >All Notification</div>
        <div style="align-items: center; display: flex; font-size: 13px;" class=" m-2 p-2 ">
                <svg style="width: 20px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                </svg>
                <span class="ms-2">Ahemed Liked Your Profil Picter</span>
        </div>
        <div style="align-items: center; display: flex; font-size: 13px;" class=" m-2 p-2 ">
                <svg style="width: 20px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                </svg>

                <span class="ms-2">comment on your post </span>
        </div>
        <div style="align-items: center; display: flex; font-size: 13px;" class=" m-2 p-2 ">
                <svg style="width: 20px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                </svg>
                <span class="ms-2">Ahemed Liked Your Profil Picter</span>
                <hr>
        </div>
        

    </div>









    <div  style=" width: 320px; right: 15rem; height: auto; position: absolute; background-color: white;
    border: 1px solid rgba(0,0,0,.15);
    box-shadow: 0 6px 12px rgb(0 0 0 / 18%); " class="MessageNotifiction" >
        
        
        <div style="border: 1px solid #e5e5e5;
    background-color: #e7e7e7;
    box-shadow: 0px 0px 0px 1px #d9d9d9;" class=" m-2 p-2 " >All Notification</div>
        <div class=" m-2 p-2 ">
                <svg style="width: 20px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                </svg>
                <span>Ahemed Liked Your Profil Picter</span>
        </div>
        <div class=" m-2 p-2 ">
                <svg style="width: 20px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                </svg>

                <span>comment on your post </span>
        </div>
        <div class=" m-2 p-2 ">
                <svg style="width: 20px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                </svg>
                <span>Ahemed Liked Your Profil Picter</span>
                <hr>
        </div>
        <a class="text-center" href="/Social-Media-Website/notification.php">see all</a>

    </div>

    <div class="redNot ms">2</div>
    <div class="redNot nt">1</div>

    <script>



const hamburger = document.querySelector(".hamburger")
const nav_menu = document.querySelector(".nav-menu")
hamburger.addEventListener("click",()=>{
  hamburger.classList.toggle("active");
  nav_menu.classList.toggle("active");
})
document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
  hamburger.classList.remove("active");
  nav_menu.classList.remove("active");
}))

let Removing = document.getElementById("delete")
let fb = document.querySelectorAll('.allFreind #fb')
fb.forEach(el => {
    el.addEventListener(("click"), ()=>{
        // element.setAttribute('di')
        el.style.display ="none"

    })
});
        let notificaiton = document.querySelector('.notificaiton');
        
        function Notification() {
            notificaiton.classList.toggle('BlockNotifcation')
        }
        let message = document.querySelector('.MessageNotifiction');

        function Message() {
            MessageNotifiction.classList.toggle('BlockNotifcation')
        }
    </script>

    </body> 

</html>