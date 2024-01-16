let header = document.getElementsByTagName('header')[0]
let navbarToggler = document.querySelector('button.navbar-toggler')

navbarToggler.addEventListener("click", _ => {
    header.classList.toggle("header-bg")
})
