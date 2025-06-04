<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <nav>
        <ul>
            <li>Trang Chủ</li>
            <li>Sản phẩm</li>
            <li>Người dùng</li>
            <li>Khuyến mại</li>
            <li>Đăng xuất</li>
        </ul>
    </nav>
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
    <footer>
        <span>Xuất bản bởi: <strong>Nguyễn Thành Trung</strong></span>
    </footer>
</body>
</html>