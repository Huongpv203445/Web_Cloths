<?php $pageTitle='Contact | ROMAN'; ?>
<?php require_once 'header.php'; ?>


    <!-- MAIN CONTACT -->
    <section id="main-contact">
        <div class="sub-title">
            <h1>Liên hệ</h1>
            <p><a href="index.php">trang chủ </a>  /  liên hệ</p>
        </div>
        <div class="main-contact-container">
            <div class="contact-box">
                <div class="contact-left">
                    <h1>*địa chỉ</h1>
                    <div>
                        <i class="fa-solid fa-location-arrow"></i>
                        <b>Hà Nội</b>
                        <p>Số 1 Đại Cồ Việt, Bách Khoa, Hai Bà Trưng, Hà Nội</p>
                    </div>

                    <h1>*liên hệ</h1>
                    <div>
                        <i class="fa-solid fa-mobile"></i>
                        <span><a href="">Tư vấn: 0927.133.332</a></span>
                    </div>
                    <div>
                        <i class="fa-solid fa-mobile"></i>
                        <span><a href="">CSKH: 0384.770.171</a></span>
                    </div>
                    <div>
                        <i class="fa-solid fa-envelope"></i>
                        <span><a href="">huong.pv.hust.vn@gmail.com</a></span>
                    </div>
                    <button class="send-btn">Gửi lời nhắn</button>
                </div>
                <div class="contact-right">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2007.2855039410376!2d105.84503181649693!3d21.005535188787732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1689649730208!5m2!1svi!2s" width="950" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- END MAIN CONTACT -->

   

    <!-- MODAL -->
    <section id="modal">
        <div class="modal-container">
            <div class="close-modal">
                <i class="fa-solid fa-xmark"></i>
            </div>
            <div class="modal-left">
                <h1>nhắn cho chúng tôi</h1>
                <form class="modal-form" action="sendContact.php" method = "POST">
                <input type="text" name = "contact" style = "display:none;">
                    <div class="required">
                        <div>
                            <label for="">Họ tên</label>
                            <input type="text" placeholder="Họ tên..." name = "name" required>
                        </div>
                        <div>
                            <label for="">Email</label>
                            <input type="email" placeholder="Email..." name = "email" required>
                        </div>
                    </div>
                    <div class="optional">
                        <div>
                            <label for="">SĐT (nếu có)</label>
                            <input type="text" placeholder="Số điện thoại..." name = "phone">
                        </div>
                        <div>
                            <label for="">Địa chỉ (nếu có)</label>
                            <input type="text" placeholder="Địa chỉ..." name = "address">
                        </div>
                    </div>
                    <label for="">Nội dung</label>
                    <textarea id="" cols="30" rows="10" name="content">
    
                    </textarea>
                    <button class="modal-btn" type="">Gửi tin nhắn</button>
                </form>
            </div>
            <div class="modal-right">
                <h1>thông tin liên hệ</h1>
                <p><i class="fa-solid fa-location-arrow"></i>Số 1 Đại Cồ Việt, Bách Khoa, Hai Bà Trưng, Hà Nội</p>
                <p><i class="fa-solid fa-phone"></i></i><a href="">Tư vấn: 0927.133.332</a></p>
                <p><i class="fa-solid fa-phone"></i></i><a href="">CSKH: 0384.770.171</a></p>
                <p><i class="fa-solid fa-envelope"></i></i><a href=""></a>huong.pv.hust.vn@gmail.com</p>
                <p class="modal-desc">
                    Bạn có câu hỏi về cách chúng tôi có thể giúp công ty của bạn không? Gửi email cho chúng tôi và chúng tôi sẽ sớm liên hệ lại.
                </p>
                <div class="modal-icon">
                    <a href="https://www.facebook.com/Rowanshoes"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/Rowan_Shoes/"><i class="fa-brands fa-instagram"></i></i></a>
                    <a href="https://www.youtube.com/@shoesrowan3281"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </section>
    <!-- END MODAL -->

        <!-- FOOTER -->
        <?php require_once 'footer.php' ?>; 

