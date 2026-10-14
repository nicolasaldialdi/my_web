@extends('layouts.app')

@section('title', 'Tentang Kami - PO. 27 Trans Official')

@section('content')
<style>
    /* Keyframe Animasi Masuk Smooth */
    @keyframes slideUpIn {
        0% {
            opacity: 0;
            transform: translateY(35px);
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

    /* Card Dark & Hover Effect */
    .dark-card {
        background: #1a1a1a;
        border: 1px solid rgba(255, 102, 0, 0.25);
        transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .dark-card:hover {
        transform: translateY(-6px);
        border-color: #ff6600;
        box-shadow: 0 12px 28px rgba(255, 102, 0, 0.2);
    }

    /* Hero Banner Header */
    .about-hero {
        background: linear-gradient(135deg, #1f1f1f 0%, #0d0d0d 100%);
        border: 1px solid rgba(255, 102, 0, 0.35);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.6);
        position: relative;
        overflow: hidden;
    }

    .about-hero::after {
        content: '';
        position: absolute;
        top: 0; right: 0;
        width: 250px; height: 100%;
        background: radial-gradient(circle, rgba(255,102,0,0.12) 0%, transparent 70%);
        pointer-events: none;
    }
</style>

<div class="container my-5">

    <!-- 1. HERO HEADER PROFIL PERUSAHAAN -->
    <div class="about-hero p-4 p-md-5 mb-5 rounded-4 text-white anim-slide-up">
        <div class="position-absolute top-0 start-0 h-100 bg-orange" style="width: 6px;"></div>
        
        <div class="row align-items-center position-relative z-1">
            <div class="col-lg-8 ps-lg-3">
                <span class="badge bg-orange text-white px-3 py-2 mb-3 fw-semibold rounded-pill shadow-sm">
                    <i class="bi bi-building me-1"></i> Profil Perusahaan Otobus
                </span>
                <h1 class="display-5 fw-bold text-white mb-3">
                    Mengenal Lebih Dekat <span class="text-orange">PO. 27 Trans</span>
                </h1>
                <p class="text-light opacity-80 fs-6 lh-lg mb-0">
                    PO 27 Trans adalah perusahaan penyedia layanan transportasi darat Antar Kota Antar Provinsi (AKAP) terdepan yang berpusat di Malang, Jawa Timur. Kami hadir untuk menjawab kebutuhan masyarakat akan moda transportasi bus kelas atas yang mengutamakan kemewahan, kenyamanan maksimal, dan ketepatan waktu di setiap perjalanan.
                </p>
            </div>
            <div class="col-lg-4 text-center mt-4 mt-lg-0 d-none d-lg-block">
                <div class="p-4 rounded-4 dark-card border-warning text-center">
                    <span class="display-1 text-orange d-block mb-2">🚌</span>
                    <h6 class="fw-bold text-white mb-1">PT 27 Trans Indonesia</h6>
                    <small class="text-secondary">Malang, Jawa Timur</small>
                </div>
            </div>
        </div>
    </div>

    <!-- 2. NARRATIVE DETAIL & IDENTITAS BRAND -->
    <div class="dark-card p-4 p-md-5 rounded-4 mb-5 anim-slide-up delay-1">
        <div class="row g-4 align-items-center">
            <div class="col-lg-7">
                <h3 class="fw-bold text-white mb-3">
                    <i class="bi bi-award text-orange me-2"></i>Komitmen Kemewahan & Inovasi Fleet
                </h3>
                <p class="text-secondary lh-lg mb-3">
                    Dengan mengusung warna identitas khas <strong class="text-orange">Hitam dan Oranye</strong>, PO 27 Trans secara konsisten melakukan peremajaan dan inovasi armada secara berkelanjutan. Kami menghadirkan unit-unit bus terbaru berstandar internasional dari karoseri ternama di Indonesia.
                </p>
                <p class="text-secondary lh-lg mb-0">
                    Layanan kami mencakup berbagai ragam varian kelas eksklusif, mulai dari <em>Executive Class</em>, <em>UHD Unicoach Sleeper Family</em>, hingga armada strata tertinggi yaitu <strong class="text-white">President Sleeper Double Decker</strong> yang dirancang khusus untuk memanjakan perjalanan jarak jauh Anda.
                </p>
            </div>
            <div class="col-lg-5">
                <div class="p-4 bg-black rounded-4 border border-secondary">
                    <h5 class="fw-bold text-orange mb-3"><i class="bi bi-check-circle-fill me-2"></i>Spesifikasi Layanan Kami:</h5>
                    <ul class="list-unstyled text-secondary small lh-lg mb-0">
                        <li class="mb-2"><i class="bi bi-patch-check text-warning me-2"></i>Sasis Bus Premium (Volvo, Mercedes-Benz, Scania)</li>
                        <li class="mb-2"><i class="bi bi-patch-check text-warning me-2"></i>Sistem Suspensi Udara (Air Suspension) Halus</li>
                        <li class="mb-2"><i class="bi bi-patch-check text-warning me-2"></i>Kabin Ergonomis dengan AC Clean Filter & HEPA</li>
                        <li class="mb-2"><i class="bi bi-patch-check text-warning me-2"></i>Layanan Audio Video On Demand (AVOD) Pribadi</li>
                        <li><i class="bi bi-patch-check text-warning me-2"></i>Kru & Pengemudi Bersertifikasi Resmi & Berpengalaman</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- 3. VISI & MISI PERUSAHAAN -->
    <div class="row g-4 mb-5 anim-slide-up delay-2">
        <!-- Visi -->
        <div class="col-md-5">
            <div class="dark-card p-4 p-md-5 rounded-4 h-100 border-start border-warning border-5">
                <div class="fs-1 text-orange mb-3"><i class="bi bi-eye-fill"></i></div>
                <h4 class="fw-bold text-white mb-3">Visi Perusahaan</h4>
                <p class="text-secondary lh-lg mb-0">
                    Menjadi pelopor perusahaan otobus terdepan dan terpercaya di Indonesia yang mengutamakan standar keselamatan tertinggi, kenyamanan kelas wahid, serta kepuasan pelanggan secara berkelanjutan disetiap rute lintasan.
                </p>
            </div>
        </div>

        <!-- Misi -->
        <div class="col-md-7">
            <div class="dark-card p-4 p-md-5 rounded-4 h-100">
                <div class="fs-1 text-orange mb-3"><i class="bi bi-rocket-takeoff-fill"></i></div>
                <h4 class="fw-bold text-white mb-3">Misi Operasional</h4>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <div class="p-3 bg-black rounded-3 border border-secondary h-100">
                            <h6 class="fw-bold text-orange mb-1">1. Keselamatan Utama</h6>
                            <small class="text-secondary">Menerapkan SOP keselamatan ketat dan pemeliharaan rutin armada secara berkala.</small>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 bg-black rounded-3 border border-secondary h-100">
                            <h6 class="fw-bold text-orange mb-1">2. Layanan VIP</h6>
                            <small class="text-secondary">Menyediakan fasilitas kabin mewah serta layanan kru yang ramah dan profesional.</small>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 bg-black rounded-3 border border-secondary h-100">
                            <h6 class="fw-bold text-orange mb-1">3. Ketepatan Waktu</h6>
                            <small class="text-secondary">Menjaga keandalan jadwal keberangkatan dan estimasi waktu sampai di tujuan.</small>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 bg-black rounded-3 border border-secondary h-100">
                            <h6 class="fw-bold text-orange mb-1">4. Inovasi Tanpa Henti</h6>
                            <small class="text-secondary">Terus menghadirkan teknologi karoseri modern dan kemudahan reservasi tiket.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 4. PILAR NILAI UTAMA (CORE VALUES) -->
    <div class="mb-5 anim-slide-up delay-3">
        <div class="text-center mb-4">
            <span class="badge bg-dark text-orange px-3 py-2 border border-warning rounded-pill mb-2">Prinsip Kerja</span>
            <h2 class="fw-bold text-white">Nilai Utama <span class="text-orange">PO. 27 Trans</span></h2>
            <p class="text-secondary small">Empat pilar utama yang melandasi setiap pelayanan kami kepada penumpang.</p>
        </div>

        <div class="row g-4 text-center">
            <div class="col-6 col-lg-3">
                <div class="dark-card p-4 rounded-4 h-100 border-top border-warning border-3">
                    <div class="fs-2 text-orange mb-2"><i class="bi bi-shield-lock-fill"></i></div>
                    <h6 class="fw-bold text-white mb-1">Safety First</h6>
                    <small class="text-secondary">Jaminan standar aman disetiap perjalanan.</small>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="dark-card p-4 rounded-4 h-100 border-top border-warning border-3">
                    <div class="fs-2 text-orange mb-2"><i class="bi bi-stars"></i></div>
                    <h6 class="fw-bold text-white mb-1">Premium Comfort</h6>
                    <small class="text-secondary">Kursi ergonomis & kabin super senyap.</small>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="dark-card p-4 rounded-4 h-100 border-top border-warning border-3">
                    <div class="fs-2 text-orange mb-2"><i class="bi bi-clock-history"></i></div>
                    <h6 class="fw-bold text-white mb-1">Punctuality</h6>
                    <small class="text-secondary">Jadwal pemberangkatan yang teratur.</small>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="dark-card p-4 rounded-4 h-100 border-top border-warning border-3">
                    <div class="fs-2 text-orange mb-2"><i class="bi bi-heart-fill"></i></div>
                    <h6 class="fw-bold text-white mb-1">Humble Hospitality</h6>
                    <small class="text-secondary">Pelayanan santun dan sepenuh hati.</small>
                </div>
            </div>
        </div>
    </div>

    <!-- 5. BANNER CTA HUBUNGI KAMI -->
    <div class="about-hero p-4 p-md-5 rounded-4 d-flex flex-wrap align-items-center justify-content-between gap-3 anim-slide-up delay-3 border-start border-warning border-5">
        <div>
            <h4 class="fw-bold text-white mb-1">Ingin Mengenal Lebih Dalam Layanan Kami?</h4>
            <p class="text-secondary small mb-0">Tim customer service kami siap membantu Anda 24/7 untuk informasi rute dan pemesanan.</p>
        </div>
        <a href="{{ route('contact') }}" class="btn btn-orange px-4 py-2.5 rounded-3 fw-bold">
            <i class="bi bi-headset me-2"></i> Hubungi Customer Service
        </a>
    </div>

</div>
@endsection