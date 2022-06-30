let menu = document.querySelector('#menu-btn');
let header = document.querySelector('.header');

// Animation du burger
menu.onclick =() =>{
    menu.classList.toggle('fa-times');
    header.classList.toggle('active');
    document.body.classList.toggle('active');
}

window.onscroll =() =>{
    if(window.innerWidth < 991){
    menu.classList.remove('fa-times');
    header.classList.remove('active');
    document.body.classList.remove('active');
    }

    document.querySelectorAll('section').forEach(section =>{
        let top = window.scrollY;
        let topPos = section.offsetTop -260;
        let heightPos = section.offsetHeight;
        let id = section.getAttribute('id');

        if(top >= topPos && top < topPos + heightPos){
            document.querySelectorAll('.header .navbar a').forEach(links =>{
                links.classList.remove('active');
                document.querySelector('.header .navbar a[href*='+ id +']').classList.add('active')
            });
        };
    });
}






