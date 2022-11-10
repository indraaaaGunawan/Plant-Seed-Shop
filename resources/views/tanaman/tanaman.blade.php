
@extends('layout/admin')

@section('container')
    <div>
        <h2>Tabel Tanaman</h2>
    </div>
    <table class="table-bordered table mb-1">
        <tr>
            <th>id_tanaman</th>
            <th>Nama_Tanaman</th>
            <th>Jenis_Tanaman</th>
            <th>Harga_Tanaman</th>
        </tr>
        @foreach($datas as $key=>$value)
        <tr>
            <td>{{$value->id_tanaman}}</td>
            <td>{{$value->Nama_Tanaman}}</td>
            <td>{{$value->Jenis_Tanaman}}</td>
            <td>{{$value->Harga_Tanaman}}</td>
            <td>
                <a class="btn btn-warning" href="/tanaman/{{ $value->id_tanaman }}/edit"role="button">Edit</a>
                <div class="btn-group-vertical" role="group" aria-label="Basic example">
                    <form action="/tanaman/{{ $value->id_tanaman }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger"
                        onclick="return confirm('Anda Yakin Untuk Menghapus?')">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </table>
    <div class=" mr-1">
        <a class="btn  btn-info mb-5" href="{{ url('tanaman/create') }}">Tambah</a>
        <a class="btn  btn-dark mb-5" href="{{ url('') }}">Kembali</a>
    </div>
@endsection