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
        Schema::create('t_percobaan', function (Blueprint $table) {
            $table->id();
            $table->integer('nis'); // Nomor Induk Siswa
            $table->string('nama_lengkap', 100); // Nama lengkap siswa
            $table->string('jenis_kelamin', 1); // Jenis kelamin siswa (L/P)
            $table->string('tempat_lahir', 50); // Tempat lahir
            $table->date('tanggal_lahir'); // Tanggal lahir
            $table->string('alamat', 255); // Alamat
            $table->string('agama', 20); // Agama
            $table->string('nama_ayah', 100); // Nama ayah
            $table->string('nama_ibu', 100); // Nama ibu
            $table->string('no_telp', 15); // Nomor telepon
            $table->string('email', 100)->unique(); // Email (unik)
            $table->string('kelas', 10); // Kelas
            $table->integer('angkatan'); // Tahun angkatan
            $table->float('nilai_rata_rata'); // Nilai rata-rata
            $table->string('status', 20); // Status (aktif/tidak aktif)
            $table->string('foto_profil')->nullable(); // URL Foto profil (bisa null)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_percobaan');
    }
};
