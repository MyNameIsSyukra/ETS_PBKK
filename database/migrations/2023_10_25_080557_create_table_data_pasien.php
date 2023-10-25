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
        Schema::create('data_pasien', function (Blueprint $table) {
            $table->timestamps();
            $table->id();
            $table->text('nama');
            $table->text('usia');
            $table->text('status');
            $table->text('tempat/tanggallahir');
            $table->string('foto'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pasien');
    }
};