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

let con = document.querySelector('#confirm')
con.forEach(el => {
    el.addEventListener(("click"), ()=>{
        // // element.setAttribute('di')
        el.style.display ="none"
        // el.classList.add('fb')
        
    })
});


// setTimeout(() => {
// }, "1000");

