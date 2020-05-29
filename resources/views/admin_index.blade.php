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
         <table class="table table-bordered table-striped">
            <thead>
               <tr>
                  <th>STT</th>
                  <th>NAME</th>
                  <th>ORDER</th>
                  <th>ACTION</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>1</td>
                  <td>Doe</td>
                  <td>1</td>
                  <td>
                     <button type="button" class="btn btn-success" data-toggle="modal" data-target="#updateModal">Chỉnh sửa</button>
                     <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Xóa</button>
                  </td>
               </tr>
               <tr>
                  <td>2</td>
                  <td>Moe</td>
                  <td>1</td>
                  <td>
                     <button type="button" class="btn btn-success" data-toggle="modal" data-target="#updateModal">Chỉnh sửa</button>
                     <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Xóa</button>
                  </td>
               </tr>
               <tr>
                  <td>3</td>
                  <td>Dooley</td>
                  <td>1</td>
                  <td>
                     <button type="button" class="btn btn-success" data-toggle="modal" data-target="#updateModal">Chỉnh sửa</button>
                     <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Xóa</button>
                  </td>
               </tr>
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
                     <form action="${pageContext.request.contextPath}/login"
                        method="POST" id="formsubmit">
                        <div class="form-group">
                           <label>Tên danh mục</label> <input name="categoryName" type="text"
                              class="form-control" placeholder="Tên danh mục" />
                        </div>
                        <!-- form-group// -->
                        <div class="form-group">
                           <label>Thứ Tự</label> <input name="order" class="form-control"
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
               <button type="button" class="btn btn-danger">CÓ</button>
               <button type="button" class="btn btn-default" data-dismiss="modal">KHÔNG</button>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
