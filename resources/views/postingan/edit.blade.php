@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><center><b>Edit Postingan</b></center></div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                    <form action="{{route('postingan.update', $postingan->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                                <div class="col-md-8">
                                    <label for=""><b>Nama</b></label>
                                </div>
                                <div class="col-md-12">
                                    <select name="akun_id" class="form-control">
                                        @foreach ($akun as $item)
                                            <option value=" {{$item->id}} "> {{$item->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-8">
                                    <label for="">Deskripsi</label>
                                </div>
                                <div class="col-md-12">
                                    <textarea name="deskripsi" class="form-control" id="" cols="30" rows="10"> {{$postingan->deskripsi}} </textarea>
                                </div>
                                <div class="col-md-5">
                                        <label for=""><b>Kategori</b></label>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" value="{{$postingan->kategori}}" class="form-control" name="kategori" required>
                                    </div>
                                <div class="col-md-6">
                                    <label for="">Pilih Tag</label>
                                </div>
                                <div class="col-md-12">
                                    <select class="form-control pilih-tag" multiple name="tag[]">
                                        @foreach ($tag as $item)
                                            <option value="{{$item->id}}"{{(in_array($item->id, $select))? 'selected' : ''}}>
                                                {{$item->tag}}</option>
                                        @endforeach
                                    </select>
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
@push('script')
    <script type="text/javascript">
    $(document).ready(function()
    {
        $('.pilih-tag').select2();
    })
    </script>
@endpush
