@extends('admin_layout')
@section('content')
<div class="container-fluid" style="min-height: 690px;" >
   <!--<c:if test="${msg != null }">
      <div class="alert alert-success" style="margin:10px 0px 0px 0px">
         <strong>Thông báo!</strong> ${msg}.
      </div>
      </c:if>-->
   <div class="col-md-3 visible-md visible-lg">
      <ul class="list-group">
         <li class="list-group-item panelactive"><span class="glyphicon glyphicon-menu-hamburger"> </span> ĐIỀU HƯỚNG</li>
         <li class="list-group-item"><a>DANH MỤC</a></li>
         <li class="list-group-item"><a>SẢN PHẨM</a></li>
         <li class="list-group-item"><a>CẤU HÌNH</a></li>
      </ul>
   </div>
   <!-- <div class="row-fluid clearfix"> -->
   <div class="col-md-9 clearfix">
      <div class="panel panel-primary" style="margin: 10px 0 10px 0">
         <div class="panel-heading">DANH MỤC</div>
      </div>
      <div class="container-fluid">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
           <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
        </div>
        @endif
        <button type="button" id="add-btn" class="btn btn-success" data-toggle="modal" data-target="#addModal">Thêm mới</button>
         <table class="table table-bordered table-striped" style="margin-top: 5px">
            <thead>
               <tr>
                  <th>STT</th>
                  <th>NAME</th>
                  <th>ORDER</th>
                  <th>ACTION</th>
               </tr>
            </thead>
            <tbody>
              @foreach ($categories as $item)
                <tr data-id='{{ $item->id }}' data-name='{{ $item->name }}' data-order='{{ $item->order_value }}'>
                   <td>{{ ++$i }}</td>
                   <td>{{ $item->name }}</td>
                   <td>{{ $item->order_value }}</td>
                   <td>
                      <button type="button" id="update-btn" class="btn btn-success" data-toggle="modal" data-target="#updateModal">Chỉnh sửa</button>
                      <button type="button" id="delete-btn" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Xóa</button>
                   </td>
                </tr>
              @endforeach
            </tbody>
         </table>
         {!! $categories->links() !!}
      </div>
   </div>
   <div id="addModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
         <!-- Modal content-->
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title">Thêm danh mục</h4>
            </div>
            <div class="modal-body ">
               <div class="card">
                  <article class="card-body">
                     <form action="{{ url('/admin/category/') }}"
                        method="POST" id="formAddNew">
                        {{ csrf_field() }}
                        <div class="form-group">
                           <label>Tên danh mục</label> <input name="name" type="text"
                              class="form-control" placeholder="Tên danh mục" />
                        </div>
                        <!-- form-group// -->
                        <div class="form-group">
                           <label>Thứ Tự</label> <input name="order_value" class="form-control"
                              placeholder="Thứ tự xuất hiện" type="number" value="1">
                        </div>
                        <!-- form-group// -->
                        <div class="form-group">
                           <button type="submit" class="btn btn-primary btn-block">
                           LƯU</button>
                        </div>
                        <!-- form-group// -->
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
                     <form action="{{ url('/admin/category/') }}"
                        method="POST" id="formsubmit">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        <input name="id" type="hidden"/>
                        <div class="form-group">
                           <label>Tên danh mục</label> <input name="name" type="text"
                              class="form-control" placeholder="Tên danh mục" />
                        </div>
                        <!-- form-group// -->
                        <div class="form-group">
                           <label>Thứ Tự</label> <input name="order_value" class="form-control"
                              placeholder="Thứ tự xuất hiện" type="number" value="1">
                        </div>
                        <!-- form-group// -->
                        <div class="form-group">
                           <button type="submit" class="btn btn-primary btn-block">
                           LƯU</button>
                        </div>
                        <!-- form-group// -->
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
   <div id="deleteModal" class="modal fade in" role="dialog">
      <div class="modal-dialog">
         <!-- Modal content-->
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">×</button>
               <h4 class="modal-title">Bạn có chắc muốn xóa ?</h4>
            </div>
            <div class="modal-footer">
              <form action="{{ url('/admin/category/') }}"
                 method="POST" id="formDelete">
                 <!-- <input name="id" type="hidden"/> -->
                 {{ method_field('DELETE') }}
                 {{ csrf_field() }}
               <button type="submit" id="yes" class="btn btn-danger">CÓ</button>
               <button type="button" class="btn btn-default" data-dismiss="modal">KHÔNG</button>
             </form>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
    const rootPath = $("#formsubmit").attr('action');

    $(document).on("click","#update-btn",function(){
        let tr = $(this).closest("tr");
        let id = tr.data("id");
        let name = tr.data("name");
        let orderValue = tr.data("order");
        let modal = $("#updateModal");
        let form = modal.find("#formsubmit");
        // let currentAction = form.attr("action");

        modal.find("input[name='id']").val(id);
        modal.find("input[name='name']").val(name);
        modal.find("input[name='order_value']").val(orderValue);
        form.attr('action', rootPath+"/"+id);
    });

    $(document).on("click","#delete-btn",function(){
      let tr = $(this).closest("tr");
      let id = tr.data("id");
      let form = $("#formDelete");
      // form.find("input[name='id']").val(id);
      form.attr('action', rootPath+"/"+id);
    });
</script>
@endsection
