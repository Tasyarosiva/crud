@extends('app')
@section('content')
<div class="container">
    <h2>Tambah Barang</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('bs') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="kode_barang" class="form-label">kode barang</label>
            <input type="integer" class="form-control" id="kode_barang" name="kode_barang" required>
        </div>
        <div class="mb-3">
            <label for="nama_barang" class="form-label">nama barang</label>
            <input type="varchar" class="form-control" id="nama_barang" name="nama_barang" required>
        </div>
        <div class="mb-3">
            <label for="kategori" class="form-label">kategori</label>
            <input type="varchar" class="form-control" id="kategori" name="kategori" required>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">harga</label>
            <input type="integer" class="form-control" id="harga" name="harga" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection



