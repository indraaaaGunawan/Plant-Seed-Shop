@extends('layout/admin')

@section('container')
<div class="row justify-content-center">
    <form method="POST" action="/tanaman/create" >
        @csrf
        <div class="container mt-4 mb-5">
            <h3>Insert Tanaman</h3>
        </div>
        <main class="form-signin mt-8">
            <form>
                <div class="form-group row" >
                        <label for="nama">Nama Tanaman</label>
                        <input type="text" name="Nama_Tanaman" class="form-control" id="nama" aria-describedby="nameHelp"placeholder="Masukkan Nama Tanaman">
                </div>
                <div class="form-group row" >
                        <label for="jenis">Jenis Tanaman</label>
                        <input type="text" name="Jenis_Tanaman" class="form-control" id="jenis" aria-describedby="nameHelp"placeholder="Masukkan Jenis Tanaman">
                </div>
                <div class="form-group row" >
                        <label for="harga">Harga Tanaman</label>
                        <input type="text" name="Harga_Tanaman" class="form-control" id="harga" aria-describedby="nameHelp"placeholder="Masukkan Harga Tanaman">
                </div>
                <button type="submit" class="mt-4">SIMPAN</button>
            </form>
        </main>
    </form>
</div>
@endsection