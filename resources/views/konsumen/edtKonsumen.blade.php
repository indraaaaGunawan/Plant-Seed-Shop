@extends('layout/admin')

@section('container')
<div class="row justify-content-center">
    <form method="POST" action="/konsumen/{{ $people->id_konsumen }}" >
        @method('put')
        @csrf
        <div class="container mt-4">
            <h3>Edit Kosumen</h3>
        </div>
        <main class="form-signin w-100 m-auto">
            <form>
                <div class="form-group row" >
                        <label for="nama">Nama Konsumen</label>
                        <input value="{{ $people->Nama_Konsumen }}" type="text" name="Nama_Konsumen" class="form-control" id="nama" aria-describedby="nameHelp"placeholder="">
                </div>
                <div class="form-group row" >
                        <label for="jenis">Email</label>
                        <input value="{{ $people->Email }}" type="text" name="Email" class="form-control" id="Email" aria-describedby="nameHelp"placeholder="">
                </div>
                <div class="form-group row" >
                        <label for="harga">No Telp</label>
                        <input value="{{ $people->No_Tlp }}" type="text" name="No_Tlp" class="form-control" id="NoTlp" aria-describedby="nameHelp"placeholder="">
                </div>
                <div class="form-group row" >
                        <label for="harga">Alamat</label>
                        <input value="{{ $people->Alamat }}" type="text" name="Alamat" class="form-control" id="Alamat" aria-describedby="nameHelp"placeholder="">
                </div>
                <div class="form-group row" >
                        <label for="harga">Username</label>
                        <input value="{{ $people->Username }}" type="text" name="Username" class="form-control" id="Username" aria-describedby="nameHelp"placeholder="">
                </div>
                <div class="form-group row" >
                        <label for="harga">Password</label>
                        <input value="{{ $people->Password }}" type="text" name="Password" class="form-control" id="Password" aria-describedby="nameHelp"placeholder="">
                </div>
                <button type="submit" class="mt-4">SIMPAN</button>
            </form>
        </main>
    </form>
</div>
@endsection