@extends('template')
@section('judul', 'Data Belanja')
@section('konten')
    <a href="/d4" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Barang
        </div>

        <div class="card-body">
            <form action="/d4/store" method="post">
                {{ csrf_field() }}
                <!-- tidak menggunakan kode ikan saat menambah karena auto increment-->
                <div class="row mb-3">
                    <label for="jabatan" class="col-sm-2 col-form-label">Kode Barang</label>
                    <div class="col-sm-10">
                        <input type="text" name="KodeBarang" id="KodeBarang" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="umur" class="col-sm-2 col-form-label">Jumlah Barang</label>
                    <div class="col-sm-10">
                        <input type="number" name="Jumlah" id="Jumlah" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="umur" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="number" name="Harga" id="Harga" class="form-control" required>
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
