@extends('template')
@section('judul', 'Kode Soal mypegawai')
@section('konten')

    <h2>Kode Soal mypegawai</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    @if (session('danger'))
        <p style="color: red;">{{ session('danger') }}</p>
    @endif

    <a href="{{ route('mypegawai.create') }}" class="btn btn-primary"> + Tambah Data</a>
    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>kodepegawai</th>
            <th>namalengkap</th>
            <th>divisi</th>
            <th>departemen</th>
            <th>Aksi</th>
        </tr>

        @forelse($mypegawai as $row)
            <tr>
                <td>{{ $row->kodepegawai }}</td>
                <td>{{ $row->namalengkap }}</td>
                <td>{{ $row->divisi }}</td>
                <td>{{ $row->departemen }}</td>
                <td>
                    <a href="{{ route('mypegawai.edit', $row->kodepegawai) }}" class="btn btn-warning">View</a>


                    {{-- <form action="{{ route('mypegawai.destroy', $row->kodepegawai) }}" method="POST" style="display:inline;"
                        onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button> --}}

                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data pegawai.</td>
            </tr>
        @endforelse
    </table>
@endsection
