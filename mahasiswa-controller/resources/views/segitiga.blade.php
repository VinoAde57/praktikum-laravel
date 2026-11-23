<!DOCTYPE html>
<html>
<head>
    <title>Luas Segitiga</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        h1 { color: #333; }
        input { padding: 4px; }
        .hasil { color: #2e8b57; font-weight: bold; font-size: 20px; margin-top: 10px; }
    </style>
</head>
<body>
    <h1>Hitung Luas Segitiga</h1>

    <form method="GET" action="/kalkulator/segitiga">
        Alas <input type="number" name="alas" step="any" min="0">
        Tinggi <input type="number" name="tinggi" step="any" min="0">
        <button type="submit">Hitung</button>
    </form>

    @if ($luas !== null)
        <p class="hasil">Luas segitiga = {{ $luas }}</p>
    @endif
</body>
</html>