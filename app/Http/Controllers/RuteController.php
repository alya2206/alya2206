<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RuteController extends Controller
{
    public function menampilkanData()
    {
        return view('rutecontroller');
    }



    public function menampilkanDataModel()
{
    $sekolah = Rute::$sekolah;
    $kelas = Rute::$kelas;
    return view('rutemodel');
}

}