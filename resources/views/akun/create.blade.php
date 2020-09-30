@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>Tambah Akun</b></center></div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                    <form action="{{route('akun.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Masukan Nama</label>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="nama" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Masukan Email</label>
                                </div>
                                <div class="col-md-12">
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Masukan Telepon</label>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="tlpn" required>
                                </div>
                            </div>
                            <br>
                            <button class="btn btn-primary" type="submit">Simpan</button>
                            <button class="btn btn-primary" type="reset">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
