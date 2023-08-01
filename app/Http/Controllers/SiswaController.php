<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function mapel()
    {
        //buat variabel mapel
        $mapel = ["Database",
                  "Pemrograman Web",
                  "Pemrograman Android",
                  "Data Mining"];
        //passing data ke view
        return view('siswa', compact('mapel'));
    }
}
