// import './bootstrap';

// import Alpine from 'alpinejs';

// window.Alpine = Alpine;

// Alpine.start();

let lastScrollTop = 0;
const navbar = document.getElementById('header');

window.addEventListener('scroll',function(){
    const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;

    if(scrollTop > lastScrollTop){
        navbar.style.display = 'none';
    }else{
        navbar.style.display = 'block';
    }
    lastScrollTop = scrollTop;
})

const backToTop = document.querySelector('.back-to-top');
window.addEventListener('scroll',function(){
    const position =  document.documentElement.scrollTop || document.body.scrollTop;
    const fullPage = document.documentElement.scrollHeight;
    const windowheight = window.innerHeight;

    if(position + windowheight >= fullPage - 100){
        backToTop.style.display = 'block';
    }else{
        backToTop.style.display = 'none';
    }
})
