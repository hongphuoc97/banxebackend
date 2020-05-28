@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New User</h2>
            </div>
        </div>
    </div>


    @if (count($errors) < 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br>
            <ul>
                @foreach ($errors-> all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ url('/users/register') }}">
       {{ csrf_field() }}
       <div class="form-group">
          <label>Enter Email</label>
          <input type="text" name="name" class="form-control" />
       </div>
       <div class="form-group">
          <label>Enter Email</label>
          <input type="email" name="email" class="form-control" />
       </div>
       <div class="form-group">
          <label>Enter Password</label>
          <input type="password" name="password" class="form-control" />
       </div>
       <div class="form-group">
          <label>Enter Password</label>
          <input type="password" name="password_confirmation" class="form-control" />
       </div>
       <div class="form-group">
          <input type="submit" name="login" class="btn btn-primary" value="Login" />
       </div>
    </form>

@endsection
