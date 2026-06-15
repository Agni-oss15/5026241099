@extends('template')
@section('judul_halaman', 'Tambah anime')
@section('konten')
    <a href="/anime" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Anime
        </div>

        <div class="card-body">
            <form action="/anime/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="Judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" name="Judul" id="Judul" maxlength="30" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Rating" class="col-sm-2 col-form-label">Rating</label>
                    <div class="col-sm-10">
                        <input type="number" name="Rating" id="Rating" min="0" value="0"
                            class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Genre" class="col-sm-2 col-form-label">Genre</label>
                    <div class="col-sm-10">
                        <input type="text" name="Genre" id="Genre" class="form-control" required>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
