@extends('layout/admin')

@section('container')
    <div>
        <h2>Tabel Kosumen</h2>
    </div>
    <table class="table-bordered table mb-1">
        <tr>
            <th>id_konsumen</th>
            <th>Nama_Konsumen</th>
            <th>Email</th>
            <th>Jenis_Kelamin</th>
            <th>No_Telp</th>
            <th>Alamat</th>
            <th>Username</th>
            <th>Password</th>
        </tr>
        @foreach($datas as $key=>$value)
        <tr>
            <td>{{$value->id_konsumen}}</td>
            <td>{{$value->Nama_Konsumen}}</td>
            <td>{{$value->Email}}</td>
            <td>{{$value->Jenis_kelamin}}</td>
            <td>{{$value->No_Tlp}}</td>
            <td>{{$value->Alamat}}</td>
            <td>{{$value->Username}}</td>
            <td>{{$value->Password}}</td>
            <td>
                <a class="btn btn-warning" href="/konsumen/{{ $value->id_konsumen }}/edit"role="button">Edit</a>
                <div class="btn-group-vertical" role="group" aria-label="Basic example">
                    <form action="/konsumen/{{ $value->id_konsumen }}" method="post" class="d-inline">
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
        <a class="btn  btn-dark mb-5" href="{{ url('') }}">Kembali</a>
    </div>

@endsection