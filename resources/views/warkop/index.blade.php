@extends('template')
@section('judul', 'Data warkop')
@section('konten')

    <h2>Data warkop</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    @if (session('danger'))
        <p style="color: red;">{{ session('danger') }}</p>
    @endif

    <a href="/warkop/tambah" class="btn btn-primary"> + Tambah warkop Baru</a>
    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>MapId</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Lokasi</th>
            <th>Aksi</th>
        </tr>

        @forelse($warkop as $row)
            <tr>
                <td>{{ $row->MapId }}</td>
                <td>{{ $row->Nama }}</td>
                <td>{{ number_format($row->Harga, 0, ',', '.') }}</td>
                <td>{{ $row->Lokasi }}</td>
                <td>
                    <a href="/warkop/edit/{{ $row->MapId }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/warkop/hapus/{{ $row->MapId }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data warkop.</td>
            </tr>
        @endforelse
    </table>


@endsection
