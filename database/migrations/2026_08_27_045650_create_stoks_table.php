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
        Schema::create('stoks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bahan');
            $table->string('kategori');
            $table->integer('jumlah_stok')->default(0);
            $table->string('satuan');
            $table->integer('stok_minimum')->default(5);
            $table->string('status')->default('Aman'); // Aman, Hampir Habis, Habis
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stoks');
    }
};
