<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeketatanSaintekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keketatan_saintek', function (Blueprint $table) {
          $table->string('kode', 20)->primary();
          $table->string('ptn', 100);
          $table->integer('pil1');
          $table->integer('pil2');
          $table->integer('pil3');
          $table->integer('jumlah');
          $table->integer('terima');
          $table->string('keketatan');
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
        Schema::dropIfExists('keketatan_saintek');
    }
}
