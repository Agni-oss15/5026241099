@extends('template')
@section('judul_halaman', 'Edit anime')
@section('konten')
<a href="/anime" class="btn btn-secondary mb-4">Kembali</a>
    @foreach($anime as $s)
<div class="card">
        <div class="card-header">
            Form Edit Data Anime
        </div>

        <div class="card-body">
            <form action="/anime/update" method="post">
                {{ csrf_field() }}

                <input type="hidden" name="ID" value="{{ $s->ID }}">

                <div class="row mb-3">
                    <label for="Judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            name="Judul"
                            id="Judul"
                            maxlength="30"
                            class="form-control"
                            required
                            value="{{ $s->Judul }}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Rating" class="col-sm-2 col-form-label">Rating</label>
                    <div class="col-sm-10">
                        <input
                            type="number"
                            name="Rating"
                            id="Rating"
                            min="0"
                            max="10"
                            step="0.1"
                            class="form-control"
                            required
                            value="{{ $s->Rating }}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Genre" class="col-sm-2 col-form-label">Genre</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            name="Genre"
                            id="Genre"
                            maxlength="30"
                            class="form-control"
                            required
                            value="{{ $s->Genre }}"
                        >
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
    @endforeach
@endsection
