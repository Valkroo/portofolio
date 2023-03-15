require('./bootstrap');

const hamburger = document.querySelector('#hamburger');
const navMenu = document.querySelector('#nav-menu'); 
const close = document.querySelector('#close'); 

hamburger.addEventListener('click', function() {
    hamburger.classList.toggle('hamburger-active');
    navMenu.classList.toggle('hidden');
});
