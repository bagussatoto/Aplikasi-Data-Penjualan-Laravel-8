<?php

namespace App\Http\Controllers;

use App\Models\Bpenjualan;
use App\Models\Jpenjualan;
use App\Models\Tpenjualan;
use App\Models\Wtransakasi;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MpenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = "master_penjualan";
        $tpenjualan = Tpenjualan::latest()->filter(request(['search']))->paginate(5)->WithQueryString();
        return view('Masterpenjualan.index', compact('tpenjualan', 'active'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $active = "master_penjualan";

        $barang_penjualan = Bpenjualan::all();
        return view('Masterpenjualan.create', compact('barang_penjualan', 'active'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'stok' => 'required',
            'jumlah_terjual' => 'required',
            'nama_barang_id' => 'required|unique:transaksi_penjualan,nama_barang_id',
        ]);

        Tpenjualan::create([
            "stok" => $request["stok"],
            "jumlah_terjual" => $request["jumlah_terjual"],
            "nama_barang_id" => $request["nama_barang_id"],
        ]);

        $bpenjualan = Bpenjualan::find($request["nama_barang_id"]);
        $jpenjualan = Jpenjualan::find($bpenjualan['jenis_penjualan_id']);

        Wtransakasi::create([
            "nama_barang" => $bpenjualan["nama_barang"],
            "jenis_penjualan" => $jpenjualan['jenis_penjualan'],
            "stok" => $request["stok"],
            "jumlah_terjual" => $request["jumlah_terjual"],
        ]);

        Alert::success('Berhasil', 'Tambah Master Data Penjualan');
        return redirect('/master-penjualan');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tpenjualan  $Tpenjualan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active = "master_penjualan";
        $tpenjualan = Tpenjualan::find($id);
        $barang_penjualan = Bpenjualan::all();
        return view('Masterpenjualan.edit', compact('tpenjualan', 'barang_penjualan', 'active'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tpenjualan  $Tpenjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'stok' => 'required',
            'jumlah_terjual' => 'required',
            'nama_barang_id' => 'required',
        ]);

        $tpenjualan = Tpenjualan::find($id);

        $data_barang = [
            "stok" => $request["stok"],
            "jumlah_terjual" => $request["jumlah_terjual"],
            "nama_barang_id" => $request["nama_barang_id"],
        ];


        $bpenjualan = Bpenjualan::find($request["nama_barang_id"]);
        $jpenjualan = Jpenjualan::find($bpenjualan['jenis_penjualan_id']);

        Wtransakasi::create([
            "nama_barang" => $bpenjualan["nama_barang"],
            "jenis_penjualan" => $jpenjualan['jenis_penjualan'],
            "stok" => $request["stok"],
            "jumlah_terjual" => $request["jumlah_terjual"],
        ]);

        $tpenjualan->update($data_barang);

        Alert::success('Berhasil', 'Edit Master Data Penjualan');
        return redirect('/master-penjualan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tpenjualan  $Tpenjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tpenjualan = Tpenjualan::find($id);
        $tpenjualan->delete();
        Alert::success('Berhasil', 'Hapus Master Data Penjualan');
        return redirect('/master-penjualan');
    }
}