<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSebaranProvinsiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sebaran_provinsi', function (Blueprint $table) {
          $table->string('kode_prodi', 20)->primary();
          $table->string('nama_prodi', 100);
          $table->string('nama_provinsi', 100);
          $table->integer('jumlah_peminat1');
          $table->integer('jumlah_peminat2');
          $table->integer('jumlah_peminat');
          $table->integer('jumlah_terima');
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
        Schema::dropIfExists('sebaran_provinsi');
    }
}
