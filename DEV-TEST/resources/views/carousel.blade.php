@extends('layout.layout')

@section('header')
    <title>index</title>
    <style>

    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <span class="breadcrumb">หน้าหลัก > อุปกรณ์ไอที > คีย์บอร์ด > Work Louder > Work Louder: Nomad [E] Mechanical
                    Keyboard </span>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-11 col-md-11">
                <div class="card card-search" style="background-color: #F4F8FF;border:none;">
                    <div class="card-body text-center">
                        <h6><b>ค้นหาผลิตภัณท์</b></h6>
                        <div class="row">
                            <div class="col-12">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-4">
                                        <div class="input-group">
                                            <span class="input-group-text" id=""><i class="fa fa-tag"
                                                    style="color:#4285F4"></i></span>
                                            <select name="" id="" class="form-select form-select-lg">
                                                <option value="">เลือกแบรนด์</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-4">
                                        <div class="input-group">
                                            <span class="input-group-text" id=""><i class="fa fa-filter"
                                                    style="color:#4285F4"></i></span>
                                            <select name="" id="" class="form-select form-select-lg"
                                                disabled>
                                                <option value="">เลือกผลิตภัณท์</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4"></div>
                            <div class="d-grid col-4 mt-3">
                                <button class="btn btn-lg btn-primary btn-block">ค้นหา</button>
                            </div>
                            <div class="col-4 d-flex align-items-center justify-content-start mt-3">
                                <span>รีเซ็ต <i class="fa fa-undo"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="btn-filter-mb">
                    <div class="row">
                        <div class="col-12 d-grid ">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal"><i class="fa fa-sliders"></i> ค้นหาสินค้าแบบละเอียด</button>
                        </div>
                    </div>

                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <div class="modal-body">
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <div class="input-group">
                                            <span class="input-group-text" id=""><i class="fa fa-tag"
                                                    style="color:#4285F4"></i></span>
                                            <select name="" id="" class="form-select form-select-lg">
                                                <option value="">เลือกแบรนด์</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <div class="input-group">
                                            <span class="input-group-text" id=""><i class="fa fa-filter"
                                                    style="color:#4285F4"></i></span>
                                            <select name="" id="" class="form-select form-select-lg"
                                                disabled>
                                                <option value="">เลือกผลิตภัณท์</option>
                                            </select>
                                        </div>

                                    </div>

                                </div>
                                <div class="row ">
                                    <div class="col-12 d-grid mt-3">
                                        <button class="btn btn-lg btn-primary">ค้นหา</button>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex align-items-center justify-content-center mt-3 mb-2">
                                        <span>รีเซ็ต <i class="fa fa-undo"></i></span>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-12">
                        <h4>Work Louder: Nomad [E] Mechanical Keyboard</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-sm-12">
                        <h5 class="text-primary">11,799 บาท</h5>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <span>ข้อมูล ณ วันที่ 1 พ.ย. 67 ดู 45,959</span>
                    </div>
                </div>
                {{-- เส้นใต้ --}}
                <hr>
                <div class="content">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <div class="container-carousel">
                                <div id="productCarousel" class="carousel" data-bs-ride="carousel">
                                    <div class="sale-banner">
                                        <img src="{{ asset('image\product\sale.png') }}" alt="" class="sale-banner">
                                    </div>
                                    <img src="{{ asset('image\product\WorkLouder1.png') }}" class="active">
                                    <img src="{{ asset('image\product\WorkLouder2.png') }}">
                                    <img src="{{ asset('image\product\WorkLouder3.png') }}">
                                    <img src="{{ asset('image\product\WorkLouder4.png') }}">
                                    <img src="{{ asset('image\product\WorkLouder5.png') }}">
                                    <img src="{{ asset('image\product\WorkLouder6.png') }}">
                                    <div class="controls-btn">
                                        <button type="button" onclick="prevSlide()">❮</button>
                                        <button type="button" onclick="nextSlide()">❯</button>

                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="imageslide">
                                    <img src="{{ asset('image\product\WorkLouder1.png') }}" class="active">
                                    <img src="{{ asset('image\product\WorkLouder2.png') }}">
                                    <img src="{{ asset('image\product\WorkLouder3.png') }}">
                                    <img src="{{ asset('image\product\WorkLouder4.png') }}">
                                    <img src="{{ asset('image\product\WorkLouder5.png') }}">
                                    <img src="{{ asset('image\product\WorkLouder6.png') }}">
                                </div>
                            </div>


                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <b> Nomad [E] </b>
                            <p>

                                Know Productivity - Efficiency - Passion - Creativity with no limits. A crisp IPS display
                                boasts everything from pomodoro timer, to a playful Tamagotchi-style companion, a trusty
                                clock and much more.
                            </p>
                            <b>
                                Backed by science
                            </b>
                            <p>
                                The integrated pomodoro timer leverages a scientifically proven work/rest methodology that
                                is adaptable to any workflow – empowering you to accomplish more in less time
                            </p>
                            <b>
                                Mechanical & hotswap
                            </b>
                            <p>
                                We redesigned our custom keycaps to hug your fingertips even more perfectly than
                                before. Mounted on our custom tuned “Atomic” MX Gateron hotswap switches, so you can try
                                different switches without needing to desolder them.
                            </p>


                        </div>
                    </div>
                </div>
            </div>
            <div class="other-content">
                <div class="row">
                    <h5>ผลิตภัณฑ์อื่นๆ จาก Work Louder</h4>
                        <div class="col-12" style="display: flex;justify-content: space-between;">

                            <div class="card-container">
                                <div class="card-pdt">
                                    <img src="{{ asset('image\product\FigmaCreatorMicro.png') }}" class="card-img-top"
                                        alt="...">
                                    <div class="card-pdt-body">
                                        <h5 class="card-pdt-title mt-1" id="pdt-name">Figma Creator Micro</h5>
                                        <p class="" id="pdt-type">Mechanical Keyboard</p>
                                        <span class="text-price" id="pdt-price">5,375 บาท</span>
                                        <a href="#" class="btn btn-primary d-grid ">ใส่ตะกร้า</a>
                                    </div>
                                </div>
                                <div class="card-pdt">
                                    <img src="{{ asset('image\product\Knob1.png') }}" class="card-img-top"
                                        alt="...">
                                    <div class="card-pdt-body">
                                        <h5 class="card-pdt-title mt-1" id="pdt-name">Knob1</h5>
                                        <p class="" id="pdt-type">Mechanical Keyboard</p>
                                        <span class="text-price" id="pdt-price">14,999 บาท</span>
                                        <a href="#" class="btn btn-primary d-grid ">ใส่ตะกร้า</a>
                                    </div>
                                </div>
                                <div class="card-pdt">
                                    <img src="{{ asset('image\product\CreatorBoard.png') }}" class="card-img-top"
                                        alt="...">
                                    <div class="card-pdt-body">
                                        <h5 class="card-pdt-title mt-1" id="pdt-name">Creator Board</h5>
                                        <p class="" id="pdt-type">Mechanical Keyboard</p>
                                        <span class="text-price" id="pdt-price">13,828 บาท</span>
                                        <a href="#" class="btn btn-primary d-grid ">ใส่ตะกร้า</a>
                                    </div>
                                </div>
                                <div class="card-pdt">
                                    <img src="{{ asset('image\product\CreatorBoardXL.png') }}" class="card-img-top"
                                        alt="...">
                                    <div class="card-pdt-body">
                                        <h5 class="card-pdt-title mt-1" id="pdt-name">Creator Board XL</h5>
                                        <p class="" id="pdt-type">Mechanical Keyboard</p>
                                        <span class="text-price" id="pdt-price">18,900 บาท</span>
                                        <a href="#" class="btn btn-primary d-grid ">ใส่ตะกร้า</a>
                                    </div>
                                </div>

                            </div>


                            {{-- <div class="card mb-5 me-1" style="width: 16.875rem;height: 22rem;">
                                    <img src="https://cdn.wallpapersafari.com/81/92/qs7Pof.jpg" class="card-img-top"
                                        alt="..." style="width: 100%;border-radius: 20px;padding: 16px;">
                                    <div class="card-body">
                                        <h5 class="card-title">Figma Creator Micro</h5>
                                        <p class="">Mechanical Keyboard</p>
                                        <span class="text-price">5,375 บาท</span>
                                        <a href="#" class="btn btn-primary d-grid ">ใส่ตะกร้า</a>
                                    </div>
                                </div> --}}


                        </div>
                        <div>
                            <h5>ผลิตภัณฑ์ที่น่าจะถูกใจคุณ</h5>
                        </div>
                        <div class="col-12" style="display: flex;justify-content: space-between;">
                            <div class="card-container">
                                <div class="card-pdt">
                                    <img src="{{ asset('image\product\RAZERProTypeUltra.png') }}" class="card-img-top"
                                        alt="...">
                                    <div class="card-pdt-body">
                                        <h5 class="card-pdt-title mt-1" id="pdt-name">RAZER Pro Type Ultra</h5>
                                        <p class="" id="pdt-type">Mechanical Keyboard</p>
                                        <span class="text-price" id="pdt-price">5,599 บาท</span>
                                        <a href="#" class="btn btn-primary d-grid ">ใส่ตะกร้า</a>
                                    </div>
                                </div>
                                <div class="card-pdt">
                                    <img src="{{ asset('image\product\DiavaletPhantom2.png') }}" class="card-img-top"
                                        alt="...">
                                    <div class="card-pdt-body">
                                        <h5 class="card-pdt-title mt-1" id="pdt-name">Diavalet Phantom 2</h5>
                                        <p class="" id="pdt-type">Stereo Speaker</p>
                                        <span class="text-price" id="pdt-price">50,642 บาท</span>
                                        <a href="#" class="btn btn-primary d-grid ">ใส่ตะกร้า</a>
                                    </div>
                                </div>
                                <div class="card-pdt">
                                    <img src="{{ asset('image\product\BoseQuietComfortUltra.png') }}"
                                        class="card-img-top" alt="...">
                                    <div class="card-pdt-body">
                                        <div class="card-pdt-title mt-1" id="pdt-name">Bose QuietComfort Ultra</div>
                                        <p class="" id="pdt-type">Headphone</p>
                                        <span class="text-price" id="pdt-price">15,900 บาท</span>
                                        <a href="#" class="btn btn-primary d-grid ">ใส่ตะกร้า</a>
                                    </div>
                                </div>
                                <div class="card-pdt">
                                    <img src="{{ asset('image\product\LewittPureTube.png') }}" class="card-img-top"
                                        alt="...">
                                    <div class="card-pdt-body">
                                        <h5 class="card-pdt-title mt-1" id="pdt-name">Lewitt Pure Tube</h5>
                                        <p class="" id="pdt-type">Studio Microphone</p>
                                        <span class="text-price" id="pdt-price">43,999 บาท</span>
                                        <a href="#" class="btn btn-primary d-grid ">ใส่ตะกร้า</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                </div>

            </div>
        </div>
    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        let images = document.querySelectorAll('.carousel img:not(.sale-banner img)');
        let imageslide = document.querySelectorAll('.imageslide img');
        let index = 0;
        // imageslide[index].classList.add('active');
        // images[index].classList.add('active');
        imageslide.forEach((img, i) => {
            img.addEventListener('click', () => {
                console.log(i);
                showSlide(i);
            });
        });

        function showSlide(i) {
            images[index].classList.remove('active');
            imageslide[index].classList.remove('active');
            index = (i + images.length) % images.length;
            images[index].classList.add('active');
            imageslide[index].classList.add('active');
            // caption.textContent = captions[index];
        }

        function prevSlide() {
            showSlide(index - 1);
        }

        function nextSlide() {
            showSlide(index + 1);
        }
    </script>
@endsection
@section('footer')
@endsection
