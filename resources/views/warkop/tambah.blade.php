@extends('template')
@section('judul_halaman', 'Tambah warkop')
@section('konten')
    <a href="/warkop" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data warkop
        </div>

        <div class="card-body">
            <form action="/warkop/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="Harga" class="col-sm-2 col-form-label">MapId</label>
                    <div class="col-sm-10">
                        <input type="number" name="MapId" id="MapId" min="0" value="0"
                            class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="Nama" id="Nama" maxlength="30" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="number" name="Harga" id="Harga" min="0" value="0"
                            class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                    <div class="col-sm-10">
                        <input type="text" name="Lokasi" id="Lokasi" class="form-control" required>
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
