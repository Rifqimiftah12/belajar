@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>Tambah Tag</b></center></div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                    <form action="{{route('tag.store')}}" method="POST">
                        @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Masukan <b>Jenis</b> tag</label>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="tag" required>
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
