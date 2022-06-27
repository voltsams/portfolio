let menu = document.querySelector('#menu-btn');
let header = document.querySelector('.header');

// Animation du burger
menu.onclick =() =>{
    menu.classList.toggle('fa-times');
    header.classList.toggle('active');
    document.body.classList.toggle('active');
}

window.onscroll =() =>{
    if(window.innerWidth < 9910){
    menu.classList.remove('fa-times');
    header.classList.remove('active');
    document.body.classList.remove('active');
    }
}

let plus = document.querySelector('#more-btn');
let container = document.querySelector('.box-container');

// // Animation du plus d'expériences
// plus.onclick = ()=>{
//     plus.classList.toggle('fa-minus');
//     // container.classList.toggle('active');
//     // document.body.classList.toggle('fa-minus');
// }
// console.log(plus.onclick);





