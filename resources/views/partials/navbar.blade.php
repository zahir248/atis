<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background: url('{{ asset('images/home/pattern-bg.png') }} ') repeat; background-color: #383B97;">
    <div class="container">
        <a class="navbar-brand" href="/atis/public">
            <img src="{{ asset('images/home/logo.png') }}" alt="Logo" height=40>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Push navigation items to the right -->
            <ul class="navbar-nav ms-auto me-4"> 
                <li class="nav-item">
                    <a class="nav-link text-white mx-2 {{ $activePage == 'home' ? 'active fw-bold' : '' }}" href="/atis/public">Home</a>
                </li>
                
                <!-- About Us dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link text-white mx-2 dropdown-toggle {{ $activePage == 'about' || $activePage == 'factsheets' || $activePage == 'organisation-charts' ? 'active fw-bold' : '' }}" href="#" id="aboutDropdown" role="button" aria-expanded="false">
                        About Us
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                        <li><a class="dropdown-item {{ $activePage == 'factsheets' ? 'active' : '' }}" href="/atis/public/factsheets">Factsheets</a></li>
                        <li><a class="dropdown-item {{ $activePage == 'organisation-charts' ? 'active' : '' }}" href="/atis/public/organisation-charts">Organisation Charts</a></li>
                    </ul>
                </li>
                
                <!-- Our Services dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link text-white mx-2 dropdown-toggle {{ $activePage == 'services' || $activePage == 'announcement' || $activePage == 'cctv-feeds' || $activePage == 'emergency-response' || $activePage == 'journey-planner' || $activePage == 'traffic-lights' ? 'active fw-bold' : '' }}" href="#" id="servicesDropdown" role="button" aria-expanded="false">
                        Our Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <li><a class="dropdown-item {{ $activePage == 'announcement' ? 'active' : '' }}" href="/atis/public/announcement">Announcement</a></li>
                        <li><a class="dropdown-item {{ $activePage == 'cctv-feeds' ? 'active' : '' }}" href="/atis/public/cctv-feeds">CCTV Feeds</a></li>
                        <li><a class="dropdown-item {{ $activePage == 'emergency-response' ? 'active' : '' }}" href="/atis/public/emergency-response">Emergency Response</a></li>
                        <li><a class="dropdown-item {{ $activePage == 'journey-planner' ? 'active' : '' }}" href="/atis/public/journey-planner">Journey Planner</a></li>
                        <li><a class="dropdown-item {{ $activePage == 'traffic-lights' ? 'active' : '' }}" href="/atis/public/traffic-lights">Traffic Lights Monitoring</a></li>
                    </ul>
                </li>
                
                <!-- Useful Links dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link text-white mx-2 dropdown-toggle {{ $activePage == 'links' || $activePage == 'public-transportation' ? 'active fw-bold' : '' }}" href="#" id="linksDropdown" role="button" aria-expanded="false">
                        Useful Links
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="linksDropdown">
                    <li>
                    <a class="dropdown-item d-flex justify-content-between align-items-center {{ $activePage == 'public-transportation' ? 'active' : '' }}" href="/atis/public/links/public-transportation">
                        Public Transportation
                        <i class="fas fa-chevron-down ms-2 position-relative" style="top: 2px; font-size: 0.8rem;"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-submenu">
                        <li><a class="dropdown-item" href="https://myrapid.com.my/bus-train/rapid-kl/lrt/" target="_blank">MRT</a></li>
                        <li><a class="dropdown-item" href="https://myrapid.com.my/bus-train/rapid-kl/lrt/" target="_blank">LRT</a></li>
                        <li><a class="dropdown-item" href="https://myrapid.com.my/bus-train/rapid-kl/bus/" target="_blank">BAS</a></li>
                        <li><a class="dropdown-item" href="https://www.ktmb.com.my/" target="_blank">KTM</a></li>
                        <li><a class="dropdown-item" href="https://www.kliaekspres.com/" target="_blank">ERL</a></li>
                    </ul>
                </li>

                    </ul>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link text-white mx-2 {{ $activePage == 'media-room' ? 'active fw-bold' : '' }}" href="/atis/public/media-room">Media Room</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white mx-2 {{ $activePage == 'contact' ? 'active fw-bold' : '' }}" href="/atis/public/contact">Contact Us</a>
                </li>
            </ul>
            
            <!-- Language selection -->
            <div class="navbar-nav">
                <div class="d-flex flex-column align-items-center" style="line-height: 1;">
                    <a href="#" class="nav-link text-white py-0 mb-1 {{ $lang == 'bm' ? 'fw-bold' : '' }}" style="font-size: 14px;">BM</a>
                    <a href="#" class="nav-link text-white py-0 mb-1" style="font-size: 2px;">━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━</a>
                    <a href="#" class="nav-link text-white py-0 {{ $lang == 'en' ? 'fw-bold' : '' }}" style="font-size: 14px;">EN</a>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Make sure Bootstrap JS is included for dropdown functionality -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Custom CSS and JS for hover dropdown -->
<style>
    /* Style the dropdown to match your design */
    .dropdown-menu {
        background-color: #f8f9fa;
        border-radius: 0;
        border: none;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        margin-top: 0;
    }
    
    .dropdown-item {
        padding: 0.5rem 1.5rem;
        color: #383B97;
    }
    
    .dropdown-item:hover, .dropdown-item:focus {
        background-color: #e9ecef;
        color: #383B97;
    }
    
    .dropdown-item.active {
        background-color: #383B97;
        color: white;
    }
    
    /* Support for hover functionality on larger screens */
    @media (min-width: 992px) {
        .navbar .dropdown:hover > .dropdown-menu {
            display: block;
        }
        
        /* For submenu (nested dropdowns) */
        .dropdown-submenu {
            position: absolute;
            left: 100%;
            top: 0;
            display: none;
        }
        
        .dropdown-menu > li:hover > .dropdown-submenu {
            display: block;
        }
    }
    
    /* Ensure submenu is positioned properly on mobile */
    @media (max-width: 991.98px) {
        .dropdown-submenu {
            margin-left: 1rem;
        }
    }
</style>

<script>
    // Add extra support for hover functionality
    document.addEventListener("DOMContentLoaded", function() {
        // For desktop
        const dropdownItems = document.querySelectorAll('.navbar .dropdown');
        
        dropdownItems.forEach(function(item) {
            item.addEventListener('mouseenter', function() {
                if (window.innerWidth >= 992) {
                    const dropdownMenu = this.querySelector('.dropdown-menu');
                    if (dropdownMenu) {
                        dropdownMenu.classList.add('show');
                    }
                }
            });
            
            item.addEventListener('mouseleave', function() {
                if (window.innerWidth >= 992) {
                    const dropdownMenu = this.querySelector('.dropdown-menu');
                    if (dropdownMenu) {
                        dropdownMenu.classList.remove('show');
                    }
                }
            });
        });
        
        // Keep click functionality for mobile
        const dropdownToggleItems = document.querySelectorAll('.dropdown-toggle');
        
        dropdownToggleItems.forEach(function(item) {
            item.addEventListener('click', function(e) {
                if (window.innerWidth < 992) {
                    e.preventDefault();
                    e.stopPropagation();
                    
                    const parent = this.parentElement;
                    const dropdownMenu = parent.querySelector('.dropdown-menu');
                    
                    if (dropdownMenu) {
                        dropdownMenu.classList.toggle('show');
                    }
                }
            });
        });
        
        // For submenu items on mobile
        const dropdownItems2 = document.querySelectorAll('.dropdown-menu > li > a');
        
        dropdownItems2.forEach(function(item) {
            item.addEventListener('click', function(e) {
                if (window.innerWidth < 992) {
                    const nextEl = this.nextElementSibling;
                    if (nextEl && nextEl.classList.contains('dropdown-submenu')) {
                        e.preventDefault();
                        e.stopPropagation();
                        
                        if (nextEl.style.display == 'block') {
                            nextEl.style.display = 'none';
                        } else {
                            nextEl.style.display = 'block';
                        }
                    }
                }
            });
        });
    });
</script>