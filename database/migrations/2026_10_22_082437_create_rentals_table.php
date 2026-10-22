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
    Schema::create('rentals', function (Blueprint $table) {
        $table->id();
        $table->string('nama_pelanggan');
        $table->string('jenis_ps'); // Contoh: PS3, PS4, PS5
        $table->string('nomor_unit');
        $table->integer('durasi_jam');
        $table->integer('total_biaya');
        $table->string('status')->default('Aktif'); // Aktif atau Selesai
        $table->timestamps();
    });
}
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
