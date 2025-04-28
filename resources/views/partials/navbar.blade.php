<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background: url('{{ asset('images/pattern-bg.png') }} ') repeat; background-color: #383B97;">
    <div class="container">
        <a class="navbar-brand" href="/atis/public">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" height=40>
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
                <li class="nav-item">
                    <a class="nav-link text-white mx-2 {{ $activePage == 'about' ? 'active fw-bold' : '' }}" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white mx-2 {{ $activePage == 'services' ? 'active fw-bold' : '' }}" href="#">Our Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white mx-2 {{ $activePage == 'links' ? 'active fw-bold' : '' }}" href="#">Useful Links</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white mx-2 {{ $activePage == 'media' ? 'active fw-bold' : '' }}" href="#">Media Room</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white mx-2 {{ $activePage == 'contact' ? 'active fw-bold' : '' }}" href="#">Contact Us</a>
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