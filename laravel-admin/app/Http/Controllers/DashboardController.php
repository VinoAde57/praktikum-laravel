<?php
namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function home()    { return view('home'); }
    public function product() { return view('product'); }
    public function service() { return view('service'); }
    public function contact() { return view('contact'); }
    public function about()   { return view('about'); }
}
