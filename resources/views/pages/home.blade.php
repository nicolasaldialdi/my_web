@extends('layouts.app')

@section('title', 'Beranda - PO. 27 Trans Official')

@section('content')
<style>
    /* Keyframe Animasi Masuk Smooth */
    @keyframes slideUpIn {
        0% {
            opacity: 0;
            transform: translateY(40px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .anim-slide-up {
        animation: slideUpIn 0.9s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    .delay-1 { animation-delay: 0.15s; }
    .delay-2 { animation-delay: 0.3s; }
    .delay-3 { animation-delay: 0.45s; }
    .delay-4 { animation-delay: 0.6s; }

    /* Card Dark Aesthetic */
    .dark-card {
        background: #1a1a1a;
        border: 1px solid rgba(255, 102, 0, 0.25);
        transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .dark-card:hover {
        transform: translateY(-8px);
        border-color: #ff6600;
        box-shadow: 0 12px 28px rgba(255, 102, 0, 0.2);
    }

    /* Hero Banner Gradient */
    .hero-banner {
        background: linear-gradient(135deg, #1f1f1f 0%, #0f0f0f 100%);
        border: 1px solid rgba(255, 102, 0, 0.35);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.6);
        position: relative;
        overflow: hidden;
    }
</style>

<div class="container my-5">

    <!-- 1. HERO BANNER UTAMA (ANIMATED) -->
    <div class="hero-banner p-4 p-md-5 mb-5 rounded-4 text-white anim-slide-up">
        <div class="position-absolute top-0 start-0 h-100 bg-orange" style="width: 6px;"></div>
        
        <div class="row align-items-center position-relative z-1">
            <div class="col-lg-9 ps-lg-3">
                <span class="badge bg-orange text-white px-3 py-2 mb-3 fw-semibold rounded-pill shadow-sm">
                    <i class="bi bi-shield-check me-1"></i> Official Company Profile PO. 27 Trans
                </span>
                <h1 class="display-5 fw-bold text-white mb-3 lh-sm">
                    Perjalanan Nyaman & Berkelas Bersama <span class="text-orange">PO. 27 Trans</span>
                </h1>
                <p class="text-light opacity-80 mb-4 fs-6 lh-base" style="max-width: 700px;">
                    Solusi transportasi Antar Kota Antar Provinsi (AKAP) terdepan dengan armada super mewah mulai dari Executive Class hingga President Sleeper Double Decker untuk pengalaman perjalanan terbaik Anda.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="{{ route('buses.index') }}" class="btn btn-orange px-4 py-2.5 rounded-3 fw-bold">
                        <i class="bi bi-bus-front me-2"></i> Lihat Daftar Armada
                    </a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-light px-4 py-2.5 rounded-3 fw-semibold">
                        <i class="bi bi-headset me-2"></i> Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- 2. COUNTER STATISTIK PERUSAHAAN -->
    <div class="row g-4 mb-5 text-center">
        <div class="col-6 col-md-3 anim-slide-up delay-1">
            <div class="dark-card p-4 rounded-4 shadow-sm h-100 border-top border-warning border-3">
                <h2 class="fw-bold text-orange display-5 mb-1">15+</h2>
                <p class="text-secondary small fw-bold mb-0 text-uppercase tracking-wider">Armada Premium</p>
            </div>
        </div>
        <div class="col-6 col-md-3 anim-slide-up delay-2">
            <div class="dark-card p-4 rounded-4 shadow-sm h-100 border-top border-warning border-3">
                <h2 class="fw-bold text-orange display-5 mb-1">10+</h2>
                <p class="text-secondary small fw-bold mb-0 text-uppercase tracking-wider">Rute AKAP Utama</p>
            </div>
        </div>
        <div class="col-6 col-md-3 anim-slide-up delay-3">
            <div class="dark-card p-4 rounded-4 shadow-sm h-100 border-top border-warning border-3">
                <h2 class="fw-bold text-orange display-5 mb-1">24/7</h2>
                <p class="text-secondary small fw-bold mb-0 text-uppercase tracking-wider">Customer Service</p>
            </div>
        </div>
        <div class="col-6 col-md-3 anim-slide-up delay-4">
            <div class="dark-card p-4 rounded-4 shadow-sm h-100 border-top border-warning border-3">
                <h2 class="fw-bold text-orange display-5 mb-1">100%</h2>
                <p class="text-secondary small fw-bold mb-0 text-uppercase tracking-wider">Prioritas Aman</p>
            </div>
        </div>
    </div>

    <!-- 3. LAYANAN UNGGULAN -->
    <div class="mb-5 anim-slide-up delay-2">
        <div class="text-center mb-4">
            <span class="badge bg-dark text-orange px-3 py-2 border border-warning rounded-pill mb-2">Fasilitas Utama</span>
            <h2 class="fw-bold text-white">Standar Kenyamanan <span class="text-orange">Kelas Atas</span></h2>
            <p class="text-secondary small">Kemewahan dan keamanan adalah komitmen utama PO 27 Trans di setiap rute perjalanan.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="dark-card p-4 rounded-4 h-100 text-center">
                    <div class="fs-1 text-orange mb-3"><i class="bi bi-moon-stars-fill"></i></div>
                    <h5 class="fw-bold text-white mb-2">President Sleeper & Suite</h5>
                    <p class="text-secondary small mb-0">Kabin pribadi eksklusif dengan AVOD layar sentuh, kursi recline elektrik, dan privasi penuh selama perjalanan malam.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dark-card p-4 rounded-4 h-100 text-center">
                    <div class="fs-1 text-orange mb-3"><i class="bi bi-geo-alt-fill"></i></div>
                    <h5 class="fw-bold text-white mb-2">Jaringan Rute Luas</h5>
                    <p class="text-secondary small mb-0">Menghubungkan kota-kota besar Jawa-Bali: Malang, Surabaya, Jakarta, Bandung, Tangerang, hingga Denpasar.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dark-card p-4 rounded-4 h-100 text-center">
                    <div class="fs-1 text-orange mb-3"><i class="bi bi-cup-hot-fill"></i></div>
                    <h5 class="fw-bold text-white mb-2">Fasilitas Service Complete</h5>
                    <p class="text-secondary small mb-0">Free snack box, servis makan di RM pilihan, bantal, selimut higienis, minibar, serta kru profesional berpengalaman.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- 4. RUTE POPULER -->
    <div class="mb-5 p-4 p-md-5 dark-card rounded-4 anim-slide-up delay-3">
        <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
            <div>
                <h3 class="fw-bold text-white mb-1"><i class="bi bi-signpost-split text-orange me-2"></i>Rute Favorit Penumpang</h3>
                <p class="text-secondary small mb-0">Rute populer dengan jadwal keberangkatan setiap hari.</p>
            </div>
            <a href="{{ route('buses.index') }}" class="btn btn-outline-warning btn-sm fw-semibold rounded-pill px-3">
                Lihat Semua Rute <i class="bi bi-arrow-right ms-1"></i>
            </a>
        </div>

        <div class="row g-3">
            <div class="col-md-6 col-lg-3">
                <div class="p-3 bg-black rounded-3 border border-secondary">
                    <span class="badge bg-orange text-white mb-2">Jawa - Bali</span>
                    <h6 class="fw-bold mb-1 text-white">Malang ⇄ Denpasar</h6>
                    <small class="text-secondary">Executive & Sleeper Class</small>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="p-3 bg-black rounded-3 border border-secondary">
                    <span class="badge bg-orange text-white mb-2">Jawa Timur - DKI</span>
                    <h6 class="fw-bold mb-1 text-white">Surabaya ⇄ Jakarta</h6>
                    <small class="text-secondary">Double Decker Sleeper</small>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="p-3 bg-black rounded-3 border border-secondary">
                    <span class="badge bg-orange text-white mb-2">Jawa Timur - Jabar</span>
                    <h6 class="fw-bold mb-1 text-white">Malang ⇄ Bandung</h6>
                    <small class="text-secondary">Executive Suite Class</small>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="p-3 bg-black rounded-3 border border-secondary">
                    <span class="badge bg-orange text-white mb-2">Jawa Timur - Banten</span>
                    <h6 class="fw-bold mb-1 text-white">Surabaya ⇄ Tangerang</h6>
                    <small class="text-secondary">President Class</small>
                </div>
            </div>
        </div>
    </div>

    <!-- 5. CALL TO ACTION (CTA) BANNER -->
    <div class="hero-banner p-4 p-md-5 rounded-4 d-flex flex-wrap align-items-center justify-content-between gap-3 anim-slide-up delay-4 border-start border-warning border-5">
        <div>
            <h4 class="fw-bold text-white mb-1">Siap Merencanakan Perjalanan Anda?</h4>
            <p class="text-secondary small mb-0">Cek ketersediaan armada bus favorit Anda dan rasakan perjalanan kelas wahid bersama PO 27 Trans.</p>
        </div>
        <a href="{{ route('buses.index') }}" class="btn btn-orange px-4 py-2.5 rounded-3 fw-bold">
            <i class="bi bi-ticket-perforated me-1"></i> Pilih Armada Sekarang
        </a>
    </div>

</div>
@endsection