const closeModal = document.querySelector('.close-modal')
const overlay = document.querySelector('.overlay')
const contactBtn = document.querySelector('.contact__ques-btn')
const modal = document.querySelector('#modal')
contactBtn.addEventListener('click', showModal)
closeModal.addEventListener('click', hideModal)
overlay.addEventListener('click', hideModal)

function showModal() {
    modal.classList.add('show')
}
function hideModal() {
    modal.classList.remove('show')
}
function toggleCart() {
    cartBtn.addEventListener('click', function () {
        cartDetail.classList.add('show')
    })
    closeCart.addEventListener('click', function() {
        cartDetail.classList.remove('show')
    })
    cartOverlay.addEventListener('click', function() {
        cartDetail.classList.remove('show')
    })
}