<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('model');
            $table->integer('year');
            $table->decimal('price', 10, 2);
            $table->text('description')->nullable();
            $table->string('color')->default('unknown');
            $table->text('bahan_bakar')->nullable();
            $table->integer('number_of_seats');
            $table->string('transmission');
            $table->string('image_url')->nullable();  // Menambahkan kolom image_url
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
