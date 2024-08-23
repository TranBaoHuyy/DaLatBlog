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

//scroll appear div
let lastScrollTopp = 0;
const appear = document.querySelector('.image-gallery');

window.addEventListener('scroll', function() {
    const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;

    if (scrollTop > lastScrollTopp) {
        // User is scrolling down
        const rect = appear.getBoundingClientRect();
        if (rect.top < window.innerHeight) {
            appear.classList.add('show');
        }
    } else {
        // User is scrolling up
        appear.classList.remove('show');
    }

    lastScrollTop = scrollTop;
});

//scroll appear div
let lastScroll = 10;
const appear1 = document.querySelector('.gallery-cuisen');

window.addEventListener('scroll', function() {
    const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;

    if (scrollTop > lastScroll) {
        // User is scrolling down
        const rect = appear1.getBoundingClientRect();
        if (rect.top < window.innerHeight) {
            appear1.classList.add('show');
        }
    } else {
        // User is scrolling up
        appear1.classList.remove('show');
    }

    lastScroll = scrollTop;gallery-cuisen
});