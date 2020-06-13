@extends('admin_layout')
@section('content')
<div class="container-fluid" style="min-height: 690px;" >
   <div class="col-md-3 visible-md visible-lg">
      <ul class="list-group">
         <li class="list-group-item panelactive"><span class="glyphicon glyphicon-menu-hamburger"> </span> ĐIỀU HƯỚNG</li>
         <li class="list-group-item "><a href="/admin">DANH MỤC</a></li>
         <li class="list-group-item active"><a href="/admin/product">SẢN PHẨM</a></li>
         <li class="list-group-item"><a href="/admin/config">CẤU HÌNH</a></li>
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
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <?php
            use App\MasterSpecifications;
use App\Categories;
use App\Specifications;

$masterSpecifications = MasterSpecifications::all();
            $categories = Categories::all();
            $j = 0;
        ?>

        <button type="button" id="add-btn" class="btn btn-success" data-toggle="modal" data-target="#addModal">Thêm mới</button>
         <table class="table table-bordered table-striped" style="margin-top: 5px">
            <thead>
               <tr>
                  <th>STT</th>
                  <th>NAME</th>
                  <th>ACTION</th>
               </tr>
            </thead>
            <tbody>
              @foreach ($products as $item)
                <tr data-id='{{ $item->id }}' data-name='{{ $item->name }}' data-categories_id='{{ $item->categories_id }}'>
                   <td>{{ ++$i }}</td>
                   <td>{{ $item->name }}</td>
                   <td>
                      <button type="button" id="update-btn" class="btn btn-success" data-toggle="modal" data-target="#updateModal">Chỉnh sửa</button>
                      <button type="button" id="delete-btn" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Xóa</button>
                   </td>
                </tr>
              @endforeach
            </tbody>
         </table>
         {!! $products->links() !!}
      </div>
   </div>
   <div id="addModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title">Thêm sản phẩm</h4>
            </div>
            <div class="modal-body ">
               <div class="card">
                  <article class="card-body">
                     <form action="{{ url('/admin/product/') }}" enctype="multipart/form-data"
                        method="POST" id="formAddNew">
                        {{ csrf_field() }}

                        <div class="form-group col-sm-4">
                           <label>Tên sản phẩm</label> <input name="name" type="text"
                              class="form-control" placeholder="Tên sản phẩm" required="true" />
                        </div>
                        <div class="form-group col-sm-4">
                           <label>Danh mục</label>
                           <select name="categories_id" class="form-control">
                             @foreach ($categories as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                             @endforeach
                           </select>
                        </div>
                        <div class="form-group col-sm-4">
                           <label>Hình ảnh</label> <input name="file_path" type="file"
                              class="form-control" required="true"/>
                        </div>
                        @foreach ($masterSpecifications as $item)
                        <input type="hidden" value="{{ ++$j }}"/>
                            <div class="form-group col-sm-4">
                               <label>Tên thông số</label> <input name="specifications[name][{{ $j }}]" class="form-control"
                                  placeholder="" type="text" value="{{ $item->name }}" >
                            </div>
                            <div class="form-group col-sm-4">
                               <label>Đơn vị tính</label>
                                  <select name="specifications[unit][{{ $j }}]" class="form-control">
                                    @if($item->unit != "")
                                      <option value="{{ $item->unit }}">{{ $item->unit }}</option>
                                    @else
                                      <option value="0">--Trống--</option>
                                    @endif
                                    <option value="kg">Kg</option>
                                    <option value="mm">Mm</option>
                                    <option value="l">L</option>
                                  </select>
                            </div>
                            <div class="form-group col-sm-4">
                               <label>Thông số</label> <input name="specifications[value][{{ $j }}]" class="form-control"
                                  placeholder="" type="text" required="true">
                            </div>
                        @endforeach
                        <div class="form-group">
                           <button type="submit" class="btn btn-primary btn-block">
                           LƯU</button>
                        </div>

                     </form>
                  </article>
               </div>

            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            </div>
         </div>
      </div>
   </div>
   <div id="updateModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title">Cập nhật sản phẩm</h4>
            </div>
            <div class="modal-body ">
               <div class="card">
                  <article class="card-body">
                     <!-- <form action="{{ url('/admin/product/') }}"  -->
                     <form action="{{ url('/uploadfile') }}" enctype="multipart/form-data" method="POST" id="formUpload" class="clearfix">
                          {{ csrf_field() }}
                          <div class="form-group col-sm-6">
                            <label>Đổi hình ảnh</label>
                            <input name="file_path" type="file"
                         class="form-control" /></div>
                          <div class="form-group col-sm-6">
                            <label>Hành động</label>
                            <button type="submit" class="btn btn-primary btn-block">
                         Thay đổi </button></div>
                     </form>
                     <hr  style="height:2px;border-width:0;color:gray;background-color:gray">
                     <form action="{{ url('/admin/product/') }}" method="POST" id="formSubmit">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        <input name="id" type="hidden"/>
                        <input name="file_path" type="hidden"/>
                        <div class="form-group col-sm-6">
                           <label>Tên sản phẩm</label> <input name="name" type="text"
                              class="form-control" placeholder="Tên sản phẩm" required="true" />
                        </div>
                        <div class="form-group col-sm-6" id="after_here">
                           <label>Danh mục</label>
                           <select name="categories_id" class="form-control">
                             @foreach ($categories as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                             @endforeach
                           </select>
                        </div>
                        <!-- <div class="form-group col-sm-4" id="after_here">
                               <label>Hình ảnh</label> <input name="file_path" type="file"
                                  class="form-control" />
                        </div> -->
                        <div class="form-group">
                           <button type="submit" class="btn btn-primary btn-block">
                           LƯU</button>
                        </div>
                     </form>
                  </article>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            </div>
         </div>
      </div>
   </div>
   <div id="deleteModal" class="modal fade in" role="dialog">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">×</button>
               <h4 class="modal-title">Bạn có chắc muốn xóa ?</h4>
            </div>
            <div class="modal-footer">
              <form action="{{ url('/admin/product/') }}"
                 method="POST" id="formDelete">
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
    const rootPath = $("#formSubmit").attr('action');
    const rootUploadFile = $("#formUpload").attr('action');

    $(document).on("click","#update-btn",function(){
        let tr = $(this).closest("tr");
        let id = tr.data("id");
        let name = tr.data("name");
        let categories_id = tr.data("categories_id");
        let form = $("#formSubmit");

        form.find("input[name='id']").val(id);
        form.find("input[name='name']").val(name);
        form.find("select[name='categories_id']").val(categories_id);
        form.attr('action', rootPath+"/"+id);
        var _token = form.find('input[name="_token"]').val();
        $.ajax({
             url: '/admin/specifications',
             type: 'GET',
             data:{
               product_id: id,
               _token:_token
             },
             success: function (data) {
               $.each(data, function(k, v) {
                  //console.log(v.name);
                    $("#after_here")
                    .after("<div class='form-group col-sm-4'><label>Thông số</label><input name='specifications[][value]' type='text' value='"+v.value+"' class='form-control'/></div>")
                    .after("<div class='form-group col-sm-4'><label>Đơn vị tính</label><select name='specifications[][unit]' class='form-control'><option value='"+v.unit+"'>"+v.unit+"</option><option value='kg'>Kg</option><option value='mm'>mm</option><option value='l'>L</option></select></div>")
                    .after("<div class='form-group col-sm-4'><label>Tên thông số</label><input type ='hidden' name='specifications[][id]' value='"+v.id+"'/><input name='specifications[][name]' type='text' value='"+v.name+"' class='form-control'/></div>");

                });

             }
         });
       });
       $("#formSubmit").submit(function(e) {
          e.preventDefault(); // avoid to execute the actual submit of the form.

          var form = $(this);
          var id = form.find("input[name=id]").val();
          var url = "/admin/product/"+id;
          $.ajax({
                 type: "POST",
                 url: url,
                 data: form.serializeJSON(),
                 success: function(data)
                 {
                     if(data['success'] == 'true'){
                        alert("Cập nhật thành công!")
                         $('#updateModal').modal('toggle');
                     }
                 }
               });
      });
      var formUpload = $("#formUpload");
      formUpload.find("input[name='file_path']").on("change", function(){
        var id = $("#formSubmit").find("input[name=id]").val();
        $("#formUpload").attr('action', rootUploadFile+"/"+id);
      });

    $(document).on("click","#delete-btn",function(){
      let tr = $(this).closest("tr");
      let id = tr.data("id");
      let form = $("#formDelete");
      // form.find("input[name='id']").val(id);
      form.attr('action', "/admin/product"+"/"+id);
    });
</script>
@endsection
