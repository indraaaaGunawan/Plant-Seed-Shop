<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Transaksi::all();
        return view('transaksi.transaksi',compact(
            'datas'
        ));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Transaksi::find($id);
        return view('transaksi.edttransaksi', compact(['barang']));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Barang = Transaksi::find($id);
        $validateData = $request->validate([
            'Total_Harga' => 'required',
            'Total_Tanaman' => 'required',
            'Tanggal' => 'required',
        ]);
        $Barang->update($validateData);
        return redirect('/transaksi');
    }
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Barang = Transaksi::find($id);
        $Barang->delete($Barang);
        return redirect('/transaksi')->with('Sukses', 'Data Berhasil Dihapus');
    }
}
