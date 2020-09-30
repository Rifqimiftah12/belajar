@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>Show Postingan</b></center></div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Nama</label>
                                </div>
                                <div class="col-md-12">
                                <input type="text" value="{{$postingan->akun->nama}}" class="form-control" name="nama" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Deskripsi</label>
                                </div>
                                <div class="col-md-12">
                                    <textarea name="deskripsi" class="form-control" id="" cols="30" rows="10" readonly> {{$postingan->deskripsi}} </textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Kategori</label>
                                </div>
                                <div class="col-md-12">
                                <input type="text" value="{{$postingan->kategori}}" class="form-control" name="kategori" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Tag</label>
                                    @php
                                        $tag = \App\Tag::all();
                                    @endphp
                                    <ul>
                                        @foreach ($tag as $item)
                                            <li>{{(in_array($item->id, $selected) ? $item->tag : '')}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <a href="{{route('postingan.index')}}"class="btn btn-outline-danger float-left"><b>Kembali(-)</b></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
x
