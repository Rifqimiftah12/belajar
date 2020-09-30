
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <center><b>Edit Tag</b></center>
                </div>
                <div class="card-body">
                    <form action="{{route('tag.update',$tag->id)}}" method="post">
                        <input type="hidden" nama="_method" value="PUT">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="">Tag</label>
                            <input type="text" name="tag" value="{{$tag->tag}}" class="form-control" required>
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

