<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function create()
    {
        return view('buku/create');
    }

    public function store(Request $request)
    {
        // Fungsi Validasi
        $request->validate([
            'judul'  => 'required',
            'deskripsi'  => 'required',
            'pengarang'   => 'required',
            'tahun'   => 'required',
        ],
        // Custom Pesan Error
        [
            'judul.required'     => 'Tidak Boleh Kosong !',
            'deskripsi.required'     => 'Tidak Boleh Kosong !',
            'pengarang.required'      => 'Tidak Boleh Kosong !',
            'tahun.required'      => 'Tidak Boleh Kosong !',
        ]
    
        );

        // Fungsi masukkan ke database
        DB::table('buku')->insert(
            [
                'judul'  => $request['judul'],
                'deskripsi'  => $request['deskripsi'],
                'pengarang'   => $request['pengarang'],
                'tahun'   => $request['tahun']
            ]
        );

        // Setelah semua fungsi kita tinggal redirect & return
        return redirect('/buku');
    }

    public function index()
    {
        $buku = DB::table('buku')->get();
 
        return view('/buku/index', compact('buku'));
    }

    public function show($id)
    {
        $buku = DB::table('buku')->where('id', $id)->first();

        return view('/buku/show', compact('buku'));
    }

    public function edit($id)
    {
        $buku = DB::table('buku')->where('id', $id)->first();

        return view('/buku/edit', compact('buku'));
    }

    public function update(Request $request, $id)
    {
        // Fungsi Validasi
        $request->validate([
            'judul'  => 'required',
            'deskripsi'  => 'required',
            'pengarang'   => 'required',
            'tahun'   => 'required',
        ],
        // Custom Pesan Error
        [
            'judul.required'     => 'Tidak Boleh Kosong !',
            'deskripsi.required'     => 'Tidak Boleh Kosong !',
            'pengarang.required'      => 'Tidak Boleh Kosong !',
            'tahun.required'      => 'Tidak Boleh Kosong !',
        ]
        );

        DB::table('buku')
            ->where('id', $id)
            ->update(
            [
                'judul'  => $request['judul'],
                'deskripsi'  => $request['deskripsi'],
                'pengarang'   => $request['pengarang'],
                'tahun'   => $request['tahun'],
            ]
        );

        // Setelah semua fungsi kita tinggal redirect & return
        return redirect('/buku');
    }

    public function destroy($id)
    {
        $buku = DB::table('buku')->where('id', '=', $id)->delete();

        return redirect('/buku');
    }
}
