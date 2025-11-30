<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Jalankan migrasi untuk membuat tabel.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('image')->nullable();
            $table->string('category');
            $table->timestamps();
        });
    }

    /**
     * Balikkan perubahan migrasi jika diperlukan.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
