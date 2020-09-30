@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b><center>Edit Profil</center></b></div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                    <form action="{{route('profil.update', $profil->id)}}" method="post">
                        @csrf
                        @method('PUT')
                            <div class="row">
                                <div class="col-md-5">
                                    <label for=""><b>Nama-No Telepon</b></label>
                                </div>
                                <div class="col-md-12">
                                    <select name="akun_id" class="form-control">
                                        @foreach ($akun as $item)
                                            <option value=" {{$item->id}} "
                                                {{ $item->id == $profil->akun_id ? 'selected' : '' }} >
                                                {{$item->nama}} - {{$item->tlpn}} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <label for=""><b>Alamat</b> </label>
                                </div>
                                <div class="col-md-12">
                                    <textarea name="alamat" class="form-control" id="" cols="30" rows="10"> {{$profil->alamat}} </textarea>
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
