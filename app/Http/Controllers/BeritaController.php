<?php

namespace App\Http\Controllers;
use App\Models\Berita;

use Illuminate\Http\Request;


class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'dataBerita' => Berita::all(),
            'title' => 'Data Berita'
        ];
        return View('berita.berita', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Tambah Berita'
        ];
        return View('berita.tambah', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $berita = new Berita();
            $berita->judul = $request->judul;
            $berita->isi = $request->isi;
            $berita->save();

            $request->session()->flash('msg', "Data Berita dengan judul `$berita->judul` berhasil disimpan");
            return redirect('/olah-berita');
        } catch (\Throwable $th) {
            echo $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $berita = Berita::find($id);
        $data = [
            'id' => $berita->id,
            'judul' => $berita->judul,
            'isi' => $berita->isi,
            'title' => 'Ubah Berita'
        ];
        return View('berita.ubah', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $berita = Berita::find($id);
            $berita->judul = $request->judul;
            $berita->isi = $request->isi;
            $berita->save();

            $request->session()->flash('msg', "Data Berita dengan judul `$berita->judul` berhasil diupdate");
            return redirect('/olah-berita');
        } catch (\Throwable $th) {
            echo $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mhs = Berita::find($id)->delete();
        return redirect('/olah-berita');
    }
}
