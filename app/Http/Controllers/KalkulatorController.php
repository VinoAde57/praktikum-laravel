<?php
namespace App\Http\Controllers;

class KalkulatorController extends Controller
{
    public function segitiga($alas = 10, $tinggi = 5)
    {
        $luas = 0.5 * $alas * $tinggi;
        return view('segitiga', compact('alas', 'tinggi', 'luas'));
    }
}