@extends('/layouts/master')

@section('content')
    <h1>{{$buku->judul}}</h1>
    <h5>{{$buku->deskripsi}}</h5>
    <h5>Pengarang: {{$buku->pengarang}}</h5>
    <h5>Tahun Terbit: {{$buku->tahun}}</h5>

    <a href="/buku" class="btn btn-info">Kembali</a>
@endsection