@extends('layouts.app')

@section('title', 'Product')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Daftar Product</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <table class="table table-bordered mb-0">
                <tr><th>No</th><th>Nama</th><th>Harga</th></tr>
                <tr><td>1</td><td>Laptop</td><td>Rp 7.500.000</td></tr>
                <tr><td>2</td><td>Mouse</td><td>Rp 150.000</td></tr>
                <tr><td>3</td><td>Keyboard</td><td>Rp 300.000</td></tr>
                <tr><td>4</td><td>Monitor</td><td>Rp 2.000.000</td></tr>
                <tr><td>5</td><td>Printer</td><td>Rp 1.500.000</td></tr>
            </table>
        </div>
    </div>
@endsection