// VARIABLES
const menu = [
    {
        id: 1,
        title: 'Boots Da Chelsea Màu Đen',
        category: 'shoes',
        price: '850.000 ₫',
        img: '../images/pro1.webp',
        img1: '../images/pro1.1.webp',
        img2: '../images/pro1.2.webp',
    },
    {
        id: 2,
        title: 'Ủng dây xích màu đen',
        category: 'shoes',
        price: '2.150.000 ₫',
        img: '../images/pro2.jpg',
        img1: '../images/pro2.1.jpg',
        img2: '../images/pro2.2.jpg',
    },
    {
        id: 3,
        title: 'Thắt lưng 2 mặt | Phiên bản giới hạn',
        category: 'accessories',
        price: '750.000 ₫',
        img: '../images/pro3.jpg',
        img1: '../images/pro3.1.jpg',
        img2: '../images/pro3.2.jpg',
    },
    {
        id: 4,
        title: 'Thắt lưng Rowan Ajon [B.L 2]',
        category: 'accessories',
        price: '450.000 ₫',
        img: '../images/pro4.jpg',
        img1: '../images/pro4.1.jpg',
    },
    {
        id: 5,
        title: 'Ví dài Rown đơn bản',
        category: 'accessories',
        price: '450.000 ₫',
        img: '../images/pro5.jpg',
        img1: '../images/pro5.1.webp',
        img2: '../images/pro5.2.webp',
    },
    {
        id: 6,
        title: 'Áo Sơ Mi Âm Thanh',
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
        title: 'Boots Da Màu Đen',
        category: 'shoes',
        price: '2.150.000 ₫',
        img: '../images/pro8.jpg',
        img1: '../images/pro8.1.jpg',
        img2: '../images/pro8.2.png',
    },
    {
        id: 9,
        title: 'Boots Chelsea màu đen',
        category: 'shoes',
        price: '850.000 ₫',
        img: '../images/pro9.jpg',
        img1: '../images/pro9.1.jpg',
        img2: '../images/pro9.2.jpg',
    },
    {
        id: 10,
        title: 'Boots Chelsea da lộn màu đen',
        category: 'shoes',
        price: '850.000 ₫',
        img: '../images/pro10.jpg',
        img1: '../images/pro10.1.jpg',
        img2: '../images/pro10.2.jpg',
    },
    {
        id: 11,
        title: 'Boots Chelsea da lộn màu be',
        category: 'shoes',
        price: '850.000 ₫',
        img: '../images/pro11.jpg',
        img1: '../images/pro11.1.jpg',
        img2: '../images/pro11.2.jpg',
    },
    {
        id: 12,
        title: 'Boots da Chelsea màu đen',
        category: 'shoes',
        price: '1.590.000 ₫',
        img: '../images/pro12.jpg',
        img1: '../images/pro12.1.jpg',
        img2: '../images/pro12.2.jpg',
    },
    {
        id: 13,
        title: 'Boots Theia khóa kéo bằng vàng',
        category: 'shoes',
        price: '1.990.000 ₫',
        img: '../images/pro13.jpg',
        img1: '../images/pro13.1.jpg',
        img2: '../images/pro13.2.jpg',
    },
    {
        id: 14,
        title: 'Boots da lộn',
        category: 'shoes',
        price: '2.150.000 ₫',
        img: '../images/pro14.jpg',
        img1: '../images/pro14.1.jpg',
        img2: '../images/pro14.2.jpg',
    },
    {
        id: 15,
        title: 'Boots Snake khóa kéo',
        category: 'shoes',
        price: '2.390.000 ₫',
        img: '../images/pro15.jpg',
        img1: '../images/pro15.1.jpg',
        img2: '../images/pro15.2.jpg',
    },
    {
        id: 16,
        title: 'Quần Rowan Jean Skinny màu đen',
        category: 'clothing',
        price: '500.000 ₫',
        img: '../images/pro16.jpg',
        img1: '../images/pro16.1.jpg',
        img2: '../images/pro16.2.webp',
    },
    {
        id: 17,
        title: 'Rowan Waxed Skinny Jeans màu đen',
        category: 'clothing',
        price: '500.000 ₫',
        img: '../images/pro17.jpg',
        img1: '../images/pro17.1.jpg',
        img2: '../images/pro17.2.jpg',
    },
    {
        id: 18,
        title: 'Thắt lưng Rowan Aiioy [B.L]',
        category: 'accessories',
        price: '450.000 ₫',
        img: '../images/pro18.jpg',
        img1: '../images/pro18.1.jpg',
        img2: '../images/pro18.2.jpg',
    },
    {
        id: 19,
        title: 'Thắt lưng Rowan Aiioy [BN]',
        category: 'accessories',
        price: '450.000 ₫',
        img: '../images/pro19.jpg',
        img1: '../images/pro19.1.jpg',
    },
    {
        id: 20,
        title: 'Túi Rowan Gile (Da Thật)',
        category: 'clothing',
        price: '750.000 ₫',
        img: '../images/pro20.jpg',
        img1: '../images/pro20.1.jpg',
        img2: '../images/pro20.2.jpg',
    },
]
const row = document.querySelector('.row')
const filterProducts = document.querySelectorAll('.cate-box')
const productTitles = document.querySelectorAll('.cate-text h4')
const productDetail = document.querySelector('#detail')
const cartBtn = document.querySelector('.cart')
const cartDetail = document.querySelector('#cart')
const closeCart = document.querySelector('.cart-header div')
const cartOverlay = document.querySelector('.cart-overlay')
const cartBody = document.querySelector('.cart-body')
const sum = document.querySelector('.sum span')

let cart = []

// ENVENT
window.addEventListener('DOMContentLoaded', function () {
    renderProducts(menu)
    renderFilterProducts()
    titlesClick()
    toggleCart()
})


function renderProducts(productItems) {
    const products = productItems.map((product) => {
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


cartCountElement = document.querySelector('.cart-count');
var cartCountElement;
let selectedSize = ''; // Biến toàn cục để lưu giá trị size được chọn
let selectedNumber = 1;

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
                        <span class = "size">Size: </span>
                        <select name="" id="sizeSelect">
                            <option value="">Chọn một tùy chọn</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>
                    </div>
                    <div class="quantity">
                        <span>Số lượng: </span>
                        <div class="input-container" id ="values">
                            <input type="button" value="-" class="minus">
                            <input type="number" value="1" class="number" id ="number" step="1" min="1" max="100">
                            <input type="button" value="+" class="plus">
                        </div>
                    </div>
                    <button class="add-btn">thêm vào giỏ hàng</button>
                </div>
            </div>
        </div>
        <div class="detail-overlay"></div>
    `
    const sizeSelect = document.getElementById('sizeSelect');
    sizeSelect.addEventListener('change', function() {
    selectedSize = sizeSelect.value; // Gán giá trị size được chọn vào biến toàn cục
    });

    const numberInput = document.getElementById('number');
// Gán giá trị ban đầu cho biến selectedNumber
    numberInput.value = selectedNumber;

    numberInput.addEventListener('change', function() {
    selectedNumber = parseInt(numberInput.value);
    });


    productsDetail()
    const addBtn= document.querySelector('.add-btn')
    addBtn.addEventListener('click', function() {
        //size sản phẩm
    var sizeSelect = document.querySelector('.size-pickup select');
    var selectedSize = sizeSelect.value;
        if (selectedSize === '') {
            Swal.fire({
            icon: 'error',
            title: 'Vui lòng chọn kích thước trước khi thêm vào giỏ hàng',
            showConfirmButton: false,
            timer: 1200
            });
            return;
        }
        else{
            cart.forEach(function(item) {
                if (item.title === productClick[0].title) {
                  Swal.fire({
                    icon: 'info',
                    title: 'Sản phẩm đã được thêm vào giỏ hàng trước đó',
                    showConfirmButton: false,
                    timer: 1200
                  });
                  return;
                }
              });
            var currentCount = parseInt(cartCountElement.textContent);
            var newCount = currentCount + 1;
            cartCountElement.textContent = newCount; 
            cart.push(...productClick)
            productDetail.classList.remove('show')
            renderItemsToCart()
            cartDetail.classList.add('show')
        }

    })
    
}



var cartCountElement = document.getElementById("cart-count");
function renderItemsToCart() {
    const cartItem = cart.map(function(item) {
        return `
            <div class="cart-item" data-id="${item.id}">
                <div class="cart-content">
                    <img src="${item.img}" alt="">
                    <div class="cart-info">
                        <h4>${item.title}</h4>
                        <span class="size">Size: ${selectedSize}</span>
                        <div>
                            <input class="quantity-input" type="number" name="" id="" value="${selectedNumber}" min="1" max="100" step="1">
                            <span>x</span>
                            <span class="cart-price">${item.price}</span>
                        </div>
                    </div>
                </div>
                <i class="fa-solid fa-circle-xmark"></i>
            </div>
        `;
    })
    .join('')
    cartBody.innerHTML = cartItem
    const cartItems = document.querySelectorAll('.cart-item')
    const quantityInputs = document.querySelectorAll('.quantity-input')
    inputChange(quantityInputs, cartItems)
    updateCart(cartItems)
    removeItem(cartItems)
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

function removeItem(cartItems) {
    cartItems.forEach(function(item) {
        item.addEventListener('click', function(e) {
            const removeIcon = e.target.classList.contains('fa-circle-xmark')
            if (cartCountElement.textContent < 1) {
                cartCountElement.textContent = 0;
              } else {
                cartCountElement.textContent -= 1;
              }              
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



function checkOut_clear() {
    if (cart.length > 0) {
        // Giỏ hàng có sản phẩm, cho phép thanh toán
        cart = [];
        renderItemsToCart();
        cartCountElement.textContent = 0;  
        Swal.fire({
            icon: 'success',
            title: 'Xóa giỏ hàng thành công!',
            showConfirmButton: false,
            timer: 1200
        });
        hideModal();
    } else {
        // Giỏ hàng không có sản phẩm, hiển thị thông báo
        Swal.fire({
            icon: 'error',
            title: 'Vui lòng thêm sản phẩm trước khi xóa sản phẩm trong vào giỏ hàng',
            showConfirmButton: false,
            timer: 1200
        });
    }
}


document.addEventListener('DOMContentLoaded', function() {
    const clearButton = document.querySelector('.clear');

    clearButton.addEventListener('click', checkOut_clear);
});


let userLoggedIn = true;

function checkLogin() {
  // Kiểm tra trạng thái đăng nhập
  if (userLoggedIn) {
    return true; // Người dùng đã đăng nhập
  } else {
    return false; // Người dùng chưa đăng nhập
  }
}


function checkOut() {
    if (checkLogin()) {
        // Người dùng đã đăng nhập
        if (cart.length > 0) {
            // Giỏ hàng có sản phẩm, cho phép thanh toán
            cart = [];
            renderItemsToCart();
            cartCountElement.textContent = 0;  
            Swal.fire({
                icon: 'success',
                title: 'Thanh toán thành công!',
                showConfirmButton: false,
                timer: 1200
            });
            hideModal();
        } else {
            // Giỏ hàng không có sản phẩm, hiển thị thông báo
            Swal.fire({
                icon: 'error',
                title: 'Vui lòng thêm sản phẩm trước khi thanh toán',
                showConfirmButton: false,
                timer: 1200
            });
        }
    } else {
        // Người dùng chưa đăng nhập, hiển thị thông báo và chuyển đến trang đăng nhập
        Swal.fire({
            icon: 'warning',
            title: 'Cần đăng nhập!',
            text: 'Vui lòng đăng nhập trước khi thanh toán.',
            confirmButtonText: 'OK',
        }).then(function() {
            // Chuyển đến trang đăng nhập
            window.location.href = 'login.html'; // Thay 'duong_dan_dang_nhap' bằng đường dẫn đến trang đăng nhập của bạn
        });
    }
}




document.addEventListener('DOMContentLoaded', function() {
    const payButton = document.querySelector('.pay');

    payButton.addEventListener('click', checkOut);
});

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


function updateCart(cartItems) {
    let total = 0
    cartItems.forEach(function (cartItem) {
        const price = parseFloat(cartItem.querySelector('.cart-price').innerHTML.replace(' ₫', '').replace('.', '').replace('.', ''))
        const quantityInput = cartItem.querySelector('.quantity-input')
        const quantity = parseFloat(quantityInput.value)
        total += (price * quantity)
    })
    var totals = total.toLocaleString();
    sum.innerHTML = total.toLocaleString() + ' ₫'
}


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

