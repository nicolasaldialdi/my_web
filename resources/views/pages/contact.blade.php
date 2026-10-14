@extends('layouts.app')

@section('title', 'Kontak Kami - PO. 27 Trans Official')

@section('content')
<style>
    /* Keyframe Animasi Masuk Smooth */
    @keyframes slideUpIn {
        0% {
            opacity: 0;
            transform: translateY(30px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .anim-slide-up {
        animation: slideUpIn 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    .delay-1 { animation-delay: 0.15s; }
    .delay-2 { animation-delay: 0.3s; }

    /* Card Dark Aesthetic */
    .dark-card {
        background: #1a1a1a;
        border: 1px solid rgba(255, 102, 0, 0.25);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
    }

    /* Header Banner */
    .contact-header {
        background: linear-gradient(135deg, #1f1f1f 0%, #0d0d0d 100%);
        border: 1px solid rgba(255, 102, 0, 0.35);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.6);
        position: relative;
        overflow: hidden;
    }

    /* Quick Contact Card Dummy */
    .quick-contact-card {
        background: #141414;
        border: 1px solid rgba(255, 102, 0, 0.2);
        transition: all 0.3s ease;
    }

    .quick-contact-card:hover {
        transform: translateY(-5px);
        border-color: #ff6600;
        box-shadow: 0 10px 25px rgba(255, 102, 0, 0.2);
    }
</style>

<div class="container my-5">

    <!-- 1. HEADER BANNER SECTION -->
    <div class="contact-header p-4 p-md-5 mb-5 rounded-4 text-white text-center anim-slide-up">
        <div class="position-absolute top-0 start-0 h-100 bg-orange" style="width: 6px;"></div>
        
        <span class="badge bg-orange text-white px-3 py-2 mb-2 fw-semibold rounded-pill shadow-sm">
            <i class="bi bi-headset me-1"></i> Customer Care 24/7
        </span>
        <h1 class="display-6 fw-bold text-white mb-2">
            Pusat Layanan & <span class="text-orange">Kontak Kami</span>
        </h1>
        <p class="text-light opacity-80 small mb-0 max-w-600 mx-auto">
            Hubungi tim resmi PO. 27 Trans untuk informasi reservasi tiket, jadwal keberangkatan, atau konsultasi sewa bus pariwisata.
        </p>
    </div>

    <!-- 2. GRID FORM PESAN & INFORMASI KANTOR PUSAT -->
    <div class="row g-4 mb-5 anim-slide-up delay-1">
        
        <!-- KOLOM 1: FORM KIRIM PESAN -->
        <div class="col-lg-7">
            <div class="dark-card p-4 p-md-5 rounded-4 h-100">
                <div class="d-flex align-items-center gap-2 mb-4">
                    <div class="p-2.5 bg-black rounded-3 border border-warning text-orange">
                        <i class="bi bi-envelope-paper-fill fs-4"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold text-white mb-0">Kirim Pesan Langsung</h4>
                        <small class="text-secondary">Tinggalkan pesan Anda, tim kami akan merespons secepatnya.</small>
                    </div>
                </div>

                <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Terima kasih! Pesan praktik/simulasi Anda telah terkirim.');">
                    <div class="mb-3">
                        <label class="form-label text-light small fw-semibold">Nama Lengkap</label>
                        <input type="text" class="form-control bg-dark text-white border-secondary" placeholder="Masukkan nama Anda..." required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-light small fw-semibold">Nomor Telepon / Email</label>
                        <input type="text" class="form-control bg-dark text-white border-secondary" placeholder="Contoh: 0812-3456-7890 atau email@domain.com" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label text-light small fw-semibold">Pesan / Pertanyaan Anda</label>
                        <textarea class="form-control bg-dark text-white border-secondary" rows="4" placeholder="Tuliskan pertanyaan seputar pemesanan tiket, rute, atau fasilitas bus..." required></textarea>
                    </div>

                    <button type="submit" class="btn btn-orange w-100 py-3 fw-bold rounded-3 shadow-sm">
                        <i class="bi bi-send-fill me-2"></i> Kirim Pesan Sekarang
                    </button>
                </form>
            </div>
        </div>

        <!-- KOLOM 2: INFORMASI KANTOR PUSAT & DUMMY CONTACT -->
        <div class="col-lg-5">
            <div class="dark-card p-4 p-md-5 rounded-4 h-100 border-start border-warning border-5 d-flex flex-column justify-content-between">
                <div>
                    <h4 class="fw-bold text-white mb-4 d-flex align-items-center gap-2">
                        <i class="bi bi-geo-alt-fill text-orange"></i> Kantor Pusat PO 27 Trans
                    </h4>

                    <div class="d-flex gap-3 mb-4">
                        <div class="text-orange fs-5"><i class="bi bi-map-fill"></i></div>
                        <div>
                            <h6 class="fw-bold text-white mb-1">Alamat Garasi Utama:</h6>
                            <p class="text-secondary small mb-0 lh-base">
                                Jl. Raya Malang - Surabaya No. 27, Singosari, Kabupaten Malang, Jawa Timur 65153
                            </p>
                        </div>
                    </div>

                    <div class="d-flex gap-3 mb-4">
                        <div class="text-orange fs-5"><i class="bi bi-telephone-inbound-fill"></i></div>
                        <div>
                            <h6 class="fw-bold text-white mb-1">Telepon / Call Center:</h6>
                            <p class="text-secondary small mb-0">
                                (021) 123456 <br>
                                <span class="text-orange fw-bold">0812-3456-7890</span>
                            </p>
                        </div>
                    </div>

                    <div class="d-flex gap-3 mb-4">
                        <div class="text-orange fs-5"><i class="bi bi-envelope-at-fill"></i></div>
                        <div>
                            <h6 class="fw-bold text-white mb-1">Email Resmi Perusahaan:</h6>
                            <p class="text-secondary small mb-0">support@27trans.co.id</p>
                        </div>
                    </div>

                    <div class="d-flex gap-3 mb-2">
                        <div class="text-orange fs-5"><i class="bi bi-clock-history"></i></div>
                        <div>
                            <h6 class="fw-bold text-white mb-1">Jam Operasional Loket:</h6>
                            <p class="text-secondary small mb-0">Setiap Hari: <strong class="text-white">07.00 - 21.00 WIB</strong></p>
                        </div>
                    </div>
                </div>

                <!-- Status CS Badge -->
                <div class="p-3 bg-black rounded-3 border border-secondary mt-4 text-center">
                    <span class="badge bg-success me-1">● Online</span>
                    <small class="text-light">Layanan Customer Service Praktikum</small>
                </div>
            </div>
        </div>

    </div>

    <!-- 3. CARDS AKSES CEPAT DUMMY -->
    <div class="row g-3 anim-slide-up delay-2">
        <div class="col-md-4">
            <div class="quick-contact-card p-4 rounded-4 text-center">
                <div class="fs-1 text-success mb-2"><i class="bi bi-whatsapp"></i></div>
                <h6 class="fw-bold text-white mb-1">WhatsApp Center</h6>
                <small class="text-secondary">0812-3456-7890 (Dummy)</small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="quick-contact-card p-4 rounded-4 text-center">
                <div class="fs-1 text-orange mb-2"><i class="bi bi-telephone-outbound-fill"></i></div>
                <h6 class="fw-bold text-white mb-1">Call Center Malang</h6>
                <small class="text-secondary">(021) 123456 (Dummy)</small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="quick-contact-card p-4 rounded-4 text-center">
                <div class="fs-1 text-warning mb-2"><i class="bi bi-compass-fill"></i></div>
                <h6 class="fw-bold text-white mb-1">Lokasi Garasi</h6>
                <small class="text-secondary">Singosari, Malang, Jawa Timur</small>
            </div>
        </div>
    </div>

</div>
@endsection