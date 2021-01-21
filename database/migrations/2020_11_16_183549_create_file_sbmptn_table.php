<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileSbmptnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_sbmptn', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_file', 150);
            $table->string('kategori', 150);
            $table->string('kode_tahun_akademik', 10);
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
        Schema::dropIfExists('file_sbmptn');
    }
}
