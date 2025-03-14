@extends('app')

@section('content')
<div class="container">
    <h2>Daftar Barang</h2>
    <a href="{{ route('barang.create') }}" class="btn btn-primary mb-3">Tambah Barang</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>no</th>
                <th>kode_barang</th>
                <th>nama_barang</th>
                <th>kategori</th>
                <th>harga</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barangs as $index => $barang)
            <tr>
                <td>{{ $index + 1 }}</td>
		        <td>{{ $barang->kode_barang }}</td>
                <td>{{ $barang->nama_barang }}</td>
                <td>{{ $barang->kategori }}</td>
                <td>Rp {{ number_format($barang->harga, 2, ',', '.') }}</td>
                <td><a href="{{route('barang.hapus', $barang->id)}}">hapus</a> || 
                <a href="{{route('barang.edit', $barang->id)}}">update</a></td>
            </tr>
           
            @endforeach
        </tbody>
    </table>
</div>
@endsection