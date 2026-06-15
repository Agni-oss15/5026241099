@extends('template')
@section('judul', 'Data anime')
@section('konten')

    <h2>Data Anime</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    @if (session('danger'))
        <p style="color: red;">{{ session('danger') }}</p>
    @endif

    <a href="/anime/tambah" class="btn btn-primary"> + Tambah Anime Baru</a>
    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Genre</th>
            <th>Rating</th>
            <th>Aksi</th>
        </tr>

        @forelse($anime as $row)
            <tr>
                <td>{{ $row->ID }}</td>
                <td>{{ $row->Judul }}</td>
                <td>{{ $row->Genre }}</td>
                <td>{{ $row->Rating }}</td>
                <td>
                    <a href="/anime/edit/{{ $row->ID }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/anime/hapus/{{ $row->ID }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data anime.</td>
            </tr>
        @endforelse
    </table>
    

@endsection
