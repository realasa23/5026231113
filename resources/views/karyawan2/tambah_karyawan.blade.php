@extends('template')

@section('content')
	<h3>Data Karyawan</h3>

	<a href="/karyawan" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/karyawan/store" method="post">
		{{ csrf_field() }}
        <div class="row">
            <div class="col-3">
                Kode Karyawan
            </div>
            <div class="col-8">
                <input type="text" name="kode" required="required" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Nama Lengkap
            </div>
            <div class="col-8">
                <input type="text" name="nama" required="required" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Divisi
            </div>
            <div class="col-8">
                <input type="text" name="divisi" required="required" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Departemen
            </div>
            <div class="col-8">
                <input type="text" name="departemen" required="required" class="form-control">
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
@endsection
