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
        Schema::create('pegawai', function (Blueprint $table) {
            $table->increments('pegawai_id'); // Primary Key
            $table->string('pegawai_nama'); // Kolom untuk nama pegawai
            $table->string('pegawai_jabatan'); // Kolom untuk jabatan
            $table->integer('pegawai_umur'); // Kolom untuk umur
            $table->text('pegawai_alamat'); // Kolom untuk alamat
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai');
    }
};

