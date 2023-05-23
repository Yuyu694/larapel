<!-- resources/views/barang/form.blade.php -->
<html>
<head>
    <title>Form Barang</title>
</head>
<body>
    <h1>Form Barang</h1>
 
    <form action="{{ isset($barang) ? route('barang.update', $barang->id) : route('barang.store') }}" method="POST">
        @csrf
        @if(isset($barang))
            @method('PUT')
        @endif
        <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="harga">Harga</label>
        <input type="number" name="harga" id="harga" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="stok">Stok</label>
        <input type="number" name="stok" id="stok" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
 
    <a href="{{ route('barang.index') }}">Kembali</a>
</body>
</html>

