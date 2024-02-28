<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Classes\NilaiAngka;
use App\Classes\NilaiAkhir;

class home extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('app', compact('posts'));
    }
    public function store(Request $request)
    {

        $request->validate([
            'partisipasi' => 'required|decimal|less_than_equal_to[100]',
            'tugas' => 'required|decimal|less_than_equal_to[100]',
            'uts' => 'required|decimal|less_than_equal_to[100]',
            'uas' => 'required|decimal|less_than_equal_to[100]',
        ]);


        $NilaiAngka = (($request->$partisipasi * 2) + ($request->$tugas * 3) + ($request->$uts * 2) + ($request->$uas * 3)) / 10;

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


        Post::create([
            'partisipasi' => $request->partisipasi,
            'tugas' => $request->tugas,
            'uts' => $request->uts,
            'uas' => $request->uas,
            'NilaiAngka' => $NilaiAngka,
            'NilaiHuruf' => $NilaiHuruf,
        ]);

        return redirect()->route('app.store');
    }
}
