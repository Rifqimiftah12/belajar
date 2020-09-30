@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>Tambah Profil</b></center></div>
                <div class="card-body">
                    <form action="{{route('profil.store')}}" method="POST">
                        @csrf
                            <div class="row">
                                <div class="col-md-5">
                                    <label for=""><b>Nama Profil</b></label>
                                </div>
                                <div class="col-md-12">
                                    <select name="akun_id" class="form-control">
                                        @foreach ($akun as $item)
                                            <option value=" {{$item->id}} "> {{$item->nama}} - {{$item->tlpn}} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <label for=""><b>Alamat</b></label>
                                </div>
                                <div class="col-md-12">
                                    <textarea name="alamat" class="form-control" id="" cols="30" rows="10" required></textarea>
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
