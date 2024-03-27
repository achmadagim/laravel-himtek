@extends('layouts.main')
@section('container')
    <center><h1>Kelola Data Berita</h1></center>
    <button type="button" onclick="window.location='/olah-berita/create'" class="btn btn-primary">
            <i class="fa fa-plus"></i> Add
    </button>
    <center>
        <br>
        @if (session('msg'))
            {{ session('msg') }}
        @endif
        <table class="table table-responsive table-striped table-bordered">
            <thead>
                <th>No</th>
                <th>Judul Berita</th>
                <th>Isi Berita</th>
                <th>Waktu</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                @foreach ($dataBerita as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->judul }}</td>
                        <td>{{ $data->isi }}</td>
                        <td>{{ $data->waktu }}</td>
                        <td>
                            <button type="button" onclick="window.location='/olah-berita/edit/{{ $data->id }}'" class="btn btn-warning">
                                <i class="fa fa-magic"></i> Edit
                            </button>
                            <form action="/olah-berita/{{ $data->id }}" method="post" style="display: inline" onsubmit="return hapusData()">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-trash"></i> Hapus
                            </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </center>
    <script>
        function hapusData() {
            pesan = confirm('Yakin hapus data?');
            if(pesan)
                return true;
            else return false;
        }
    </script>
@endsection
