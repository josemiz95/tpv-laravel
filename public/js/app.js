document.addEventListener("DOMContentLoaded",function(){

    document.getElementById('userMenu').addEventListener("click", function(){
        document.querySelector('.userMenu .menu').classList.toggle('hide');
    });

    document.getElementById('toggleMenu').addEventListener("click", function(){
        // document.querySelector('.appMenu').classList.toggle('hide');
        document.querySelector('.appMenu').classList.toggle('smallMenu');
    });
    
})