<header class="bg-dark border-bottom border-warning border-3 sticky-top shadow">
    <div class="container d-flex flex-wrap align-items-center justify-content-between py-2">
        
        <!-- Logo Brand -->
        <a href="{{ route('home') }}" class="d-flex align-items-center gap-2 text-decoration-none py-1">
            <span class="bg-orange text-white fw-bold px-2 py-1 rounded shadow-sm fs-4">27</span>
            <span class="text-white fw-bold fs-4 tracking-wide">TRANS</span>
        </a>

        <!-- Menu Navigasi (Selalu Tampil Jelas & Terang) -->
        <nav>
            <ul class="nav nav-pills d-flex align-items-center gap-1 gap-md-2 mb-0">
                <li class="nav-item">
                    <a href="{{ route('home') }}" 
                       class="nav-link px-3 py-2 fw-semibold rounded-3 {{ request()->routeIs('home') ? 'bg-orange text-white' : 'text-white hover-orange' }}">
                        <i class="bi bi-house-door me-1"></i> Beranda
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('about') }}" 
                       class="nav-link px-3 py-2 fw-semibold rounded-3 {{ request()->routeIs('about') ? 'bg-orange text-white' : 'text-white hover-orange' }}">
                        <i class="bi bi-info-circle me-1"></i> Tentang Kami
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('buses.index') }}" 
                       class="nav-link px-3 py-2 fw-semibold rounded-3 {{ request()->routeIs('buses.index') ? 'bg-orange text-white' : 'text-white hover-orange' }}">
                        <i class="bi bi-bus-front me-1"></i> Armada Bus
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact') }}" 
                       class="nav-link px-3 py-2 fw-semibold rounded-3 {{ request()->routeIs('contact') ? 'bg-orange text-white' : 'text-white hover-orange' }}">
                        <i class="bi bi-headset me-1"></i> Kontak Kami
                    </a>
                </li>
            </ul>
        </nav>

    </div>
</header>

<style>
    .hover-orange:hover {
        background-color: rgba(255, 102, 0, 0.2) !important;
        color: #ff6600 !important;
    }
</style>