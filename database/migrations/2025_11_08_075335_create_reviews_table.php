<?php

// Buka database/migrations/tanggal_waktu_create_reviews_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('user_name'); // Nama pengguna yang memberi testimoni
            $table->text('review_text'); // Teks ulasan
            $table->integer('rating')->default(5); // Nilai rating (1-5)
            $table->string('photo_path')->nullable(); // Jalur foto before/after (opsional)
            $table->boolean('is_approved')->default(false); // Untuk moderasi
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reviews');
    }
};
