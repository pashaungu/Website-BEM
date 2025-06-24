<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
       Schema::create('program', function (Blueprint $table) {
    $table->id();
    $table->string('judul'); // ✅ harus 'judul'
    $table->text('deskripsi')->nullable();
    $table->date('tanggal')->nullable();
    $table->timestamps();
    });
    }

    public function down(): void
    {
        Schema::dropIfExists('program');
    }
};
