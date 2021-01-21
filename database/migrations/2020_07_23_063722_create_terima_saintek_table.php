<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerimaSaintekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terima_saintek', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_ptn', 100);
            $table->integer('jumlah');
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
        Schema::dropIfExists('terima_saintek');
    }
}
