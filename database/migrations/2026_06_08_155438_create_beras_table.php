<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('beras', function (Blueprint $table) {
            $table->increments('kodeberas');  // INT AutoNumber
            $table->string('merkberas', 30);  // VARCHAR(30)
            $table->integer('stockberas');    // INT
            $table->char('tersedia', 1);      // CHAR(1): 'Y'=Ya, 'T'=Tidak
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('beras');
    }
};
