@extends('layouts.app')

@section('title', 'KLCCC | HOMEPAGE')

@section('content')
<body>
    <!-- navbar -->
    <div id="navbar-container">
        @include('partials.navbar')
    </div>

    <div class="fullpage-container" id="container">
      <section class="section section-0">
        <div class="section-content">
          <h2 class="text-white fw-bold text-center">Selamat Datang ke Laman Rasmi<br>DBKL Command & Control Centre (KLCCC)</h2>
        </div>
      </section>
      
      <section class="section section-2">
    <div class="container mb-4">
        <h2 class="text-dark fw-bold mt-4 text-center">CCTV</h2> 
        <div class="cctv-grid">
            <div class="cctv-card">
                <video src="video1.mp4" controls></video>
                <p class="text-dark fw-bold">Jalan Loke Yew</p>
            </div>
            <div class="cctv-card">
                <video src="video2.mp4" controls></video>
                <p class="text-dark fw-bold">Jalan Tunku Abdul Rahman</p>
            </div>
            <div class="cctv-card">
                <video src="video3.mp4" controls></video>
                <p class="text-dark fw-bold">Jalan Raja Muda Musa</p>
            </div>
            <div class="cctv-card">
                <video src="video4.mp4" controls></video>
                <p class="text-dark fw-bold">Jalan Chow Kit</p>
            </div>
            <div class="cctv-card">
                <video src="video5.mp4" controls></video>
                <p class="text-dark fw-bold">Jalan Dewan Sultan Ismail</p>
            </div>
            <div class="cctv-card">
                <video src="video6.mp4" controls></video>
                <p class="text-dark fw-bold">Jalan Tun Sambathan</p>
            </div>
            <div class="cctv-card">
                <video src="video7.mp4" controls></video>
                <p class="text-dark fw-bold">Jalan Istana</p>
            </div>
            <div class="cctv-card">
                <video src="video8.mp4" controls></video>
                <p class="text-dark fw-bold">Jalan Genting Klang</p>
            </div>
        </div>
</div>
</section>
<section class="section section-3">
  <div class="container mb-4">
    <h2 class="text-dark fw-bold mb-4 text-center">Our Services</h2>
    
    <div class="row text-center">
      <div class="col-md-4 mb-3">
        <div class="bg-light" style="background: url('{{ asset('images/home/service1.png') }}') center/cover; min-height: 220px; border-radius: 15px;"></div>
        <h5 class="text-dark fw-bold mt-3">Emergency Response</h5>
      </div>
      <div class="col-md-4 mb-3">
        <div class="bg-light" style="background: url('{{ asset('images/home/service2.png') }}') center/cover; min-height: 220px; border-radius: 15px;"></div>
        <h5 class="text-dark fw-bold mt-3">Journey Planner</h5>
      </div>
      <div class="col-md-4 mb-3">
        <div class="bg-light" style="background: url('{{ asset('images/home/service3.png') }}') center/cover; min-height: 220px; border-radius: 15px;"></div>
        <h5 class="text-dark fw-bold mt-3">Traffic Lights Monitoring</h5>
      </div>
    </div>
  </div>
</section>

<section class="section section-4">
  <div class="container mb-4">
    <h2 class="text-dark fw-bold mb-4 text-center">Media Room</h2>
    
    <div class="position-relative bg-light text-center py-4"
         style="background: url('https://www.mbjb.gov.my/sites/default/files/inline-images/dbkl14.png') center/cover; min-height: 400px; padding: 20px 40px; border-radius: 15px;">

      <!-- Text at Top Left of Image -->
      <div class="position-absolute top-0 start-0 p-3 text-white" style="font-size: 14px; background: rgba(0, 0, 0, 0.5); border-radius: 5px;">
        <h5 class="fw-bold mb-1">Lawatan dari Majlis Bandaraya Johor Bahru</h5>
        <p class="mb-1">21.5.2024</p>
        <p class="mb-0">Bilik Mesyuarat, KLCCC</p>
      </div>

    </div>
  </div>
</section>


      <section class="section section-5">
      </section>
    </div>
    <div class="dots" style="display: none" id="dots"></div>

    <!-- Footer, initially hidden -->
    <div id="footer-container" style="display: none;">
        @include('partials.footer')
    </div>

    

    <style>

        
        .section-3 {
        background-image: url('https://img.freepik.com/premium-photo/red-white-blue-border-frame-blank-background_1106493-530367.jpg');
        background-size: cover;
        background-position: center;
        position: relative;  
    }

    .section-4 {
        background-image: url('https://img.freepik.com/premium-photo/red-white-blue-border-frame-blank-background_1106493-530367.jpg');
        background-size: cover;
        background-position: center;
        position: relative;  
    }

.cctv-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 10px; /* Reduce gap between cards */
}

.cctv-card {
  background: none;
  border-radius: 8px;
  padding: 5px;
  text-align: center;
}

.cctv-card video {
  width: 100%;
  height: 100px;
  object-fit: cover;
  border-radius: 6px;
}

.cctv-card p {
  margin-top: 4px;
  font-size: 0.85rem;
}


      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
        overflow: hidden;
      }
      body {
        font-family: sans-serif;
        position: relative;
      }
      .fullpage-container {
        height: 100vh;
        width: 100vw;
        transition: transform 0.7s cubic-bezier(0.77, 0, 0.18, 1);
        will-change: transform;
        position: absolute;
        top: 0;
        left: 0;
      }
      .section {
        height: 100vh;
        width: 100vw;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 8rem;
        font-weight: bold;
        color: #fff;
        position: relative;
      }
      .section-content {
        text-align: center;
        padding: 20px;
      }
      .section-0 {
        background-image: url('https://images.unsplash.com/photo-1574218732130-6b19257fd9db?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8a3VhbGElMjBsdW1wdXJ8ZW58MHx8MHx8fDA%3D');
        background-size: cover;
        background-position: center;
        position: relative;      
      }
      /* Add overlay for better text visibility */
      .section-0::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.3);
        z-index: 1;
      }
      /* Make sure the content is above the overlay */
      .section-0 > * {
        position: relative;
        z-index: 2;
      }
      .section-1 {
        background-image: url('https://img.freepik.com/premium-photo/red-white-blue-border-frame-blank-background_1106493-530367.jpg');
        background-size: cover;
        background-position: center;
        position: relative;      
    }        
      .section-2 {
        background-image: url('https://img.freepik.com/premium-photo/red-white-blue-border-frame-blank-background_1106493-530367.jpg');
        background-size: cover;
        background-position: center;
        position: relative;  
    }
      .section-5{
        background-image: url('https://images.pexels.com/photos/313032/pexels-photo-313032.jpeg?cs=srgb&dl=pexels-indragunawan-313032.jpg&fm=jpg');
        background-size: cover;
        background-position: center;
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: space-between;

      }
      /* Add overlay for better text visibility */
      .section-5::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.3);
        z-index: 1;
      }
      /* Make sure the content is above the overlay */
      .section-5 > * {
        position: relative;
        z-index: 2;
      }
      .bar {
        height: 3px;
        width: 100%;
        background-color: white;
        border-radius: 10px;
      }
      /* Optional: Dots navigation */
      .dots {
        position: fixed;
        right: 30px;
        top: 50%;
        transform: translateY(-50%);
        display: flex;
        flex-direction: column;
        gap: 15px;
        z-index: 10;
      }
      .dot {
        width: 14px;
        height: 14px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.5);
        border: 2px solid #fff;
        cursor: pointer;
        transition: background 0.3s, transform 0.3s;
      }
      .dot.active {
        background: #fff;
        transform: scale(1.3);
      }
      
      /* Responsive styles */
      @media screen and (max-width: 768px) {
        .section {
          font-size: 4rem;
        }
        
        .navbar-links {
          position: fixed;
          top: 60px;
          right: -100%;
          flex-direction: column;
          background-color: rgba(0, 0, 0, 0.9);
          width: 100%;
          height: auto;
          text-align: center;
          transition: 0.3s;
          padding: 20px 0;
          gap: 0;
        }
        
        .navbar-links.active {
          right: 0;
        }
        
        .navbar-link {
          padding: 15px;
          display: block;
          width: 100%;
        }
        
        .navbar-toggle {
          display: flex;
        }
        
        .dots {
          right: 15px;
        }
        
        .dot {
          width: 10px;
          height: 10px;
        }
        
        .footer-content {
          flex-direction: column;
          align-items: center;
        }
        
        .footer-section {
          text-align: center;
          margin-bottom: 30px;
        }
      }
      
      @media screen and (max-width: 480px) {
        .section {
          font-size: 2.5rem;
        }
        
        .navbar-logo {
          font-size: 1.2rem;
        }
        
        .footer {
          padding: 10px 0;
        }
        
        .footer-section h3 {
          font-size: 1rem;
        }
        
        .footer-section p, .footer-section ul {
          font-size: 0.8rem;
        }
      }

      #footer-container {
        width: 100vw;
        position: fixed;
        left: 0;
        bottom: 0;
        z-index: 100;
    }

      #navbar-container {
        width: 100vw;
        position: fixed;
        left: 0;
        top: 0;
        z-index: 1000;
        background: transparent;
      }
    
    </style>
    <script>
      // --- Fullpage Scroll Logic ---
      const sections = document.querySelectorAll(".section");
      const container = document.getElementById("container");
      const dotsContainer = document.getElementById("dots");
      const navbar = document.querySelector('.navbar');
      let current = 0;
      let isScrolling = false;

      // Create dots
      sections.forEach((_, i) => {
        const dot = document.createElement("div");
        dot.className = "dot" + (i === 0 ? " active" : "");
        dot.addEventListener("click", () => goToSection(i));
        dotsContainer.appendChild(dot);
      });
      const dots = document.querySelectorAll(".dot");

      function goToSection(idx) {
        if (isScrolling || idx === current || idx < 0 || idx >= sections.length)
          return;
        isScrolling = true;
        container.style.transform = `translateY(-${idx * 100}vh)`;
        dots[current].classList.remove("active");
        dots[idx].classList.add("active");
        
        // Toggle navbar visibility based on section
        const navbarContainer = document.getElementById('navbar-container');
        if (idx === 0) {
          navbarContainer.style.display = 'block';
        } else {
          navbarContainer.style.display = 'none';
        }
        
        // Toggle footer visibility based on section
        const footer = document.getElementById('footer-container');
        if (idx === sections.length - 1) {
          footer.style.display = 'block';
        } else {
          footer.style.display = 'none';
        }
        
        current = idx;
        setTimeout(() => {
          isScrolling = false;
        }, 700);
      }

      // Mouse wheel
      window.addEventListener(
        "wheel",
        (e) => {
          if (isScrolling) return;
          if (e.deltaY > 0 && current < sections.length - 1)
            goToSection(current + 1);
          else if (e.deltaY < 0 && current > 0) goToSection(current - 1);
        },
        { passive: true }
      );

      // Keyboard
      window.addEventListener("keydown", (e) => {
        if (isScrolling) return;
        if (e.key === "ArrowDown" || e.key === "PageDown")
          goToSection(current + 1);
        else if (e.key === "ArrowUp" || e.key === "PageUp")
          goToSection(current - 1);
      });

      // Touch (mobile)
      let touchStartY = 0;
      window.addEventListener(
        "touchstart",
        (e) => {
          touchStartY = e.touches[0].clientY;
        },
        { passive: true }
      );
      window.addEventListener(
        "touchend",
        (e) => {
          const touchEndY = e.changedTouches[0].clientY;
          const diff = touchStartY - touchEndY;
          if (Math.abs(diff) > 50) {
            if (diff > 0 && current < sections.length - 1)
              goToSection(current + 1);
            else if (diff < 0 && current > 0) goToSection(current - 1);
          }
        },
        { passive: true }
      );
      
      // Mobile menu toggle
      const navbarToggle = document.getElementById('navbar-toggle');
      const navbarLinks = document.querySelector('.navbar-links');
      
      if (navbarToggle) {
        navbarToggle.addEventListener('click', () => {
          navbarLinks.classList.toggle('active');
        });
        
        // Close menu when clicking a link
        document.querySelectorAll('.navbar-link').forEach(link => {
          link.addEventListener('click', () => {
            navbarLinks.classList.remove('active');
          });
        });
      }

      // Add navbar scroll effect
      window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
          navbar.classList.add('scrolled');
        } else {
          navbar.classList.remove('scrolled');
        }
      });
    </script>
  </body>

@endsection