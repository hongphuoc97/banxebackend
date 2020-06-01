@extends('layout')
@section('content')
    <div class="container">
      <div class="panel panel-primary" style="margin: 10px 0 10px 0">
               <div class="panel-heading">Thêm mới tài khoản</div>
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
            <label>Tên Người dùng</label>
            <input type="text" name="name" class="form-control" />
         </div>
         <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" />
         </div>
         <div class="form-group">
            <label>Mật Khẩu</label>
            <input type="password" name="password" class="form-control" />
         </div>
         <div class="form-group">
            <label>Nhập lại</label>
            <input type="password" name="password_confirmation" class="form-control" />
         </div>
         <div class="form-group">
            <input type="submit" name="login" class="btn btn-primary" value="Tạo Mới" />
         </div>
      </form>
    </div>
@endsection
