@extends('layouts.app')

@section('title', 'Detail ' . $bus->nama_bus . ' - PO. 27 Trans Official')

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

    /* Card Dark Aesthetic */
    .dark-card {
        background: #1a1a1a;
        border: 1px solid rgba(255, 102, 0, 0.25);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
    }

    /* Wrapper Frame Gambar yang Menyesuaikan Ukuran Gambar Secara Presisi */
    .bus-detail-img-wrap {
        position: relative;
        overflow: hidden;
        border-radius: 1rem;
        border: 1px solid rgba(255, 102, 0, 0.3);
        background-color: #0d0d0d;
        line-height: 0; /* Menghilangkan gap bawah gambar */
    }

    .bus-detail-img-wrap img {
        width: 100%;
        height: auto; /* Gambar menyesuaikan proporsi asli */
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .bus-detail-img-wrap:hover img {
        transform: scale(1.03);
    }

    .badge-class {
        background-color: #ff6600;
        color: #ffffff;
        font-weight: 600;
    }

    /* Tombol Navigasi Kembali Aesthetic */
    .btn-back-aesthetic {
        background-color: rgba(255, 255, 255, 0.05);
        color: #e0e0e0;
        border: 1px solid rgba(255, 255, 255, 0.15);
        transition: all 0.3s ease;
    }
    .btn-back-aesthetic:hover {
        background-color: #ff6600;
        color: #ffffff;
        border-color: #ff6600;
        box-shadow: 0 0 15px rgba(255, 102, 0, 0.4);
    }
</style>

<div class="container my-5">

    <!-- BARIS KONTEN UTAMA -->
    <div class="row g-4 align-items-start anim-slide-up">
        
        <!-- 1. KOLOM GAMBAR (MENYESUAIKAN GAMBAR DENGAN PRESISI) -->
        <div class="col-lg-6">
            <div class="dark-card p-3 rounded-4 shadow-sm">
                
                <!-- Frame Gambar Pas Tanpa Blank Space -->
                <div class="bus-detail-img-wrap shadow-sm">
                    <img src="{{ asset('images/' . $bus->image) }}" 
                         alt="{{ $bus->nama_bus }}"
                         onerror="this.src='https://via.placeholder.com/600x400/212529/FF6600?text=PO+27+Trans';">
                    
                    <!-- Overlay Badge Ringkas -->
                    <span class="position-absolute top-0 end-0 m-3 badge bg-black text-orange border border-warning px-3 py-2 rounded-pill small shadow">
                        <i class="bi bi-shield-check me-1"></i> Unit Terverifikasi
                    </span>
                </div>

                <!-- Tombol Navigasi Kembali Ditaruh Rapi di Bawah Foto -->
                <div class="mt-3">
                    <a href="{{ route('buses.index') }}" class="btn btn-back-aesthetic w-100 py-2.5 rounded-3 fw-semibold text-center d-block text-decoration-none">
                        <i class="bi bi-arrow-left me-2"></i> Lihat Pilihan Armada Lainnya
                    </a>
                </div>

            </div>
        </div>

        <!-- 2. KOLOM INFORMASI DETAIL ARMADA -->
        <div class="col-lg-6">
            <div class="dark-card p-4 p-md-5 rounded-4 shadow-sm d-flex flex-column justify-content-between">
                
                <div>
                    <!-- Badge Header & Status -->
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mb-3">
                        <span class="badge badge-class px-3 py-2 fs-6 rounded-pill shadow-sm">
                            <i class="bi bi-stars me-1"></i> {{ $bus->kelas_bus }}
                        </span>
                        <span class="badge bg-black text-orange border border-warning px-3 py-2 rounded-pill small">
                            <i class="bi bi-check-circle-fill text-warning me-1"></i> Ready Service
                        </span>
                    </div>

                    <!-- Nama Unit & Nomor Plat -->
                    <h1 class="fw-bold text-white mb-2 display-6">{{ $bus->nama_bus }}</h1>
                    <p class="text-secondary mb-4">
                        <i class="bi bi-card-heading text-orange me-1"></i> Nomor Polisi / Plat: <span class="fw-semibold text-white">{{ $bus->plat_nomor }}</span>
                    </p>

                    <hr class="border-secondary opacity-25 my-4">

                    <!-- Info Rute Perjalanan & Kapasitas Kursi -->
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <div class="p-3 bg-black rounded-3 border border-secondary">
                                <small class="text-secondary d-block mb-1">
                                    <i class="bi bi-signpost-split text-orange me-1"></i> Rute Perjalanan:
                                </small>
                                <span class="fw-bold text-white fs-6">📍 {{ $bus->kode_rute }}</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-3 bg-black rounded-3 border border-secondary">
                                <small class="text-secondary d-block mb-1">
                                    <i class="bi bi-person-workspace text-orange me-1"></i> Kapasitas Kursi:
                                </small>
                                <span class="fw-bold text-white fs-6">💺 {{ $bus->kapasitas_kursi }} Penumpang</span>
                            </div>
                        </div>
                    </div>

                    <!-- Fasilitas Unit Armada -->
                    <div class="mb-4">
                        <h6 class="fw-bold text-white mb-2">
                            <i class="bi bi-shield-check text-orange me-1"></i> Fasilitas Utama Unit Armada:
                        </h6>
                        <div class="p-3 bg-black rounded-3 border border-secondary text-light small lh-lg">
                            {{ $bus->fasilitas }}
                        </div>
                    </div>
                </div>

                <!-- Bagian Harga & Tombol Pesan -->
                <div>
                    <div class="d-flex align-items-center justify-content-between bg-black text-white p-3.5 rounded-3 border-start border-warning border-4 mb-3">
                        <div>
                            <small class="text-secondary d-block">Harga Tiket Perjalanan:</small>
                            <span class="fs-4 fw-bold text-orange">Rp {{ number_format($bus->harga_tiket, 0, ',', '.') }}</span>
                        </div>
                        <span class="badge bg-dark text-orange px-3 py-2 border border-warning rounded-pill">
                            Tarif Resmi
                        </span>
                    </div>

                    <a href="{{ route('contact') }}" class="btn btn-orange w-100 py-3 fw-bold rounded-3 shadow-sm">
                        <i class="bi bi-headset me-2"></i> Reservasi / Pesan Tiket Unit Ini
                    </a>
                </div>

            </div>
        </div>

    </div>

</div>
@endsection