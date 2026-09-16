<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Laporan Penjualan</h1>

    <p>Total Penjualan: {{ $statistik['total_penjualan'] }}</p>
    <p>Total Pendapatan: Rp {{ $statistik['total_pendapatan'] }}</p>
    <p>Produk Terjual: {{ $statistik['produk_terjual'] }}</p>
</body>
</html>