<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route ::get('/about', function () {
$nama = "Riva";
$jenis_kelamin = "perempuan";
$pendidikan_terakhir = "SMK";
$perkerjaan = "perawat";

  return view('data_diri', compact('nama','jenis_kelamin','pendidikan_terakhir','perkerjaan'));
});

Route :: get('/biodata', function () {
 $Kelahiran = "21 april 1879";
 $meninggal = "17 september 1904";
 $pendidikan = "europeesche lagere school";
 $anak = "soesalit djojoadhiningrat";
 $pasangan = "raden adiati joyodiningrat";

    return view('biodata', compact('Kelahiran','meninggal','pendidikan','anak','pasangan'));
});

Route:: get('/biodata1/{nama}/{jenis_kelamin}/{pendidikan_terakhir}/{perkerjaan}/{alamat}', function (Request $request,$nama,$jenis_kelamin,$pendidikan_terakhir,$perkerjaan, $alamat){
$nama2 = $nama;
$jenis_kelamin2 = $jenis_kelamin;
$pendidikan_terakhir2 = $pendidikan_terakhir;
$perkerjaan2 = $perkerjaan;
$alamat2 = $alamat;

     return view('biodata1', compact('nama2','jenis_kelamin2','pendidikan_terakhir2','perkerjaan2','alamat2'));
});