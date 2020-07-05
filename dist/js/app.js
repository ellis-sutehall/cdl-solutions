const body = document.querySelector('body')
const burger = document.querySelector('.navbar-burger');

function mobileMenu() {
    burger.addEventListener('click', function() {
        body.classList.toggle('menu-is-open');
        burger.classList.toggle('is-active');
    })
}

mobileMenu();

ScrollOut(
    {
        once: true
    }
);