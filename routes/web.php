<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('testing');
});

Route::get('/coba',function(){
  return view('hasil.datahasil');
});
//Login
Route::get('/superadmin', 'LoginController@superadmin');
Route::get('/ict', 'LoginController@ict');
Route::get('/data', 'LoginController@data');
Route::get('/kajur', 'LoginController@kajur');
Route::get('/korpro', 'LoginController@korpro');


Route::get('/beranda', 'DashboardController@beranda');
Route::get('/testcsv', 'DashboardController@testcsv');
Route::post('/importcsv', 'DashboardController@csv_import');
Route::get('/exportcsv', 'DashboardController@csv_export');

//data jurusan
Route::get('/data_jurusan', 'JurusanController@index');
Route::post('/importDataJurusan', 'JurusanController@import');

//data kelas
Route::get('/data_kelas', 'KelasController@index');
Route::post('/importDataKelas', 'KelasController@import');

//data sekolah
Route::get('/data_sekolah', 'DataSekolahController@index');
Route::post('/importDataSekolah', 'DataSekolahController@import');

//data pilihan
Route::get('/data_pilihan', 'DataPilihanController@index');
Route::post('/importDataPilihan', 'DataPilihanController@import');

//data status tambahan
Route::get('/data_status_tambahan', 'DataStatistikTambahanController@index');
Route::post('/importDataStatusTambahan', 'DataStatistikTambahanController@import');

//data Kelas Siswa
Route::get('/data_kelas_siswa', 'KelasController@index1');
Route::post('/importDataKelasSiswa', 'KelasController@import1');

//data Nilai Status Tambahan
Route::get('/data_nilai_status_tambahan', 'DataNilaiStatusTambahanController@index');
Route::post('/importDataNilaiStatusTambahan', 'DataNilaiStatusTambahanController@import');

//data Prestasi
Route::get('/data_prestasi', 'DataPrestasiController@index');
Route::post('/importDataPrestasi', 'DataPrestasiController@import');

//data Siswa
Route::get('/data_siswa', 'DataSiswaController@index');
Route::post('/importDataSiswa', 'DataSiswaController@import');

//data Ranking Akumulasi
Route::get('/ranking_akumulasi', 'RangkingAkumulasiController@index');
Route::post('/importRangkingAkumulasi', 'RangkingAkumulasiController@import');

//data Ranking Semester
Route::get('/ranking_semester', 'RangkingSemesterController@index');
Route::post('/importRangkingSemester', 'RangkingSemesterController@import');

//data Statistik Penghasilan Ayah
Route::get('/data_statistik_penghasilan', 'DataStatistikPenghasilanController@index');
Route::post('/importDataStatistikPenghasilan', 'DataStatistikPenghasilanController@import');

//data Statistik Penghasilan ibu
Route::get('/data_statistik_penghasilan_ibu', 'DataStatistikPenghasilanController@index1');
Route::post('/importDataStatistikPenghasilanIbu', 'DataStatistikPenghasilanController@import1');

//data Karya Portofolio
Route::get('/data_karya_portofolio', 'DataKaryaPortofolioController@index');
Route::post('/importDataKaryaPortofolio', 'DataKaryaPortofolioController@import');

//data Portofolio
Route::get('/data_portofolio', 'DataKaryaPortofolioController@index1');
Route::post('/importDataPortofolio', 'DataKaryaPortofolioController@import1');

//data Nilai
Route::get('/data_nilai', 'DataNilaiController@index');
Route::post('/importDataNilai', 'DataNilaiController@import');

//data Nilai Mapel UN Skala 4 SMK
Route::get('/data_nilai_skala_4_smk', 'NilaiSkala4SMKController@index');
Route::post('/importNilaiSkala4SMK', 'NilaiSkala4SMKController@import');

//data Nilai Mapel UN Skala 100 SMK
Route::get('/data_nilai_skala_100_smk', 'NilaiSkala100SMKController@index');
Route::post('/importNilaiSkala100SMK', 'NilaiSkala100SMKController@import');

//data Nilai Mapel UN Skala 4 SMA
Route::get('/data_nilai_skala_4_sma', 'NilaiSkala4SMAController@index');
Route::post('/importNilaiSkala4SMA', 'NilaiSkala4SMAController@import');

//data Nilai Mapel UN Skala 100 SMA
Route::get('/data_nilai_skala_100_sma', 'NilaiSkala100SMAController@index');
Route::post('/importNilaiSkala100SMA', 'NilaiSkala100SMAController@import');

//data siswa bidikmisi
Route::get('/dataSiswaBidikmisi', 'DashboardController@siswaBidikmisi');

//nas1
Route::get('/datafilter', 'NASController@pilih');
//Route::get('/hasil/{program_studi}/{urutan_ptn}/{urutan_program_studi}/{tahun}','NASController@filterhasil');
Route::get('/datahasil/{kodeprodi}/{tahun}/','NASController@nas1');
Route::post('/filterjurusan','NASController@pilihfilter');
Route::get('/hasil/{kodeprodi}/{tahun}','NASController@filterhasil');
Route::get('/coba/{kodeprodi}/{tahun}','NASController@coba');
Route::get('/datareset','NASController@datareset');
Route::post('/snmptndatareset','NASController@hapusdatareset');
Route::get('/finalexport/{kode_program_studi}/{tahun}','NASController@finalexport');

Route::get('/resetsnmptn','NASController@resetsnmptn');
Route::post('/snmptnimportreset','NASController@snmptnimportreset');



//masukansiswa
Route::post('/simpansiswa','NASController@simpansiswa');
Route::post('/deletesiswa','NASController@deletesiswa');
Route::get('ambilkuotaprodi/{program_studi}/{tahun}','NASController@ambilkuota');
Route::get('/tampilsiswa/{program_studi}/{tahun}','NASController@tampilsiswa');

//jurusan dan Prodi
Route::resource('/jurusan', 'JurusanITKController');
Route::resource('/prodi', 'ProdiITKController');

//daya Tampung
Route::resource('/daya_tampung', 'DayaTampungController');

//kriteria Nilai
Route::get('/kriteria_nilai', 'KriteriaNilaiController@index');
Route::post('/filtertahun', 'KriteriaNilaiController@filterbytahun');
Route::get('/kriteria_nilai/{tahun}', 'KriteriaNilaiController@indexfilter');
Route::post('/tambahKriteria', 'KriteriaNilaiController@tambah');
Route::post('/editKriteria/{id}', 'KriteriaNilaiController@edit');
Route::get('/hapusBobot/{id}', 'KriteriaNilaiController@hapus');
Route::post('/tambahtahunkriteria','KriteriaNilaiController@tambahtahun');

//js input juara Prestasi
Route::get('/input/juara', 'KriteriaNilaiController@juara');

//data nilai tidak Ada
Route::get('/data_nilai_tidak_ada', 'DataNilaiTidakAdaController@index');
Route::post('/importDataNilaiTidakAda', 'DataNilaiTidakAdaController@import');

//data perubahan npsn
Route::get('/data_perubahan_npsn', 'DataPerubahanNPSNController@index');
Route::post('/importDataPerubahanNPSN', 'DataPerubahanNPSNController@import');

//tahun Akademik
Route::resource('/tahun_akademik', 'TahunAkademikController');

//SBMPTN
//Terima PEr PTN
Route::get('/terima_ptn', 'TerimaPTNController@index');
Route::post('/importTerimaPTN', 'TerimaPTNController@import');

//sebaran Provinsi
Route::get('/sebaran_provinsi', 'SebaranProvinsiController@index');
Route::post('/importSebaranProvinsi', 'SebaranProvinsiController@import');

//Rataan Per Prodi
Route::get('/rataan_prodi', 'RataanProdiController@index');
Route::post('/importRataanProdi', 'RataanProdiController@import');


//nilai ptn terima saintek
Route::get('/terima_saintek', 'TerimaNilaiPTNController@saintek');
Route::post('/importTerimaSaintek', 'TerimaNilaiPTNController@importSaintek');

//nilai ptn terima soshum
Route::get('/terima_soshum', 'TerimaNilaiPTNController@soshum');
Route::post('/importTerimaSoshum', 'TerimaNilaiPTNController@importSoshum');

//keketatan prodi
Route::get('/keketatan_prodi', 'KeketatanController@prodi');
Route::post('/importKeketatanProdi', 'KeketatanController@importProdi');

//keketatan saintek
Route::get('/keketatan_saintek', 'KeketatanController@saintek');
Route::post('/importKeketatanSaintek', 'KeketatanController@importSaintek');

//keketatan soshum
Route::get('/keketatan_soshum', 'KeketatanController@soshum');
Route::post('/importKeketatanSoshum', 'KeketatanController@importSoshum');

//ketunaan pendaftar
Route::get('/data_ketunaan_pendaftar', 'KetunaanPendaftarController@index');
Route::post('/importKetunaanPendaftar', 'KetunaanPendaftarController@import');

//Biodata Terima
Route::get('/biodata_terima', 'BiodataController@index');
Route::post('/importBiodataTerima', 'BiodataController@import');

//biodata bm
Route::get('/biodata_bidikmisi', 'BiodataController@index1');
Route::post('/importBiodataTerimaBidikmisi', 'BiodataController@import1');

//manajemen_akun
Route::get('/manajemen_akun', 'DashboardController@akun');
Route::resource('/tambah_user', 'DashboardController');
Route::get('/ganti_password/{id}', 'DashboardController@ganti_password');
Route::post('/postGantiPassword/{id}', 'DashboardController@postGantiPassword');



//snmptn
Route::get('/snmptn', 'KategoriController@index');
Route::get('/sbmptn', 'KategoriController@index1');

//sbmptn baru
Route::get('/tahun_sbmptn', 'SBMPTNController@tahun');
Route::get('/jenis_file_sbmptn', 'SBMPTNController@jenis');
Route::post('/tambahTahunSBMPTN', 'SBMPTNController@tambah');
Route::post('/updateTahunSBMPTN/{kode_tahun_akademik}', 'SBMPTNController@ubah');
Route::get('/hapusSBMPTN/{kode_tahun_akademik}', 'SBMPTNController@hapus');
Route::post('/tambahKategori', 'SBMPTNController@kategori');
Route::post('/updateKategoriSBMPTN/{kode_kategori}', 'SBMPTNController@ubahKategori');
Route::get('/hapusKategori/{kode_kategori}', 'SBMPTNController@hapusKategori');
Route::post('/uploadSBMPTN', 'SBMPTNController@uploadFile');
Route::get('/hapusFile/{id}', 'SBMPTNController@hapusFile');


//login
Route::post('/postlogin', 'LoginController@postlogin');

//logout
Route::get('/logout', 'LoginController@logout');
