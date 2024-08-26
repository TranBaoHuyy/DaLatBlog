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

// carousel
const carousel = document.querySelector(".carousel");
const prev = document.querySelector(".prev");
const next = document.querySelector(".next");
let index = 0;
function showSlide(newIndex){
    const slides = document.querySelectorAll(".carousel-item");
    const totalSlides = slides.length;

    if(newIndex >= totalSlides){
        index = 0;
    }else if(newIndex < 0){
        index = totalSlides - 1;
    }else{
        index = newIndex;
    }
    carousel.style.transform = `translateX(${-index * 100}%)`;
}

next.addEventListener('click', () => {
    showSlide(index + 1);
});

prev.addEventListener('click', () => {
    showSlide(index - 1);
});



