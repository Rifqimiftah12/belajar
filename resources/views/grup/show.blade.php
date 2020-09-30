@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>Show Group</b></center></div>

                <div class="card-body">
                    {{--@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Nama</label>
                                </div>
                                <div class="col-md-12">
                                <input type="text" value="{{$group->akun->nama}}" class="form-control" name="nama" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Email</label>
                                </div>
                                <div class="col-md-12">
                                <input type="email" value="{{$group->akun->email}}" class="form-control" name="email" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Nama Grup</label>
                                </div>
                                <div class="col-md-12">
                                        <input type="text" class="form-control" name="nama_grup" value="{{$group->nama_grup}} " readonly >
                                    </div>
                            </div>
                            <a href="{{route('group.index')}}"class="btn btn-outline-danger float-left"><b>Kembali(-)</b></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
x
