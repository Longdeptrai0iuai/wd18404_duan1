<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="{{ asset('assets/client/css/styleclient.css') }}">
    <style>
        .container {
    width: 80%;
    margin: 0 auto;
    height: 2100px;
}

        .contentMarathon {
            display: grid;
            grid-column: 3;
            grid-gap: 5px;
        }

        .contentMarathon img {
            width: 250px;
        }

        .hrdoc {
            margin-right: 5px;
            height: 900px;
        }

        .Marathon {
            display: flex;
            grid-gap: 15px;
            margin-left: 15px;
        }

        .Marathon img {
            width: 250px;
        }

        .image {
            width: 250px;
            height: 100px;
        }

        .image img {
            width: 100%;
        }

        .titleMarathon {
            font-size: 30px;
            margin: 0;
            padding-left: 15px;

        }

        .imageBanner1 img {
            width: 1200px;
            height: 600px;
        }

        .imageBanner1 {
            position: relative;
            height: 600px;
        }

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
            <img src="{{ asset('assets/image/tumblr_9f6acb261cbca2ad7c65a5fdd9ed0042_af52c943_1280.png') }}"
                alt="">
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
            <li><a href="{{ url('/') }}">Trang chủ</a></li>
            <li><a href="">Euro 2024</a></li>
            <li><a href="">Bóng Đá</a></li>
            <li><a href="">Marathon</a></li>
            <li><a href="">Tennis</a></li>
            <li><a href="{{ url('products') }}">Tất cả tin tức</a></li>
        </ul>
        <div class="search">
            <ion-icon name="search-outline"></ion-icon>
            <input type="search">

        </div>
    </div>
    </header>
    @include('layouts.banner')
    <section class="banner2">
        @foreach ($product as $item)
            <div class="imageBanner2">
                <a href="{{ url('products/' . $item['id']) }}"><img src="{{ asset($item['img_title']) }}"
                        alt="" /></a>
                <div class="titleBanner2">
                    <a href="{{ url('products/' . $item['id']) }}">
                        <h3>{{ $item['title_post'] }}</h3>
                    </a>

                </div>
            </div>
        @endforeach
    </section>
    <hr>
    <div class="content2">
        <div class="boxleft">
            <div class="titlleFootball">
                <p>Tin Bóng Đá</p>
            </div>
            @foreach ($football as $item)
                <div class="titleBanner4">
                    <a href="{{ url('products/' . $item['id']) }}">
                        <p>{{ $item['title_post'] }}</p>
                    </a>
                </div>
                <div class="imageBanner4">
                    <a href="{{ url('products/' . $item['id']) }}"> <img src="{{ asset($item['img_title']) }}"
                            alt="" /></a>
                    <p>{{ $item['overview'] }}</p>
                </div>
            @endforeach

        </div>
        <hr class="hrdoc">
        <div class="boxrignt">
            <div class="euro">
                <a href=""><img src="{{ asset('assets/image/euro2024.png') }}" alt=""></a>
            </div>
            <p class="titleMarathon">Marathon</p>
            <div class="Marathon">
                @foreach ($marathon as $item)
                    <div class="">
                        <a href="{{ url('products/' . $item['id']) }}"><img src="{{ asset($item['img_title']) }}"
                                alt=""></a>
                        <a href="{{ url('products/' . $item['id']) }}">
                            <p class="titleLeft">{{ $item['title_post'] }}</p>
                        </a>
                        <p class="contentLeft">{{ $item['overview'] }}</p>
                    </div>
                @endforeach
            </div>
            <hr>
            <p class="titleMarathon">Bóng Rổ</p>
            <div class="Marathon">
                @foreach ($basketball as $item)
                    <div class="">
                        <a href="{{ url('products/' . $item['id']) }}"><img src="{{ asset($item['img_title']) }}"
                                alt=""></a>
                        <a href="{{ url('products/' . $item['id']) }}">
                            <p class="titleLeft">{{ $item['title_post'] }}</p>
                        </a>
                        <p class="contentLeft">{{ $item['overview'] }}</p>
                    </div>
                @endforeach
            </div>


        </div>




    </div>
    </div>
    <hr>
    <footer>
        <div class="left">
            <p>Báo thể thao</p>
            <img src="{{ asset('assets/image/tumblr_9f6acb261cbca2ad7c65a5fdd9ed0042_af52c943_1280.png') }}"
                alt="">
        </div>
        <div class="right">
            <a href="">Điều khoản sử dụng</a>
            <hr>
            <a href="">Chính sách bảo mật</a>
            <hr>
            <a href="">Cookies</a>
            <hr>
            <a href="">Rss</a>
            <hr>
            <a href="" class="folow">
                Theo dõi Thể Thao 24/7 trên
                <ion-icon name="logo-facebook"></ion-icon>
                <ion-icon name="logo-twitter"></ion-icon>
                <ion-icon name="logo-youtube"></ion-icon>
            </a>
            <hr>
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

</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
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
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 3000);
    }
</script>

</html>
