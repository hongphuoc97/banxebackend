@extends('admin_layout')
@section('content')
    <div class="container-fluid" style="min-height: 690px;">
        <div class="col-md-3 visible-md visible-lg">
            <ul class="list-group">
                <li class="list-group-item panelactive"><span class="glyphicon glyphicon-menu-hamburger"> </span> ĐIỀU
                    HƯỚNG
                </li>
                <li class="list-group-item"><a href="{{ url('/admin') }}">DANH MỤC</a></li>
                <li class="list-group-item"><a href="{{ url('/admin/product') }}">SẢN PHẨM</a></li>
                <li class="list-group-item active"><a href="{{ url('/admin/config') }}">CẤU HÌNH</a></li>
            </ul>
        </div>
        <!-- <div class="row-fluid clearfix"> -->
        <div class="col-md-9 clearfix">
            <div class="panel panel-primary" style="margin: 10px 0 10px 0">
                <div class="panel-heading">Cấu hình</div>
            </div>
            <div class="container-fluid table-responsive">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <table class="table table-bordered table-striped" style="margin-top: 5px">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tiêu đề</th>
                        <th>Tên công ty</th>
                        <th>Vai trò</th>
                        <th>Tên quản trị</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Website</th>
                        <th>Hotline</th>
                        <th>Video</th>
                        <th>Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($configs as $item)
                        <tr data-id='{{ $item->id }}' data-address='{{ $item->address }}'
                            data-company_name='{{ $item->company_name }}'
                            data-role='{{ $item->role }}'
                            data-admin_name='{{ $item->admin_name }}'
                            data-video_ytb='{{ $item->video_ytb }}'
                            data-phonenumber='{{ $item->phonenumber }}' data-email='{{ $item->email }}'
                            data-website='{{ $item->website }}' data-title='{{ $item->title }}'
                            data-hotline='{{ $item->hotline }}'>
                            <td>{{ ++$i }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->company_name }}</td>
                            <td>{{ $item->role }}</td>
                            <td>{{ $item->admin_name }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->phonenumber }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->website }}</td>
                            <td>{{ $item->hotline }}</td>
                            <td>{{ $item->video_ytb }}</td>
                            <td>
                                <button type="button" id="update-btn" class="btn btn-success" data-toggle="modal"
                                        data-target="#updateModal">Chỉnh sửa
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div id="updateModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Cập nhật danh mục</h4>
                    </div>
                    <div class="modal-body ">
                        <div class="card">
                            <article class="card-body">
                                <form action="{{ url('/admin/config') }}"
                                      method="POST" id="formsubmit">
                                    {{ method_field('PATCH') }}
                                    {{ csrf_field() }}
                                    <input name="id" type="hidden"/>
                                    <div class="form-group">
                                        <label>Title</label> <input name="title" type="text"
                                                                    class="form-control" placeholder="Title"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label> <input name="address" class="form-control"
                                                                      placeholder="Address" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Company name</label> <input name="company_name" class="form-control"
                                                                      placeholder="Company name" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Role</label> <input name="role" class="form-control"
                                                                      placeholder="Role" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Admin name</label> <input name="admin_name" class="form-control"
                                                                      placeholder="Address" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label> <input name="phonenumber" class="form-control"
                                                                    placeholder="Phone" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label> <input name="email" class="form-control"
                                                                    placeholder="Email" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Website</label> <input name="website" class="form-control"
                                                                      placeholder="Website" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Hotline</label> <input name="hotline" class="form-control"
                                                                      placeholder="Hotline" type="text">
                                    </div>

                                    <div class="form-group">
                                        <label for="video_ytb">Comment:</label>
                                        <textarea class="form-control" rows="5" name="video_ytb" id="video_ytb"></textarea>
                                    </div>
                                        <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            LƯU
                                        </button>
                                    </div>
                                </form>
                            </article>
                        </div>
                        <!-- card -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).on("click", "#update-btn", function () {
            let tr = $(this).closest("tr");
            let id = tr.data("id");
            let title = tr.data('title');
            let address = tr.data('address');
            let companyName = tr.data('company_name');
            let role = tr.data('role');
            let adminName = tr.data('admin_name');
            let phonenumber = tr.data('phonenumber');
            let email = tr.data('email');
            let website = tr.data('website');
            let hotline = tr.data('hotline');
            let video_ytb = tr.data('video_ytb');

            let modal = $("#updateModal");
            let form = modal.find("#formsubmit");
            // let currentAction = form.attr("action");

            form.find("input[name='title']").val(title);
            form.find("input[name='address']").val(address);
            form.find("input[name='company_name']").val(companyName);
            form.find("input[name='role']").val(role);
            form.find("input[name='admin_name']").val(adminName);
            form.find("input[name='phonenumber']").val(phonenumber);
            form.find("input[name='email']").val(email);
            form.find("input[name='website']").val(website);
            form.find("input[name='hotline']").val(hotline);
            form.find("textarea[name='video_ytb']").val(video_ytb);

            form.attr('action', "/admin/config" + "/" + id);
        });
    </script>
@endsection
