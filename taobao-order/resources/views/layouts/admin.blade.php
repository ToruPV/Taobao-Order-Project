<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
         rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet" />
    <title>@yield('title', 'Admin - Dịch vụ Order Taobao-Wechat')</title>
</head>

<body>`
    <div class="row g-0">
<!-- sidebar -->
<div class="p-3 col fixed text-white bg-dark">
    <a href="{{ route('admin.home.index') }}" class="text-white text-decoration-none">
        <span class="fs-4">Admin Panel</span>
    </a>
    <hr />
    <ul class="nav flex-column">
        <li><a href="{{ route('admin.home.index') }}" 
            class="nav-link text-white">- Quản trị - Trang chủ</a></li>
        <li><a href="{{ route('admin.product.index') }}" 
            class="nav-link text-white">- Quản trị - Sản phẩm</a></li>
        <li>
            <a href="{{ route('home.index') }}" 
                class="mt-2 btn bg-primary text-white">Trở về trang chủ</a>
        </li>
    </ul>
</div>
<!-- sidebar -->
        <div class="col content-grey">
            <nav class="p-3 shadow text-end">
                <span class="profile-font">Quản trị viên</span>
                <img class="img-profile rounded-circle" src="{{ asset('/images/undraw_profile.svg') }}">
            </nav>
            <div class="g-0 m-5">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="copyright py-4 text-center text-white">
        <div class="container">
            <small>
                Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
                    href="https://instagram.com/dinhtai_102">
                    Nguyễn Đình Tài
                </a>
            </small>
        </div>
    </div>
    <!-- footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>

</html>
