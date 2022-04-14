<?php

namespace App\Http\Controllers;

use App\Models\Wtransakasi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TpenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = "transaksi_penjualan";
        $wtransaksi = Wtransakasi::latest()->filter(request(['search']))->paginate(5)->WithQueryString();
        return view('Transaksipenjualan.index', compact('wtransaksi', 'active'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wtransakasi  $Tpenjualan
     * @return \Illuminate\Http\Response
     */
    public function reset()
    {
        Wtransakasi::truncate();
        Alert::success('Berhasil', 'Menghapus Seluruh Data Log Transaksi Penjualan');
        return redirect('/transaksi-penjualan');
    }
}