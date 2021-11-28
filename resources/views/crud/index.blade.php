@extends('crud.layouts.layout')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-sm-12">
            @if(session()->has('status'))
            <div class="alert {{session()->get('status')['response'] == 'error' ? 'alert-danger' : 'alert-success'}}" role="alert">
                {{session()->get('status')['response']}}, {{ session()->get('status')['msg'] }}
            </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($biodata as $dt)
                    <tr>
                        <td>{{$dt->nama}}</td>
                        <td>{{$dt->umur}}</td>
                        <td>{{$dt->alamat}}</td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="{{url('crud/edit/'.$dt->id)}}">edit</a>
                            <button class="btn btn-sm btn-danger" onclick="bioDelete('{{$dt->id}}')">hapus</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection

@push('js')
<script>
    $().ready(function() {
        $('table').DataTable()
    })

    var bioDelete = function(id) {
        if (confirm('Are you sure?')) {
            $.ajax({
                type: "DELETE",
                url: "{{url('crud/delete')}}" + '/' + id,
                data: {
                    "_token": "{{ csrf_token() }}"
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        }
    }
</script>
@endpush