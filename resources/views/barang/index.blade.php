<!-- resources/views/barang/index.blade.php -->
<html>
<head>
    <title>Daftar Barang</title>
</head>
<body>
    <h1>Daftar Barang</h1>
 
    <table>
        <tr>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        @foreach($barang as $item)
        <tr>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->harga }}</td>
            <td>{{ $item->stok }}</td>
            <td>
                <a href="{{ route('barang.show', $item->id) }}">Detail</a> |
                <a href="{{ route('barang.edit', $item->id) }}">Edit</a> |
                <form action="{{ route('barang.destroy', $item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
 
    <a href="{{ route('barang.create') }}">Tambah Barang</a>
    <div class="mt-3">
    <a href="{{ url('/') }}" class="btn btn-primary">Home</a>

</div>


</div>
</body>
</html>
