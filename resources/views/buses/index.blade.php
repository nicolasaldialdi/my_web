@extends('layouts.app')

@section('title', 'Armada Bus - PO. 27 Trans Official')

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
        animation: slideUpIn 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    /* Card Dark Aesthetic & Hover Lift */
    .bus-card {
        background: #1a1a1a;
        border: 1px solid rgba(255, 102, 0, 0.25);
        transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .bus-card:hover {
        transform: translateY(-8px);
        border-color: #ff6600;
        box-shadow: 0 12px 30px rgba(255, 102, 0, 0.25);
    }

    .bus-img-wrapper {
        position: relative;
        overflow: hidden;
        height: 220px;
    }

    .bus-img-wrapper img {
        transition: transform 0.5s ease;
    }

    .bus-card:hover .bus-img-wrapper img {
        transform: scale(1.06);
    }

    /* Header Banner Section */
    .buses-header {
        background: linear-gradient(135deg, #1f1f1f 0%, #0d0d0d 100%);
        border: 1px solid rgba(255, 102, 0, 0.35);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.6);
        position: relative;
        overflow: hidden;
    }
</style>

<div class="container my-5">

    <!-- 1. HEADER SECTION -->
    <div class="buses-header p-4 p-md-5 mb-5 rounded-4 text-white anim-slide-up">
        <div class="position-absolute top-0 start-0 h-100 bg-orange" style="width: 6px;"></div>
        
        <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 position-relative z-1">
            <div>
                <span class="badge bg-orange text-white px-3 py-2 mb-2 fw-semibold rounded-pill shadow-sm">
                    <i class="bi bi-bus-front me-1"></i> Fleet Catalog
                </span>
                <h1 class="display-6 fw-bold text-white mb-1">
                    Daftar Armada Bus <span class="text-orange">PO. 27 Trans</span>
                </h1>
                <p class="text-light opacity-80 small mb-0">
                    Pilih unit armada favorit Anda untuk pengalaman perjalanan AKAP yang aman, nyaman, dan tepat waktu.
                </p>
            </div>
            
            <div>
                <span class="badge bg-dark text-orange px-4 py-2.5 border border-warning fs-6 rounded-pill shadow-sm">
                    <i class="bi bi-grid-fill me-1"></i> Total: {{ $buses->count() }} Unit Ready
                </span>
            </div>
        </div>
    </div>

    <!-- 2. GRID KATALOG ARMADA BUS -->
    <div class="row row-cols-1 row-cols-md-3 g-4 anim-slide-up" style="animation-delay: 0.2s;">
        @forelse ($buses as $bus)
            <div class="col">
                <div class="bus-card h-100 rounded-4 overflow-hidden d-flex flex-column shadow-sm">
                    
                    <!-- Gambar Unit Bus -->
                    <div class="bus-img-wrapper">
                        <img src="{{ asset('images/' . $bus->image) }}" 
                             class="w-100 h-100 object-fit-cover" 
                             alt="{{ $bus->nama_bus }}"
                             onerror="this.src='https://via.placeholder.com/600x400/212529/FF6600?text=PO+27+Trans';">
                        
                        <!-- Badge Kelas di atas Gambar -->
                        <span class="position-absolute top-0 end-0 m-3 badge bg-dark text-orange border border-warning px-3 py-2 rounded-pill small shadow">
                            {{ $bus->kelas_bus }}
                        </span>
                    </div>
                    
                    <!-- Body Kartu -->
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="fw-bold text-white mb-2">{{ $bus->nama_bus }}</h5>
                        
                        <div class="mb-3 text-secondary small">
                            <span class="d-block mb-1">
                                <i class="bi bi-card-heading text-orange me-1"></i> Plat Nomor: <strong class="text-white">{{ $bus->plat_nomor }}</strong>
                            </span>
                            <span class="d-block">
                                <i class="bi bi-signpost-split text-orange me-1"></i> Rute: <strong class="text-white">{{ $bus->kode_rute }}</strong>
                            </span>
                        </div>

                        <!-- Harga Tiket -->
                        <div class="p-2.5 bg-black rounded-3 border border-secondary mb-3 d-flex justify-content-between align-items-center">
                            <small class="text-secondary">Harga Tiket:</small>
                            <span class="text-orange fw-bold fs-6">Rp {{ number_format($bus->harga_tiket, 0, ',', '.') }}</span>
                        </div>

                        <!-- Tombol Lihat Detail Unit -->
                        <div class="mt-auto pt-2">
                            <a href="{{ route('buses.show', $bus->id) }}" class="btn btn-orange w-100 fw-bold shadow-sm py-2.5 rounded-3">
                                <i class="bi bi-eye me-1"></i> Lihat Detail Unit
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="p-5 text-center dark-card rounded-4">
                    <i class="bi bi-exclamation-triangle display-4 text-warning mb-3 d-block"></i>
                    <h5 class="text-white fw-bold">Belum Ada Data Armada</h5>
                    <p class="text-secondary small mb-0">Silakan tambahkan data bus melalui database atau seeder.</p>
                </div>
            </div>
        @endforelse
    </div>

</div>
@endsection