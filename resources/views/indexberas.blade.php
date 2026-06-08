@extends('template')
@section('judul_halaman', 'Data beras')
@section('konten')
    <p>
        <br><a href="/beras/tambah" class="btn btn-primary"> + Tambah beras Baru</a>
    </p>
    <br />
    <br />

    <p>Cari Data beras :</p>
    <form action="/beras/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari merk beras .." class="form-control">
        <input type="submit" value="CARI" class="btn btn-success">
    </form>
    <br/>
    <table class="table table-hover table-striped">
        <tr>
            <th>Kode</th>
            <th>Merk</th>
            <th>Stok</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach ($beras as $s)
            <tr>
                <td>{{ $s->kodeberas }}</td>
                <td>{{ $s->merkberas }}</td>
                <td>{{ $s->stockberas }}</td>
                <td>{{ $s->tersedia == 'Y' ? 'Ya' : 'Tidak' }}</td>
                <td>
                    <a href="/beras/edit/{{ $s->kodeberas }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/beras/hapus/{{ $s->kodeberas }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $beras->links() }}
@endsection
