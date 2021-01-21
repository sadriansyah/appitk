<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataTerimaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata_terima', function (Blueprint $table) {
            $table->string('kode_peserta',20)->primary();
            $table->string('nama_peserta',150);
            $table->string('jk',20);
            $table->integer('bidikmisi');
            $table->integer('kode_prodi_terima');
            $table->string('nama_prodi_terima',100);
            $table->integer('pil_prodi_terima');
            $table->string('alamat',150);
            $table->string('telepon',20);
            $table->string('agama',20);
            $table->string('nama_ayah',150);
            $table->string('pendidikan_ayah',50);
            $table->string('pekerjaan_ayah',100);
            $table->string('penghasilan_ayah',50);
            $table->string('nama_ibu',150);
            $table->string('pendidikan_ibu',50);
            $table->string('pekerjaan_ibu',100);
            $table->string('penghasilan_ibu',50);
            $table->integer('jumlah_kakak');
            $table->integer('jumlah_adik');
            $table->integer('pil1');
            $table->integer('pil2');
            $table->string('tempat_lahir',50);
            $table->string('tgl_lahir',20);
            $table->integer('kode_slta');
            $table->string('nama_slta',50);
            $table->string('kabupaten',50);
            $table->string('provinsi',50);
            $table->integer('tahun_lulus');
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
        Schema::dropIfExists('biodata_terima');
    }
}
