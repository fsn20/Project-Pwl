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
        Schema::create('krs_detail', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('kode_krs');

            $table->unsignedBigInteger('kode_kelas');

            $table->enum('status', [
                'pending',
                'approved',
                'declined'
            ]);

            $table->timestamps();

            // Foreign Key ke KRS
            $table->foreign('kode_krs')
                ->references('id')
                ->on('krs')
                ->onDelete('cascade');

            // Foreign Key ke Kelas
            $table->foreign('kode_kelas')
                ->references('id')
                ->on('kelas')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('krs_detail');
    }
};