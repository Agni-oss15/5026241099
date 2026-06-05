@extends('template')
@section('judul halaman', 'Data Pegawai')
@section('konten')
<p></p>
    <a href="/pegawai/tambah" class="btn btn-primary"> + Tambah Pegawai Baru</a>
    <br/>
    <br/>
    <form action="/pegawai/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari Pegawai ..">
        <input type="submit" value="Cari" class="btn btn-success">
    </form>
    <p></p>
    <table class="table table-striped table-hover">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        @foreach($pegawai as $p)
        <tr>
            <td>{{ $p->pegawai_nama }}</td>
            <td>{{ $p->pegawai_jabatan }}</td>
            <td>{{ $p->pegawai_umur }}</td>
            <td>{{ $p->pegawai_alamat }}</td>
            <td>
                <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
                |
                <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $pegawai->links() }}
@endsection
