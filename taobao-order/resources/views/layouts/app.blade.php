<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/css/about.css')}}">
    <title>@yield('title','Dịch vụ Order Taobao-Wechat')</title>
    <!-- Thêm link Bootstrap CSS vào phần head -->
</head>
<body>
<!--header-->
<nav class="navbar navbar-expand-lg navbar-white bg-white ">
    <div class="container">
        <a class="navbar-brand" href="{{route('home.index')}}">
            <img src="{{ asset('images/Delivery Express Logo.png') }}" alt="Logo" height="200">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                    <a class="nav-link active" href="{{route('home.index')}}">Trang chủ</a>
                    <a class="nav-link active" href="{{route('home.about')}}">Giới thiệu</a>                
                    <a class="nav-link active" href="{{route('product.index')}}">Sản phẩm</a>
                    <a class="nav-link active" href="#">Dịch vụ</a>                
                    <a class="nav-link active" href="#">Bảng giá</a>
           </div>
        </div>
    </div>
</nav>
<header class="masthead bg-secondary text-white text-center">
    <div class="container d-flex align-items-left">
        <p class="Tigia"> <i class="fa-solid fa-coins"></i>Tỉ giá: <span>3.580</span></p>
        <p class="Hotline"> <i class="fa solid fa-phone"></i> Hotline: <span>0912385276</span></p>
    </div>
</header>


<!--header-->
<div class="container py-4">
    @yield('content')
</div>
<!--footer-->
<div class="container"></div>
<footer>
        <div class="footer_main">
            <div class="tag">
                <h1>Contact</h1>
                <a href="#"><i class="fa-solid fa-house"></i>Tan Dong Hiep-Di An City-Binh Duong Province-Vietnam</a>
                <a href="#"><i class="fa-solid fa-phone"></i>+84 912789999</a>
                <a href="#"><i class="fa-solid fa-envelope"></i>LeoStoreVN@gmail.com</a>
            </div>
            <div class="tag">
                <h1>Get Help</h1>
                <a href="#" class="center">FAQ</a>
                <a href="#" class="center">Shipping</a>
                <a href="#" class="center">Returns</a>
                <a href="#" class="center">Payment Options</a>
            </div>
            <div class="tag">
                <h1>Our Stores</h1>
                <a href="#" class="center">Vietnam</a>
                <a href="#" class="center">USA</a>
                <a href="#" class="center">China</a>
                <a href="#" class="center">Japan</a>
            </div>
            <div class="tag">
                <h1>Follow Us</h1>
                <div class="social_link">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-weixin"></i></a>                    
                </div>
            </div>
            <div class="tag">
                <h1>Newsletter</h1>
                <div class="search_bar">
                    <input type="text" placeholder="You email id here">
                    <button type="submit">Subscribe</button>
                </div>
            </div>
        </div>
    <div class="copyright py-4 text-center text-white">
        <div class="container">
            <small>
                Copyright - <a class="text-reset fw-bold text-decoration-none"target="_blank"
                href="https://instagram.com/dinhtai_102">
                Nguyễn Đình Tài
                </a> - <b>Dịch vụ Order Taobao-Wechat</b>
            </small>
        </div>
    </div>
</footer>
</div>
<!--footer-->
<!-- Thêm script Bootstrap và FontAwesome -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>