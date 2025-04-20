<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Produk</title>
</head>
<body>
    <h1>{{ $product['name'] }}</h1>
    <p><strong>Harga:</strong> Rp {{ number_format($product['price'], 0, ',', '.') }}</p>
    <p><strong>Deskripsi:</strong> {{ $product['description'] ?? 'Tidak ada deskripsi.' }}</p>
    <a href="{{ url('/') }}">← Kembali ke daftar produk</a>
</body>
</html>
