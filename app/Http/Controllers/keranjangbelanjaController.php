<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class keranjangbelanjaController extends Controller
{
    public function index()
    {
        $keranjang = DB::table('blanja')->paginate(10);
        return view('keranjangbelanja.index', ['keranjang' => $keranjang]);
    }

    public function tambah()
    {
        return view('keranjangbelanja.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kodebarang' => 'required|integer',
            'jumlah' => 'required|integer',
            'harga' => 'required|integer',
        ]);

        DB::table('blanja')->insert([
            'kodebarang' => $request->kodebarang,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga
        ]);

        return redirect('/keranjangbelanja');
    }

    public function edit($id)
    {
        $item = DB::table('blanja')->where('id', $id)->first();
        return view('keranjangbelanja.edit', compact('item'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'kodebarang' => 'required|integer',
            'jumlah' => 'required|integer',
            'harga' => 'required|integer',
        ]);

        DB::table('blanja')->where('id', $request->id)->update([
            'kodebarang' => $request->kodebarang,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga
        ]);

        return redirect('/keranjangbelanja');
    }

    public function hapus($id)
    {
        DB::table('blanja')->where('id', $id)->delete();
        return redirect('/keranjangbelanja');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $keranjang = DB::table('blanja')
            ->where('kodebarang', 'like', "%$cari%")
            ->orWhere('jumlah', 'like', "%$cari%")
            ->orWhere('harga', 'like', "%$cari%")
            ->paginate(10)
            ->withQueryString();

        return view('keranjangbelanja.index', ['keranjang' => $keranjang, 'cari' => $cari]);
    }
}
