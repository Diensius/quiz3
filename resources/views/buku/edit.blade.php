@extends('/layouts/master')

@section('content')
    <form action="/buku/{{$buku->id}}" method="POST">
        @csrf
        @method('put')

        <h1>Tambah Buku Baru</h1>

        <div class="mb-3">
            <label>Judul Buku</label>
            <input type="text" name="judul" value="{{$buku->judul}}" class="form-control">
        </div>
        @error('judul')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label>Deskripsi Buku</label>
            <textarea name="deskripsi" class="form-control" rows="3">{{$buku->deskripsi}}</textarea>
        </div>
        @error('deskripsi')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label>Nama Pengarang</label>
            <input type="text" name="pengarang" value="{{$buku->pengarang}}" class="form-control">
        </div>
        @error('pengarang')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label>Tahun Buku</label>
            <input type="text" name="tahun" value="{{$buku->tahun}}" class="form-control">
        </div>
        @error('tahun')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Ubah Data Buku</button>
        </div>
    </form>
@endsection