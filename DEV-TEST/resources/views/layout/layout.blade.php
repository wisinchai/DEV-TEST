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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

    <style>

    </style>
    @yield('header')

</head>

<body>

    <header>
        <nav class="navbar">
            <div class="hamburger" onclick="toggleMenu()">☰</div>
            <div class="logo">  
                <img  src="{{ asset('image/BB-logo1.png') }}" alt="">
            </div>
            <div class="icon-logo">
                <img class src="{{ asset('image/BB-logo.png') }}" alt="">
            </div>
            <ul class="nav-links">
                <li><a href="#">หน้าแรก</a></li>
                <li><a href="#">สินค้าใหม่</a></li>
                <li><a href="#" class="active">อุปกรณ์ไอที</a></li>
            </ul>
            <div class="cart">
                <button type="button" class="btn-primary"><i class="fa fa-shopping-cart"></i></button>   
            </div>
        </nav>

    </header>
    <script>
        function toggleMenu() {
            document.querySelector(".nav-links").classList.toggle("show");
           
        }
        let button = document.querySelectorAll('.nav-links li a'); 
        button.forEach((btn) => {
            btn.addEventListener('click', () => {
                button.forEach((btn) => btn.classList.remove('active'));
                btn.classList.add('active');
            });
       
        });
    </script>
    @yield('content')
</body>
<footer>
    <div class="footer-warpper">
        <div class="footer-row">
            <div class="footer-col">
                <ul>
                    <li>นโยบายความเป็นส่วนตัว</li>
                    <li>เงื่อนไขการใช้เว็บไซต์</li>
                    <li>ตั้งค่าคุกกี้</li>
                </ul>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col d-flex justify-content-center align-items-center">
                    <p class="text-white m-0">© 2024 binaryboutique.com. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
    @yield('footer')
</footer>

</html>
