<?php
namespace App\hitung;

class NilaiHuruf
{
    public static function konversi($NilaiAngka) {
        if ($NilaiAngka >= 85) {
            $NilaiHuruf = 'A';
        } elseif ($NilaiAngka >= 80) {
            $NilaiHuruf = 'A-';
        } elseif ($NilaiAngka >= 75) {
            $NilaiHuruf = 'B+';
        } elseif ($NilaiAngka >= 70) {
            $NilaiHuruf = 'B';
        } elseif ($NilaiAngka >= 65) {
            $NilaiHuruf = 'B-';
        } elseif ($NilaiAngka >= 60) {
            $NilaiHuruf = 'C+';
        } elseif ($NilaiAngka >= 55) {
            $NilaiHuruf = 'C';
        } elseif ($NilaiAngka >= 40) {
            $NilaiHuruf = 'D';
        } else {
            $NilaiHuruf = 'E';
        }
        return $NilaiAngka;}
}

