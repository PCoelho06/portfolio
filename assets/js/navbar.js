let navbarToggler = document.querySelector('.menu')
let barAbove = document.querySelector('.bar:nth-of-type(1)')
let barMiddle = document.querySelector('.bar:nth-of-type(2)')
let barBelow = document.querySelector('.bar:nth-of-type(3)')
let navbarNav = document.querySelector('#navbarNav')

navbarToggler.addEventListener("click", _ => {    
    navbarNav.classList.toggle('collapse')
    barAbove.classList.toggle('bar-above')
    barMiddle.classList.toggle('bar-middle')
    barBelow.classList.toggle('bar-below')
})
