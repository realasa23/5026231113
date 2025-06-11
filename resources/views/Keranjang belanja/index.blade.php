@extends('template')

@section('content')
    <h3>Data Keranjang Belanja</h3>

    <a href="/keranjangbelanja/tambah" class="btn btn-primary"> + Tambah Barang</a>

    <p>Cari Data Barang :</p>
    <form action="/keranjangbelanja/cari" method="GET">
        <input type="text" name="cari" class="form-control" placeholder="Cari Kode Barang ..">
        <br>
        <input type="submit" class="btn btn-info" value="CARI">
    </form>
    <br/>

    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Kode Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Opsi</th>
        </tr>
        @foreach($keranjang as $r)
        <tr>
            <td>{{ $r->id }}</td>
            <td>{{ $r->kodebarang }}</td>
            <td>{{ $r->jumlah }}</td>
            <td>{{ $r->harga }}</td>
            <td>
                <a href="/keranjangbelanja/edit/{{ $r->id }}" class="btn btn-success">Edit</a>
                |
                <a href="/keranjangbelanja/hapus/{{ $r->id }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $keranjang->links() }}
@endsection
