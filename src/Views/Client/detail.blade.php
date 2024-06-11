<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('assets/client/css/styleclient.css') }}">
  <style>
           .avatar {
            display: flex;
        }

        .avatar img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
  </style>
</head>

<body>
  <div class="container">
    <header>
      <img src="{{ asset('assets/image/tumblr_9f6acb261cbca2ad7c65a5fdd9ed0042_af52c943_1280.png') }}" alt="">
      <div class="dangnhap">
        @if (!isset($_SESSION['user']))
        <div class="user">
            <ion-icon name="person-outline"></ion-icon>
            <a href="{{ url('login') }}">Đăng Nhập</a>
        </div>
@endif
@if (isset($_SESSION['user']))
                <div class="user">
                    <div class="avatar">
                        <p>Xin Chào: {{ $_SESSION['user']['name'] }}</p>
                        <img src="{{ asset($_SESSION['user']['avatar']) }}" alt="" width="50px">
                    </div>

                    <a href="{{ url('logout') }}">Logout</a>
                </div>
            @endif
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
    @foreach ($product as $item)
        
    
    <div class="contentctnew">
        <div class="contentleft">
            <h1>{{$item['title_post']}}</h1>
        <p>{{$item['overview']}}</p>
        <img src="{{asset($item['img_title'])}}" alt="">
        <p>{{$item['content']}}</p>

        </div>
       <div class="contentright">

       </div> 
    </div>
    @endforeach

   
<hr>
    <footer>
      <div class="left">
        <p>Báo thể thao</p>
        <img src="image/tumblr_9f6acb261cbca2ad7c65a5fdd9ed0042_af52c943_1280.png" alt="">
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
