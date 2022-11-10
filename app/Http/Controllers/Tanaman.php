<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tumbuhan;


class Tanaman extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Tumbuhan::all();
        return view('tanaman.tanaman', compact(
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
        $barang = Tumbuhan::all();
        return view('tanaman.create', compact('barang'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'Nama_Tanaman' => 'required|unique:tanaman',
            'Jenis_Tanaman' => 'required',
            'Harga_Tanaman' => 'required',
        ]);
        Tumbuhan::create($validateData);
        return redirect('/tanaman');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $barang = Tumbuhan::find($id);
        return view('tanaman.editTnm', compact(['barang']));
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
        $Barang = Tumbuhan::find($id);
        $validateData = $request->validate([
            'Nama_Tanaman' => 'required',
            'Jenis_Tanaman' => 'required',
            'Harga_Tanaman' => 'required',
        ]);
        $Barang->update($validateData);
        return redirect('/tanaman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Barang = Tumbuhan::find($id);
        $Barang->delete($Barang);
        return redirect('/tanaman')->with('Sukses', 'Data Berhasil Dihapus');
    }
}
