const modal = document.querySelector('#modal')
const contactLeft = document.querySelector('.contact-left')
const overlay = document.querySelector('.overlay')
const modalContainer = document.querySelector('.modal-container')
const sendBtn = document.querySelector('.send-btn')
const closeModal = document.querySelector('.close-modal')
const contactBtn = document.querySelector('.contact__ques-btn')


contactBtn.addEventListener('click', showModal)
sendBtn.addEventListener('click', showModal)
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