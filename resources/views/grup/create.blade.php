@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Profil</div>
                <div class="card-body">
                    <form action="{{route('group.store')}}" method="POST">
                        @csrf
                            <div class="row">
                                <div class="col-md-5">
                                    <label for=""><b>Nama</b></label>
                                </div>
                                <div class="col-md-12">
                                    <select name="akun_id" class="form-control">
                                        @foreach ($akun as $item)
                                            <option value=" {{$item->id}} "> {{$item->nama}} - {{$item->email}}</option>
                                        @endforeach
                                    </select>
                                <div class="col-md-5">
                                    <label for=""><b>Nama Grup</b></label>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="nama_grup" required>
                                </div>
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
