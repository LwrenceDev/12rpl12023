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
        Schema::create('inboxes', function (Blueprint $table) {
            $table->id();
            $table->string('no_agenda',50);
            $table->string('jenis_surat',50);
            $table->date('tanggal_kirim');
            $table->date('tanggal_terima');
            $table->string('no_surat',50);
            $table->string('pengirim',50);
            $table->string('perihal',255);
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
        Schema::dropIfExists('inboxes');
    }
};
