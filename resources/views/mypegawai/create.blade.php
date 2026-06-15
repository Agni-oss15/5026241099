@extends('template')
@section('judul', 'Kode Soal mypegawai')
@section('konten')
<a href="{{ route('mypegawai.index') }}" class="btn btn-secondary mb-4">Kembali</a>

    <h2>Tambah pegawai</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <div class="card">
        <div class="card-header">
            Form Tambah pegawai
        </div>
        <!-- Form sudah di makeover seperti pegawai -->
        <div class="card-body">
    <form action="{{ route('mypegawai.store') }}" method="post">
                {{ csrf_field() }}
                {{ method_field('POST') }}
                <!-- tidak menggunakan kode ikan saat menambah karena auto increment-->
                <div class="row mb-3">
                    <label for="jabatan" class="col-sm-2 col-form-label">kodepegawai</label>
                    <div class="col-sm-10">
                        <input type="text" name="kodepegawai" id="kodepegawai" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="umur" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="namalengkap" id="namalengkap" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="umur" class="col-sm-2 col-form-label">divisi</label>
                    <div class="col-sm-10">
                        <input type="text" name="divisi" id="divisi" class="form-control" required>
                    </div>
                </div><div class="row mb-3">
                    <label for="umur" class="col-sm-2 col-form-label">departemen</label>
                    <div class="col-sm-10">
                        <input type="text" name="departemen" id="departemen" class="form-control" required>
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
    <script>
        function validasiForm() {
            let kodepegawai = document.getElementById('kodepegawai').value.trim();
            let namalengkap = document.getElementById('namalengkap').value.trim();
            let divisi = document.getElementById('divisi').value.trim();
            let departemen = document.getElementById('departemen').value.trim();

            if (kodepegawai === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "kodepegawai wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (kodepegawai.length > 9) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "kodepegawai maksimal 9 karakter",
                    icon: "error"
                });
                return false;
            }

            if (namalengkap === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Nama wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (namalengkap.length > 50) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Nama maksimal 50 karakter",
                    icon: "error"
                });
                return false;
            }

            if (divisi === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "divisi wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (divisi.length > 5) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "divisi maksimal 5 karakter",
                    icon: "error"
                });
                return false;
            }

            if (departemen === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "departemen wajib diisi",
                    icon: "error"
                });
                return false;

            }

            return true;
        }
    </script>
@endsection
