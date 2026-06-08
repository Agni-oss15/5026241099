@extends('template')
@section('judul_halaman', 'Tambah beras')
@section('konten')
<a href="/beras" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data beras
        </div>

        <div class="card-body">
            <form action="/beras/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="merkberas" class="col-sm-2 col-form-label">Merk</label>
                    <div class="col-sm-10">
                        <input type="text" name="merkberas" id="merkberas" maxlength="30" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stockberas" class="col-sm-2 col-form-label">Stok</label>
                    <div class="col-sm-10">
                        <input type="number" name="stockberas" id="stockberas" min="0" value="0" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10">
                        <select name="tersedia" id="tersedia" class="form-control">
                            <option value="Y">Ya</option>
                            <option value="T">Tidak</option>
                        </select>
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
