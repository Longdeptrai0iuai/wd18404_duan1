<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('assets/client/css/styleclient.css') }}">
  <style>
    /* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 100%;
  }
}
  </style>
</head>

<body>
  <div class="container">
    <header>
      <img src="{{ asset('assets/image/tumblr_9f6acb261cbca2ad7c65a5fdd9ed0042_af52c943_1280.png') }}" alt="">
      <div class="dangnhap">
        <div class="user">
            <ion-icon name="person-outline"></ion-icon>
            <a href="#">Đăng Nhập</a>
        </div>
    </div>
      <div class="nav">
        <ul>
          <li><a href="{{url('/')}}">Trang chủ</a></li>
          <li><a href="">Euro 2024</a></li>
          <li><a href="">Bóng Đá</a></li>
          <li><a href="">Bóng Chuyền </a></li>
          <li><a href="">Marathon</a></li>
          <li><a href="">Tennis</a></li>
        </ul>
      </div>
    </header>
   <div class="contentLogin">
    <form action="{{url('handle-login')}}" style="border:1px solid #ccc" method="POST">
        <div class="container">
          <p>Vui lòng nhập thông tin tài khoản.</p>
          <hr>
      
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" required>      
          <div class="clearfix">
            <button type="submit" class="signupbtn">Đăng nhập</button>
          </div>
        </div>
      </form>
   </div>
<hr>
    <footer>
      <div class="left">
        <p>Báo thể thao</p>
        <img src="{{asset('assets/image/tumblr_9f6acb261cbca2ad7c65a5fdd9ed0042_af52c943_1280.png')}}" alt="">
      </div>
      <div class="right">
        <a href="">Điều khoản sử dụng</a><hr>
        <a href="">Chính sách bảo mật</a><hr>
        <a href="">Cookies</a><hr>
        <a href="">Rss</a><hr>
        <a href="" class="folow">
          Theo dõi Thể Thao 24/7 trên 
          <ion-icon name="logo-facebook"></ion-icon>
          <ion-icon name="logo-twitter"></ion-icon>
          <ion-icon name="logo-youtube"></ion-icon>
        </a><hr>
      </div>
      
    </footer>
    <hr>
    <div class="lastFooter">
      <div class="left">
        <p> <b>Báo thể thao nhiều người xem nhất</b></p>
        
      </div>
      <div class="mid">
        <p>Tổng biên tập: Nguyễn Thành Long</p>
        <p>Địa chỉ: Số nhà 9,ngõ 80/50/3 Đường Xuân Phương, Phường Phương Canh, Quận Nam Từ Liêm, Hà Nội </p>
        <p>Điện Thoại: 0862810416</p>
      </div>
      <div class="right">
        <p>@Toàn bộ bản quyền thuộc Thể thao 24/7</p>
      </div>
    </div>
  </div>
  </div>


  </div>

</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script> 
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>
