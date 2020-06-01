@extends('layout')
@section('content')
<?php echo 'Current PHP version: ' . phpversion();?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 5.5 CRUD Example from scratch</h2>
            </div>
            <div class="pull-right">
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Website</th>
            <th>Hotline</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($configs as $config)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $config->title}}</td>
        <td>{{ $config->email}}</td>
        <td>{{ $config->address}}</td>
        <td>{{ $config->phonenumber}}</td>
        <td>{{ $config->website}}</td>
        <td>{{ $config->hotline}}</td>
        <td>
            <a class="btn btn-primary" href="{{ route('configuration.update',$config->id) }}">Edit</a>
        </td>
    </tr>
    @endforeach
    </table>


    {!! $configs->links() !!}
@endsection
