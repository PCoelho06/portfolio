const cards = document.getElementsByClassName('card')

Array.from(cards).forEach(element => {
    const frontCard = element.querySelector('.front-card')
    const backCard = element.querySelector('.back-card')
    element.addEventListener('click', _ => {
        backCard.classList.toggle('invisible')
    })
})