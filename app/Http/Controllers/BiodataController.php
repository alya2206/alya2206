<?php

namespace App\Http\Controllers;
use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function menampilkanBiodata()
{
    $nama = Biodata::$nama;
    $kelas = Biodata::$kelas;
    $sekolah = Biodata::$sekolah;
    $alamat = Biodata::$alamat;
    $hobi = Biodata::$hobi;
    return view('biodata', compact('nama','kelas','sekolah','alamat','hobi'));
}

}