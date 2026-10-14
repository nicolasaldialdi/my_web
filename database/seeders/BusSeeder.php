<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bus;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $buses = [
            [
                'nama_bus'        => '27 Trans Zeus (Executive Class)',
                'plat_nomor'      => 'N 7270 UA',
                'kelas_bus'       => 'Executive Class',
                'kode_rute'       => 'BE1 / BE2 (Malang – Padalarang, Bandung)',
                'kapasitas_kursi' => 32,
                'fasilitas'       => 'AC, Reclining Seat, Leg Rest, USB Charger, Toilet, Snack & Service Makan',
                'harga_tiket'     => 375000,
                'image'           => 'bus1.jpg',
            ],
            [
                'nama_bus'        => '27 Trans Ares (Executive Class)',
                'plat_nomor'      => 'N 7271 UA',
                'kelas_bus'       => 'Executive Class',
                'kode_rute'       => 'DPSE1 – DPSE3 (Malang – Denpasar, Bali)',
                'kapasitas_kursi' => 28,
                'fasilitas'       => 'Leg Rest, Reclining Seat, Dispenser, USB Charger, Toilet, Penyeberangan Ferry',
                'harga_tiket'     => 390000,
                'image'           => 'bus2.jpg',
            ],
            [
                'nama_bus'        => '27 Trans Apollo (Evening Class)',
                'plat_nomor'      => 'N 7272 UA',
                'kelas_bus'       => 'Executive Class',
                'kode_rute'       => 'A3 (Malang – Kalideres, Jakarta Barat)',
                'kapasitas_kursi' => 32,
                'fasilitas'       => 'AC, Central TV, USB Charger, Toilet, Bantal & Selimut, Snack Box',
                'harga_tiket'     => 410000,
                'image'           => 'bus3.jpg',
            ],
            [
                'nama_bus'        => '27 Trans Hermes (Executive Night Class)',
                'plat_nomor'      => 'N 7273 UA',
                'kelas_bus'       => 'Executive Class',
                'kode_rute'       => 'E5 (Malang – Cawang, Jakarta Timur)',
                'kapasitas_kursi' => 28,
                'fasilitas'       => 'Reclining Seat, Leg Rest, Free Wifi, USB Port, Toilet, Makan Malam',
                'harga_tiket'     => 425000,
                'image'           => 'bus4.jpg',
            ],
            [
                'nama_bus'        => '27 Trans Loki (Executive Class)',
                'plat_nomor'      => 'N 7274 UA',
                'kelas_bus'       => 'Executive Class',
                'kode_rute'       => 'JTG01 – JTG04 (Sragen – Poris Plawad, Tangerang)',
                'kapasitas_kursi' => 32,
                'fasilitas'       => 'Reclining Seat, AC, USB Port, Toilet Bersih, Audio System',
                'harga_tiket'     => 445000,
                'image'           => 'bus5.jpg',
            ],
            [
                'nama_bus'        => '27 Trans Kratos (Grand Captain)',
                'plat_nomor'      => 'N 7275 UA',
                'kelas_bus'       => 'President Class',
                'kode_rute'       => 'JTG01 – JTG04 (Sragen – Pasar Kemis, Tangerang)',
                'kapasitas_kursi' => 23,
                'fasilitas'       => 'Captain Seat Mewah, Leg Rest Elektrik, AVOD Pribadi, Toilet, Coffee Maker',
                'harga_tiket'     => 460000,
                'image'           => 'bus6.jpg',
            ],
            [
                'nama_bus'        => '27 Trans Poseidon (Executive Double Decker)',
                'plat_nomor'      => 'N 7276 UA',
                'kelas_bus'       => 'Executive Class',
                'kode_rute'       => 'E2 / E4 (Malang – Poris Plawad, Tangerang)',
                'kapasitas_kursi' => 28,
                'fasilitas'       => 'Deck Atas/Bawah, Reclining Seat, USB Charger, Toilet Mewah, Snack & Meals',
                'harga_tiket'     => 480000,
                'image'           => 'bus7.jpg',
            ],
            [
                'nama_bus'        => '27 Trans Hera (UHD Unicoach Sleeper Family)',
                'plat_nomor'      => 'N 7277 UA',
                'kelas_bus'       => 'Sleeper Family',
                'kode_rute'       => 'A2 (Malang – Baranangsiang, Bogor)',
                'kapasitas_kursi' => 42,
                'fasilitas'       => 'Kabin Sleeper Keluarga, Personal Screen, Bantal Khusus, USB Charger, Toilet',
                'harga_tiket'     => 500000,
                'image'           => 'bus8.jpg',
            ],
            [
                'nama_bus'        => '27 Trans Thor (President Class)',
                'plat_nomor'      => 'N 7278 UA',
                'kelas_bus'       => 'President Class',
                'kode_rute'       => 'A1 (Malang – Poris Plawad, Tangerang)',
                'kapasitas_kursi' => 19,
                'fasilitas'       => 'Super Wide Captain Seat, Leg Rest, AVOD, Wifi, Snack Box, Makan Berat, Toilet',
                'harga_tiket'     => 520000,
                'image'           => 'bus9.jpg',
            ],
            [
                'nama_bus'        => '27 Trans Heimdall (President Class)',
                'plat_nomor'      => 'N 7279 UA',
                'kelas_bus'       => 'President Class',
                'kode_rute'       => 'A3 (Malang – Daan Mogot, Jakarta Barat)',
                'kapasitas_kursi' => 19,
                'fasilitas'       => 'Captain Seat Nyaman, AVOD Touchscreen, Free Wifi, Snack, Service Makan, Toilet',
                'harga_tiket'     => 530000,
                'image'           => 'bus10.jpg',
            ],
            [
                'nama_bus'        => '27 Trans Odin (President Sleeper Double Decker)',
                'plat_nomor'      => 'N 7280 UA',
                'kelas_bus'       => 'President Sleeper',
                'kode_rute'       => 'A1 (Malang – Poris Plawad, Tangerang)',
                'kapasitas_kursi' => 28,
                'fasilitas'       => 'Private Sleeper Cabin Atas/Bawah, Full AVOD, Selimut Premium, Toilet Eksklusif',
                'harga_tiket'     => 545000,
                'image'           => 'bus11.jpg',
            ],
            [
                'nama_bus'        => '27 Trans Ra (UHD Unicoach Sleeper Family)',
                'plat_nomor'      => 'N 7281 UA',
                'kelas_bus'       => 'Sleeper Family',
                'kode_rute'       => 'A2 (Malang – Cawang, Jakarta Timur)',
                'kapasitas_kursi' => 42,
                'fasilitas'       => 'UHD Sleeper Cabin, Hiburan Universal, Charger HP, AC Dingin, Bantal Lembut, Toilet',
                'harga_tiket'     => 550000,
                'image'           => 'bus12.jpg',
            ],
            [
                'nama_bus'        => '27 Trans Kronos (President Sleeper Ultimate)',
                'plat_nomor'      => 'N 7282 UA',
                'kelas_bus'       => 'President Sleeper',
                'kode_rute'       => 'E2 / E4 (Malang – Poris Plawad, Tangerang)',
                'kapasitas_kursi' => 19,
                'fasilitas'       => 'Super VIP Sleeper Pod, Touchscreen Entertainment, Free Minibar, Dinner Service, Toilet',
                'harga_tiket'     => 560000,
                'image'           => 'bus13.jpg',
            ],
            [
                'nama_bus'        => '27 Trans Anubis (President Sleeper Double Decker)',
                'plat_nomor'      => 'N 7283 UA',
                'kelas_bus'       => 'President Sleeper',
                'kode_rute'       => 'A3 (Malang – Kalideres, Jakarta)',
                'kapasitas_kursi' => 28,
                'fasilitas'       => 'Double Decker Sleeper Premium, AVOD Eksklusif, Colokan USB, Full AC, Makanan Berat',
                'harga_tiket'     => 570000,
                'image'           => 'bus14.jpg',
            ],
            [
                'nama_bus'        => '27 Trans Lucifer (President Sleeper Ultimate)',
                'plat_nomor'      => 'N 7284 UA',
                'kelas_bus'       => 'President Sleeper',
                'kode_rute'       => 'E2 / E4 (Malang – Pasar Kemis, Tangerang)',
                'kapasitas_kursi' => 19,
                'fasilitas'       => 'Ultimate Sleeper Pod, Pijat Otomatis, AVOD Mewah, Minibar Gratis, Dinner Service VVIP',
                'harga_tiket'     => 580000,
                'image'           => 'bus15.jpg',
            ],
        ];

        foreach ($buses as $bus) {
            Bus::create($bus);
        }
    }
}