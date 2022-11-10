@extends('layout/admin')

@section('container')
<div class="row justify-content-center">
    <form method="POST" action="/transaksi/{{ $barang->id_transaksi }}" >
        @method('put')
        @csrf
        <div class="container mt-4">
            <h3>Edit Transaksi</h3>
        </div>
        <main class="form-signin w-100 m-auto">
            <form>
                <div class="form-group row" >
                        <label for="nama">Total Harga</label>
                        <input value="{{ $barang->Total_Harga }}" type="text" name="Total_Harga" class="form-control" id="Tharga" aria-describedby="nameHelp"placeholder="">
                </div>
                <div class="form-group row" >
                        <label for="jenis">Total Tanaman</label>
                        <input value="{{ $barang->Total_Tanaman }}" type="text" name="Total_Tanaman" class="form-control" id="Ttanaman" aria-describedby="nameHelp"placeholder="">
                </div>
                <div class="form-group row" >
                        <label for="harga">Tanggal</label>
                        <input value="{{ $barang->Tanggal }}" type="text" name="Tanggal" class="form-control" id="tanggal" aria-describedby="nameHelp"placeholder="">
                </div>
                <button type="submit" class="mt-4">SIMPAN</button>
            </form>
        </main>
    </form>
</div>
@endsection