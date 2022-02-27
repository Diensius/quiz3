@extends('/layouts/master')

@section('content')
    <form action="/buku" method="POST">
        @csrf
        <h1>Tambah Buku Baru</h1>

        <div class="mb-3">
            <label>Judul Buku</label>
            <input type="text" name="judul" class="form-control">
        </div>
        @error('judul')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label>Deskripsi Buku</label>
            <textarea name="deskripsi" class="form-control" rows="3"></textarea>
        </div>
        @error('deskripsi')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label>Nama Pengarang</label>
            <input type="text" name="pengarang" class="form-control">
        </div>
        @error('pengarang')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label>Tahun Buku</label>
            <input type="text" name="tahun" class="form-control">
        </div>
        @error('tahun')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Tambah Buku</button>
        </div>
    </form>
@endsection