let header = document.getElementsByTagName('header')[0]
let navbarToggler = document.querySelector('button.navbar-toggler')
let togglerUp = document.querySelector('.navbar-toggler-up')
let togglerMiddle = document.querySelector('.navbar-toggler-middle')
let togglerBottom = document.querySelector('.navbar-toggler-bottom')
let navbarNav = document.querySelector('#navbarNav')

navbarToggler.addEventListener("click", _ => {
    Array.from(navbarToggler.children).forEach(element => {
        element.classList.toggle('bg-light')
    });
    
    navbarNav.classList.toggle('collapse')
    togglerUp.classList.toggle('navbar-toggler-up-animation')
    togglerMiddle.classList.toggle('navbar-toggler-middle-animation')
    togglerBottom.classList.toggle('navbar-toggler-bottom-animation')
})
