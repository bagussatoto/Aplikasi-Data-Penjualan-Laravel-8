<?php

namespace App\Http\Controllers;

use App\Models\Bpenjualan;
use App\Models\Jpenjualan;
use App\Models\Tpenjualan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BpenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = "barang_penjualan";
        $bpenjualan = Bpenjualan::orderBy('nama_barang', 'asc')->filter(request(['search']))->paginate(5)->WithQueryString();
        return view('Barangpenjualan.index', compact('bpenjualan', 'active'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $active = "barang_penjualan";
        $jenis_p = Jpenjualan::all();
        return view('Barangpenjualan.create', compact('jenis_p', 'active'));
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
            'nama_barang' => 'required|unique:barang_penjualan,nama_barang',
            'jenis_penjualan_id' => 'required',
        ]);

        Bpenjualan::create([
            "nama_barang" => $request["nama_barang"],
            "jenis_penjualan_id" => $request["jenis_penjualan_id"],
        ]);

        Alert::success('Berhasil', 'Tambah Data Barang Penjualan');
        return redirect('/barang-penjualan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bpenjualan  $bpenjualan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active = "barang_penjualan";
        $bpenjualan = Bpenjualan::find($id);
        $jenis_p = Jpenjualan::all();
        return view('Barangpenjualan.edit', compact('bpenjualan', 'jenis_p', 'active'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bpenjualan  $bpenjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required|unique:barang_penjualan,nama_barang',
            'jenis_penjualan_id' => 'required',
        ]);

        $Bpenjualan = Bpenjualan::find($id);

        $data_barang = [
            "nama_barang" => $request["nama_barang"],
            "jenis_penjualan_id" => $request["jenis_penjualan_id"],
        ];

        $Bpenjualan->update($data_barang);
        Alert::success('Berhasil', 'Edit Data Barang Penjualan');
        return redirect('/barang-penjualan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bpenjualan  $Bpenjualan
     * @param  \App\Models\Tpenjualan  $Tpenjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tpenjualan::where('nama_barang_id', $id)->delete();
        Bpenjualan::find($id)->delete();

        Alert::success('Berhasil', 'Menghapus Data Barang Penjualan');
        return redirect('/barang-penjualan');
    }
}