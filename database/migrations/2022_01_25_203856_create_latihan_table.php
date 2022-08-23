<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLatihanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('latihans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nama_latihan")->nullable();
            $table->string("tanggal_latihan")->nullable();
            $table->string("tempat_latihan")->nullable();
            $table->string("waktu_latihan")->nullable();
            $table->string("kategori_latihan")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('latihan');
    }
}
