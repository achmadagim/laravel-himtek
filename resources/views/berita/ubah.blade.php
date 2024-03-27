@extends('layouts.main')
@section('container')
        <div class="row mt-5">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Form Ubah Berita</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/olah-berita/'.$id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <label>Judul Berita</label>
                            <input type="text" name="judul" placeholder="Masukkan Judul Berita" class="form-control" required value="{{ $judul }}">
                            
                            <label for="">Isi Berita</label>
                            <textarea name="isi" placeholder="Masukkan Isi Berita" required class="form-control" rows="10">{{ $isi }}</textarea>
                        </div>
                        <div class="card-footer">
                            <center>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-save"></i> Simpan
                                </button>
                                <button type="button" onclick="window.location='/olah-berita'" class="btn btn-success">
                                    &laquo; Kembali
                                </button>
                            </center>
                        </div>
                        </form>
                </div>
            </div>
        </div>
@endsection
