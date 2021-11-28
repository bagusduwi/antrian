@extends('crud.layouts.layout')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-sm-6">
            <form method="post" action="{{url('crud/update/'.$biodata->id)}}">
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
                @endforeach
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{$biodata->nama}}" required>
                </div>
                <div class="mb-3">
                    <label for="umur" class="form-label">Umur</label>
                    <input type="text" class="form-control" id="umur" name="umur" value="{{$biodata->umur}}" required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{$biodata->alamat}}" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    $().ready(function() {
        $('form').validate();
    })
</script>
@endpush