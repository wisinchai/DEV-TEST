<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css\style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">
    <style>

    </style>
    @yield('header')

</head>

<body>

    <header>
        <nav class="navbar">
            <div class="logo">BINARY BOUTIQUE</div>
            <ul class="nav-links">
                <li><a href="#">หน้าแรก</a></li>
                <li><a href="#">สินค้าใหม่</a></li>
                <li><a href="#" class="active">อุปกรณ์ไอที</a></li>
            </ul>
            <div class="cart">
                <i class="cart-icon">🛒</i>
            </div>
        </nav>

    </header>
    @yield('content')
</body>
<footer>
    @yield('footer')
</footer>

</html>
