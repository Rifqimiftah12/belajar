@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-13">
                @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                <div class="card">
                    <div class="card-header">
                        <center><b>PROFIL</b></center>
                    </div>
                    <div class="card-body">
                    <a href="{{route('profil.create')}}"class="btn btn-outline-danger float-right"><b>Tambah Profil(+)</b></a>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Nama</th>
                                        <th>No Telepon</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php    $no = 1;    @endphp
                                    @foreach ($profil as $data)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$data->akun->nama}}</td>
                                            <td>{{$data->akun->tlpn}}</td>
                                            <td>{{$data->alamat}}</td>
                                            <form action="{{route('profil.destroy', $data->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                            <td>
                                            <a class="btn btn-primary" href="{{route('profil.show', $data->id)}}">Lihat</a>|
                                            <a class="btn btn-warning" href="{{route('profil.edit', $data->id)}}">Edit</a>|
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                            </td>
                                        </tr>
                                            </form>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
