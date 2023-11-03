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
        Schema::create('dispositions', function (Blueprint $table) {
            $table->id();
            $table->string('no_agenda',50);
            $table->string('no_disposisi',50);
            $table->string('no_surat',50);
            $table->string('kepada',50);
            $table->enum('status_surat',['dipertimbangkan','ditindaklanjut','diarsipkan']);
            $table->string('tanggapan',255);
            $table->foreignId('id_suratmasuk');
            $table->foreignId('id_user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dispositions');
    }
};
