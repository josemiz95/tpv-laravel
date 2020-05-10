// Variables globales
let menu = document.querySelector('.appMenu');

document.addEventListener("DOMContentLoaded",function(){

    // INIT
    if(window.localStorage.getItem('smallMenu')=="false"){
        menu.classList.toggle('smallMenu');
    };

    // EVENT LISTENERS

    document.getElementById('userMenu').addEventListener("click", function(){
        document.querySelector('.userMenu .menu').classList.toggle('hide');
    });

    document.getElementById('toggleMenu').addEventListener("click", function(){
        menu.classList.toggle('smallMenu');
        window.localStorage.setItem('smallMenu', menu.classList.contains('smallMenu'));
    });
    
})