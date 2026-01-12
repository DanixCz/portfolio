function toggleMenu(){document.querySelector('nav ul').classList.toggle('show');}

const gallery=document.querySelectorAll('.gallery img');
const lightbox=document.querySelector('.lightbox');
const lightboxImg=document.querySelector('.lightbox img');
gallery.forEach(img=>img.addEventListener('click',()=>{lightboxImg.src=img.src;lightbox.classList.add('show');}));
function closeLightbox(){lightbox.classList.remove('show');}

// Scroll animace
const animateElements=document.querySelectorAll('[data-animate]');
const observer=new IntersectionObserver(entries=>{
    entries.forEach(entry=>{if(entry.isIntersecting){entry.target.classList.add('show');}});
},{threshold:0.25});
animateElements.forEach(el=>observer.observe(el));

// Header scroll
window.addEventListener('scroll',()=>{document.querySelector('header').classList.toggle('scrolled', window.scrollY>50);});