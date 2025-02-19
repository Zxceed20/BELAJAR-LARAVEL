@extends('project')
@section('title', 'master Court Type')
@section('content-title', 'master Court type')
@section('content')
<div class="col-md-8">
    <a class="btn btn-success" href="">Add Data</a>
    <table class="table">
        <tr>
            <th>No</th>
            <th>Court Type</th>
            <th>Action</th>
        </tr>
        @forelse ($types as $type)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>Type {{$type->id}}</td>
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
@endsection