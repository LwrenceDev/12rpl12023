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
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_pengaduan');
            $table->string('nik',16);
            $table->text('isi_laporan');
            $table->enum('status',[0, 'diproses','ditolak','selesai']);
            $table->foreignId('id_user');
            $table->bigInteger('relasi')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaints');
    }
};
