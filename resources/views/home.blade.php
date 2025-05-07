@extends('layouts.app') 

@section('title', 'KLCCC | HOMEPAGE')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.20/fullpage.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }

        .section {
            /* display: flex; */
            /* align-items: center;
            justify-content: center;
            flex-direction: column;
            font-size: 2rem; */
            color: white;
            text-align: center;
        }

        #section1 {
            background-image: url('https://images.unsplash.com/photo-1574218732130-6b19257fd9db?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8a3VhbGElMjBsdW1wdXJ8ZW58MHx8MHx8fDA%3D');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-bottom: 60px;
        }
        
        #section2 { 
          background-color: #f5f7fa;
          color: #333;
          padding: 20px 0;
        }

        .announcement-title {
            margin-bottom: 30px;
            font-weight: bold;
        }

        /* Announcement slider styles */
        .announcement-slider {
            width: 80%;
            margin: 0 auto;
            max-width: 1200px;
        }
        
        .announcement-slide {
            position: relative;
            width: 100%;
            height: 100%;            
            margin: 0 15px;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            object-fit: contain;
        }
        
        .announcement-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .announcement-content {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: white;
            color: black;
            padding: 15px;
            text-align: left;
        }
        
        .announcement-content h3 {
            margin: 0 0 5px 0;
            font-size: 1.5rem;
        }
        
        .announcement-content p {
            margin: 0;
            font-size: 1rem;
        }

        /* Custom arrows for slider */
        .slick-prev, .slick-next {
            z-index: 10;
            width: 40px;
            height: 40px;
        }
        
        .slick-prev {
            left: -50px;
        }
        
        .slick-next {
            right: -50px;
        }

        .slick-dots li button:before {
            color: black !important;
        }
        
        .slick-prev:before, .slick-next:before {
            font-size: 30px;
            color: black;
        }

        /* Updated Section 3 styles */
        #section3 {
            background-color: #2c3e50;
            padding: 50px 0;
            color: white;
            display: flex;
            flex-direction: column;
        }

        #section3 h1 {
            margin-bottom: 40px;
            font-size: 2.5rem;
        }

        #section3 .cctv-card {
            transition: all 0.3s ease;
            border: none;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        #section3 .cctv-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        #section3 .card-img-top {
            border-bottom: 1px solid #ddd;
        }

        #section3 .card-img-top img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensures full coverage */
        }

        #section3 .card-footer {
            background-color: white;
            font-weight: 500;
            height: 50px; /* Fixed height for footer */
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
        }

        #section3 .street-name {
            font-size: 0.85rem;
            line-height: 1.2;
            max-height: 40px;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            padding: 0 8px;
        }

        #section3 .btn-primary {
            background-color: #3498db;
            border-color: #3498db;
            padding: 12px 30px;
            font-weight: 600;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        #section3 .btn-primary:hover {
            background-color: #2980b9;
            border-color: #2980b9;
            transform: translateY(-2px);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
        }

        /* Make sure Bootstrap is included */
        @media (max-width: 767px) {
            #section3 .col-md-3 {
                margin-bottom: 20px;
            }
            
            /* Ensure consistent card heights on mobile */
            #section3 .row {
                display: flex;
                flex-wrap: wrap;
            }
            
            #section3 .col-md-3 {
                height: auto;
                display: flex;
            }
            
            #section3 .cctv-card {
                width: 100%;
            }
        }

        /* Updated Section 4 styles - Our Services Section */
        #section4 {
            background-color: #f5f7fa;
            padding: 70px 0;
            color: #333;
        }

        #section4 h1 {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 50px;
        }

        #section4 .service-card {
            text-align: center;
            transition: all 0.3s ease;
            padding: 0 15px;
            margin-bottom: 30px;
            max-width: 350px;
            margin-left: auto;
            margin-right: auto;
        }


        #section4 .service-card:hover {
            transform: translateY(-10px);
        }

        #section4 .service-image {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        #section4 .service-image img {
            transition: all 0.5s ease;
            max-height: 200px; /* Adjust this value as needed */
            width: 100%;
            object-fit: cover;
        }


        #section4 .service-card:hover .service-image img {
            transform: scale(1.05);
        }

        #section4 .service-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: all 0.3s ease;
        }

        #section4 .service-card:hover .service-overlay {
            opacity: 1;
        }

        #section4 .service-icon {
            width: 70px;
            height: 70px;
            background-color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        #section4 .service-icon i {
            font-size: 30px;
            color: #383B97; /* Match brand color from footer */
        }

        #section4 .service-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin: 25px 0 15px;
            color: #333;
        }

        @media (max-width: 991px) {
            #section4 .service-card {
                margin-bottom: 40px;
            }
        }

        @media (max-width: 767px) {
            #section4 {
                padding: 50px 0;
            }
            
            #section4 h1 {
                font-size: 2.2rem;
                margin-bottom: 30px;
            }
            
            #section4 .service-title {
                font-size: 1.3rem;
            }
        }

        #section5 { background-color: #2c3e50; }

        /* Section 6 with split content - background image only covers the top part */
        #section6 {
            position: relative;
            height: 100vh;
            color: white;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        /* Background image container that only takes up the space above the footer */
        .background-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: calc(100% - 300px);
            background-image: url('https://images.pexels.com/photos/1044329/pexels-photo-1044329.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            z-index: 1;
        }

        /* Footer style */
        .footer {
            width: 100%;
            padding: 80px 0;
            text-align: center;
            font-size: 1rem;
            position: absolute;
            bottom: 0;
            left: 0;
            z-index: 2;
            background: url('{{ asset('images/home/pattern-bg.png') }}') repeat;
            background-color: #383B97;
        }

        /* Hide the fullPage.js credits */
        div.fp-watermark {
            display: none;
        }
    </style>
<body>

<div id="fullpage">
    <div class="section" id="section1">
    <h2 class="text-white fw-bold text-center" style="text-align: center;  padding: 20px;" >Selamat Datang ke Laman Rasmi<br>DBKL Command & Control Centre (KLCCC)</h2>
    </div>
    <div class="section" id="section2">
        <h1 class="text-dark announcement-title">Announcement</h1>
        
        <div class="announcement-slider">
            <div class="announcement-slide">
                <img src="{{ asset('images/home/announcement.png') }}" alt="Announcement 1">
                <!-- <div class="announcement-content">
                    <h3>Penutupan Jalan di Pusat Bandar</h3>
                    <p>Penutupan jalan akan dilakukan pada 10 Mei 2025 untuk kerja-kerja penyelenggaraan.</p>
                </div> -->
            </div>
            <div class="announcement-slide">
                <img src="{{ asset('images/home/announcement.png') }}" alt="Announcement 2">
                <!-- <div class="announcement-content">
                    <h3>Program Kitar Semula DBKL</h3>
                    <p>Sertai program kitar semula kami pada 15 Mei 2025 di Taman Tasik Perdana.</p>
                </div> -->
            </div>
            <div class="announcement-slide">
                <img src="{{ asset('images/home/announcement.png') }}" alt="Announcement 3">
                <!-- <div class="announcement-content">
                    <h3>Kempen Kuala Lumpur Bebas Plastik</h3>
                    <p>Kempen kesedaran alam sekitar akan dilancarkan pada 20 Mei 2025.</p>
                </div> -->
            </div>
        </div>
    </div>
    <div class="section" id="section3">
        <h1 class="text-white mb-4">CCTV</h1>
        
        <!-- First row of CCTV feeds -->
        <div class="container mb-4">
            <div class="row g-4">
                <!-- CCTV 1 -->
                <div class="col-md-3">
                    <div class="card cctv-card">
                        <div class="card-img-top bg-dark" style="height: 160px; display: flex; align-items: center; justify-content: center;">
                            <img src="https://pbs.twimg.com/media/Goxs0FgbwAABfBK.jpg:large" alt="CCTV Feed Jalan Bukit Bintang" class="img-fluid">
                        </div>
                        <div class="card-footer text-center text-dark py-2">
                            <div class="street-name">Jalan Bukit Bintang</div>
                        </div>
                    </div>
                </div>
                
                <!-- CCTV 2 -->
                <div class="col-md-3">
                    <div class="card cctv-card">
                        <div class="card-img-top bg-dark" style="height: 160px; display: flex; align-items: center; justify-content: center;">
                            <img src="https://pbs.twimg.com/media/Goxs0FgbwAABfBK.jpg:large" alt="CCTV Feed Jalan Ampang" class="img-fluid">
                        </div>
                        <div class="card-footer text-center text-dark py-2">
                            <div class="street-name">Jalan Ampang</div>
                        </div>
                    </div>
                </div>
                
                <!-- CCTV 3 -->
                <div class="col-md-3">
                    <div class="card cctv-card">
                        <div class="card-img-top bg-dark" style="height: 160px; display: flex; align-items: center; justify-content: center;">
                            <img src="https://pbs.twimg.com/media/Goxs0FgbwAABfBK.jpg:large" alt="CCTV Feed Jalan Raja Laut" class="img-fluid">
                        </div>
                        <div class="card-footer text-center text-dark py-2">
                            <div class="street-name">Jalan Raja Laut</div>
                        </div>
                    </div>
                </div>
                
                <!-- CCTV 4 -->
                <div class="col-md-3">
                    <div class="card cctv-card">
                        <div class="card-img-top bg-dark" style="height: 160px; display: flex; align-items: center; justify-content: center;">
                            <img src="https://pbs.twimg.com/media/Goxs0FgbwAABfBK.jpg:large" alt="CCTV Feed Jalan Tun Razak" class="img-fluid">
                        </div>
                        <div class="card-footer text-center text-dark py-2">
                            <div class="street-name">Jalan Tun Razak</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- More CCTV Button -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <a href="#" class="btn btn-primary btn-lg w-100">More CCTV</a>
                </div>
            </div>
        </div>
        
    </div>
    <div class="section" id="section4">
      <h1 class="text-dark mb-5">Our Services</h1>
      
        <div class="container">
            <div class="row justify-content-center">
                <!-- Emergency Response Service -->
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-image">
                        <img src="{{ asset('images/home/service1.png') }}" alt="Emergency Response" class="img-fluid rounded">
                        <div class="service-overlay">
                                <div class="service-icon">
                                    <i class="bi bi-exclamation-triangle-fill"></i>
                                </div>
                            </div>
                        </div>
                        <h3 class="service-title mt-4 text-dark">Emergency Response</h3>
                    </div>
                </div>
                
                <!-- Journey Planner Service -->
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-image">
                            <img src="images/home/service2.png" alt="Journey Planner" class="img-fluid rounded">
                            <div class="service-overlay">
                                <div class="service-icon">
                                    <i class="bi bi-map-fill"></i>
                                </div>
                            </div>
                        </div>
                        <h3 class="service-title mt-4 text-dark">Journey Planner</h3>
                    </div>
                </div>
                
                <!-- Traffic Lights Monitoring Service -->
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-image">
                            <img src="images/home/service3.png" alt="Traffic Lights Monitoring" class="img-fluid rounded">
                            <div class="service-overlay">
                                <div class="service-icon">
                                    <i class="bi bi-stoplights-fill"></i>
                                </div>
                            </div>
                        </div>
                        <h3 class="service-title mt-4 text-dark">Traffic Lights Monitoring</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section" id="section5">
        <h1 class="text-white mb-5">Media Room</h1>

        <div class="container-fluid p-0 m-0">
            <div class="row g-0">
                <div class="col-8 mx-auto">
                    <div class="position-relative"
                        style="background: url('https://www.mbjb.gov.my/sites/default/files/inline-images/dbkl14.png') center/cover;
                              min-height: 400px; overflow: hidden; border-radius: 15px;">
                        <!-- Dark overlay -->
                        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25"></div>

                        <!-- Text content -->
                        <div class="position-absolute top-0 start-0 text-white text-start p-4">
                        <h4 class="fw-bold mb-2">Lawatan dari Majlis Bandaraya Johor Bahru</h4>
                        <p class="mb-1">21.5.2024</p>
                        <p>Bilik Mesyuarat, KLCCC</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section" id="section6">
        <!-- Background image container that only fills the space above footer -->
        <div class="background-container"></div>
        
        <!-- Footer section -->
        <div class="footer text-white py-4">
        <div class="container">
        <div class="row">
            <!-- Contact Us Section -->
            <div class="col-md-4">
                <h4 class="d-flex align-items-center">Contact Us</h4>
                <div class="mb-3">
                    <p class="d-flex align-items-center fw-medium mb-1"><strong>Jabatan Pengangkutan Bandar</strong></p>
                    <p class="d-flex align-items-center mb-1">Tingkat 7-8,</p>
                    <p class="d-flex align-items-center mb-1">Menara DBKL 1,</p>
                    <p class="d-flex align-items-center mb-1">Jalan Raja Laut,</p>
                    <p class="d-flex align-items-center mb-1">50350 Kuala Lumpur</p>
                </div>
                
                <div class="d-flex align-items-center mb-2">
                    <div class="me-2">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div>
                        <p class="mb-0">Tel: 03 2028 2282</p>
                    </div>
                </div>
                
                <div class="d-flex align-items-center mb-2">
                    <div class="me-2">
                        <i class="bi bi-printer-fill"></i>
                    </div>
                    <div>
                        <p class="mb-0">Fax: 03 2693 9245</p>
                    </div>
                </div>
                
                <div class="d-flex align-items-center mb-2">
                    <div class="me-2">
                        <i class="bi bi-envelope-fill"></i>
                    </div>
                    <div>
                        <p class="mb-0">Email: jpb@dbkl.gov.my</p>
                    </div>
                </div>
            </div>
            
            <!-- KLCCC Contact Section -->
            <div class="col-md-4">
                <div style="margin-top: 45px;">
                    <p class="d-flex align-items-center mb-1"><strong>Kuala Lumpur Command & Control Centre</strong></p>
                    <p class="d-flex align-items-center mb-1"><strong>(KLCCC)</strong></p>
                    <p class="d-flex align-items-center mb-1">Lot PT 4709,</p>
                    <p class="d-flex align-items-center mb-1">Lebuhraya Mahameru Jalan,</p>
                    <p class="d-flex align-items-center mb-1">57000 Bukit Jalil,</p>
                    <p class="d-flex align-items-center mb-1">Kuala Lumpur</p>
                </div>
                
                <div class="d-flex align-items-center mb-2">
                    <div class="me-2">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div>
                        <p class="mb-0">Tel: 03 8947 4200</p>
                    </div>
                </div>
                
                <div class="d-flex align-items-center mb-2">
                    <div class="me-2">
                        <i class="bi bi-printer-fill"></i>
                    </div>
                    <div>
                        <p class="mb-0">Fax: 03 8947 4588</p>
                    </div>
                </div>
                
                <div class="d-flex align-items-center mb-2">
                    <div class="me-2">
                        <i class="bi bi-envelope-fill"></i>
                    </div>
                    <div>
                        <p class="mb-0">Email: klccc@dbkl.gov.my</p>
                    </div>
                </div>
            </div>
            
            <!-- Follow Us & Hotline Section -->
            <div class="col-md-4">
                <h4 class="d-flex align-items-center">Follow Us</h4>
                <div class="d-flex align-items-center mb-2">
                    <div class="me-2">
                        <i class="bi bi-twitter"></i>
                    </div>
                    <div>
                        <p class="mb-0">@KLCCC_DBKL</p>
                    </div>
                </div>
                
                <div class="d-flex align-items-center mb-4">
                    <div class="me-2">
                        <i class="bi bi-facebook"></i>
                    </div>
                    <div>
                        <p class="mb-0">KLCCC DBKL</p>
                    </div>
                </div>
                
                <h4 class="d-flex align-items-center mt-4">Hotline Aduan & Info Trafik</h4>
                <div class="d-flex align-items-center mb-1">
                    <div class="me-2">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div>
                        <p class="mb-0">1800 88 1020</p>
                    </div>
                </div>
                
                <div class="d-flex align-items-center">
                    <div class="me-2">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div>
                        <p class="mb-0">03 8947 4002</p>
                    </div>
                </div>
            </div>
        </div>
    </div>        
  </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.20/fullpage.min.js" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    // Initialize fullPage.js
    new fullpage('#fullpage', {
        autoScrolling: true,
        navigation: false,
        anchors: ['home', 'announcements', 'services', 'portfolio', 'contact'],
        navigationTooltips: ['Home', 'Announcements', 'Services', 'Portfolio', 'Contact'],
        showActiveTooltip: true,
        scrollBar: false,
        credits: {
            enabled: false,
        },
        onLeave: function(origin, destination, direction) {
            const navbar = document.getElementById('mainNavbar');

            // Only show navbar on the first section (index 0)
            if (origin.index === 0 && direction === 'down') {
                navbar.style.display = 'none';
            } else if (destination.index === 0) {
                navbar.style.display = 'flex';
            }
        },
        // This ensures that the slick slider is initialized after fullPage is loaded
        afterLoad: function(origin, destination, direction) {
            if(destination.index === 1) {
                initSlider();
            }
        }
    });

    // Initialize the slick slider
    function initSlider() {
        $('.announcement-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            arrows: true,
            dots: true,
            fade: false,
            infinite: true,
            speed: 800,
            cssEase: 'linear',
            pauseOnHover: true,
            draggable: false, // Disable dragging (helps scrolling)
            swipe: false,     // Disable swipe (conflicts with fullPage)
            touchMove: false, // Disable touch move
            accessibility: false, // Helps prevent focus issues
            pauseOnFocus: false,  // Prevents autoplay pausing
            pauseOnHover: false,  // Prevents hover interference
                responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false
                    }
                }
            ]
        });
    }

    // Ensure the slider initializes even if the user navigates directly to the section
    $(document).ready(function() {
        if(fullpage_api.getActiveSection().anchor === 'announcements') {
            initSlider();
        }
    });
</script>

</body>

@endsection