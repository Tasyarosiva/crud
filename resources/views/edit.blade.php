@extends('app')

@section('content')
<div class="container">
    <h1>Tambah Barang</h1>
    <form action="{{ url('barang/edit/'.$barang->id.'/simpan') }}" method="POST">
        @csrf 
            @method('PUT') 

        <div class="mb-3">
            <label for="kode_barang" class="form-label">Kode Barang</label>
            <input type="text" class="form-control" id="kode_barang" name="kode_barang" 
                   value="{{ old('kode_barang', $barang->kode_barang ?? 'Kode Barang') }}" required>
        </div>

        <div class="mb-3">
            <label for="nama_barang" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" 
                   value="{{ old('nama_barang', $barang->nama_barang ?? 'Nama Barang') }}" required>
        </div>

        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <input type="text" class="form-control" id="kategori" name="kategori" 
                   value="{{ old('kategori', $barang->kategori ?? 'Kategori') }}" required>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" 
                   value="{{ old('harga', $barang->harga ?? '0') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection