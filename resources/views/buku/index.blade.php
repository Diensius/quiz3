@extends('/layouts/master')

@push('scripts')
    <script>
        Swal.fire({
            title: "Berhasil!",
            text: "Memasangkan script sweet alert",
            icon: "success",
            confirmButtonText: "Cool",
        });
    </script>
@endpush

@section('content')

<a href="/buku/create" class="btn btn-primary mb-3">Tambah Data Buku</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Judul Buku</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Pengarang</th>
            <th scope="col">Tahun</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
       @forelse ($buku as $key => $item)
            <tr>
                <td>{{$key + 1}}</td> <!-- kenapa di tambah 1 karena akan selalu mulai dari 0 dan di tambah 0+1 dst -->
                <td>{{$item -> judul}}</td> 
                <td>{{$item -> deskripsi}}</td> 
                <td>{{$item -> pengarang}}</td> 
                <td>{{$item -> tahun}}</td>
                <td>
                    <a href="/buku/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                    <a href="/buku/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <form action="/buku/{{$item->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                    </form>
                </td>
            </tr>

       @empty
            <tr>
                <td>Data Masih Kosong !</td>
            </tr>
       @endforelse
    </tbody>
</table>
@endsection