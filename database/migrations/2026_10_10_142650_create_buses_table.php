<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('buses', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bus');            // Kolom 1
            $table->string('plat_nomor');          // Kolom 2
            $table->string('kelas_bus');           // Kolom 3 (Kelas layanan)
            $table->string('kode_rute');           // Kolom 4 (Rute perjalanan)
            $table->integer('kapasitas_kursi');    // Kolom 5
            $table->text('fasilitas');             // Kolom 6
            $table->decimal('harga_tiket', 12, 2); // Kolom 7
            $table->string('image')->nullable();   // Kolom 8 (Gambar)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buses');
    }
};