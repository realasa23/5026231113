<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class controllerm extends Controller
{
    public function index()
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get(); //array all record
        $mobil = DB::table('mobil')->paginate(10); //kalau tanpa angka dalam kurung, defaultnya itu 15
    	$this->logActivity();
        // mengirim data pegawai ke view index
		return view('mobil/indexm',['mobil' => $mobil]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

$this->logActivity();
		// memanggil view tambah
		return view('mobil/tambahm');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('mobil')->insert([
			'mobil_merkmobil' => $request->merkmobil,
			'mobil_hargamobil' => $request->hargamobil,
			'mobil_tersedia' => $request->tersedia,
			'mobil_berat' => $request->berat
		]);
		$this->logActivity();
        // alihkan halaman ke halaman pegawai
		return redirect('/mobil');

	}

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$mobil = DB::table('mobil')->where('mobil_id',$id)->get();
		 $this->logActivity();
        // passing data pegawai yang didapat ke view edit.blade.php
		return view('mobil/edit',['mobil' => $mobil]);

	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('mobil')->where('mobil_id',$request->id)->update([
			'mobil_merkmobil' => $request->merkmobil,
			'mobil_hargamobil' => $request->hargamobil,
			'mobil_tersedia' => $request->tersedia,
			'mobil_berat' => $request->berat
		]);
         $this->logActivity();
		// alihkan halaman ke halaman pegawai
		return redirect('/mobil');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('mobil')->where('mobil_id',$id)->delete();
         $this->logActivity();
		// alihkan halaman ke halaman pegawai
		return redirect('/mobil');
	}

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table mobil sesuai pencarian data di beberapa kolom
        $mobil = DB::table('mobil')
            ->where('mobil_merkmobil', 'like', "%" . $cari . "%") // for merkmobil, like works
            ->orWhere('mobil_hargamobil', '=', $cari) // exact match for harga
            ->orWhere('mobil_tersedia', '=', $cari == 'tersedia' ? 1 : ($cari == 'tidak tersedia' ? 0 : null)) // checking if available or not
            ->paginate();

        // mengirim data mobil ke view index3
        $this->logActivity();
        return view('mobil/indexm', ['mobil' => $mobil, 'cari' => $cari]);

            }

      public function myTestAddToLog()

    {

        \LogActivity::addToLog('My Testing Add To Log.');

        dd('log insert successfully.');

    }
     public function logActivity()
{
    \DB::table('logactivity')->insert([
        'namaroute' => request()->route()->uri(),
    ]);
}
}
