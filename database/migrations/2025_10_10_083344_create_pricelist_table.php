<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pricelists', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Contoh: "Big Deal"
            $table->string('image_path'); // Jalur gambar promo
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pricelists');
    }
};