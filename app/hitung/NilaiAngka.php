<?php

namespace App\Classes;

use App\Http\Controllers\Controller;

class NilaiAngka extends Controller
{
    public static function hitung($partisipasi, $tugas, $uts, $uas)
    {
        $NilaiAngka = (($partisipasi * 2) + ($tugas * 3) + ($uts * 2) + ($uas * 3)) / 10;
        return $NilaiAngka;
    }
}
