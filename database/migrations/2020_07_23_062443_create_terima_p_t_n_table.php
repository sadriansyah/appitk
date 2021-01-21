<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerimaPTNTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terima_ptn', function (Blueprint $table) {
            $table->string('kode_prodi', 20)->primary();
            $table->string('nama_prodi', 100);
            $table->integer('kode_peserta');
            $table->string('nama_peserta', 100);
            $table->integer('bidikmisi');
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
        Schema::dropIfExists('terima_p_t_n');
    }
}
