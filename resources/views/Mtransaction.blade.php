@extends('project')
@section('title', 'master transaction')
@section('content-title', 'master transaction')
@section('content')
<div class="col-md-8">
    <a class="btn btn-success" href="">Add Data</a>
    <table class="table">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Custome</th>
            <th>Shoes</th>
            <th>Paytotal</th>
            <th>Action</th>
        </tr>
        @forelse ($trans as $tran)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$tran->name}}</td>
            <td>{{$tran->address}}</td>
            <td>{{$tran->phone}}</td>
            <td>{{$tran->custome}}</td>
            <td>{{$tran->shoes}}</td>
            <td>{{$tran->paytotal}}</td>
            <td>
                <a class="btn btn-sm btn-warning" href="">Edit</a>
                <a class="btn btn-sm btn-danger" href="">Delete</a>
            </td>
        </tr>
        @empty
        <div class="alert alert-danger">Belum ada data</div>

        @endforelse
    </table>

</div>
<div class="col-md-4">
    
</div>
@endsection