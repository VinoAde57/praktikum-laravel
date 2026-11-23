<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function segitiga(Request $request)
    {
        $luas = null;

        if ($request->filled('alas') && $request->filled('tinggi')) {
            $luas = 0.5 * $request->alas * $request->tinggi;
        }

        return view('segitiga', compact('luas'));
    }
}