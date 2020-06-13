@extends('layout')
@section('content')
<div class="container" >
    @include('elements.carousel')
    <div class="row-fluid clearfix">
      <ul class="breadcrumb">
            <li><a href="#">Trang Chủ</a></li>
            <li><a href="/product">Sản Phẩm</a></li>
            <li class="active">{{ $product->name}}</li>
      </ul>
    </div>
    <div class="row-fluid clearfix" >
            <div class="panel panel-primary">
               <div class="panel-heading">
                  <span style="font-weight:bold; text-transform: uppercase;">
                     {{ $product->name}}
                  </span>
               </div>
            </div>
            <div class="col-xs-12 col-sm-6 cus-layout">
               <img src="{{ asset($product->file_path) }}"
                  style="width: 100%; height: 250px; object-fit: cover;" class="img-thumbnail" />
            </div>
            <div class="col-xs-12 col-sm-6 cus-layout">
               <h3>Mô tả  ngắn</h3>
               <p>	–         Điều hòa hai chiều–         Khoảng sáng tầm nhìn trước 180 độ
                  –         Hệ thống âm thanh 2 loa cùng đầu đọc USB.
                  –         Vô lăng gật gù
                  –         Khóa điện an toàn khi có số.
                  –         Cần điều khiển hệ thống chiếu sáng tín hiệu mới.
                  –         Ghế mềm,điều chỉnh.
               </p>
            </div>
         </div>

         <div class="row-fluid clearfix">
            <table class="table table-bordered table-striped">
               <thead>
                  <tr>
                     <th>STT</th>
                     <th>Nội dung kỹ thuật chủ yếu</th>
                     <th>ĐVT</th>
                     <th>Thông số kỹ thuật</th>
                  </tr>
               </thead>
               <tbody>
                 <?php $i = 0?>
                  @foreach($specifications as $spec)
                  <tr>
                      <td>{{++$i}}</td>
                      <td>{{ $spec->name }}</td>
                      <td>{{ $spec->unit }}</td>
                      <td>{{ $spec->value}} </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
         </div>

         <div class="row-fluid clearfix">
            <div class="panel panel-primary" style="margin: 10px 0px 0px 0px">
               <div class="panel-heading">Sản Phẩm liên quan</div>
            </div>
            @foreach($relativeProducts as $itemProduct)
              <div class="col-xs-12 col-sm-6 col-md-3 cus-layout">
                 <div class="img-thumbnail product col-xs-12">
                    <div class="cus-product_imge">
                       <img src="{{ asset('images/p1.jpg') }}"
                          style="width: 100%; height: 190px; object-fit: cover;" />
                    </div>
                    <div class="cus-info" style="margin-top: 10px">
                       <span class="glyphicon glyphicon-tags"></span> <span>Sản phẩm: {{ $itemProduct->name}}</span><br /> <span class="glyphicon glyphicon-earphone"></span>
                       <span>
                       Điện thoại:
                       090 576 912
                       </span>
                    </div>
                    <div class="cus-fullsize">
                       <div class="cus-action">
                          <a href="tel:0965707022" class="btn btn-success">Mua
                          ngay</a>
                          <a href="/product/{{ $itemProduct->id}}" class="btn btn btn-warning">Xem chi tiết</a>
                       </div>
                    </div>
                 </div>
               </div>
            @endforeach
         </div>
</div>
@endsection
