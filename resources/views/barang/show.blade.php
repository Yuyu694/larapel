<!-- resources/views/barang/show.blade.php -->
<html>
<head>
    <title>Detail Barang</title>
</head>
<body>
    <h1>Detail Barang</h1>
 
    <table>
        <tr>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
        <tr>
            <td>{{ $barang->nama }}</td>
            <td>{{ $barang->harga }}</td>
            <td>{{ $barang->stok }}</td>
        </tr>
    </table>
 
    <a href="{{ route('barang.index') }}">Kembali</a>
</body>
</html>
