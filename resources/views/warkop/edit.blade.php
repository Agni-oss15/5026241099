@extends('template')
@section('title', 'Data Pegawai')
@section('konten')

    <h2>Edit warkop</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('warkop.update', $warkop->MapId) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <!-- tidak menggunakan kode ikan saat menambah karena auto increment-->
                <div class="row mb-3">
                    <label for="jabatan" class="col-sm-2 col-form-label">MapId</label>
                    <div class="col-sm-10">
                        <input type="text" name="MapId" id="MapId" class="form-control" required value="{{ $warkop->MapId }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="umur" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="Nama" id="Nama" class="form-control" required value="{{ $warkop->Nama }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="umur" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="number" name="Harga" id="Harga" class="form-control" required value="{{ $warkop->Harga }}">
                    </div>
                </div><div class="row mb-3">
                    <label for="umur" class="col-sm-2 col-form-label">Lokasi</label>
                    <div class="col-sm-10">
                        <input type="text" name="Lokasi" id="Lokasi" class="form-control" required value="{{ $warkop->Lokasi }}">
                    </div>
                </div>


                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>

    <script>
        function validasiForm() {
            let MapId = document.getElementById('MapId').value.trim();
            let nama = document.getElementById('Nama').value.trim();
            let Harga = document.getElementById('Harga').value.trim();
            let tanggal = document.getElementById('Lokasi').value;

            if (MapId === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "MapId wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (MapId.length > 10) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "MapId maksimal 10 karakter",
                    icon: "error"
                });
                return false;
            }

            if (nama === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Nama wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (nama.length > 20) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Nama maksimal 20 karakter",
                    icon: "error"
                });
                return false;
            }

            if (Harga === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Harga wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (Harga.length > 5) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Harga maksimal 5 karakter",
                    icon: "error"
                });
                return false;
            }

            if (tanggal === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Tanggal lahir wajib diisi",
                    icon: "error"
                });
                return false;
            }

            return true;
        }
    </script>
@endsection
