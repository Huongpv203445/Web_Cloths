// SLIDER
let counter = 1;
const slides = document.querySelectorAll('.slide')
setInterval(() => {
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if (counter > slides.length) {
        counter = 1;
    }
}, 5000)

// VARIABLES
const menu = [
    {
        id: 1,
        title: 'Giày Bốt Da Chelsea Màu  ₫en',
        category: 'Giày',
        price: '850.000 ₫',
        img: '../images/pro1.webp',
        img1: '../images/pro1.1.webp',
        img2: '../images/pro1.2.webp',
    },
    {
        id: 2,
        title: 'Ủng dây xích x màu  ₫en',
        category: 'Giày',
        price: '2.150.000 ₫',
        img: '../images/pro2.jpg',
        img1: '../images/pro2.1.jpg',
        img2: '../images/pro2.2.jpg',
    },
    {
        id: 3,
        title: 'Thắt lưng hai mặt | Giới hạn',
        category: 'Thắt lưng',
        price: '750.000 ₫',
        img: '../images/pro3.jpg',
        img1: '../images/pro3.1.jpg',
        img2: '../images/pro3.2.jpg',
    },
    {
        id: 4,
        title: ' Thắt lưng Rowan Aiioy [B.L 2]',
        category: 'accessories',
        price: '450.000 ₫',
        img: '../images/pro4.jpg',
        img1: '../images/pro4.1.jpg',
    },
    {
        id: 5,
        title: 'Ví dài Rowan cơ bản',
        category: 'accessories',
        price: '450.000 ₫',
        img: '../images/pro5.jpg',
        img1: '../images/pro5.1.webp',
        img2: '../images/pro5.2.webp',
    },
    {
        id: 6,
        title: 'Áo sơ mi âm thanh',
        category: 'clothing',
        price: '420.000 ₫',
        img: '../images/pro6.jpg',
        img1: '../images/pro6.1.jpg',
        img2: '../images/pro6.2.jpg',
    },
    {
        id: 7,
        title: 'Boots da có khóa kéo màu đen',
        category: 'shoes',
        price: '1.950.000 ₫',
        img: '../images/pro7.jpg',
        img1: '../images/pro7.1.jpg',
        img2: '../images/pro7.2.jpg',
    },
    {
        id: 8,
        title: 'Boots Chelsea Da Màu Đen',
        category: 'shoes',
        price: '2.150.000 ₫',
        img: '../images/pro8.jpg',
        img1: '../images/pro8.1.jpg',
        img2: '../images/pro8.2.png',
    },
    {
        id: 9,
        title: 'Boots Chelsea màu đen hoang dã',
        category: 'shoes',
        price: '850.000 ₫',
        img: '../images/pro9.jpg',
        img1: '../images/pro9.1.jpg',
        img2: '../images/pro9.2.jpg',
    },
    {
        id: 10,
        title: 'Boots Chelsea màu đen da lộn',
        category: 'shoes',
        price: '850.000 ₫',
        img: '../images/pro10.jpg',
        img1: '../images/pro10.1.jpg',
        img2: '../images/pro10.2.jpg',
    },
    {
        id: 11,
        title: 'boots Chelsea màu be da lộn',
        category: 'shoes',
        price: '850.000 ₫',
        img: '../images/pro11.jpg',
        img1: '../images/pro11.1.jpg',
        img2: '../images/pro11.2.jpg',
    },
    {
        id: 12,
        title: 'Leather Chelsea Boots In Black',
        category: 'shoes',
        price: '1.590.000 ₫',
        img: '../images/pro12.jpg',
        img1: '../images/pro12.1.jpg',
        img2: '../images/pro12.2.jpg',
    },
    {
        id: 13,
        title: 'Thiea Zip Boots In Gold',
        category: 'shoes',
        price: '1.990.000 ₫',
        img: '../images/pro13.jpg',
        img1: '../images/pro13.1.jpg',
        img2: '../images/pro13.2.jpg',
    },
    {
        id: 14,
        title: 'Suede Harness Boots In Tobacco',
        category: 'shoes',
        price: '2.150.000 ₫',
        img: '../images/pro14.jpg',
        img1: '../images/pro14.1.jpg',
        img2: '../images/pro14.2.jpg',
    },
    {
        id: 15,
        title: 'The Snake Zip Boots',
        category: 'shoes',
        price: '2.390.000 ₫',
        img: '../images/pro15.jpg',
        img1: '../images/pro15.1.jpg',
        img2: '../images/pro15.2.jpg',
    },
    {
        id: 16,
        title: 'Rowan Basic Skinny Jeans In Black',
        category: 'clothing',
        price: '500.000 ₫',
        img: '../images/pro16.jpg',
        img1: '../images/pro16.1.jpg',
        img2: '../images/pro16.2.webp',
    },
    {
        id: 17,
        title: 'Rowan Waxed Skinny Jeans In Black',
        category: 'clothing',
        price: '500.000 ₫',
        img: '../images/pro17.jpg',
        img1: '../images/pro17.1.jpg',
        img2: '../images/pro17.2.jpg',
    },
    {
        id: 18,
        title: 'Rowan Aiioy - Belts [B.L]',
        category: 'accessories',
        price: '450.000 ₫',
        img: '../images/pro18.jpg',
        img1: '../images/pro18.1.jpg',
        img2: '../images/pro18.2.jpg',
    },
    {
        id: 19,
        title: 'Rowan Aiioy - Belts [BN]',
        category: 'accessories',
        price: '450.000 ₫',
        img: '../images/pro19.jpg',
        img1: '../images/pro19.1.jpg',
    },
    {
        id: 20,
        title: 'Rowan Gile Bag (Real Leather)',
        category: 'clothing',
        price: '750.000 ₫',
        img: '../images/pro20.jpg',
        img1: '../images/pro20.1.jpg',
        img2: '../images/pro20.2.jpg',
    },
]
const row = document.querySelector('.row')
const filterProducts = document.querySelectorAll('.cate-box')
const productTitle = document.querySelectorAll('.cate-text h4')
const closeModal = document.querySelector('.close-modal')
const overlay = document.querySelector('.overlay')
const contactBtn = document.querySelector('.contact__ques-btn')
const productTitles = document.querySelectorAll('.cate-text h4')
const productDetail = document.querySelector('#detail')
const cartBtn = document.querySelector('.cart')
const cartDetail = document.querySelector('#cart')
const closeCart = document.querySelector('.cart-header div')
const cartOverlay = document.querySelector('.cart-overlay')
const cartBody = document.querySelector('.cart-body')
const sum = document.querySelector('.sum span')

let cart = []

// EVENT
contactBtn.addEventListener('click', showModal)
closeModal.addEventListener('click', hideModal)
overlay.addEventListener('click', hideModal)
window.addEventListener('DOMContentLoaded', function () {
    renderProducts()
    renderFilterProducts()
    titlesClick()
    toggleCart()
})

// FUNCTION
function showModal() {
    modal.classList.add('show')
}
function hideModal() {
    modal.classList.remove('show')
}

function renderProducts() {
    const products = menu.map((product) => {
        return `
            <a class="product" data-id="${product.id}">
                <div class="pro-top">
                    <img src="${product.img}" alt="">
                </div>
                <div class="pro-bottom">
                    <p class="pro-title">${product.title}</p>
                    <div class="pro-rate">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="pro-price">${product.price}</p>
                </div>
            </a>
        `
    })
    .join('')
    row.innerHTML = products
    const productBoxes = document.querySelectorAll('.product')
    productBoxes.forEach(function (product) {
        product.addEventListener('click', function (e) {
            const productId = e.currentTarget.dataset.id
            productDetail.classList.add('show')
            const productClick = menu.filter(function(item) {
                if(item.id === parseInt(productId)) {
                    return item
                }
            })
            renderProductDetail(productClick)
        })
    })
}

function renderFilterProducts() {
    filterProducts.forEach(function(filterProduct) {
        filterProduct.addEventListener('click', function(e) {
            const category = e.currentTarget.dataset.id
            const productCategory = menu.filter(function(product) {
                if(product.category === category) {
                    return product
                }
            })
            if(category === "all") {
                renderProducts(menu)
            }
            else {
                renderProducts(productCategory)
            }
        })
    })
}

function renderProductDetail(productClick) {
    productDetail.innerHTML = `
        <div class="detail">
            <div class="detail-container">
                <div class="detail-left">
                    <img class="main-img" src="${productClick[0].img}" alt="">
                    <div class="small-img">
                        <img src="${productClick[0].img}" alt="">
                        <img src="${productClick[0].img1}" alt="">
                        <img src="${productClick[0].img2}" alt="">
                    </div>
                </div>
                <div class="detail-right">
                    <h1 class="detail-title">${productClick[0].title}</h1>
                    <p class="detail-price">${productClick[0].price}</p>
                    <ul>
                        <li>Chất liệu: Vải Kate lụa</li>
                        <li>Màu sắc:  ₫en họa tiết</li>
                        <li>Công nghệ in nhiệt</li>
                        <li>Thiết kế và sản xuất bởi Rowan & De.Cop Studio</li>
                    </ul>
                    <p class="weight"><span>Trọng lượng: </span>N/A</p>
                    <p class="size"><span>Size: </span>S, M, L, XL</p>
                    <div class="conmmition">
                        <div class="conmmition-container">
                            <div class="small-commit">
                                <img src="../images/cmit1.png" alt="">
                                <div class="commit-text">
                                    <h4>cam kết chính hãng</h4>
                                    <p>Hàng chính hãng  ₫úng chất lượng</p>
                                </div>
                            </div>
                            <div class="small-commit">
                                <img src="../images/cmit2.png" alt="">
                                <div class="commit-text">
                                    <h4>giao hàng toàn quốc</h4>
                                    <p>Ship COD toàn quốc</p>
                                </div>
                            </div>
                            <div class="small-commit">
                                <img src="../images/cmit3.png" alt="">
                                <div class="commit-text">
                                    <h4>xem hàng - thanh toán</h4>
                                    <p>Nhận hàng tận tay mới thanh toán</p>
                                </div>
                            </div>
                            <div class="small-commit">
                                <img src="../images/cmit4.png" alt="">
                                <div class="commit-text">
                                    <h4> ₫ổi trả nhanh chóng</h4>
                                    <p> ₫ổi hàng nếu không vừa ý</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="size-pickup">
                        <span>Size: </span>
                        <select name="" id="">
                            <option value="">Chọn một tùy chọn</option>
                            <option value="">S</option>
                            <option value="">M</option>
                            <option value="">L</option>
                            <option value="">XL</option>
                        </select>
                    </div>
                    <div class="quantity">
                        <span>Số lượng: </span>
                        <div class="input-container">
                            <input type="button" value="-" class="minus">
                            <input type="number" value="1" class="number" step="1" min="1" max="100">
                            <input type="button" value="+" class="plus">
                        </div>
                    </div>
                    <button class="add-btn">thêm vào giỏ hàng</button>
                </div>
            </div>
        </div>
        <div class="detail-overlay"></div>
    `
    productsDetail()
    const addBtn= document.querySelector('.add-btn')
    addBtn.addEventListener('click', function() {
        cart.push(...productClick)
        productDetail.classList.remove('show')
        renderItemsToCart()
        cartDetail.classList.add('show')
    })
}

function renderItemsToCart() {
    const cartItem = cart.map(function(item) {
        return `
            <div class="cart-item" data-id="${item.id}">
                <div class="cart-content">
                    <img src="${item.img}" alt="">
                    <div class="cart-info">
                        <h4>${item.title}</h4>
                        <div>
                            <input class="quantity-input" type="number" name="" id="" value="1" min="1" max="100" step="1">
                            <span>x</span>
                            <span class="cart-price">${item.price}</span>
                        </div>
                    </div>
                </div>
                <i class="fa-solid fa-circle-xmark"></i>
            </div>
        `
    })
    .join('')
    cartBody.innerHTML = cartItem
    const cartItems = document.querySelectorAll('.cart-item')
    const quantityInputs = document.querySelectorAll('.quantity-input')
    inputChange(quantityInputs, cartItems)
    updateCart(cartItems)
    removeItem(cartItems)
}

function removeItem(cartItems) {
    cartItems.forEach(function(item) {
        item.addEventListener('click', function(e) {
            const removeIcon = e.target.classList.contains('fa-circle-xmark')
            if(removeIcon) {
                const removeItemId = e.target.parentElement.dataset.id
                cart = cart.filter(function(item) {
                    if(item.id !== parseInt(removeItemId)) {
                        return item
                    }
                })
                renderItemsToCart()
            }
        })
    })
}

function updateCart(cartItems) {
    let total = 0
    cartItems.forEach(function (cartItem) {
        const price = parseFloat(cartItem.querySelector('.cart-price').innerHTML.replace(' ₫', '').replace('.', '').replace('.', ''))
        const quantity = cartItem.querySelector('.quantity-input').value
        total += (price * quantity)
    })
    sum.innerHTML = total + ' ₫'
}

function inputChange(quantityInputs, cartItems) {
    quantityInputs.forEach(function (input) {
        input.addEventListener('change', function() {
            if(isNaN(input.value) || input.value <= 0) {
                input.value = 1
            }   
            updateCart(cartItems)
        })
    })
}

function titlesClick() {
    productTitles.forEach(function(title) {
        title.addEventListener('click', function () {
            const titleClick = document.querySelector('.cate-text h4.click')
            titleClick.classList.remove('click')
            this.classList.add('click')
        })
    })
}

function productsDetail() {
    const smallImg = document.querySelectorAll('.small-img img')
    const mainImg = document.querySelector('.main-img')
    const minusBtn = document.querySelector('.minus')
    const plusBtn = document.querySelector('.plus')
    const inputQuantity = document.querySelector('.number')
    const productDetail = document.querySelector('#detail')
    const detailOverlay = document.querySelector('.detail-overlay')

    detailOverlay.addEventListener('click', function() {
        productDetail.classList.remove('show')
    })
    plusBtn.addEventListener('click', function() {
        inputQuantity.value++
    })
    minusBtn.addEventListener('click', function() {
        if(inputQuantity.value < 1) {
            inputQuantity.value = 1
        }
        inputQuantity.value--
    })

    smallImg.forEach(function(img) {
        img.addEventListener('click', function() {
            const src = img.getAttribute('src')
            mainImg.setAttribute('src', src)
        })
    })
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