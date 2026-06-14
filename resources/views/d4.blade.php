@extends('template')
@section('judul', 'Data Barang')
@section('konten')
<a href="/d4/tambah" class="btn btn-primary"> + Beli</a>

	<br/>
	<br/>
	<br/>
	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga per Item</th>
            <th>Total</th>
            <th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $i)
		<tr>
			<td>{{ $i->ID }}</td>
			<td>{{ $i->KodeBarang }}</td>
			<td>{{ $i->Jumlah }}</td>
			<td>Rp{{ number_format($i->Harga, 0, ',', '.') }}</td>
            <td>Rp{{ number_format ($i->Jumlah * $i->Harga, 0, ',', '.') }}</td>
			<td>
				<a href="/d4/hapus/{{ $i->ID }}" class="btn btn-danger">Batal</a>
			</td>
		</tr>
		@endforeach
	</table>

@endsection
