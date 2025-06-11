@extends('template')

@section('content')
	<h3>Data mobil</h3>

	<a href="/mobil/tambah" class="btn btn-primary"> + Tambah mobil Baru</a>

    <p>Cari Data mobil :</p>
	<form action="/mobil/cari" method="GET">
		<input type="text" name="cari" class="form-control" name="cari" placeholder="Cari mobil ..">
		<input type="submit" class="btn btn-info" value="CARI">
	</form>
	<br/>

	<table class="table table-striped">
		<tr>
			<th>Merk mobil</th>
			<th>Harga mobil</th>
			<th>Tersedia</th>
			<th>Berat</th>
			<th>Opsi</th>
		</tr>
		@foreach($mobil as $r)
		<tr>
			<td>{{ $r->merkmobil }}</td>
			<td>{{ $r->hargamobil }}</td>
			<td>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" disabled id="tersedia{{ $r->mobil_id }}" {{ $r->tersedia == 1 ? 'checked' : '' }}>
                    <label class="form-check-label text-{{ $r->tersedia == 1 ? 'success' : 'danger' }}" for="tersedia{{ $r->mobil_id }}">
                        {{ $r->tersedia == 1 ? 'Tersedia' : 'Tidak Tersedia' }}
                    </label>
                </div>
            </td>
			<td>{{ $r->berat }}</td>
			<td>
				<a href="/mobil/edit/{{ $r->mobil_id }}" class="btn btn-success">Edit</a>
				|
				<a href="/mobil/hapus/{{ $r->mobil_id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
{{ $mobil->links() }}
@endsection






















