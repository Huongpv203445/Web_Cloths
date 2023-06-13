const registerBtn = document.querySelector('.register-btn')
const loginForm = document.querySelector('.login-form')
const registerForm = document.querySelector('.register-form')
const rightTitle = document.querySelector('.login-right h1')
const rightDesc = document.querySelector('.login-right p')

registerBtn.addEventListener('click', toggleRegister)

// FUNCTION
function toggleRegister() {
    loginForm.classList.toggle('hidden')
    registerForm.classList.toggle('show-up')
    if(loginForm.classList.contains('hidden')) {
        rightTitle.innerHTML = 'Đăng nhập'
        registerBtn.innerHTML = 'Đăng nhập'
        rightDesc.innerHTML = 'Nếu bạn đã có tài khoản đăng nhập vào ROWAN, hãy vào trang web của chúng tôi để trải nghiệm và có thể mua cho mình những sản phẩm chất lượng nhất'
    } else {
        rightTitle.innerHTML = 'Đăng kí'
        registerBtn.innerHTML = 'Đăng kí'
        rightDesc.innerHTML = 'Đăng ký trang web này cho phép bạn truy cập trạng thái và lịch sử đơn hàng của mình. Chỉ cần điền vào các trường bên dưới và chúng tôi sẽ nhanh chóng thiết lập tài khoản mới cho bạn. Chúng tôi sẽ chỉ hỏi bạn những thông tin cần thiết để giúp quá trình mua hàng nhanh hơn và dễ dàng hơn.'
    }   
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

