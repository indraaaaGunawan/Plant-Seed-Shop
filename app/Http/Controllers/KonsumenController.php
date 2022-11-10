<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konsumen;

class KonsumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Konsumen::all();
        return view('konsumen.konsumen',compact(
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
        $people = Konsumen::find($id);
        return view('konsumen.edtKonsumen', compact(['people']));
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
        $Barang = Konsumen::find($id);
        $validateData = $request->validate([
            'Nama_Konsumen' => 'required',
            'Email' => 'required',
            'No_Tlp' => 'required',
            'Alamat' => 'required',
            'Username' => 'required',
            'Password' => 'required',
        ]);
        $Barang->update($validateData);
        return redirect('/konsumen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Barang = Konsumen::find($id);
        $Barang->delete($Barang);
        return redirect('/konsumen')->with('Sukses', 'Data Berhasil Dihapus');
    }
}
