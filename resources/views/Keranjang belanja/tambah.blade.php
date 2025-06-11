@extends('template')

@section('content')
    <h3>Tambah Data Keranjang Belanja</h3>

    <a href="/keranjangbelanja" class="btn btn-info">Kembali</a>

    <br/>
    <br/>

    <form action="/keranjangbelanja/store" method="post">
        {{ csrf_field() }}

        <div class="row">
            <div class="col-3">
                Kode Barang
            </div>
            <div class="col-8">
                <input type="number" name="kodebarang" required class="form-control">
            </div>
        </div>
        <br/>

        <div class="row">
            <div class="col-3">
                Jumlah
            </div>
            <div class="col-8">
                <input type="number" name="jumlah" required class="form-control">
            </div>
        </div>
        <br/>

        <div class="row">
            <div class="col-3">
                Harga (per item)
            </div>
            <div class="col-8">
                <input type="number" name="harga" required class="form-control">
            </div>
        </div>
        <br/>

        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
@endsection
