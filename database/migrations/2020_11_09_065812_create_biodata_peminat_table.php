<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataPeminatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata_peminat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nik',30)->nullable();
            $table->string('nisn',30)->nullable();
            $table->string('kode_peserta',30)->nullable();
            $table->string('nama_peserta',100)->nullable();
            $table->string('jk',20)->nullable();
            $table->string('bidikmisi',15)->nullable();
            $table->string('kode_ptn_terima',30)->nullable();
            $table->string('nama_ptn_terima',70)->nullable();
            $table->string('kode_prodi_terima',30)->nullable();
            $table->string('nama_prodi_terima',70)->nullable();
            $table->string('pil_terima',10)->nullable();
            $table->string('nilai_terima',15)->nullable();
            $table->string('alamat',150);
            $table->string('telepon',20);
            $table->string('email',80);
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
            $table->string('kode_ptn_pil1',30)->nullable();
            $table->string('nama_ptn_pil1',100)->nullable();
            $table->string('kode_prodi_pil1',30)->nullable();
            $table->string('nama_prodi_pil1',80)->nullable();
            $table->string('nilai1',30)->nullable();
            $table->string('kode_ptn_pil2',30)->nullable();
            $table->string('nama_ptn_pil2',200)->nullable();
            $table->string('kode_prodi_pil2',30)->nullable();
            $table->string('nama_prodi_pil2',80)->nullable();
            $table->string('nilai2',30)->nullable();
            $table->string('tempat_lahir',50)->nullable();
            $table->string('tgl_lahir',30)->nullable();
            $table->string('npsn',30)->nullable();
            $table->string('nama_slta',50);
            $table->string('kabupaten',50);
            $table->string('provinsi',50);
            $table->integer('tahun_lulus');
            $table->string('jurusan_slta',30)->nullable();


            $table->string('nilai_saintek_kimia_pil1',30)->nullable();
            $table->string('nilai_saintek_matematika_saintek_pil1',30)->nullable();
            $table->string('nilai_soshum_ekonomi_pil1',30)->nullable();

            $table->string('nilai_soshum_geografi_pil1',30)->nullable();
            $table->string('nilai_soshum_matematika_soshum_pil1',30)->nullable();
            $table->string('nilai_soshum_sejarah_pil1',30)->nullable();

            $table->string('nilai_soshum_sosiologi_pil1',30)->nullable();
            $table->string('nilai_tps_kemampuan_kuantitatif_pil2',30)->nullable();
            $table->string('nilai_tps_kemampuan_memahami_bacaan_dan_menulis_pil2',30)->nullable();

            $table->string('nilai_tps_kemampuan_penalaran_umum_pil2',30)->nullable();
            $table->string('nilai_tps_pengetahuan_dan_pemahaman_umum_pil2',30)->nullable();
            $table->string('nilai_saintek_biologi_pil2',30)->nullable();

            $table->string('nilai_saintek_fisika_pil2',30)->nullable();
            $table->string('nilai_saintek_kimia_pil2',30)->nullable();
            $table->string('nilai_saintek_matematika_saintek_pil2',30)->nullable();

            $table->string('nilai_soshum_ekonomi_pil2',30)->nullable();
            $table->string('nilai_soshum_geografi_pil2',30)->nullable();
            $table->string('nilai_soshum_matematika_soshum_pil2',30)->nullable();

            $table->string('nilai_soshum_sejarah_pil2',30)->nullable();
            $table->string('nilai_soshum_sosiologi_pil2',30)->nullable();
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
        Schema::dropIfExists('biodata_peminat');
    }
}
