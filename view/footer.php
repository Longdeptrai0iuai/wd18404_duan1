<div class="tinkhuyenmai">
            <div class="tinkhuyenmai1">
                <h2>Đăng ký nhận tin khuyến mãi</h2><br>
                <input style="width: 250px;" type="text" placeholder="Nhập email của bạn ..." value="" name="" id="">
                <button style="background-color: white; border: 1px solid black;">ĐĂNG KÝ</button>
            </div>
            <div class="tinkhuyenmai2">
                <img style="width: 200px;height: 60px;" src="img/tinkhuyenmai.png" alt="">
                <img style="width: 200px;height: 200px;" src="img/logo.png" alt="">
            </div>
        </div>
        <hr>
        <br>
<footer>
            <div class="ft1">
                <h3>Thông Tin Chi Tiết</h3> <br>
                Giới thiệu <br> <br>
                Membership <br> <br>
                Hệ thống cửa hàng <br> <br>
                Tuyển dụng <br> <br>
                Liên hệ
            </div>
            <div class="ft2">
                <h3>Danh Mục Và Hướng Dẫn</h3><br>
                Hướng dẫn đo size <br> <br>
                Hướng dẫn đặt hàng
            </div>
            <div class="ft3">
                <h3>Quy Định - Chính Sách</h3><br>
                Quy định sử dụng <br> <br>
                Chính sách bảo mật <br> <br>
                Chính sách vận chuyển <br> <br>
                Chính sách kiểm thử và đổi trả <br> <br>
                Hình thức thanh toán
            </div>
        </footer>
        
    </div>
</body>
<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const minusButton = document.querySelector(".minus-btn");
        const plusButton = document.querySelector(".plus-btn");
        const inputField = document.querySelector(".qty-input");

        minusButton.addEventListener("click", function () {
            let currentValue = parseInt(inputField.value);
            if (currentValue > 1) {
                inputField.value = currentValue - 1;
            }
        });

        plusButton.addEventListener("click", function () {
            let currentValue = parseInt(inputField.value);
            inputField.value = currentValue + 1;
        });
    });
</script>
</html>