<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 950px;
            margin: auto;
            background-color: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f8f8f8;
        }

        .gambar {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 5px;
            display: block;
            margin: auto;
        }

        .harga {
            text-align: right;
        }

        .stok {
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Daftar Produk Toko Kelontong</h2>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>SKU</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>Stok</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($produk as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item['nama'] }}</td>
                        <td>{{ $item['sku'] }}</td>
                        <td class="harga">
                            Rp {{ number_format($item['harga'], 0, ',', '.') }}
                        </td>
                        <td>
                            <img src="{{ $item['gambar'] }}"
                                 alt="{{ $item['nama'] }}"
                                 class="gambar">
                        </td>
                        <td class="stok">{{ $item['stok'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>