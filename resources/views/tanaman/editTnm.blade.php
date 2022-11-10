@extends('layout/admin')

@section('container')
<div class="row justify-content-center">
    <form method="POST" action="/tanaman/{{ $barang->id_tanaman }}" >
        @method('put')
        @csrf
        <div class="container mt-4">
            <h3>Edit Tanaman</h3>
        </div>
        <main class="form-signin w-100 m-auto">
            <form>
                <div class="form-group row" >
                        <label for="nama">Nama Tanaman</label>
                        <input value="{{ $barang->Nama_Tanaman }}" type="text" name="Nama_Tanaman" class="form-control" id="nama" aria-describedby="nameHelp"placeholder="Masukkan Nama Tanaman">
                </div>
                <div class="form-group row" >
                        <label for="jenis">Jenis Tanaman</label>
                        <input value="{{ $barang->Jenis_Tanaman }}" type="text" name="Jenis_Tanaman" class="form-control" id="jenis" aria-describedby="nameHelp"placeholder="Masukkan Jenis Tanaman">
                </div>
                <div class="form-group row" >
                        <label for="harga">Harga Tanaman</label>
                        <input value="{{ $barang->Harga_Tanaman }}" type="text" name="Harga_Tanaman" class="form-control" id="harga" aria-describedby="nameHelp"placeholder="Masukkan Harga Tanaman">
                </div>
                <button type="submit" class="mt-4">SIMPAN</button>
            </form>
        </main>
    </form>
</div>
@endsection