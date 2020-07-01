const body = document.querySelector('body')
const burger = document.querySelector('.navbar-burger');
// const navbarMenu = document.querySelector('.navbar-menu');

function mobileMenu() {
    burger.addEventListener('click', function() {
        body.classList.toggle('menu-is-open');
        burger.classList.toggle('is-active');
    })
}

mobileMenu()