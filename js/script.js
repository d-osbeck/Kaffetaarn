const menuBtn = document.querySelector('.nav__menu__btn')
menu = document.querySelector('nav ul')
exitBtn = document.querySelector('.nav__menu__exit__btn');

menuBtn.addEventListener('click', () => {
    menu.style.transform = 'translateX(0)';
})

exitBtn.addEventListener('click', () => {
    menu.style.transform = 'translateX(100%)';
})