



// setTimeout(() => {
// }, "1000");




let like =  document.querySelectorAll('.reaction .like')
like.forEach(e => {
    e.addEventListener('click', ()=>{
        e.classList.toggle("blue")
        
    })
});




let comment = document.querySelectorAll('.reaction svg')
let post = document.querySelector('.Post')
comment.forEach(el => {
    el.addEventListener('click', ()=>{
        const com = document.createElement('div');
        com.setAttribute('class', 'cmt')
        // const box = document.querySelector('cmt');
        document.body.appendChild(com);

         
    })
});


let svg =  document.querySelectorAll('.reaction .shareIcon')
let share =  document.querySelector('.share')

svg.forEach(el => {
    el.addEventListener('click', ()=>{

        share.classList.toggle("vsilibity")

        
    })
});
