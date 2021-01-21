<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenghasilanIbuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penghasilan_ibu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rentang_penghasilan', 100);
            $table->integer('jumlah_pendaftar')->nullable();
            $table->integer('kode_tahun_akademik')->nullable();
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
        Schema::dropIfExists('penghasilan_ibu');
    }
}
