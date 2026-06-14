@extends('template')
@section('judul', 'Data Nilai Kuliah')
@section('konten')
    <a href="/e5/tambah" class="btn btn-primary"> + Tambah Data</a>

    <br />
    <br />
    <br />
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>bobot</th>

        </tr>
        @foreach ($nilaikuliah as $i)
            <tr>
                <td>{{ $i->ID }}</td>
                <td>{{ $i->NRP }}</td>
                <td>{{ $i->NilaiAngka }}</td>
                <td>{{ $i->SKS }}</td>
                <td>
                    @if ($i->NilaiAngka <= 40)
                        D
                    @elseif($i->NilaiAngka <= 60)
                        C
                    @elseif($i->NilaiAngka <= 80)
                        B
                    @else
                        A
                    @endif
                <td>{{ $i->NilaiAngka * $i->SKS }}</td>

            </tr>
        @endforeach
    </table>

@endsection
