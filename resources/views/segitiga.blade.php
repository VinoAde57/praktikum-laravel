<!DOCTYPE html>
<html>
<head>
    <title>Luas Segitiga</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="box">
        <h2>Luas Segitiga</h2>
        <p>Alas: {{ $alas }}</p>
        <p>Tinggi: {{ $tinggi }}</p>
        <p class="hasil">Luas = ½ × {{ $alas }} × {{ $tinggi }} = {{ $luas }}</p>
    </div>
</body>
</html>