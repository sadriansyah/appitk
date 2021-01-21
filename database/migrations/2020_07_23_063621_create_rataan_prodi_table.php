<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRataanProdiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rataan_prodi', function (Blueprint $table) {
          $table->string('kode_prodi', 20)->primary();
          $table->string('nama_prodi', 100);
          $table->string('rataan', 20);
          $table->string('s_baku',20);
          $table->string('cov',20);
          $table->string('min',20);
          $table->string('max',20);
          $table->integer('kode_tahun_akademik');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rataan_prodi');
    }
}
