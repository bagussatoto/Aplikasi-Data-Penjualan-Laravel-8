<?php

namespace App\Http\Controllers;

use App\Models\Jpenjualan;
use App\Models\Tpenjualan;
use App\Models\Bpenjualan;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class JpenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = "jenis_penjualan";
        $jpenjualan = Jpenjualan::latest()->filter(request(['search']))->paginate(5)->WithQueryString();
        return view('Jenispenjualan.index', compact('jpenjualan', 'active'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $active = "jenis_penjualan";
        return view('Jenispenjualan.create', compact('active'));
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
            'jenis_penjualan' => 'required',
        ]);

        Jpenjualan::create([
            "jenis_penjualan" => $request["jenis_penjualan"],
        ]);

        Alert::success('Berhasil', 'Tambah Data Jenis Penjualan');
        return redirect('/jenis-penjualan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jpenjualan  $Jpenjualan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active = "jenis_penjualan";
        $jpenjualan = Jpenjualan::find($id);
        return view('Jenispenjualan.edit', compact('jpenjualan', 'active'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jpenjualan  $Jpenjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis_penjualan' => 'required',
        ]);

        $jpenjualan = Jpenjualan::find($id);

        $data_barang = [
            "jenis_penjualan" => $request["jenis_penjualan"],
        ];

        $jpenjualan->update($data_barang);
        Alert::success('Berhasil', 'Edit Data Jenis Penjualan');
        return redirect('/jenis-penjualan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jpenjualan  $Jpenjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Transaksi Penjualan
        Tpenjualan::where('jenis_penjualan_id', $id)
            ->join('barang_penjualan', 'barang_penjualan.id', '=', 'transaksi_penjualan.nama_barang_id')
            ->delete();
        // Transaksi Penjualan

        // Barang Penjualan
        Bpenjualan::where('jenis_penjualan_id', $id)->delete();
        // Barang Penjualan

        Jpenjualan::find($id)->delete();

        Alert::success('Berhasil', 'Hapus Data Jenis Penjualan');
        return redirect('/jenis-penjualan');
    }
}