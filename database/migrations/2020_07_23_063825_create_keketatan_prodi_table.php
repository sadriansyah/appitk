<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeketatanProdiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keketatan_prodi', function (Blueprint $table) {
          $table->string('kode_prodi', 20)->primary();
          $table->string('nama_prodi', 100);
          $table->integer('peminat');
          $table->integer('terima');
          $table->string('keketatan',20);
          $table->integer('peminat1');
          $table->string('persen_peminat1',20);
          $table->integer('terima1');
          $table->string('persen_terima1',20);
          $table->integer('peminat2');
          $table->string('persen_peminat2',20);
          $table->integer('terima2');
          $table->string('persen_terima2',20);
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
        Schema::dropIfExists('keketatan_prodi');
    }
}
