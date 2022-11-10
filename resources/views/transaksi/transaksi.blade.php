@extends('layout/admin')

@section('container')
    <div>
        <h2>Tabel Transaksi</h2>
    </div>
    <table class="table-bordered table mb-1">
        <tr>
            <th>id_transaksi</th>
            <th>Total_Harga</th>
            <th>Total_Tanaman</th>
            <th>Tanggal</th>
            <th>id_Konsumen</th>
            <th>id_Tanaman</th>
        </tr>
        @foreach($datas as $key=>$value)
        <tr>
            <td>{{$value->id_transaksi}}</td>
            <td>{{$value->Total_Harga}}</td>
            <td>{{$value->Total_Tanaman}}</td>
            <td>{{$value->Tanggal}}</td>
            <td>{{$value->id_Konsumen}}</td>
            <td>{{$value->id_Tanaman}}</td>
            <td>
                 <a class="btn btn-warning" href="/transaksi/{{ $value->id_transaksi }}/edit"role="button">Edit</a>
                <div class="btn-group-vertical" role="group" aria-label="Basic example">
                    <form action="/transaksi/{{ $value->id_transaksi }}" method="post" class="d-inline">
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